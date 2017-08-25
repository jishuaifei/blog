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
<style>
    p.start-gradient {
        font-weight: bold;
        font-family: helvetica;
        text-align:center;
        background: -webkit-linear-gradient(left, #4f185d , #fe5d4b);     /* 背景色渐变 */
        -webkit-background-clip: text;         /* 规定背景的划分区域 */
        -webkit-text-fill-color: transparent;  /* 防止字体颜色覆盖 */

        font-family:Arial,Helvetica,sans-serif;
        font-size:1.4em;
        vertical-align:middle;
        font-weight:normal
    }
</style>
<div class="blog-body">
    <div class="blog-container">
        <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
            <a href="<?php echo U('Index/index');?>" title="网站首页">网站首页</a>
            <a href="<?php echo U('Article/index');?>" title="文章专栏">文章专栏</a>

        </blockquote>
        <div class="blog-main">
            <div class="blog-main-left">
                <!-- 文章内容（使用Kingeditor富文本编辑器发表的） -->
                <div class="article-detail shadow">
                    <div class="article-detail-info">
                        <input type="hidden" name="" class="id" value="<?php echo ($arList["article_id"]); ?>"/>
                        <span>编辑时间：<?php echo (date('Y-m-d H:i:s',$arList["add_time"])); ?></span>
                        <span>作者：<?php echo ($arList["article_author"]); ?></span>
                        <span>浏览量：<?php echo ($arList["like_hits"]); ?></span>
                    </div>
                    <div class="article-detail-content">
                        <p style="text-align:center;">
                            <strong><span style="font-size:18px;"><?php echo ($arList["article_title"]); ?></span></strong>
                        </p>
                        <p style="text-align:center;">
                            <strong>
                                    <span style="font-size:18px;">
                                        <br />
                                    </span>
                            </strong>
                        </p>

                        <p style="text-align:left;">
                            <br />
                        </p>
                        <hr />
                        <p>
                            <br />
                        </p>
                        <hr />
                        <p>
                            <img src="/Public/<?php echo ($arList["article_img"]); ?>" width="600px" height="500px"/>
                        </p>
                        <p>
                        <div  class="start-gradient" >
                          <?php echo ($arList["article_content"]); ?>
                        </div>
                        </p>
                        <hr />
                        <p>
                            <br />
                        </p>
                        <hr />
                    </div>
                </div>
                <!-- 评论区域 -->

                <div class="blog-module shadow" style="box-shadow: 0 1px 8px #a6a6a6;">
                    <!--<fieldset class="layui-elem-field layui-field-title" style="margin-bottom:0">-->
                        <!--<legend>来说两句吧</legend>-->
                        <!--<div class="layui-field-box">-->
                            <!--<form class="layui-form blog-editor" action="">-->
                                <!--<div class="layui-form-item">-->
                                    <!--<textarea name="editorContent" lay-verify="content" id="remarkEditor" placeholder="请输入内容" class="layui-textarea layui-hide"></textarea>-->
                                <!--</div>-->
                                <!--<div class="layui-form-item">-->
                                    <!--<button class="layui-btn" lay-submit="formRemark" lay-filter="formRemark">提交评论</button>-->
                                <!--</div>-->
                            <!--</form>-->
                        <!--</div>-->
                    <!--</fieldset>-->
                    <div class="blog-module-title"></div>
                    <!--PC和WAP自适应版-->
                    <div id="SOHUCS" sid="<?php echo ($arList["article_id"]); ?>" ></div>
                    <script type="text/javascript">
                        (function(){
                            var appid = 'cytb1lMtj';
                            var conf = 'prod_3e7b71b6776acc1a162de3805d4d4b4f';
                            var width = window.innerWidth || document.documentElement.clientWidth;
                            if (width < 960) {
                                window.document.write(
                                        '<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); }
                            else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");
                                b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",
                                    function(){window.changyan.api.config({appid:appid,conf:conf})}); } })();
                    </script>
                    <script src="/Public/Home/jquery-1.js"></script>
                    <script type="text/javascript">
                        //访问加1
                        $(function(){
                            var id = $('.id').val();
                            $.get('/index.php/Article/setIc',{"id":id},function(res){
                                console.log(res);
                            },'json')
                        })
                    </script>

                            <!--<ul class="blog-comment">-->
                        <!--<li>-->
                            <!--<div class="comment-parent">-->
                                <!--<img src="/Public/Home/images/Absolutely.jpg" alt="absolutely" />-->
                                <!--<div class="info">-->
                                    <!--<span class="username">Absolutely</span>-->
                                    <!--<span class="time">2017-03-18 18:46:06</span>-->
                                <!--</div>-->
                                <!--<div class="content">-->
                                    <!--我为大家做了模拟评论功能！还有，这个评论功能也可以改成和留言一样，但是目前没改，有兴趣可以自己改-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</li>-->
                    <!--</ul>-->
                </div>
            </div>
            <div class="blog-main-right">
                <!--右边悬浮 平板或手机设备显示-->
                <div class="category-toggle"><i class="fa fa-chevron-left"></i></div><!--这个div位置不能改，否则需要添加一个div来代替它或者修改样式表-->
                <div class="article-category shadow">
                    <div class="article-category-title">分类导航</div>
                    <!-- 点击分类后的页面和artile.html页面一样，只是数据是某一类别的 -->
                    <?php if(is_array($classify)): foreach($classify as $key=>$v): ?><a href="<?php echo U('Article/index');?>?id=<?php echo ($v["classify_id"]); ?>"><?php echo ($v["classify_name"]); ?></a><?php endforeach; endif; ?>
                    <div class="clear"></div>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">相似文章</div>
                    <ul class="fa-ul blog-module-ul">
                        <?php if(is_array($cleList)): foreach($cleList as $key=>$v): ?><li><i class="fa-li fa fa-hand-o-right"></i><a href="<?php echo U('Article/show');?>?id=<?php echo ($v["article_id"]); ?>&name=<?php echo ($v["article_title"]); ?>"><?php echo ($v["article_title"]); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">随便看看</div>
                    <ul class="fa-ul blog-module-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC制作404跳转（非302和200）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（三）（JS篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">写了个Win10风格快捷菜单！</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
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