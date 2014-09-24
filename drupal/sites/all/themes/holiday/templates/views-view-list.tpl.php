<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>

<?php 
$class_name = "pages_style"; 		
$has_more = true;
$ul_style="ul_style";
$style_name="";
$display_title=true;
$display_bottom=false;
$add_more=false;
$nbgg=false;
?>
<?php if($view->name=="slide_images_view") : ?>

        <div class="box2 ">
        <div id="demo3" class="slideBox">
            <ul class="items">
			     <?php foreach ($rows as $id => $row): ?>
			         <li title="" class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			     <?php endforeach; ?>
            </ul>
       </div>        
    </div>

<?php elseif ($view->name=="presence_view"):?>
<div class="partner">
	    <div class="title">员工风采</div>
           <div id="demoed">
				<div id="indemoed">
				<div id="demoed1">
					<?php foreach ($rows as $id => $row): ?>
			              <?php print $row; ?>
			        <?php endforeach; ?>
				</div>
				<div id="demoed2" style="margin-left: 3px"></div>
				</div>
		   </div>
		    <script type="text/javascript">

				var speed=30;
				var tabs=document.getElementById("demoed");
				var tabs1=document.getElementById("demoed1");
				var tabs2=document.getElementById("demoed2");
				tabs2.innerHTML=tabs1.innerHTML;
				
				function Marquees(){
				if(tabs2.offsetWidth-tabs.scrollLeft<=0)
				tabs.scrollLeft=0;
				else{
					tabs.scrollLeft++;
				}
				}
				var MyMars=setInterval(Marquees,speed);
				tabs.onmouseover=function() {clearInterval(MyMars)};
				tabs.onmouseout=function() {MyMars=setInterval(Marquees,speed)};
			</script>
			</div>
<?php elseif($view->name=="notice_view") : ?>
    <div class="box_top">
         <div id="demo">
             <div id="demo1">
                 <ul class="items">
		    	     <?php foreach ($rows as $id => $row): ?>
			            <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			         <?php endforeach; ?>
                 </ul>
             </div>
             <div id="demo2"></div> 
         </div>      
    </div>
    <script type="text/javascript">
    var speeds=100;
    var tab=document.getElementById("demo");
    var tab1=document.getElementById("demo1");
    var tab2=document.getElementById("demo2");
    tab2.innerHTML=tab1.innerHTML;
    function Marquee(){
    	if(tab2.offsetHeight-tab.scrollTop<=0)
    	tab.scrollTop-=tab1.offsetHeight;
    	else{
    	tab.scrollTop++;
    	}
    	}
    var MyMar=setInterval(Marquee,speeds);
    tab.onmouseover=function() {clearInterval(MyMar)};
    tab.onmouseout=function() {MyMar=setInterval(Marquee,speeds)};
    </script>
