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
                    <form class="am-form" action="<?php echo U('Connect/add');?>" method="post" id="form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <td>网站名称</td>
                                <td><input type="text" name="connect_name" id="connect_name" value=""/></td>
                            </tr>
                            <tr>
                                <td>网站地址</td>
                                <td><input type="text" name="connect_url" id="connect_url" value=""/></td>
                            </tr>
                            <tr>
                                <td>排序</td>
                                <td><input type="text" name="connect_sost" id="connect_sost" value=""/></td>
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
            connect_name:{
                required:true,
                remote:{
                    url: "<?php echo U('Connect/doAdd');?>",
                    type:'post',
                    data: {
                        connect_name: function () {
                            return $("#connect_name").val();
                        }
                    }
                }
            },
            connect_url:{
                required:true
            },connect_sost:{
                required:true
            }
        },
        messages:{
            connect_name:{
                required:'请输入网站名称',
                remote:'网站名称重复！'
            },
            connect_url:{
                required:'请输入网址'
            },
            connect_sost:'请输入1-100的数字'

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