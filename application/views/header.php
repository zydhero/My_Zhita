<!DOCTYPE html>
<?php error_reporting(E_ALL & ~E_NOTICE);?>
<html lang="zh-CN" xmlns:wb="http://open.weibo.com/wb">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?=implode(' - ' , array_reverse(array_column($this->page_path, 'text')))?><?if($this->page_path){?> - <?}?>智塔</title>
		<meta name="keywords" content="<?=$this->config->user_item('keywords')?>" />
		<meta name="description" content="<?=$this->config->user_item('description')?>" />
<link href="<?=base_url()?>style/main.css" rel="stylesheet" type="text/css" />

<link href="<?=base_url()?>style/media.css" rel="stylesheet" type="text/css" />

		<link rel="icon" href="<?=base_url()?>style/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/datepicker.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/skin.css">
		<link rel="stylesheet" href="//libs.baidu.com/fontawesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/summernote.css">
		<link rel="stylesheet" href="<?=base_url()?>style/mediaelementplayer.css" />

		<script type="text/javascript" src="<?=base_url()?>js/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/jquery.masonry.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/common.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/MediaElement/mediaelement-and-player.min.js"></script>
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>



</head>

<body>
<div class="head">
     <a href="" class="logo"><img src="<?=base_url()?>image/logo.png" height="28"/></a>
     <div class="info">

         <div class="fl">
         	<ul>
						<?php if($this->user->isLogged()){ ?>
						<li><a href="<?=site_url()?>home"><?=$this->user->name?></a> |
						<a href="<?=site_url()?>profile">资料</a>|
						<a href="<?=site_url()?>finance">积分</a>|
						<?php	if($this->user->isLogged('witower')){ ?>
						<li><a href="<?=site_url()?>admin">管理</a>|</li><?//TODO ����������ҳ?>
						<?php	}elseif($this->user->isCompany()){ ?>
						<li><a href="<?=site_url()?>company/product">管理</a>|</li><?//TODO ��ҵ������ҳ?>
						<?php	}?>
						<?php } ?>
						<?php if($this->user->isLogged()){ ?>

							<a href="<?=site_url()?>logout">退出</a>
						</li>
						<?php }else{ ?>
						<li>
							<a href="<?=site_url()?>signup">注册</a><a >|</a>
							<a href="<?=site_url()?>login">登录</a>
						</li>
						<?php } ?>
					</ul>
         </div>
     </div>
</div>


<div class="nav">
     <ul>
       <li><a href="<?=base_url()?>index.php">首页</a></li>
       <li><a href="<?=site_url()?>project">浏览项目</a></li>
       <li><a href="<?=site_url()?>vote">发起投票</a></li>
       <li><a href="<?=site_url()?>piece">作品</a></li>
     </ul>
</div>
<div class="hx"></div>

