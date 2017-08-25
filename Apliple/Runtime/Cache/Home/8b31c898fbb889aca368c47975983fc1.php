<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <!--<meta http-equiv="Content-Type" content="text/html; Charset=gb2312">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="zh-CN">

    <!--<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title><?php echo ($config["TITLE"]); ?></title>
    <link rel="shortcut icon" href="/Public/Home/images/Logo_40.png" type="image/x-icon">
    <!--Layui-->
    <link href="/Public/Home/plug/layui/css/layui.css" rel="stylesheet" />
    <!--font-awesome-->
    <link href="/Public/Home/plug/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!--全局样式表-->
    <link href="/Public/Home/css/global.css" rel="stylesheet" />
    <!-- 首页样式表 -->
    <link href="/Public/Home/css/home.css" rel="stylesheet" />
    <!--文章样式表-->
    <link href="/Public/Home/css/article.css" rel="stylesheet" />
    <!-- 详情样式表 -->
    <link href="/Public/Home/css/detail.css" rel="stylesheet" />
    <!-- 资源样式表 -->
    <link href="/Public/Home/css/resource.css" rel="stylesheet" />
    <!-- 时间样式表 -->
    <link href="/Public/Home/css/timeline.css" rel="stylesheet" />
    <!-- 本站样式表 -->
    <link href="/Public/Home/css/about.css" rel="stylesheet" />
    <!-- 详情样式表 -->
    <link href="/Public/Home/css/detail.css" rel="stylesheet" />
    <?php echo ($config["TONGJI"]); ?>
</head>
<body>
<!-- 导航 -->
<nav class="blog-nav layui-header">
    <div class="blog-container">
        <!-- QQ互联登陆 -->
        <!--<a href="javascript:;" class="blog-user" >-->
        <!--<i class="fa fa-qq">登陆</i>-->
        <!--</a>-->
        <!--<a href="javascript:;" class="blog-user layui-hide" data-url="<?php echo U('Index/index');?>">-->

        <!--</a>-->

        <a class="blog-logo" href="home.html">纪帅飞</a>
        <!-- 导航菜单 -->
        <ul class="layui-nav" lay-filter="nav">
            <li class="layui-nav-item">
                <a href="<?php echo U('Index/index');?>"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo U('Article/index');?>"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo U('Resource/index');?>"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo U('TimeLine/index');?>"><i class="fa fa-hourglass-half fa-fw"></i>&nbsp;点点滴滴</a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo U('About/index');?>"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo U('User/index');?>"><i class=""></i>&nbsp;注册</a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo U('User/wait');?>"><i class="fa fa-qq"></i>&nbsp;登陆</a>
            </li>
        </ul>
        <!-- 手机和平板的导航开关 -->
        <a class="blog-navicon" href="javascript:;">
            <i class="fa fa-navicon"></i>
        </a>
    </div>
