<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台模板</title>
    <link rel="stylesheet" href="/Public/Admin/css2/amazeui.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/Admin/css2/core.css" />
    <link rel="stylesheet" href="/Public/Admin/css2/menu.css" />
    <link rel="stylesheet" href="/Public/Admin/css2/index.css" />
    <link rel="stylesheet" href="/Public/Admin/css2/admin.css" />
    <!--<link rel="stylesheet" href="/Public/Admin/css2/typography.css" />-->
    <!--<link rel="stylesheet" href="../assets/css/page/form.css" />-->
    <script src="/Public/Admin/jquery-1.js"></script>
    <script src="/Public/Admin/jquery.validate.min.js"></script>
    <script src="/Public/Admin/messages_zh.min.js"></script>
</head>
<body>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="card-box">
            <!-- Row start -->
            <div class="am-g">
            </div>
            <!-- Row end -->
            <!-- Row start -->
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form" action="<?php echo U('Admin/add');?>" method="post" id="form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <td>管理员的名称</td>
                                <td><input type="text" name="login_name"  id="login_name" value=""/></td>
                            </tr>
                            <tr>
                                <td>密码</td>
                                <td><input type="password" name="login_pwd" id="login_pwd" /></td>
                            </tr>
                            <tr>
                                <td>确认密码</td>
                                <td><input type="password" name="login_psd" /></td>
                            </tr>
                            <tr align="center">
                                <td colspan="2"><input type="submit" value="提交"/></td>
                            </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/Public/Admin/layer/layer.js"></script>
<script>
    $('#form').validate({
        rules:{
            login_name:{
                required:true,
                remote:{
                    url: "<?php echo U('Admin/doAdd');?>",
                    type:'post',
                    data: {
                        login_name: function () {
                            return $("#login_name").val();
                        }
                    }
                }
            },login_pwd:{
                required:true
            },login_psd:{
                required:true,
                equalTo: '#login_pwd'
            }
        },
        messages:{
            login_name:{
                required:'请输入名称',
                remote:'管理员名称已使用！'
            },login_pwd:{
                required:'请输入密码'
            },login_psd:{
                required:'请输入确认密码',
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
    })
</script>