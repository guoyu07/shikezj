<?php /* Smarty version 3.1.27, created on 2017-08-20 04:59:34
         compiled from "D:\wamp\www\templates\mobile_104\list_rank.php" */ ?>
<?php
/*%%SmartyHeaderCode:1552259991736c605d0_39403043%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'badf839e14ea1a143c091f6b50e096f2c046c1b6' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\mobile_104\\list_rank.php',
      1 => 1500971544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552259991736c605d0_39403043',
  'variables' => 
  array (
    'setting' => 0,
    'tpl_path' => 0,
    'area_id' => 0,
    'show_sort_id' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59991736d8ad15_25860648',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59991736d8ad15_25860648')) {
function content_59991736d8ad15_25860648 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '1552259991736c605d0_39403043';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>

<div class="container">
    <!--head-->
    <div class="search-head-bg">
        <header class="search-head">
            <h2>
                <a href="/">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/fanhui.png" class="w7">
                    <a class="fs24 col-fff">排行榜</a>

                    <input type="hidden" id="search-input" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
                    <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/white-search.png" class="w14"></a>

            </h2>
        </header>
    </div>
    <!--hot-->
    <div class="hot-bg  mt50 fs12">
        <h2>
            <a  <?php if ($_smarty_tpl->tpl_vars['area_id']->value == 69) {?>
            class="btn-a"
            <?php } elseif ($_smarty_tpl->tpl_vars['area_id']->value == 53) {?>
            class="btn-a"
            <?php } else { ?>
            class="btn-a current-back"
            <?php }?>
            href="<?php echo smarty_function_link(array('m'=>'ranks','id'=>68),$_smarty_tpl);?>
"
            >下载排行</a>
            <a
            <?php if ($_smarty_tpl->tpl_vars['area_id']->value == 53) {?>
            class="btn-a"
            <?php } elseif ($_smarty_tpl->tpl_vars['area_id']->value == 68) {?>
            class="btn-a"
            <?php } else { ?>
            class="btn-a current-back"
            <?php }?>
            href="<?php echo smarty_function_link(array('m'=>'ranks','id'=>69),$_smarty_tpl);?>
" class="btn-a ">上升最快</a>
            <a
            <?php if ($_smarty_tpl->tpl_vars['area_id']->value == 69) {?>
            class="btn-a"
            <?php } elseif ($_smarty_tpl->tpl_vars['area_id']->value == 68) {?>
            class="btn-a"
            <?php } else { ?>
            class="btn-a current-back"
            <?php }?>
            href="<?php echo smarty_function_link(array('m'=>'ranks','id'=>53),$_smarty_tpl);?>
" class="btn-a">最受欢迎</a>
        </h2>
    </div>
    <!--grayline-->
    <div class="grayline"></div>
    <!--content-->
    <!--热门排行榜-->
    <div class="ly-tb">
        <div id="rank_H" data-id="<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>$_smarty_tpl->tpl_vars['area_id']->value,'start'=>0,'row'=>3)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>$_smarty_tpl->tpl_vars['area_id']->value,'start'=>0,'row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="game">
                <span class="num fs12"><?php echo $_smarty_tpl->tpl_vars['show_sort_id']->value++;?>
</span>
                <div class="game-pic ml36">

                    <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="72"/></a></div>
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                    <ul>
                        <li class="fs14 col-333 g-title"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</li>
                        <li class="fs12 col-999"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载<span class="m-none"> | <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M</span></li>
                        <li class="fs12 col-666"><span class="btn-s col-999"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</span></li>
                    </ul>
                    </a>
                    <p class="fs14 fr load"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="col-4FB0E4 btn-a">立即下载</a></p>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>$_smarty_tpl->tpl_vars['area_id']->value,'start'=>0,'row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>$_smarty_tpl->tpl_vars['area_id']->value,'start'=>3,'row'=>12)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>$_smarty_tpl->tpl_vars['area_id']->value,'start'=>3,'row'=>12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="game">
                <span class="num fs12 back-none"><?php echo $_smarty_tpl->tpl_vars['show_sort_id']->value++;?>
</span>
                <div class="game-pic ml36">

                    <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="72"/></a></div>
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                        <ul>
                            <li class="fs14 col-333 g-title"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</li>
                            <li class="fs12 col-999"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载<span class="m-none"> | <?php echo round($_smarty_tpl->tpl_vars['recommend']->value['history_size']/1024/1024,2);?>
M</span></li>
                            <li class="fs12 col-666"><span class="btn-s col-999"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</span></li>
                        </ul>
                    </a>
                    <p class="fs14 fr load"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="col-4FB0E4 btn-a">立即下载</a></p>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>$_smarty_tpl->tpl_vars['area_id']->value,'start'=>3,'row'=>12), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="more mb50">
            <p><a href="javascript:;" class="list-R"><<加载更多</a></p>
        </div>
    </div>
</div>

<!--foot-->
<div class="foot-bg">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.hot-bg a').click(function(){
            $(this).addClass("current-back").siblings().removeClass("current-back");
            $('.ly-tb').hide();
            $('.ly-tb').eq($(this).index()).show();
        });//tab 选项卡
    });
<?php echo '</script'; ?>
>

<?php }
}
?>