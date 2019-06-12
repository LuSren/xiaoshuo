<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>图片展示系统</title>
<meta name="keywords" content="图片展示系统">
<meta name="description" content="图片展示系统">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="full-screen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<noscript><iframe scr="*.htm"></iframe＞</noscript>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("return false") 
</script><!--a-->
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
 <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="aui-list-item" onclick="window.location.href='<?php echo U('Img/img','id='.$vo['id']);?>'">
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