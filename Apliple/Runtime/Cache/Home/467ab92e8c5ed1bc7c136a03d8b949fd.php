<?php if (!defined('THINK_PATH')) exit();?><html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo ($config["TITLE"]); ?></title>
    <script src="/Public/Admin/jquery-1.js"></script>
    <script src="/Public/Admin/jquery.validate.min.js"></script>
    <script src="/Public/Admin/messages_zh.min.js"></script>
    <link rel="stylesheet" href="/Public/Admin/css/layui.css">
    <link rel="stylesheet" href="/Public/Admin/css/login.css">
</head>
<style type="text/css">
    body {
        color: white;
    }
    .error{
        margin-left: 5px;
        color: red;
    }
</style>
<body>
<video class="video-player" preload="auto" autoplay="autoplay"  muted = "true" loop="loop" data-height="1080" data-width="1920" height="1080" width="1920">
    <source src="/Public/Admin/css/preview.mp4" type="video/mp4">
    <!-- 此视频文件为腾讯所有，在此仅供样式参考，如用到商业用途，请自行更换为其他视频或图片，否则造成的任何问题使用者本人承担，谢谢 -->
</video>
<div class="video_mask"></div>
<div class="login">
    <h1>密码修改</h1></p>
    <form class="layui-form" action="<?php echo U('User/daAdd');?>" method="post" id="form">
        <div class="layui-form-item">
            <input type="password" name="psd"   autocomplete="off" id="psd" value="" class="layui-input">
        </div>
        <div class="layui-form-item">
            <input type="password" name="pwd"   autocomplete="off" id="pwd" value="" class="layui-input">
        </div>
        <input type="hidden" name="user_email" value="<?php echo ($email); ?>"/>
        <input type="hidden" name="time" value="<?php echo ($tima); ?>"/>
        <input type="hidden" name="token" value="<?php echo ($token); ?>"/>
        <input type="submit" value="提交" class="layui-btn login_btn" lay-submit="" lay-filter="login"/>
    </form>
</div>
</body>
<script src="/Public/Admin/layer/layer.js"></script>
<script>

    $('#form').validate({
                rules:{
                    psd:{
                        required:true
                    },
                    pwd:{
                        required:true,
                        equalTo: '#psd'
                    }
                },
                messages:{
                    psd:{
                        required:'请输入密码'
                    },
                    pwd:{
                        required:'请输入密码',
                        equalTo: "两次输入密码不一致"
                    }
                },
                //重写错误信心，提示
                showErrors:function(errorMap,errorList){
                    var msg = '';
                    $.each(errorList,function(k,v){
                        msg += (v.message +"\r\n");
                    })
                    if(msg != ''){
                        layer.msg(msg);
                    } //失去焦点
                    onfocusout:false;
                }


            }
    )
</script>
</html>