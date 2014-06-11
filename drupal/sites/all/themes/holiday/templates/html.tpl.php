<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <!-- <base target="_blank"> -->
  <?php print $head; ?> 
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <script>
jQuery(function($){
    $('.slideBox').slideBox({
        duration : 0.6,//滚动持续时间，单位：秒
        easing : 'swing',//swing,linear//滚动特效
        delay : 5,//滚动延迟时间，单位：秒
        hideClickBar : false,//不自动隐藏点选按键
        clickBarRadius : 10
    });
});
function ass(){
	  if($(document).scrollTop()>200){
		  <?php global $user;?>
		  <?php if(isset($user ->name)):?>
		      $("#main-menu").addClass("main-menu-fix");
		  <?php else: ?>
		      $("#main-menu").addClass("main-menu-fix2");
		  <?php endif;?>
		  if($(".region-page-top").html()==null || $(".region-page-top").html()=="" || $(".region-page-top").html()=='undefind'){
			  
		  }else{
			  $(".main-menu-fix").css("top","30px");
		  }
		  $(".return_top").css("display","inline-block");
	     
  }else if($(document).scrollTop()<200){
	  <?php global $user;?>
		  <?php if($user ->uid):?>
			  $("#main-menu").removeClass("main-menu-fix");
		  <?php else: ?>
		      $("#main-menu").removeClass("main-menu-fix2");
		  <?php endif;?>
		  $(".return_top").css("display","none");
  }
}
window.onscroll = function () { 
  if(screen.width>1000){
	  ass();
  } 
}
</script>
 
<?php 
$page_backs="bg3";
$header_section="back3";
$box5_title="titlebg2";
$main_menu_links="menu-c3.gif";
$footer_border="#A81400";
$footer_back="#eee";
$quicktabs_tabs="titlebg2";
$pages_style="#A81400";
$box2="tzbg";
$title_bsdt="pic5";
$block_quicktabs="titlebg2";
$main_menu_links_li="";
?>

<!-- 十一   -->
<?php if(theme_get_setting("holiday_theme_style")=="holiday_national"):?>

  <!-- 五一 -->
<?php elseif(theme_get_setting("holiday_theme_style")=="holiday_labour_day"):?>
  <?php
  $page_backs="bg";
  $header_section="back4";
  $box5_title="titlebg4";
  $main_menu_links="menu-c.jpg";
  $footer_border="#ffc000";
  $footer_back="#eee";
  $quicktabs_tabs="titlebg4";
  $pages_style="#A81400";
  $box2="tzbg2";
  $title_bsdt="pic5";
  $block_quicktabs="titlebg4";
  $main_menu_links_li="background:url(/sites/all/themes/holiday/images/menu-s.jpg) no-repeat left 0px;";
  ?>
  
<!-- 春节 -->
<?php elseif(theme_get_setting("holiday_theme_style")=="holiday_spring_festival"):?>
<?php
  $page_backs="bg";
  $header_section="back";
  $box5_title="titlebg2";
  $main_menu_links="menu-c.jpg";
  $footer_border="#A81400";
  $footer_back="#eee";
  $quicktabs_tabs="titlebg2";
  $pages_style="#A81400";
  $box2="tzbg";
  $title_bsdt="pic5";
  $block_quicktabs="titlebg2";
  $main_menu_links_li="background:url(/sites/all/themes/holiday/images/menu-s.jpg) no-repeat left 0px;";
  ?>
  
<!-- 默认皮肤 -->
<?php elseif(theme_get_setting("holiday_theme_style")=="holiday_default" || theme_get_setting("holiday_theme_style")==NULL):?>
  <?php
  $page_backs="bg2";
  $header_section="back2";
  $box5_title="titlebg3";
  $main_menu_links="menu-c2.gif";
  $footer_border="#053980";
  $footer_back="#eee";
  $quicktabs_tabs="titlebg3";
  $pages_style="#053980";
  $box2="tzbg";
  $title_bsdt="pic6";
  $block_quicktabs="titlebg3";
  $main_menu_links_li="background:url(/sites/all/themes/holiday/images/menu-s2.jpg) no-repeat left 0px;";
  ?>
<?php elseif(theme_get_setting("holiday_theme_style")=="holiday_spring"):?>
     <?php
  $page_backs="bg_c";
  $header_section="back_c";
  $box5_title="titlebg_c";
  $main_menu_links="menu_s.jpg";
  $footer_border="#1fd341";
  $footer_back="#eee";
  $quicktabs_tabs="titlebg_c";
  $pages_style="#1fd341";
  $box2="tzbg";
  $title_bsdt="pic5";
  $block_quicktabs="titlebg_c";
  ?>
  
