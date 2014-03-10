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
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content header_style"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</div>
<style>
.header_style{
   display:none;
}
#page{
  background:url(/sites/all/themes/holiday/images/bg.jpg) repeat-x;
}
#header div.section{
  background:url(/sites/all/themes/holiday/images/back.jpg) no-repeat;
  min-height:200px;
}
.part2 .title{
  background: url("/sites/all/themes/holiday/images/titlebg2.jpg") repeat-x scroll 0 0 rgba(0, 0, 0, 0);
}
.box1 .title{
  background: url("/sites/all/themes/holiday/images/titlebg2.jpg") repeat-x scroll 0 0 rgba(0, 0, 0, 0);
}
.box5 .title{
  background: url("/sites/all/themes/holiday/images/titlebg2.jpg") repeat-x scroll 0 0 rgba(0, 0, 0, 0);
}
.box5 h1{
  background: url("/sites/all/themes/holiday/images/titlebg2.jpg") repeat-x scroll 0 0 rgba(0, 0, 0, 0);
}
#main-menu-links{
  background:url(/sites/all/themes/holiday/images/menu-c.jpg) repeat-x;
}
#main-menu-links li{
  background:url(/sites/all/themes/holiday/images/menu-s.jpg) no-repeat left 0px;
}
#footer {
  border-top:2px solid #A81400;
  background: #eee;
}
</style>