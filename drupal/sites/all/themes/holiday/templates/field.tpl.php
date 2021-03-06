<?php
/**

field.tpl.php Default template implementation to display the value of a field.

This file is not used and is here as a starting point for customization only.

Available variables:

    $items: An array of field values. Use render() to output them.
    $label: The item label.
    $label_hidden: Whether the label display is set to 'hidden'.
    $classes: String of classes that can be used to style contextually through CSS. It can be manipulated through the variable $classes_array from preprocess functions. The default values can be one or more of the following:

        field: The current template type, i.e., "theming hook".
        field-name-[field_name]: The current field name. For example, if the field name is "field_description" it would result in "field-name-field-description".
        field-type-[field_type]: The current field type. For example, if the field type is "text" it would result in "field-type-text".
        field-label-[label_display]: The current label position. For example, if the label position is "above" it would result in "field-label-above".

Other variables:

    $element['#object']: The entity to which the field is attached.
    $element['#view_mode']: View mode, e.g. 'full', 'teaser'...
    $element['#field_name']: The field name.
    $element['#field_type']: The field type.
    $element['#field_language']: The field language.
    $element['#field_translatable']: Whether the field is translatable or not.
    $element['#label_display']: Position of label display, inline, above, or hidden.
    $field_name_css: The css-compatible field name.
    $field_type_css: The css-compatible field type.
    $classes_array: Array of html class attribute values. It is flattened into a string within the variable $classes.

 * 
 */

?>

	<?php if ($element["#bundle"] == "cwgz" && $element['#field_name']=="field_face_view"):?>	
	   	 <?php foreach ($items as $id => $item): ?>	   	 
	   	 	    <?php $value = $item["#markup"];?>
	   	 	    <?php if($is_front):?>	 	 	    
	   	 	    	<?php if ($value == "笑脸"):?>
	   	 	    		<span><img style='vertical-align:middle' width="24px" height="24px" src="/sites/all/themes/holiday/images/xiao.gif" /></span>
	   	 	    	<?php else:?>
	   	 	      	    <span><img style='vertical-align:middle' width="24px" height="24px" src="/sites/all/themes/holiday/images/ku.gif" /></span>
	   	 	    	<?php endif;?>
	   	 	    <?php endif;?>
	   	 <?php endforeach;?>
	
	<?php else:?>		
		  	 <?php foreach ($items as $id => $item): ?>	 
		  	 		<?php print $item["#markup"];?>
		  	 <?php endforeach;?>
	<?php endif;?>
	
	<?php if ($element["#bundle"] == "xhbz" && $element['#field_name']=="field_download_file"):?>	
	     <?php $value = $item["#markup"];?>
	   	 <?php foreach ($items as $id => $item): ?>	   	 
	   	 	    <a class="download" href="<?php print $value;?>">下载附件</a>
	   	 <?php endforeach;?>

	<?php endif;?>
	
	<?php if ($element["#bundle"] == "dqtd" && $element['#field_name']=="field_attachment"):?>	
	     <?php $value = $item["#markup"];?>
	   	 <?php foreach ($items as $id => $item): ?>	
	   	    	<?php if($value):?>
	   	 	     <div id="FlashFile"> 
					<object width="500px" height="330px" style="z-index:9999" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" data="/sites/all/themes/holiday/images/flvplayer.swf?file=<?php print $value;?>" >
						<param name="movie" value="/sites/all/themes/holiday/images/flvplayer.swf?file=<?php print $value;?>" /> 
						<param name="quality" value="high" />
						<param name="allowFullScreen" value="true" />
						<param name="FlashVars" value="vcastr_file=<?php print $value;?>" />
						<embed src="/sites/all/themes/holiday/images/flvplayer.swf?file=<?php print $value;?>" allowfullscreen="true" flashvars="vcastr_file=test.flv" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="500" height="330"></embed>
					</object>
				</div>
				
				<?php endif;?>
	   	 <?php endforeach;?>

	<?php endif;?>