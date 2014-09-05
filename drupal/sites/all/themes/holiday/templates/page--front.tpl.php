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

<script type="text/javascript">
	var userType= '<?php echo getMisUser();?>';
	var userName ='<?php if(isset($user->name)) {echo $user->name;}else{echo "";}?>';
	
	function checkUserType(){
			if(userType=="匿名用户"){
				alert("请先登录");
				return false;
			}

			return true;

	}


</script>

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
    </div>
  </div></div> <!-- /.section, /#header -->
   
  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

	  
      <div class="content">
	     
           <div class="left">
		       <!--宸﹁竟绗竴鍖�-->
		       <?php if ($page['left']): ?>
		       <?php if(isJgsUser()):?>
			   	  <div class="part1 nbgg" style="margin-top:10px;">
			   	      <div class="titles_top">内部公告</div>
		         	  <div class="context">
		                  <?php print render($page['left-gg']); ?>
		          	  </div>
			      </div>
			   <?php endif;?>
		       <div class="part1" style="margin-top:10px;">
		          <?php print render($page['left-img']); ?>
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
                             <span class="user_img"><img width="20px" height="20px" src="sites/all/themes/holiday/images/user.gif" /></span>
                             <span><?php print $user->name; ?>&nbsp;</span>
                             <span class="logout"><?php print l("退出","https://www.hkjgzx.sh.cn/logout?service=http://www.hkjgzx.sh.cn/user/logout"); ?></span>
                             <span><a style="cursor:pointer;" onclick="update_password()" >修改密码</a></span>
                             <span id="shows"><a href="http://mis.hkjgzx.sh.cn:8080/login/loginForSite.do" class="info_img">进入信息系统</a></span>
                          </li>
                          <li class="li_style_p li_style_b" style="display: none;">
                             <span class="user_img"><img width="20px" height="20px" src="sites/all/themes/holiday/images/dbsx.gif"/></span>
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
	        	    			</div>
	        	    			<script type="text/javascript">
	        	    				load_Task();
	        	    			</script>
                          </li>
                      </ul>
                  </div>
               <?php else:?>
                <div class="box5" style="padding-bottom:13px;margin-bottom:10px;height:204px;">
                    <div class="title"><span class="txt">用户中心</span></div>
                    <iframe style="border:0;border:none;overflow-x: hidden" frameborder="no" scrolling="yes" height='160px' border="0" border="none" marginwidth="0" marginheight="0" src="https://www.hkjgzx.sh.cn/login?embed=true&service=http%3A%2F%2Fwww.hkjgzx.sh.cn%2Fcas%3Fdestination%3Dnode&locale=zh_CN"></iframe>
                    <div style="margin-left:40px;margin-top:-10px;">
                        <a href="http://mis.hkjgzx.sh.cn:8080/netZbdl/login.do">招标代理</a>&nbsp;&nbsp;
                        <a style="cursor:pointer;" href="http://mis.hkjgzx.sh.cn:8080/site/reg.do" >注册</a>&nbsp;&nbsp;<a style="cursor:pointer;display:none;" onclick="alert('该功能暂未开放，敬请期待！');">忘记密码</a>
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
           
	 </div>
	  <?php if ($page['front_img']): ?>
		     <div class="content" style="margin-bottom:10px;">
		         <?php print render($page['front_img']); ?>
			 </div>
	  <?php endif; ?>
	 
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
  <a class="return_top" href="#top"></a>
</div> <!-- /#page, /#page-wrapper -->
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="sites/all/themes/holiday/js/jquery.chart.js"></script>
<div id="container">
    <div class="closed_div" onclick="closed_process()"></div>
    <div class="project_info">
       <ul>
          <li><span>项目名称:</span><span id="project_info_name"></span></li>
          <li><span>报建编号:</span><span id="project_info_number"></span></li>
          <li><span>项目地址:</span><span id="project_info_address"></span></li>
          <li><span>建设单位:</span><span id="project_info_unit"></span></li>
          <li><span>总投资:</span><span id="total_Investment"></span></li>
       </ul>  
    </div>
    <div class="project_process">
       <ul>
           <li>
               <ul class="lc">
          			<li><div class="bj">项目报建</div></li>
          			<li><div class="down_img"></div></li>
     	  			<li class="cfb_li"><div class="cfb project_bx" onclick="show_process()">承发包(*)</div></li>
     	  			<li><div class="down_img"></div></li>
     	  			<li><div class="sg ">施工图审查</div></li>
     	  			<li><div class="down_img"></div></li>
     	  			<li><div class="jl project_bx">项目报监</div></li>
     	  			<li><div class="down_img"></div></li>
     	  			<li><div class="xk project_bx">施工许可</div></li>
       		   </ul>
           </li>
           <li>
               <ul class="lc-two">
          			<li class="right_img"><div class="sjfb">设计发包(*)</div></li>
     	  			<li class="right_img"><div class="kcfb">勘察发包(*)</div></li>
     	  			<li class="right_img"><div class="sgfb">施工发包(*)</div></li>
     	  			<li class="right_img"><div class="jlfb">监理发包(*)</div></li>
       		   </ul>
           </li>
           <li>
               <ul class="lc-three">
          			<li><div class="sjba">设计合同备案(*)</div></li>
     	  			<li><div class="kcba">勘察合同备案(*)</div></li>
     	  			<li><div class="sgba">施工合同备案(*)</div></li>
     	  			<li><div class="jlba">监理合同备案(*)</div></li>
       		   </ul>
           </li>
           
           <li>
     	  	   <ul class="list_info">
     	  			<li style="border-bottom:1px solid #cdcdcd">
     	  			    <span class="list_info_left">名称</span>
     	  			    <span class="list_info_right">时间</span>
     	  			</li>
     	       </ul>
     	  </li>
     	  <li>
              <ul class="zjd">
          			
       		  </ul>
           </li>
     	   <li>
     	       <ul id="list_info" style="width:370px;border:3px solid #cdcdcd;">
     	           
     	       </ul>
     	   </li>
       </ul>  
    </div>
</div>
<div id="back_div"></div>
<div id="back_update">
         <ul>
             <li>
                 <span class="span_style"><label>原密码：</label></span>
                 <span class="span_style"><input id="oldpw" name="oldpw" type="password" /></span>
             </li>
             <li>
                 <span class="span_style"><label>新密码：</label></span>
                 <span class="span_style"><input id="newpw" name="newpw" type="password" /></span>
             </li>
             <li>
                 <span class="span_style"><label>确认密码：</label></span>
                 <span class="span_style"><input id="somepw" type="password" /></span>
             </li>
             <li>
                 <span class="span_style"><label>&nbsp;</label></span>
                 <span class="span_style"><button onclick="subimt_update()">确定</button></span>
                 <span class="span_style"><button onclick="closed_all()">取消</button></span>
             </li>
         </ul>
</div>
<script>

</script>