<?php else:?>
	<?php if($view->name=="jgyw" || $view->name=="xw_view" || $view->name=="real_time_working_view"):?>
	    <?php if ($is_front):?>
	         <?php $class_name = "box1"; $ul_style="ul_style";$display_title=false; $display_bottom=true;?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
		
	<?php elseif($view->name=="gzdt_view" || $view->name=="zcfg_view" || $view->name=="xhbz_view" || $view->name=="wqzfxx_xwfb_view") : ?>
     <?php if ($is_front):?>
	         <?php $class_name = "part2"; $ul_style="ul_style";$display_title=false;$display_bottom=true; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
	    
	<?php elseif($view->name=="wshd_view") : ?>
        <?php if ($is_front):?>

	    <?php else :?>
	         <?php $has_more=false; $add_more=true;?>
	    <?php endif;?>
	
	 <?php elseif($view->name=="gsgg_view" || $view->name=="ztbxx_view" || $view->name=="qualification_view") : ?>             
        <?php if ($is_front):?>
               <?php $class_name = "part3"; $ul_style="ul_style";$display_title=false;$display_bottom=true; ?>
	    <?php else :?>
	         <?php $has_more=false; $add_more=true;?>
	    <?php endif;?>
	    
	 <?php elseif($view->name=="announcement_view" || $view->name=="huiyijiyao_view" || $view->name=="toupiao_view" || $view->name=="zhengqiuyijian_view" || $view->name=="tongzhi_view") : ?>

	    <?php if ($is_front):?>
	         <?php $class_name = "box13"; $ul_style="ul_style";?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
	    
	 <?php elseif($view->name=="bszn_qy_view" || $view->name=="bszn_jy_view" || $view->name=="bszn_xm_view"  || $view->name=="bszn_all_view") : ?>
	    <?php  $ul_style="ul_style";$display_title=false; ?>
	    
	 <?php elseif($view->name=="cwgz_view") : ?>	    

	    <?php if ($is_front):?>
	         <?php $class_name = "box5";$ul_style=""; $has_more=false; $style_name="margin-top:0px"; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
	 
	 <?php elseif($view->name=="zcfg_fl_view" || $view->name=="zcfg_xz_view" || $view->name=="zcfg_bm_view" || $view->name=="zcfg_df_view" || $view->name=="zcfg_wj_view" || $view->name=="jjws_view") : ?>	    
         <?php if(drupal_get_path_alias()=='node/'+$view->name):?>
             <?php if(drupal_get_path_alias()!='node/zcfgs'):?>
                 <?php $has_more=false;?>
             <?php endif;?>
	     <?php endif;?>
	     <?php $class_name = "pages_styles"; $style_name="margin-top:0px"; ?>
	     
	<?php elseif($view->name=="xhbz_df_view" || $view->name=="xhbz_qz_view") : ?>	    
         <?php if(drupal_get_path_alias()=='node/'+$view->name):?>
             <?php if(drupal_get_path_alias()!='node/xhbzs'):?>
                 <?php $has_more=false;?>
             <?php endif;?>
	     <?php endif;?>
	     <?php $class_name = "pages_styles"; $style_name="margin-top:0px"; ?>
	     
	<?php elseif($view->name=="wj_gwy_view" || $view->name=="wj_jjw_view" || $view->name=="wj_bw_view" || $view->name=="wj_szf_view" || $view->name=="wj_glbm_view") : ?>	    
         <?php if(drupal_get_path_alias()=='node/'+$view->name):?>
             <?php if(drupal_get_path_alias()!='node/zcfg_glwj'):?>
                 <?php $has_more=false;?>
             <?php endif;?>
	     <?php endif;?>
	     <?php $class_name = "pages_styles"; $style_name="margin-top:0px"; ?>
	
	<?php elseif($view->name=="glbm_jgb_view" || $view->name=="glbm_slzx_view" || $view->name=="glbm_scgl_view" || $view->name=="glbm_ajzz_view" ) : ?>	    
         <?php if(drupal_get_path_alias()=='node/'+$view->name):?>
             <?php if(drupal_get_path_alias()!='node/zcfg_glbm'):?>
                 <?php $has_more=false;?>
             <?php endif;?>
	     <?php endif;?>
	     <?php $class_name = "pages_styles"; $style_name="margin-top:0px"; ?>
	     
	<?php elseif($view->name=="program_files" || $view->name=="management_system_view" || $view->name=="quality_manual_view" ) : ?>	    
        
             <?php if(drupal_get_path_alias()!='node/quality_system'):?>
                 <?php $has_more=false;?>
             <?php endif;?>
	     
	     <?php $class_name = "pages_styles"; $style_name="margin-top:0px"; ?>
	     
	<?php elseif($view->name=="dqtd_view") : ?>

		<?php if ($is_front):?>
	         <?php $class_name = "box5";$ul_style="ul_style"; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>

	<?php endif;?>
	
	<div class="<?php print $class_name;?>" style="<?php print $style_name;?>">
	       <?php if($display_title): ?>
	    	<div class="title">
	    	     <?php if ($has_more): ?>
	    	        <?php if ($is_front):?>
	    	           <?php if($nbgg):?>
	    	           <?php else: ?>
	    	               <span class="more"><a href="node/<?php print $view->name?>">更多</a></span>
	    	           <?php endif;?>
	             	    
	             	<?php else:?>
	             	   <?php if($view->name=="zcfg_wj_view"):?>
	             	       <span class="more"><a href="zcfg_glwj">更多</a></span>
	             	   <?php elseif($view->name=="wj_glbm_view"):?>
	             	       <span class="more"><a href="zcfg_glbm">更多</a></span>
	             	   <?php else:?>
	             	       <span class="more"><a href="<?php print $view->name?>">更多</a></span>
	             	   <?php endif;?>
	             	<?php endif;?>
	             <?php endif;?>
	             <?php if ($add_more): ?>
	             	<span class="more"><a href="add/wshd">添加</a></span> 
	             <?php endif;?>
	             <span class="txt">
					<?php if ($view->human_name): ?>
					  	<?php print $view->human_name ?>
					<?php endif;?>
				 </span>
			</div>
			<?php endif;?>
	        <ul class="<?php print $ul_style;?>">
				 <?php foreach ($rows as $id => $row): ?>
				    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
				 <?php endforeach; ?>
	        </ul>
	        <?php if($display_bottom): ?>
	        <div class="title">
	    	     <?php if ($has_more): ?>
	    	        <?php if ($is_front):?>
	    	           <?php if($view->name=="zcfg_view"):?>
	    	               <span class="more"><a href="node/zcfgs">更多</a></span>
	    	           <?php elseif ($view->name=="xhbz_view"):?>
	    	               <span class="more"><a href="node/xhbzs">更多</a></span>
	    	           <?php else:?>
	             	       <span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
	             	   <?php endif;?>
	             	<?php else:?>
	             	   <span class="more"><a href="<?php print $view->name?>">更多</a></span>
	             	<?php endif;?>
	             <?php endif;?>
			</div>
			<?php endif;?>
	    </div>
	    
<?php endif?>
