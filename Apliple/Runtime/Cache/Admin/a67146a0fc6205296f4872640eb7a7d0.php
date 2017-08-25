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
    <link rel="stylesheet" href="/Public/Admin/css2/page.css" />
</head>
<body>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="card-box">
            <!-- Row start -->
            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                    </div>
                </div>


            </div>
            <!-- Row end -->
            <!-- Row start -->

            <div class="am-btn-toolbar">
                <form action="<?php echo U('Log/del');?>" method="get">
                <div class="am-btn-group am-btn-group-xs">
                    <select name="moth">
                        <option value="1">删除一个月</option>
                        <option value="3">删除三个月</option>
                    </select>
                    <input type="submit" value="删除"/>
                </div>
                </form>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr align="center">
                                <td class="table-check"><input type="checkbox" /></td>
                                <td class="table-id">操作人</td>
                                <td class="table-id">时间</td>
                                <td class="table-id">内容</td>
                                <td class="table-id">ip</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($logDate)): foreach($logDate as $key=>$v): ?><tr align="center">
                                    <td  class="table-title"><input type="checkbox" /></td>
                                    <td  class="table-title"><?php echo ($v["login_name"]); ?></td>
                                    <td class="table-title"><?php echo (date('Y-m-d H:i:s',$v["log_time"])); ?></td>
                                    <!--<td  class="table-title"><?php echo (date('Y-m-d H:i:s',$v["log_time "])); ?></td>-->
                                    <td  class="table-title"><?php echo ($v["log_coment"]); ?></td>
                                    <td  class="table-title"><?php echo ($v["log_ip"]); ?></td>
                                </tr><?php endforeach; endif; ?>
                        </table>
                        </tbody>
                    </form>
                    <div class="yahoo2" >
                        <?php echo ($pages); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>