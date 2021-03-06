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
    <h1>邮箱</h1></p>
    <form class="layui-form" action="<?php echo U('User/find');?>" method="post" id="form">
        <div class="layui-form-item">
            <input type="text" name="user_email"   autocomplete="off" id="user_email" value="" class="layui-input">
        </div>
        <input type="submit" value="提交" class="layui-btn login_btn" lay-submit="" lay-filter="login"/>
    </form>
</div>
</body>
<script src="/Public/Admin/layer/layer.js"></script>
<script>

    $('#form').validate({
                rules:{
                    user_email:{
                        required:true,
                        remote:{
                            url: "<?php echo U('User/doAdd');?>",
                            type:'post',
                            data: {
                                classify_name: function () {
                                    return $("#user_email").val();
                                }
                            }
                        }
                    }
                },
                messages:{
                    user_email:{
                        required:'请输入邮箱',
                        remote:'你输入的邮箱不对'
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