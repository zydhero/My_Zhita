<? $this->view('header') ?>
<link href="<?=base_url()?>style/版本.css" rel="stylesheet" type="text/css" />
 <div class="heading2"><a href="">项目</a> / <a href=""><?= $project['name'] ?></a> / <a href=""><span>版本</span></a></div>
        <div class="br"></div>
        <?if($wit['selected']){?><span class="icon-check" title="已选中"></span><?}?>
			<?if($wit['deleted']){?><span class="icon-remove-sign" title="已删除"></span><?}?>
<?if(($this->user->isLogged(array('witower','wit')) || $this->user->id==$project['id']) && $project['status']==='buffering'){?>
<?	if($wit['selected']){?>
			<a href="/wit/unselect/<?=$wit['id']?>" class="btn btn-small" style="margin-left:1em">取消选中此创意</a>
<?	}else{?>
			<a href="/wit/select/<?=$wit['id']?>" class="btn btn-small" style="margin-left:1em">选中此创意</a>
<?	}?>
<?}?>
<?=$this->view('alert')?>
 <?foreach ($versions as $id => $version){?>
        <div class="kuai">
            <ul>
                <li>版本</li>
                <li>作者</li>
                <li>时间</li>
                <li>得分</li>
                <?if($this->user->isLogged(array('witower','wit')) || $project['company']==$this->user->id){?>
				<li>操作</li>
<?}?>
            </ul>
        </div>
        <div class="kuai2">
            <ul>
                <li><?=$version['num']?>
<?	if($version['deleted']){?>
									<span class="icon-remove-sign" title="已删除"></span>
<?	}?></li>
                <li><?=$version['name']?></li>
                <li><?= date('Y-m-d H:i',$version['time']) ?></li>
                <li>智塔:<?=$version['score_witower']?>;企业:<?=$version['score_company']?></li>
            </ul>
        </div>
        <div class="hx"></div>
        <div class="kuai4"><?= $version['content'] ?>


        </div>
 <?}?>






<!--<script type="text/javascript" src="/js/diff_match_patch.js"></script>-->
<!--<script type="text/javascript" src="/js/jquery.pretty-text-diff.min.js"></script>-->
<script type="text/javascript">
$(function(){
	$('.version').on('click',function(){
		$(this).siblings('.version:hidden').show().removeClass('changed')
		.siblings().removeClass('changed').removeClass('original')
		.siblings('.diff').remove();

		$(this).clone().insertBefore(this).addClass('diff');
		$(this).addClass('changed').hide()
			.nextAll('.version:first').addClass('original')
			.parent().prettyTextDiff({
				originalContainer:'.version.original>.content',
				changedContainer:'.version.changed>.content',
				diffContainer:'.version.diff>.content'
			})
			.children('.version.diff').children('.content').find('br:first').remove();
	});
	$('.version:first').trigger('click');
});
</script>

<? $this->view('footer') ?>
