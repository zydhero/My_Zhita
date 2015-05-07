<? $this->view('header')?>
<link href="<?=base_url()?>style/index.css" rel="stylesheet" type="text/css" />
<div class="pageBanner"><a href=""><img src="<?=base_url()?>image/nimg960.jpg"/></a></div>
<div class="h10"></div>

<div class="indexDiv">
<ul>
      <li class="li_01">
          <div class="imgDiv"><a href=""><img src="<?=base_url()?>image/nimg438_1.jpg"/></a></div>
          <div class="bg">
              <div class="name"><a href="<?= site_url() ?>project/<?= $homepage_project['id'] ?>"><?= $homepage_project['name'] ?></a></div>
              <div class="time"><a href="<?= site_url() ?>project/<?= $homepage_project['id'] ?>"> 截止时间：<?=$homepage_project['wit_end']?> <em><?=lang($homepage_project['status'])?></em></div>
              <div class="content">
                  <?= str_getSummary($homepage_project['summary'], 140) ?>
              </div>
              <div class="price">项目金额：<span><?=$homepage_project['bonus']?></span></div>
              <div class="msg">讨论留言：<?=$homepage_project['comments_count']?><span>参与人数：<?=$homepage_project['witters']?></span></div>
          </div>
      </li>
      <?php foreach ($projects as $project) { ?>
      <li>
          <div class="imgDiv"><a href="<?= site_url() ?>project/<?= $project['id'] ?>"><img src="<?=base_url()?>uploads/images/project/<?=$project['id']?>.jpg" height="87px"/></a></div>
          <div class="bg">
              <div class="name"><a href="<?= site_url() ?>project/<?= $project['id'] ?>"><?= $project['name'] ?></div>
              <div class="time">截止时间：<?= in_array($project['status'], array('preparing', 'witting')) ? $project['wit_end'] : $project['vote_end'] ?> <em><?= lang($project['status']) ?></em></div>
              <div class="price"><a href="<?= site_url() ?>project/<?= $project['id'] ?>">项目金额：<span><?= $project['bonus'] ?></span></div>
              <div class="msg">讨论留言：<?= $project['comments_count'] ?><span>参与人数：<?= $project['witters'] ?></span></div>
          </div>
      </li>

      <?}?>

</ul>
</div>

<?$this->view('footer')?>