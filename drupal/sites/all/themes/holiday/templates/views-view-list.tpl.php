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
?>
<?php if($view->name=="slide_images_view") : ?>
    <?php if($user->uid): ?>
   
    <?php else: ?>
        <div class="box2 ">
        <div id="demo3" class="slideBox">
            <ul class="items">
			     <?php foreach ($rows as $id => $row): ?>
			         <li title="" class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			     <?php endforeach; ?>
            </ul>
       </div>        
    </div>
    <?php endif;?>	    
	    
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
	<?php if($view->name=="jgyw"):?>
	
	    <?php if ($is_front):?>
	         <?php $class_name = "box1"; $ul_style="ul_style"; ?>
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

             <?php $class_name = "part3"; $ul_style="ul_style";$display_title=false;$display_bottom=true; ?>

	 <?php elseif($view->name=="announcement_view") : ?>

	    <?php if ($is_front):?>
	         <?php $class_name = "box3"; $ul_style="ul_style"; ?>
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
	             	<span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
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
	             	<span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
	             <?php endif;?>
			</div>
			<?php endif;?>
	    </div>
	    
<?php endif?>
