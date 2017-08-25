<?php
/*
 * User
 * 用户名的控制器
 * 纪帅飞
 * 953436658@qq.com
 */
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {

     /*
      * index
      * 用户名的首页
      * **/
    public function index()
    {
        $user = M('User')->select();
        $this->assign('user',$user);
        $this->display();
    }
}