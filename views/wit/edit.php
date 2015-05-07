<? $this->view('header') ?>
<link href="<?=base_url()?>style/发布创意.css" rel="stylesheet" type="text/css" />
<div class="indexDiv">
<? $this->view('alert') ?>
    <div class="heading2"><a href="">项目</a> / <a href=""><?= $project['name'] ?></a> / <a href=""><span>编辑创意</span></a></div>
    <form method="post">
        <input type="text" name="name" placeholder="创意标题" value="<?=set_value('name', $wit['name'])?>">
        <textarea name="content" placeholder="输入内容" id="text"><?=set_value('content', $wit['content'])?></textarea>

    <div class="function">
        <a href=""><img src="<?=base_url()?>image/打开图片.png"></a>
        <a href=""><img src="<?=base_url()?>image/打开视频.png"></a>
        <a href=""><img src="<?=base_url()?>image/@.png"></a>
    </div>
    <div class="Btn">
        <button type="submit" name="submit" class="btn">提　交</button>
    </div>
    </form>
</div>


<?$this->view('wit/sidebar')?>

<? $this->view('footer') ?>
