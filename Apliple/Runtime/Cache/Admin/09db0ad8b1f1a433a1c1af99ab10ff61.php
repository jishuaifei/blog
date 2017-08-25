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
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr align="center">
                                <td><input type="checkbox" /></td>
                                <td >ID</td>
                                <td >标题</td>
                                <td>作者</td>
                                <!--<td>添加时间</td>-->
                                <td>点击量</td>
                                <!--<td>管理员</td>-->
                                <td>操作</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($reList)): foreach($reList as $key=>$v): ?><tr align="center">
                                    <td><input type="checkbox" /></td>
                                    <td><?php echo ($v["article_id"]); ?></td>
                                    <td><a href="#"><?php echo ($v["article_title"]); ?></a></td>
                                    <td><?php echo ($v["article_author"]); ?></td>
                                    <!--<td><?php echo (date('Y-m-d H:i:s',$v["add_time"])); ?></td>-->
                                    <td><?php echo ($v["like_hits"]); ?></td>
                                    <!--<td><?php echo ($v["login_name"]); ?></td>-->
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="<?php echo U('Article/restore');?>?id=<?php echo ($v["article_id"]); ?>">还原</a></button>
                                                <!--<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>-->
                                                <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"><a href="<?php echo U('Article/reDel');?>?id=<?php echo ($v["article_id"]); ?>" class="btn btn-primary " onclick="if(confirm('确定要删除吗?将无法找回')){return true;}else{return false;}">删除</a></span> </button>
                                                <!--href="<?php echo U('Article/reDel');?>?id=<?php echo ($v["article_id"]); ?>"-->
                                                <!--<a href="javascript:void(1)" class="del()" >删除</a>-->
                                            </div>
                                        </div>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>