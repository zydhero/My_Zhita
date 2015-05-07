<!--<div class="model recommend">
	<div class="title"><h3>每日推荐</h3></div>
	<div class="main">
		<div class="info">
			<a href="/project/<?=$recommended_project['id']?>"><?=$this->image('project',$recommended_project['id'],100)?></a>
			<a class="btn btn-primary pull-right" href="/project/<?=$recommended_project['id']?>">我要参与</a>
			<ul>
				<li><b>发布企业：</b><?=$recommended_project['company_name']?>
					<?followButton($recommended_project['company'])?>
				</li>
				<li><b>项目名称：</b><a href="/project/<?=$recommended_project['id']?>"><?=$recommended_project['name']?></a></li>
				<li>
					<div class="clearfix"></div>
					<div class="well"><?=$recommended_project['summary']?></div>
				</li>
				<li><b>项目金额：</b><?=$recommended_project['bonus']?>元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>截止日期：</b><?=$recommended_project['wit_end']?></li>
				<li>标签：
					<span class="tags">
						<?foreach($recommended_project['tags'] as $tags){?>
								<a href="/list/search/tag/<?=$tags?>"><?=$tags?></a>
						<?}?>
					</span>
				</li>
			</ul>

		</div>
		<div class="scroll-img">
			<div class="pull-left"><p>他们正在讨论</p></div>
			<div class="pull-right">
				<ul id="mycarousel" class="jcarousel-skin-tango">
					<?foreach($recommended_project['commenters'] as $commenter){?>
						<li><a href="/user/space/<?=$commenter['id']?>"><?=$this->image('avatar',$commenter['id'],100,65)?><span><?=$commenter['name']?></span></a></li>
					<?}?>
				</ul>
			</div>
		</div>
	</div>
</div>
-->
<div class="indexDiv">
    <li class="li_01">
        <div class="imgDiv"><a href=""><img src="<?=base_url()?>uploads/images/project/<?=$recommended_project['id']?>.jpg" /></a></div>
        <div class="bg">
            <div class="name"><a href="<?=site_url()?>/project/<?=$recommended_project['id']?>"><?=$recommended_project['name']?></a></div>
            <div class="time">截止时间：<?=$recommended_project['wit_end']?> <em><?=lang($recommended_project['status'])?></em></div>
            <div class="content">
                <?=$recommended_project['summary']?>
            </div>
            <div class="price">项目金额：<span><?=$recommended_project['bonus']?></span></div>

        </div>
    </li>
    <div class="heading">当前参与人员</div>
    <div class="container">
        <div id="ca-container" class="ca-container">
            <div class="ca-wrapper">
                <div class="ca-item">
                    <img src="image/头像3.png">
                    <div>月月月月鸟</div>
                </div>
                <div class="ca-item">
                    <img src="image/头像3.png">
                    <div>月月月月鸟</div>
                </div>
                <div class="ca-item">
                    <img src="image/头像3.png">
                    <div>月月月月鸟</div>
                </div>
                <div class="ca-item">
                    <img src="image/头像3.png">
                    <div>月月月月鸟</div>
                </div>
                <div class="ca-item">
                    <img src="image/头像3.png">
                    <div>月月月月鸟</div>
                </div>
                <div class="ca-item">
                    <img src="image/头像3.png">
                    <div>月月月月鸟</div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="<?=base_url()?>script/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>script/jquery.easing.1.3.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?=base_url()?>script/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?=base_url()?>script/jquery.contentcarousel.js"></script>
<script type="text/javascript">
    $('#ca-container').contentcarousel();
</script>