<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="<?php print $block_html_id; ?>" class=""<?php print $attributes; ?>>
<div class="fwdt">
  <div class="left_menu_style">
      <?php print theme('links', array('links' => menu_navigation_links('menu-fwdt-menu'))); ?> 
  </div>
  <script>
	  $(document).ready(function(){
	     var int_value = $(".comm_style").find("div").find("div").find(".menu");
		 $(int_value).parent().hide();
		 $(int_value[0]).parent().show();
		 $('.left_menu_style').find('li:first').css("background-color","#e6fafe");
		 $('.left_menu_style').find('li:first').find("a").addClass("color_red");
	  });
	  $(".left_menu_style").find("li").mouseover(function(){
	     $(".left_menu_style").find("li").find("a").removeClass("color_red");
	     $(".left_menu_style").find("li").css("background-color","transparent");
	     $(this).css("background-color","#e6fafe");
		 $(this).find("a").addClass("color_red");
		 var int_value = $(".comm_style").find("div").find("div").find(".menu");
		 var ss_value = $(".left_menu_style").find("li").index(this);
		 var inss=$(int_value).length;
		 $(int_value).parent().hide();
		 if(ss_value>inss){
		 }else{
		    $(int_value[ss_value]).parent().show();
		 }
		 
	  });;
  </script>
</div>
</div>
