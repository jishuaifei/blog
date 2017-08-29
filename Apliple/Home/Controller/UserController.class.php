<?php
/*
 * user
 * 用户名的控制器
 * 纪帅飞
 * 95346658@qq.con
 * **/
namespace Home\Controller;
use Think\Controller;
class UserController extends  CommonController {
    /*
     * index
     * 用户名的添加
     * **/
    public function index()
    {
        $config = config();
        $this->assign('config',$config);
        $this->display();
    }
    /*
     * deng
     * 登陆
     * **/
    public function wait()
    {
        if(IS_AJAX){
              $user = I('post.user');
              $user_pwd = md5(I('post.user_pwd'));
            $res = M('User')->where(array(['user'=>$user,'user_pwd'=>$user_pwd]))->find();
            if($res){
                session('userName',$user);
                echo 1;
            }else{
                echo 0;
            }
        }else{
            $config = config();
            $this->assign('config',$config);
            $this->display();
        }

    }

    /*
     * add
     * 添加用户名
     * **/
    public function add()
    {
        if(IS_POST){
            $data = I('post.');
            $telephone=$data['user_tel'];
            $code=$data['code'];
            $selTel=session('telephone');
            $selCode=session('rand');
            $login_pwd=md5($data['user_pwd']);
            if($telephone==$selTel&&$code==$selCode)
            {
                 session('userName',$data['user']);
                $res=M('User')->add(array('user'=>$data['user'],
                    'user_pwd'=>$login_pwd,
                    'user_email'=>$data['user_email'],
                    'user_tel'=>$data['user_tel'],
                    'user_time'=>time()));
                if($res){
                    $this->success('登陆成功',U('Index/index'));
                }
                }else{
                $this->error('请重视注册');
            }

        }else{
            $config = config();
            $this->assign('config',$config);
        }
    }
    //验证码识别
    public function verification(){
        $verify = I('get.verify');
        $telephone=I('get.telephone');
        $res=$this->checkVerify($verify);
        if(empty($telephone))
        {
            echo -1;die;
        }
        if(!$res){
            echo 1;die;
        }

        $this->getInfo($telephone);
    }


    //手机验证码
    public function getInfo($telephone){
        $rand=rand(11111,99999);
        session('rand',$rand);
        session('telephone',$telephone);
        $code=urlencode("code=".$rand);
        $url="http://api.k780.com/?app=sms.send&tempid=50926&param=$code&phone=$telephone&appkey=20001&sign=9d94b2c4e0e5ecca4fad6a9729430116&format=json";
        $content=file_get_contents($url);
        $return=json_decode($content,true);
    }
    //验证验
    public function verify()
    {
        $config = array('fontSize'	=>	30,		// 验证码字体大小
            'length'	=>	3,     	// 验证码位数
            'useNoise'	=>	true, 	// 关闭验证码杂点
            'imageH'	=>  50,		// 高度
            'imageW'	=>  200		// 宽度
        );
        $Verify =     new \Think\Verify();
        $Verify->codeSet = '0123456789';
        $Verify->useImgBg = true;
        $Verify->entry();
    }
    // 验证 验证码是否正确
    protected function checkVerify($code, $id = '')
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
    /*
     * do_add
     * 验证前台
     * **/
    public function do_add()
    {
        $user = I('post.user');
        $res = M('User')->where(['user'=>$user])->find();
        if($res){
            echo 'false';
        }else{
            echo 'true';
        }
    }
      /*
     * find
     * 找回密码
     * **/
    public function find()
    {
        if(IS_POST){
            $email = I('post.user_email');
            $res = email($email);
            if($res == true){
                $this->success('请查收邮箱',U('User/find'));

            }else{
                $this->error('发送失败');
            }
        }else{
            $config = config();
            $this->assign('config',$config);
            $this->display();
        }

    }

    /*
     * doAdd
     * 判断找回的邮箱
     * **/
    public function doAdd()
    {
        $email = I('post.user_email');
        $res = M('User')->where(['user_email'=>$email])->find();
        if($res){
           echo 'true';
        }else{
            echo 'false';
        }
    }
    /*
     * daAdd
     * 通过邮箱找回密码
     * **/
    public function daAdd()
    {
        $email = I('param.user_email','');
        $time = I('param.time','');
        $token = I('param.token','');
        if(IS_POST){
            var_dump($email);
            var_dump($time);
            var_dump($token);
            //判断接过来的值在加密算一下
            $add = psd_Add($time,$email);
            //获取当前时间邮箱15分钟有效
            if($add != $token){
                $this->error('小子不要乱动东西！');
            }
            $ti = time();
            if($ti - $time > 900){
                $this->error('给你发的邮箱已过期',U('User/find'));
            }
          $psd = I('post.psd');
               $res = M('User')->where(['user_email'=>$email])->save(['user_pwd'=>md5($psd)]);
            if($res){
                $this->success('修改成功',U('User/wait'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $config = config();
            $this->assign('email',$email);
            $this->assign('tima',$time);
            $this->assign('token',$token);
            $this->assign('config',$config);
            $this->display();
        }

    }
}