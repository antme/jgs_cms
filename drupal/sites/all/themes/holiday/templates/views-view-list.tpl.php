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

    <div class="box1" style="float:right">
    	<div class="title">
              <span class="more"><a href="node/jgyw">更多>></a></span> 
             <h3>
				<?php if ($view->human_name): ?>
				  	<?php print $view->human_name ?>
				<?php endif;?>
			 </h3>
            
		</div>
        <ul>
			<?php foreach ($rows as $id => $row): ?>
			    <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
			 <?php endforeach; ?>
        </ul>
    </div>

