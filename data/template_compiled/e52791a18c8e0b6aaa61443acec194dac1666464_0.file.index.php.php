<?php /* Smarty version 3.1.27, created on 2017-09-04 06:58:33
         compiled from "D:\wamp\www\shikezj.cn\templates\mobile_104\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:1746259acf9998cf8b3_18597413%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52791a18c8e0b6aaa61443acec194dac1666464' => 
    array (
      0 => 'D:\\wamp\\www\\shikezj.cn\\templates\\mobile_104\\index.php',
      1 => 1504009424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1746259acf9998cf8b3_18597413',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'tpl_path' => 0,
    'navicat' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59acf999a875f0_46174359',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59acf999a875f0_46174359')) {
function content_59acf999a875f0_46174359 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_navicat')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_recommend')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_countdown')) require_once 'D:\\wamp\\www\\shikezj.cn\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '1746259acf9998cf8b3_18597413';
?>
<!DOCTYPE HTML>
<html>
<head>
    <!--网页标题-->
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
<header class="head">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>32)); $_block_repeat=true; echo smarty_block_ad(array('id'=>32), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="swiper-slide">
                <a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
"  class="img-responsive"></a>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>32), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <div class="swiper-pagination"></div>
    </div>
       <div>
          <p>
              <a href="/" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" ></a>
          </p>
          <p class="search-bg">
              <input type="text" id="search-input" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
              <a href="javascript:;" id="search-btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/search.png"></a>
          </p>
       </div>
</header>
    
<div class="gray-head-bg">
    <header class="gray-head">
     <div>
          <p>
              <a href="/" class="logo">
                  <a href="/" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['wap_logo'];?>
" ></a>
              </a>
          </p>
         <p class="search-bg">
             <input type="text" id="search-type" value="请输入搜索内容" onFocus="if(value=='请输入搜索内容'){value='';this.style.color='#333'}" onBlur="if(value==''){value='请输入搜索内容'}" class="search i-search"  data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
">
             <a href="javascript:;" id="btn"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/search.png"></a>
         </p>
       </div>
    </header>
</div>
    
<!--nav-->
    <nav>
        <div class="nav">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array('row'=>2,'start'=>3)); $_block_repeat=true; echo smarty_block_navicat(array('row'=>2,'start'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <dl>
                <dt>
                    <a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m'],'last_cate_id'=>2),$_smarty_tpl);?>
" >
                        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] == 5) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/nav-pic2.png">
                        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] == 4) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/nav-pic1.png">
                        <?php }?>
                    </a>
                </dt>
                <dd><a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a></dd>
            </dl>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array('row'=>2,'start'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <dl>
                <dt>
                    <a href="<?php echo smarty_function_link(array('m'=>'ranks','id'=>68),$_smarty_tpl);?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/nav-pic3.png">
                    </a>
                </dt>
                <dd><a href="<?php echo smarty_function_link(array('m'=>'ranks','id'=>68),$_smarty_tpl);?>
">排行榜</a></dd>
            </dl>
            <dl>
                <dt>
                    <a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>67),$_smarty_tpl);?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/nav-pic4.png">
                    </a>
                </dt>
                <dd><a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>67),$_smarty_tpl);?>
">精品推荐</a></dd>
            </dl>
        </div>
    </nav>
   <!--grayline-->  
   <div class="grayline"></div>
<!--title-->
    <div class="title-gre">
        <h2 class="fs30">软件热门<a href="<?php echo smarty_function_link(array('m'=>'softs','id'=>45),$_smarty_tpl);?>
" class="fr fs20 col-1fc9af">更多>></a></h2>
    </div>  
<!--content-->

<?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>45,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>45,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <div class="game">
      <div class="game-pic">
           <div class="fl"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
" style="width:72px;"/></a></div>

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
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>45,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <!--whiteline-->
   <div class="white-line"></div>
   <!--title-->
    <div class="title2 title-gre">
        <h2 class="fs30">游戏热门<a href="<?php echo smarty_function_link(array('m'=>'games','id'=>46),$_smarty_tpl);?>
" class="fr fs20 col-ff5d31">更多>></a></h2>
    </div>
<!--content-->

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>46,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>46,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="game">
        <div class="game-pic">
            <div class="fl">
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
" style="width:72px;"/>
                </a>
            </div>
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
            <p class="fs14 fr load "><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="col-4FB0E4 btn-a">立即下载</a></p>
        </div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>46,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


   <!--whiteline-->
   <div class="white-line h50"></div>
  <!--foot-->
      <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo '<script'; ?>
>
  $(function(e) {
    $(window).scroll(function(){
        if( $(this).scrollTop()>10){
            $('.gray-head-bg').fadeIn('slow');
            $('.nav').css('margin-top','150px');
            $('.head').css('display','none');
        }else{
            $('.gray-head-bg').fadeOut('fast');
            $('.head').fadeIn('fast');
            $('.nav').css('margin-top','0px');
    }
    });
  $('.gray-head-bg').fadeOut(-10000);
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    //banner
    var swiper = new Swiper('.swiper-container', {
        loop:true,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay : 3000,
        autoplayDisableOnInteraction : false
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>