<?php /* Smarty version 3.1.27, created on 2017-08-29 13:01:15
         compiled from "D:\wamp\www\shikezj.cn\templates\mobile_106\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:303959a5659b8affb0_82517294%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cd5f392fd83c3b2e5e11d195ba5012de2c2f3c4' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\mobile_106\\content_app.php',
      1 => 1504010102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303959a5659b8affb0_82517294',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'tpl_path' => 0,
    'imagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a5659bcf1843_12732558',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a5659bcf1843_12732558')) {
function content_59a5659bcf1843_12732558 ($_smarty_tpl) {
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_imagelist')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '303959a5659b8affb0_82517294';
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php if ($_smarty_tpl->tpl_vars['app']->value['app_stitle']) {?>
    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['app_stitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seodesc'];?>
" />
    <?php } else { ?>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/content1.css">
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/jquery.fancybox.min.css">

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery.fancybox.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/bscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/qrcode.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <style type="text/css">
    body {
        margin: 0;
        background-color: #efefef;
        font-family: "冬青";
    }
    blockquote {
        border-left: 0px;
    }
    .appImg {
        height: 314px;
        margin: 10px;
        position: relative;
        /*overflow-x: scroll;
        overflow-y: hidden;*/
    }
    .img {
        position: absolute;
        left: 0;
        top: 4px;
        overflow: hidden;
        white-space: nowrap;
        height: 306px;
    }
    .img img {
        display: inline-block;
        height: 306px;
        margin-right: 7px;
    }
    .article-txt p {
        line-height: 26px;
        margin: 12px 10px 0px 10px;
    }
    </style>
</head>


<body>
<div class="content">
  <div>
    <div> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/bj.jpg" class="background-image"></div>
    <div class="word-processing">
      <div class="word-processing" style="color: #fff">无投入 纯赚钱 </div>
    </div>
    <div><img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_logo'];?>
" class="head-portrait"> </div>
    <div style="margin-left: 30%;">
      <div class="title" style="padding-top: 25%">任务平台-<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</div>
      <br>
      <div class="character"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
人已加入正在试玩</div>
    </div>
  </div>
  <div>
    <div class="icon-frame" style="float:left;margin-top: 43%;"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/wx.png" class="a1" style="width: 15%;margin-left: 15px; ">
      <div style="float:right;text-align: left;width: 73%">支持微信提现 </div>
    </div>
    <div class=" icon-frame" style="margin-top: 43%;"> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/zfb.png" style="width: 12%;margin-left: 15px; ">
      <div style="float:right;text-align: left;width: 73%">支持支付宝提现</div>
    </div>
    <div class=" icon-frame" style="float:left;"> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/sj.png" style="width: 12%;margin-left: 15px;">
      <div style="float:right;text-align: left;width: 73%">支持IOS,Android</div>
    </div>
    <div class="icon-frame"> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/hg.png" style="width: 12%;margin-left: 15px;margin-bottom: 3px; ">
      <div style="float:right;text-align: left;width: 73%">10元提现</div>
    </div>
  </div>

<div style="clear: both;"></div>
  <div class="word-spacing" style="line-height: 20px;position: relative;top:5px;">介绍</div>
  <div style="background-color: #fff;" class="article-txt">
    <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

  </div>

<div style="clear: both;"></div>
  <div class="word-spacing" style="line-height: 20px;position: relative;top:5px;">手机截图</div>
  <div style="background-color: #fff">
    <div class="appImg clearf">
        <div class="img">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
" data-fancybox="group" data-caption="Caption #1">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
">
                </a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
  </div>

  <div class="word-spacing" style="line-height: 12px;margin-bottom: 10px;">小提示</div>
  <div class="caption">
    <div style="height: 20px;"></div>
    <div style='display:'><p style="text-align: center;"> <span style="font-size:16px;">【长按识别二维码加入试玩】</span></p>
    <div>
      <section class="xmyeditor" style="border: 0px none; padding: 0px;">
        <section style="margin: 0px; text-align: center; border: 0px solid rgb(0, 0, 0);">
          <section style="padding: 0; display:inline-block">
            <section style="margi:0; padding:0; width:20em; border:0px solid rgb(0,0,0)"> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/1-16110415512VC.gif" style="width: 100%;" /></section>
            <section style="padding:0; margin-top:-10.5em; margin-left:0.2em; width:9em; height:5em"> <img src="<?php echo smarty_function_link(array('m'=>'qrcode','url'=>$_smarty_tpl->tpl_vars['app']->value['app_recomment_url']),$_smarty_tpl);?>
" id="qrcode" style="width: 120px; height: 120px; margin-left:2px;" /></section>
          </section>
        </section>
      </section>
    </div>
    </div>
    <br />
    <br />
    <br />
    <br />
  </div>
    <div class="caption">
<div class="word-spacing">
    1.iPad用户App Store中下载App请选择仅iPhone下载</div>
<div class="word-spacing">
    2.试玩成功在此平台&ldquo;我的信息&rdquo;-&ldquo;收入查询&rdquo;中申请提现</div>
<div class="word-spacing">
    3.每天15:00-18:00任务更新较多,16:00任务会集中上线,请大家留意。其他时间也会更新,有空就来打开看看,也会有惊喜哦。</div>
<div class="word-spacing">
    4.其他问题请联系公众号在线客服！</div>
</div>
    <div style="height:80px;"></div>
  <div class="col-xs-12 button-box"> <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_recomment_url'];?>
">
    <div class="text-box ">
      <div>加入任务</div>
    </div>
    </a> </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
  $("[data-fancybox]").fancybox({
    baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1">' +
            '<div class="fancybox-bg"></div>' +
            '<div class="fancybox-inner">' +
            '<div class="fancybox-toolbar">' +
            "{{BUTTONS}}" +
            "</div>" +
            '<div class="fancybox-stage" style="margin:0 20px;"></div>' +
            '<div class="fancybox-caption-wrap">' +
            "</div>" +
            "</div>" +
            "</div>"
  });

  // 设置滚动条
  var scroll = new window.BScroll(
    document.querySelector(".appImg"),
    {
      probeType: 3,
      scrollX: true,
      click: true,
      bounce: false
    }
  );

  // var qrcode = new QRCode(document.getElementById("qrcode"), {
  //   text: <?php echo $_smarty_tpl->tpl_vars['app']->value['app_recomment_url'];?>
,
  //   width: 110,
  //   height: 110,
  // });
<?php echo '</script'; ?>
>
<!-- /footer -->
</body>

</html><?php }
}
?>