<?php elseif(theme_get_setting("holiday_theme_style")=="holiday_summer"):?>
     <?php
  $page_backs="bg_x";
  $header_section="back_x";
  $box5_title="titlebg_x";
  $main_menu_links="menu-c2.gif";
  $footer_border="#053980";
  $footer_back="#eee";
  $quicktabs_tabs="titlebg_x";
  $pages_style="#053980";
  $box2="tzbg";
  $title_bsdt="pic5";
  $block_quicktabs="titlebg_x";
  ?>
  <style type="text/css">
    .box1 .title .txt, .box2 .title .txt, .part2 .title .txt, .box .title .txt, .box3 .title .txt ,.box5 .title,#block-quicktabs-gsgg-tabs .titlesd,.box3 .title .more a{
    color: #fff;
    }
  </style>
  
  
<?php elseif(theme_get_setting("holiday_theme_style")=="holiday_autumn"):?>
     <?php
  $page_backs="bg_q";
  $header_section="back_q";
  $box5_title="titlebg_q";
  $main_menu_links="menu_q.jpg";
  $footer_border="#f7cc10";
  $footer_back="#eee";
  $quicktabs_tabs="titlebg_q";
  $pages_style="#f7cc10";
  $box2="tzbg";
  $title_bsdt="pic5";
  $block_quicktabs="titlebg_q";
  ?>
  
  
<?php elseif(theme_get_setting("holiday_theme_style")=="holiday_winter"):?>
     <?php
  $page_backs="bg_x";
  $header_section="back_d";
  $box5_title="titlebg_d";
  $main_menu_links="menu-c2.gif";
  $footer_border="#053980";
  $footer_back="#eee";
  $quicktabs_tabs="titlebg_d";
  $pages_style="#053980";
  $box2="tzbg";
  $title_bsdt="pic5";
  $block_quicktabs="titlebg_d";
  ?>  
  <style type="text/css">
    .box1 .title .txt, .box2 .title .txt, .part2 .title .txt, .box .title .txt, .box3 .title .txt ,.box5 .title,#block-quicktabs-gsgg-tabs .titlesd,.box3 .title .more a{
    color: #fff;
    }
  </style>
<?php endif;?>

<style type="text/css">
        #page{
          background:url(/sites/all/themes/holiday/images/<?php print $page_backs; ?>.jpg) repeat-x;
        }
	    #header div.section .classes{ 
	      background:url(/sites/all/themes/holiday/images/<?php print $header_section; ?>.jpg) no-repeat;
	      height:200px;
	    }
	    .box5 .title,.box5 h1,.box3 .title{
	      background: url("/sites/all/themes/holiday/images/<?php print $box5_title; ?>.jpg") repeat-x;
	      height:30px;
	    }
	    #main-menu-links{
	      background:url(/sites/all/themes/holiday/images/<?php print $main_menu_links; ?>) repeat-x;
	    }
	    #main-menu-links li{
	       <?php print $main_menu_links_li;?>
	    }
	    #footer {
	       border-top:2px solid <?php print $footer_border;?>;
	       background: <?php print $footer_back;?>;
	    }
		ul.quicktabs-tabs.quicktabs-style-basic{
		   background:url("/sites/all/themes/holiday/images/<?php print $quicktabs_tabs;?>.jpg") repeat-x;
		   height:28px;
		   *+height:26px;
		   border-left:1px solid #cdcdcd;
		   border-right:1px solid #cdcdcd;
		}
		.pages_style .title{ 
		   padding:10px;
		   margin:10px;
		   border-bottom:2px solid <?php print $pages_style;?>;
		}
		.right .box2 {
		   float: left;
		   height: 218px;
		   width: 268px;
		   margin-top:10px;
		   background:url(/sites/all/themes/holiday/images/<?php print $box2;?>.jpg) repeat-x ;
		}
		.title_bsdt{
		   width:100%;
		   height:24px;
		   background:url(/sites/all/themes/holiday/images/<?php print $title_bsdt;?>.jpg) no-repeat;
		}
		#block-quicktabs-gsgg-tabs .titlesd{
		   background: url("/sites/all/themes/holiday/images/<?php print $block_quicktabs;?>.jpg") repeat-x;
    	   border-left: 1px solid #CDCDCD;
    	   border-right: 1px solid #CDCDCD;
    	   height: 28px;
    	   width:258px;
    	   *+width:268px;
		}
  </style>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
