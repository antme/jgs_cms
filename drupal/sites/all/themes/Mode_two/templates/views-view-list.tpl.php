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
$style_name=""
?>
<?php if($view->name=="slide_images_view") : ?>
    <div class="box2 ">
        <div id="demo3" class="slideBox">
            <ul class="items">
			     <?php foreach ($rows as $id => $row): ?>
			         <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			     <?php endforeach; ?>
            </ul>
       </div>        
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
	<?php if($view->name=="jgyw" || $view->name=="ztbxx_view"):?>
	
	    <?php if ($is_front):?>
	         <?php $class_name = "box1"; $ul_style="ul_style"; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
		
	<?php elseif($view->name=="gsgg_view") : ?>

	    <?php if ($is_front):?>
	         <?php $class_name = "box2"; $ul_style="ul_style"; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
	    
	<?php elseif($view->name=="gzdt_view" || $view->name=="zcfg_view") : ?>
	
	    <?php if ($is_front):?>
	         <?php $class_name = "part2"; $ul_style="ul_style"; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
	    
	 <?php elseif($view->name=="cwgz_view") : ?>	    

	    <?php if ($is_front):?>
	         <?php $class_name = "box5";$ul_style=""; $has_more=false; $style_name="margin-top:0px"; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
	    
	<?php elseif($view->name=="dqtd_view") : ?>

		<?php if ($is_front):?>
	         <?php $class_name = "box5";$ul_style=""; ?>
	    <?php else :?>
	         <?php $has_more=false; ?>
	    <?php endif;?>
	<?php endif;?>
	
	<div class="<?php print $class_name;?>" style="<?php print $style_name;?>">
	    	<div class="title">
	    	     <?php if ($has_more): ?>
	             	<span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
	             <?php endif;?>
	             
	             <span class="txt">
					<?php if ($view->human_name): ?>
					  	<?php print $view->human_name ?>
					<?php endif;?>
				 </span>
			</div>
	        <ul class="<?php print $ul_style;?>">
				<?php foreach ($rows as $id => $row): ?>
				    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
				 <?php endforeach; ?>
	        </ul>
	    </div>
	    <?php if ($pager): ?>
    <div class="pager-header">
      <?php print $pager; ?>
    </div>
<?php endif; ?>
<?php endif?>