</nav>
<!-- 主体（一般只改变这里的内容） -->
<div class="blog-body">
    <div class="blog-container">
        <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
            <a href="home.html" title="网站首页">网站首页</a>
            <a><cite>资源分享</cite></a>
        </blockquote>
        <div class="blog-main">
            <div class="blog-main">
                <div class="child-nav shadow">
                    <span class="child-nav-btn child-nav-btn-this">全部</span>
                    <span class="child-nav-btn">源码</span>
                    <span class="child-nav-btn">工具</span>
                    <span class="child-nav-btn">电子书</span>
                </div>
                <div class="resource-main">
                    <div class="resource shadow">
                        <div class="resource-cover">
                            <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                <img src="/Public/Home/images/cover/201703051349045432.jpg" alt="时光轴" />
                            </a>
                        </div>
                        <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                        <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                        <div class="resource-info">
                            <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                            <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                            <div class="clear"></div>
                        </div>
                        <div class="resource-footer">
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                        </div>
                    </div>
                    <div class="resource shadow">
                        <div class="resource-cover">
                            <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                <img src="/Public/Home/images/cover/201703051349045432.jpg" alt="时光轴" />
                            </a>
                        </div>
                        <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                        <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                        <div class="resource-info">
                            <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                            <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                            <div class="clear"></div>
                        </div>
                        <div class="resource-footer">
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                        </div>
                    </div>
                    <div class="resource shadow">
                        <div class="resource-cover">
                            <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                <img src="/Public/Home/images/cover/201703051349045432.jpg" alt="时光轴" />
                            </a>
                        </div>
                        <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                        <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                        <div class="resource-info">
                            <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                            <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                            <div class="clear"></div>
                        </div>
                        <div class="resource-footer">
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                        </div>
                    </div>
                    <div class="resource shadow">
                        <div class="resource-cover">
                            <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                <img src="/Public/Home/images/cover/201703051349045432.jpg" alt="时光轴" />
                            </a>
                        </div>
                        <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                        <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                        <div class="resource-info">
                            <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                            <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                            <div class="clear"></div>
                        </div>
                        <div class="resource-footer">
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                        </div>
                    </div>
                    <div class="resource shadow">
                        <div class="resource-cover">
                            <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                <img src="/Public/Home/images/cover/201703051349045432.jpg" alt="时光轴" />
                            </a>
                        </div>
                        <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                        <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                        <div class="resource-info">
                            <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                            <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                            <div class="clear"></div>
                        </div>
                        <div class="resource-footer">
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                            <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                        </div>
                    </div>
                    <!-- 清除浮动 -->
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 底部 -->
<footer class="blog-footer">
    <p><span></span><span>&copy;</span><span>2017</span><a href="http://www.lyblogs.cn">阿飞天地</a><span>JI SHUAI FEI </span></p>
    <p><a href="http://www.miibeian.gov.cn/" target="_blank">北京市昌平区</a></p>
</footer>
<!--侧边导航-->
<ul class="layui-nav layui-nav-tree layui-nav-side blog-nav-left layui-hide" lay-filter="nav">
    <li class="layui-nav-item">
        <a href="home.html"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
    </li>
    <li class="layui-nav-item">
        <a href="article.html"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
    </li>
    <li class="layui-nav-item">
        <a href="resource.html"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
    </li>
    <li class="layui-nav-item">
        <a href="timeline.html"><i class="fa fa-road fa-fw"></i>&nbsp;点点滴滴</a>
    </li>
    <li class="layui-nav-item layui-this">
        <a href="about.html"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
    </li>
</ul>
<!--分享窗体-->
<div class="blog-share layui-hide">
    <div class="blog-share-body">
        <div style="width: 200px;height:100%;">
            <div class="bdsharebuttonbox">
                <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
            </div>
        </div>
    </div>
</div>
<!--遮罩-->
<div class="blog-mask animated layui-hide"></div>
<!-- layui.js -->
<script src="/Public/Home/plug/layui/layui.js"></script>
<!-- 全局脚本 -->
<script src="/Public/Home/js/global.js"></script>
<!-- 本页脚本 -->
<script src="/Public/Home/js/about.js"></script>
<!-- 比较好用的代码着色插件 -->
<script src="/Public/Home/js/prettify.js"></script>
<!-- 本页脚本 -->
<script src="/Public/Home/js/detail.js"></script>
<!-- 本页脚本 -->
<script src="/Public/Home/js/home.js"></script>
<!-- 本页脚本 -->
<script type="text/javascript">
    layui.use('jquery', function () {
        var $ = layui.jquery;

        $(function () {
            $('.monthToggle').click(function () {
                $(this).parent('h3').siblings('ul').slideToggle('slow');
                $(this).siblings('i').toggleClass('fa-caret-down fa-caret-right');
            });
            $('.yearToggle').click(function () {
                $(this).parent('h2').siblings('.timeline-month').slideToggle('slow');
                $(this).siblings('i').toggleClass('fa-caret-down fa-caret-right');
            });
        });
    });
</script>
</body>