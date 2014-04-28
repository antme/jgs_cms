<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<div id="page-wrapper"><div id="page">
  <div class="top">
      <div class="top_content">
	       <?php print render($page['top']); ?>
	  </div>
  </div>
  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">

    <?php print render($page['header']); ?>
    <?php if ($main_menu): ?>
	  <div class="classes"></div>
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#main-menu -->
    <?php endif; ?>
    
    <?php if ($page['notice']): ?>
       <?php print render($page['notice']);?>
    <?php endif; ?>
    <div class="top_right">
        <div id="now_date" class="now_date"></div>
	<div class="now_date">
	   <a href="#" onclick="SetHome(this,window.location)" > 设为首页 </a>
       <a href="#" onclick="AddFavorite(window.location,document.title)"> 收藏本站 </a>
    </div>
	<script>
	     var date = new Date();
	     var now = "";
	     now = date.getFullYear()+"年"; 
	     now = now + (date.getMonth()+1)+"月"; 
	     now = now + date.getDate()+"日";
		 $("#now_date").text(now);

		 function AddFavorite(sURL, sTitle)
		 {
		     try
		     {
		         window.external.addFavorite(sURL, sTitle);
		     }
		     catch (e)
		     {
		         try
		         {
		             window.sidebar.addPanel(sTitle, sURL, "");
		         }
		         catch (e)
		         {
		             alert("加入收藏失败，请使用Ctrl+D进行添加");
		         }
		     }
		 }
		 function SetHome(obj,vrl){
		     try{
		             obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
		     }
		     catch(e){
		             if(window.netscape) {
		                     try {
		                             netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
		                     }
		                     catch (e) {
		                             alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
		                     }
		                     var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
		                     prefs.setCharPref('browser.startup.homepage',vrl);
		              }
		     }
		 }
	</script>
    </div>
  </div></div> <!-- /.section, /#header -->
   
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

	  
      <div class="content">
	     
           <div class="left">
		       <!--宸﹁竟绗竴鍖�-->
		       <?php if ($page['left']): ?>
		       <div class="part1" style="margin-top:10px;">
		          <?php if(isJgsUser()):?>
		             <?php print render($page['left-gg']); ?>
		          <?php else:?>
		              <?php print render($page['left-img']); ?>
		          <?php endif;?>
                  <?php print render($page['left']); ?>
			   </div>
			   <?php endif; ?>
			   <!--鏈嶅姟灞曠ず鍖�-->
			   <?php if ($page['left-f']): ?>
		       <div class="part1 comm_style bsdt" style="margin-top:10px;">
		         <div class="title_bsdt"></div>
                 <?php print render($page['left-f']); ?>
			   </div>
			   <?php endif; ?>
			   
			   <!--宸﹁竟绗簩鍖�-->
			   <?php if ($page['left-s']): ?>
		       <div class="part1" style="margin-top:10px;">
               <?php print render($page['left-s']); ?>
			   </div>
			   <?php endif; ?>
			   
			   <!--宸﹁竟绗笁鍖�-->
			   <?php if ($page['left-t']): ?>
		       <div class="part1">
		       
               <?php print render($page['left-t']); ?>
			   </div>
			   <?php endif; ?>   
		   </div>         
           <div class="right">
               <?php if($user->uid): ?>   
                  <div class="box5" style="padding-bottom:13px;margin-bottom:10px;height:auto;">
                      <div class="title"><span class="txt">欢迎登录虹口区建筑业管理中心</span></div>
                      <ul class="ul_style">
                          <li class="li_style_p">
                             <span class="user_img"><img width="20px" height="20px" src="sites/all/themes/holiday/images/user.png" /></span>
                             <span><?php print l($user->name,'user/'.$user->uid); ?>&nbsp;</span>
                             <span class="logout"><?php print l("退出","https://www.hkjgzx.sh.cn/logout?service=http://www.hkjgzx.sh.cn/user/logout"); ?></span>
                              <span><a href="http://mis.hkjgzx.sh.cn:8080/login/loginForSite.do" class="info_img">进入信息系统</a></span>
                          </li>
                          
                          <li class="li_style_p li_style_b">
                             <span class="user_img"><img width="20px" height="20px" src="sites/all/themes/holiday/images/dbsx.png"/></span>
                             <span><a href="#">待办事项</a></span>
                          </li>
                          <li>
                              <div class="user_infos">
	       	        				<ul class="display_ul_style">
								    	<li class="display_info_li display_li display_li_img1">待办公文<label style="color: red;display:inline">(8)</label></li>
				 				   		<li class="display_info_li display_li display_li_img2">待办任务<label style="color: red;display:inline">(8)</label></li>
										<li class="display_info_li display_li display_li_img3">会议通知<label style="color: red;display:inline">(4)</label></li>
										<li class="display_info_li display_li display_li_img4">其他事项<label style="color: red;display:inline">(2)</label></li>
				 	        		</ul>
				 	        		<div id="li_one" class="user_infos div_display display_info_div">
	       	        					<ul class="ul_style">
								    		<li class="views-row views-row-1 views-row-odd views-row-first">	
								    	 	   <span class="field-content"><a href="#">行政审批公文<label style="color: red;display:inline">(4)</label></a></span>	
 									   		</li>
				 				   			<li class="views-row views-row-2 views-row-even views-row-last">	
				 				   		    	<span class="field-content"><a href="#">上级公文<label style="color: red;display:inline">(4)</label></a></span>	
											</li>
				 	        			</ul>
	        	    				</div>
	        	    				<div id="li_two" class="user_infos div_display display_info_div">
	       	        					<ul class="ul_style">
								    		<li class="views-row views-row-1 views-row-odd views-row-first">	
								    	 	   <span class="field-content"><a href="#">审批项目报建<label style="color: red;display:inline">(4)</label></a></span>	
 									   		</li>
				 				   			<li class="views-row views-row-2 views-row-even views-row-last">	
				 				   		    	<span class="field-content"><a href="#">项目报建审批<label style="color: red;display:inline">(4)</label></a></span>	
											</li>
				 	        			</ul>
	        	    				</div>
	        	    				<div id="li_three" class="user_infos div_display display_info_div">
	       	        					<ul class="ul_style">
								    		<li class="views-row views-row-1 views-row-odd views-row-first">	
								    	 	   <span class="field-content"><a href="#">项目监督会议<label style="color: red;display:inline">(2)</label></a></span>	
 									   		</li>
				 				   			<li class="views-row views-row-2 views-row-even views-row-last">	
				 				   		    	<span class="field-content"><a href="#">工作会议<label style="color: red;display:inline">(2)</label></a></span>	
											</li>
				 	        			</ul>
	        	    				</div>
	        	    				<div id="li_four" class="user_infos div_display display_info_div">
	       	        					<ul class="ul_style">
								    		<li class="views-row views-row-1 views-row-odd views-row-first">	
								    	 	   <span class="field-content"><a href="#">其他事项1<label style="color: red;display:inline">(1)</label></a></span>	
 									   		</li>
				 				   			<li class="views-row views-row-2 views-row-even views-row-last">	
				 				   		    	<span class="field-content"><a href="#">其他事项2<label style="color: red;display:inline">(1)</label></a></span>	
											</li>
				 	        			</ul>
	        	    				</div>
	        	    			</div>
	        	    			<script type="text/javascript">
	        	    			    $(".display_info_li").click(function(){
	        	    			    	$(".display_info_div").removeClass("div_action").addClass("div_display");
	        	    			    	var dd = $(".display_info_div");
	        	    			    	var in_li=$(".display_info_li");
	        	    			    	$(dd[$(".display_info_li").index(this)]).addClass("div_action").removeClass("div_display");
	        	    			    	for(var i=0;i<in_li.length;i++){
		        	    			    	var x=(i+1)*10+i+1;
		        	    			    	var y=i+1;
	        	    			    		$(in_li[i]).removeClass("display_li_img"+x).addClass("display_li_img"+y);
	        	    			    	}
	        	    			    	var numc=($(".display_info_li").index(this)+1)*10+($(".display_info_li").index(this)+1);
	        	    			    	$(this).addClass("display_li_img"+numc).removeClass("display_li_img"+$(".display_info_li").index(this)+1);
		        	    			});
	        	    			</script>
                          </li>
                      </ul>
                  </div>
               <?php else:?>
                <div class="box5" style="padding-bottom:13px;margin-bottom:10px;height:auto;">
                    <div class="title"><span class="txt">用户中心</span></div>
                    <div class="login_info">
                        <a class="login_a" href="https://www.hkjgzx.sh.cn/login?service=http%3A%2F%2Fwww.hkjgzx.sh.cn%2Fcas%3Fdestination%3Dnode&locale=zh_CN">登录</a>
                        <a class="login_a" href="">注册</a>
                        <a class="login_a" href="">忘记密码</a>
                    </div>
                </div>
               <?php endif; ?>
               <?php print render($page['right']); ?>
               <div class="box5" style="margin-top:10px;float:left;height:240px;">
                   <div class="title">
						<span class="txt">群众路线教育意见箱</span>
				   </div>
				   <a href="/node/add/suggestion" class="wsyjx"></a>
               </div>               
		   </div>
           <a class="return_top" href="#top"></a>
	 </div>
	  <?php if ($page['hrefs']): ?>
		     <div class="content" style="margin-bottom:10px;">
		         <?php print render($page['hrefs']); ?>
			 </div>
	  <?php endif; ?>
	 </div>
  </div>
  <?php if ($page['footer']): ?>
      <div id="footer" style="padding-top:10px;">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

  </div> <!-- /.section, /#footer-wrapper -->

</div> <!-- /#page, /#page-wrapper -->
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="sites/all/themes/holiday/js/jquery.chart.js"></script>
<div id="container"></div>
<div id="back_div"></div>
<script>
   function close_div(){
	    $("#container").hide();
	    $("#back_div").hide();
	}
	function close_divs(){
		$("#search_project_value").hide();
		$(".project_info").remove();
		$(".bsdt").css("height","auto");
	}
</script>