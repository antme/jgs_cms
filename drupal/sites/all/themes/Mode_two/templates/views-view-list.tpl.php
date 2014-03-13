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
	         <?php $class_name = "box5";$ul_style=""; $has_more=false; ?>
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
	
	<div class="<?php print $class_name;?>">
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
<?php endif?>