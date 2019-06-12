<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>图片展示系统</title>
<meta name="keywords" content="图片展示系统">
<meta name="description" content="图片展示系统">
<link rel="stylesheet"href="./Application/Home/Include/style/frozen.min.css">
<link rel="stylesheet"href="./Application/Home/Include/style/aui.css">
<link rel="stylesheet"href="./Application/Home/Include/style/style.min.css">
<style type="text/css">
#footer{height:56px;}#footer i{font-size:1.6rem}#footer li.active,#footer li:active,#footer li:hover{font-size:.7rem}
.ui-tiled li{font-size:.7rem}
</style> 
<SCRIPT language=javascript src="./Application/Home/Include/style/jquery-1.9.1.min.js"></SCRIPT>
<SCRIPT language=javascript src="./Application/Home/Include/style/layer.js"></SCRIPT>
</head>
<body>
<div id="head" >
<div class="fixtop">
<span id="home"><a href="/" rel="external"><i class="ico08"><img src="./Application/Home/Include/images/homepage.png" width="30px" /></i></a></span>
<span id="index"><i class="ico07"><img src="./Application/Home/Include/images/logo.png" width="88px" class="h"/></i></span><i class="ico21">图片展示系统</i>
<span id="find"><i class="ico08"><img src="./Application/Home/Include/images/ss1.png" width="29px" /></i></span>
</div>
<div class="m-nav-head">
<div class="naviBar">
<ul class="head-nav">
<?php if(is_array($ftype)): $i = 0; $__LIST__ = $ftype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Img/img_type','type='.$vo['id']);?>"><li><?php echo ($vo["name"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
</div> 
<div id="nav" class="view currents out">
<div id="search-box">
</div>
<ul class="nav-list">
<?php if(is_array($ftype)): $i = 0; $__LIST__ = $ftype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Img/img_type','type='.$vo['id']);?>" rel="external" title="<?php echo ($vo['type_name']); ?>"><li><?php echo ($vo["name"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
</ul> 
</div>
</div>
</div>
<header id="header" class="ui-header ui-header-positive ui-border-b">
<h1 class="ui-nowrap ui-whitespace"></h1>
</header>
<br/>
<script language="javascript" src="#"></script>
<br/>
<!-- <h2 class="ui-arrowlink"></h2> -->
	<ul class="aui-list aui-media-list">
	 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="aui-list-item" onclick="window.location.href='<?php echo U('Img/img','id='.$vo['id']);?>'">
            <div class="aui-list-item-inner">
                <div class="aui-list-item-title"><?php echo ($vo["title"]); ?></div>
                <p><?php echo ($vo["txt"]); ?></p>
                <div class="aui-row aui-row-padded">
                    <div class="aui-col-xs-4">
                        <img src="<?php echo ($vo["coverimg"]); ?>"/>
                    </div>
                </div>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
<div class="u-layer-ath">
<div class="ath_addhome_area"></div>
<div class="ath_close_area" data-role="button"></div>
</div>
<script src="./Application/Home/Include/style/zepto.min.js"></script>
<script src="./Application/Home/Include/style/vue.min.js"></script>
<script src="./Application/Home/Include/style/frozen.js"></script>
<script src="./Application/Home/Include/style/mjp.min.js"></script> 
<footer id="footer" class="ui-footer ui-footer-stable ui-border-t">
<ul class="ui-tiled ui-border-t">
<li onClick="ubourl('/index.php')" class="active"><i class="ui-icon-home2"></i>首页</li>
<li  onclick="ubourl('ent_list.php')" ><i class="ui-icon-k"></i>更多分类</li>
</ul>
</footer> 

</body>
</html>