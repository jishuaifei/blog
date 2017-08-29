<?php
/*
 * email
 * 发送邮箱
 * **/
function email($email)
{

    Vendor('PHPMailer\SMTP');
    Vendor('PHPMailer\PHPMailer');
//        vendor('Phpemail/POP3');
    $mail = new \PHPMailer;
//$mail->SMTPDebug = 3;                               //启用详细的调试输出
    $mail->isSMTP();                                     //设置邮件程序使用SMTP
    $mail->Host = 'smtp.qq.com';   //指定主服务器和备份SMTP服务器
    $mail->SMTPAuth = true;                               //启用SMTP验证
    $mail->Username = '953436658@qq.com';                  // SMTP username
    $mail->Password = '********';                            // SMTP密码
    $mail->SMTPSecure = 'ssl';                            //启用TLS加密，`ssl`也接受
    $mail->Port = 465;                                     //要连接的TCP端口

    $mail->setFrom('953436658@qq.com', '纪帅飞');
    $mail->addAddress($email, 'Joe User');     //添加收件人
//    $mail->addAddress('ellen@example.com');               //名称是可选的
    $mail->addReplyTo('953436658@qq.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

//    $mail->addAttachment('/var/tmp/file.tar.gz');          //添加附件
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //可选名称
    $mail->isHTML(true);                                  //将电子邮件格式设置为HTML
    $config = config();
    $time = time();
    $token = psd_Add($time,$email);
    $url = "http://".$config['URL'].U('User/daAdd',['user_email'=>$email,'time'=>$time,'token'=>$token]);
    $content = '亲爱的用户'.$email.',您好，<br><br>
请点击这里<a href="'.$url.'">连接</a>重置密码,
此链接只用15分钟内有效，请勿透露他人，否则后果自负！<br><br>
链接无效，请联系管理员QQ953436658';
    $name = $config['TITLE'];
    $mail->Subject = "这是'.$name.'博客";
    $mail->Body    = $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
       return false;
    } else {
        return true;
    }
}
/*
 * psd_Add
 * 邮箱加密
 * **/
function psd_Add($time,$email)
{
     return  md5(base64_decode($time).base64_decode($email));
}



        /*
         *config
         * 公共的配置
         * **/
        function config()
        {
            $config = S('config');
                if($config){
                    return $config;
                }else{
                    $data = M('Deploy')->select();
                    foreach($data as $key=>$val){
                        $config[$val['key']] = $val['value'];
                    }
                    S('config',$config);
                    return $config;
                }

        }
?>