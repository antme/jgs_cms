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

   
<?php if($view->name=="jgyw"):?>
     <div class="box1">
    	<div class="title">
             <span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
             <span class="txt">
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </span>
		</div>
        <ul class="ul_style">
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>
<?php elseif($view->name=="slide_images_view") : ?>
    <div class="box2 ">
        <div id="demo3" class="slideBox">
            <ul class="items">
			     <?php foreach ($rows as $id => $row): ?>
			         <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			     <?php endforeach; ?>
            </ul>
        </div>
        
    </div>
<?php elseif($view->name=="gsgg_view") : ?>
    <div class="box2 ">
    	<div class="title">
              <span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
             <span class="txt">
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </span>
		</div>
        <ul class="ul_style">
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>
<?php elseif($view->name=="ztbxx_view") : ?>
    <div class="box1">
    	<div class="title">
              <span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
             <span class="txt">
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </span>
		</div>
        <ul class="ul_style">
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>
<?php elseif($view->name=="gzdt_view") : ?>
    <div class="part2" style="margin-top:10px;">
    	<div class="title">
              <span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
             <span class="txt">
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </span>
		</div>
        <ul class="ul_style">
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>
 <?php elseif($view->name=="zcfg_view") : ?>
    <div class="part2" style="margin-top:10px;">
    	<div class="title">
              <span class="more"><a href="node/<?php print $view->name?>">更多</a></span> 
             <span class="txt">
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </span>
		</div>
        <ul class="ul_style">
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>
 <?php elseif($view->name=="cwgz_view") : ?>
    <div class="box5">
    	<div class="title">
    	     
             <span class="txt">
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </span>
		</div>
        <ul >
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>
<?php elseif($view->name=="dqtd_view") : ?>
    <div class="box5">
    	<div class="title">
    	     <span class="more"><a href="node/<?php print $view->name?>">更多</a></span>
             <span class="txt">
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </span>
		</div>
        <ul>
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>
<?php endif;?>
