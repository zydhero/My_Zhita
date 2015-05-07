<? $this->view('header') ?>
<link href="<?=base_url()?>style/个人信息.css" rel="stylesheet" type="text/css" />
<div class="indexDiv">
<?=$this->view('alert')?>
    <form method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="model model-b tab-content">
                <?=$this->view('alert')?>
                <div class="control-group" onclick="window.location.href='javascript:show()'">
                    <label class="control-label">头像</label>
                    <div class="right">
                        <div class="img1"><img src="image/月月.png"></div>
                        <div id="img2"><img src="<?=base_url()?>image/right.png"></div>
                    </div>
                </div>
<!--                <div id="avatar" class="main tab-pane active">-->
<!--                    <div class="warning">-->
<!--                        <p>注：仅支持JPG图片文件</p>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <div class="model-lr model-uploadPhoto">-->
<!--                            <div class="pull-left">-->
<!--                                <input type="file" name="avatar">-->
<!--                            </div>-->
<!--                            <div class="pull-right">-->
<!--                                <p>您上传的头像会自动生成三种尺寸，请注意中小尺寸-->
<!--                                    的头像是否清晰。</p>-->
<!--                                --><?//if(file_exists('./uploads/images/avatar/'.$this->user->id.'.jpg')){?>
<!--                                    --><?//=$this->image('avatar',$this->user->id,200,false,array('class'=>'pull-left'))?>
<!--                                    --><?//=$this->image('avatar',$this->user->id,100,false,array('class'=>'pull-right'))?>
<!--                                    --><?//=$this->image('avatar',$this->user->id,30,false,array('class'=>'pull-right','style'=>'margin-top: 30px; clear: right;'))?>
<!--                                --><?//}?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div id="baseinfo" class="main tab-pane">
<!--                    <div class="warning">-->
<!--                        以下信息将显示在个人资料页，方便大家了解你，注*为必填项-->
<!--                    </div>-->
                    <div class="control-group">
                        <label class="control-label">昵称</label>
                        <div class="right">
                            <input type="text" name="profiles[昵称]" value="<?=set_value('profiles[昵称]',$profiles['昵称'])?>">
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">性别</label>
                        <div class="right">
                            <div class="btn-group" data-toggle="buttons-radio">
                                <span class="hide"><?=radio(array('男','女'), 'profiles[性别]', set_value('profiles[性别]',$profiles['性别']))?></span>
                            </div>
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">生日</label>
                        <div class="right">
                            <input type="text" name="profiles[生日]" value="<?=set_value('profiles[生日]',$profiles['生日'])?>">
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">个人签名</label>
                        <div class="right">
                            <input type="text" name="profiles[个人签名]" value="<?=set_value('profiles[个人签名]',$profiles['个人签名'])?>">
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">兴趣爱好</label>
                        <div class="right">
                            <input type="text" name="profiles[兴趣爱好]" value="<?=set_value('profiles[兴趣爱好]',$profiles['兴趣爱好'])?>">
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系方式</label>
                        <div class="right">
                            <input type="text" name="profiles[联系方式]" value="<?=set_value('profiles[联系方式]',$profiles['联系方式'])?>">

                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">手机号</label>
                        <div class="right">
                            <input type="text" name="profiles[手机号]" value="<?=set_value('profiles[手机号]',$profiles['手机号'])?>">
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">邮箱</label>
                        <div class="right">
                            <input type="text" name="user[email]" value="<?=set_value('user[email]',$user['email'])?>">
                            <!--<a href="/profile#email">修改安全邮箱</a> <span>关注我的人可见</span>-->
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">微信号</label>
                        <div class="right">
                            <input type="text" name="profiles[微信号]" value="<?=set_value('profiles[微信号]',$profiles['微信号'])?>">
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">QQ</label>
                        <div class="right">
                            <input type="text" name="profiles[qq]" value="<?=set_value('profiles[qq]',$profiles['qq'])?>">
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">收货地址</label>
                        <div class="right">
                            <input type="text" name="profiles[收货地址]" value="<?=set_value('profiles[收货地址]',$profiles['收货地址'])?>" />
                            <div class="img3"><img src="<?=base_url()?>image/right.png"></div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="control">
                        <button type="submit" name="submit" id="btn4">保存</button>
                    </div>
                </div>
            </div>
      </form>
</div>


<div id="login" >
    <div class="bt" id="bt1">
        <form action="" method="post" class="btn2">
            <input name="" class="btn1" type="submit" value="拍照">
        </form>
    </div>
    <div class="bt" id="bt2">
        <form action="" method="post" class="btn2">
            <input name="" class="btn1" type="submit" value="从手机相册选择">
        </form>
    </div>
    <div class="bt" id="bt3">
        <form action="" method="post" class="btn2">
            <input name="" class="btn1" type="submit" value="取消">
        </form>
    </div>
</div>
<div id="over"></div>

<script type="text/javascript">
    function show()
    {
        $("#login").css({"left": 0 + 'px',"bottom": 45+ 'px'});//设置初始位置,防止移动后关闭再打开位置在关闭时的位置
        $("#login").css("display","block");
        $("#over").css("display","block");
    }
    function hide()
    {
        $("#login").css("display","none");
        $("#over").css("display","none");
    }
    $(function(){

        $(':input').on('change',function(){
            $(this).attr('changed','changed');
        });

        $('.btn-group>:button').on('click',function(){
            $(this).siblings(':button').removeAttr('changed');
            $(this).attr('changed','changed');
            $(this).parent().find(':radio[name="'+$(this).attr('name')+'"][value="'+$(this).text()+'"]').prop('checked',true).trigger('change');
        });

        $('form').on('submit',function(){
            $(this).find(':input:not([changed]):not([name="submit"])').prop('disabled',true);
        });

        //http://stackoverflow.com/questions/7862233/twitter-bootstrap-tabs-go-to-specific-tab-on-page-reload
        if (window.location.hash) {
            $('.nav-pills a[href='+window.location.hash+']').tab('show') ;
        }

        // Change hash for page-reload
        $('.nav-pills a').on('shown', function (e) {
            window.location.hash = e.target.hash;
        });

    });
</script>
<?$this->view('footer')?>