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
		 $('.left_menu_style').find('li:first').addClass("li_action");
		 $('.left_menu_style').find('li').find("a").attr("href","##");
		 $(".comm_style").find(".region-left-f").append("<div class='block block-menu search_project'></div>");
		 var str="<div class='search_project_div menu'><input class='text_inputs' type='text' value='请输入项目报建编号'/><button class='search_btn'>查询</button></div>"+
		         "<div id='search_project_value' style='width:540px;height:auto;overflow:hidden;'></div>"
		 $(".search_project").append(str);

		 
		 $(".text_inputs").focus(function(){
			  if($(this).val()=="请输入项目报建编号"){
				  $(this).attr("value","").css("color","#000");
			  }
		  });
		 $(".search_btn").click(function(){
			 $("#search_project_value").show();
			 if($(".text_inputs").val()=="1402HK0033"){
				 create_chart(2,this,'1402HK0035','','');
				 change_height(15,15,50,50,83,'上海市第一人民医院北部放射信息综合用房装饰装修项目');
				 
				 
			 }else if($(".text_inputs").val()=="1402HK0035"){
				 create_chart(3,this,'1402HK0035','','');
				 change_height(62,62,240,240,50,"上海市第一人民医院北部放射信息综合用房装饰装修项目");
			 }else{
				 alert("请输入正确的项目报建编号！");
			 }
			 
		 });
		 function change_height(n,m,x,y,w,name){
			 $(".project_info").remove();
             var stt="<div class='project_info'>"+
                     "<div class='project_info_name'>"+
                     "<div class='bf'><div style='width:"+w+"%'></div></div>"+
                     "<span class='wc'>完成度"+w+"%</span>"+
                     "</div>"+
                     "<label class='project_time_info'>审批总时限："+n+"天，实际用时："+m+"天。<br>相对人办理预计总时间"+x+"天，实际用时："+y+"天</label>"+
                     "<div class='project_title_name'><a href='##' target='_blank'>"+name+"</a></div>"+
                     "<a class='highcharts-buttons' onclick='close_divs()'></a>"+
                     "</div>";

             $(".search_project_div").after(stt);
		     var height=$("#search_project_value").find(".highcharts-container").height()+$(".project_info").height()+153;
			 $(".bsdt").css("height",height+"px");
		 }
	  });
	  $(".left_menu_style").find("li").click(function(){
	     $('.left_menu_style').find('li').removeClass("li_action");
         $(this).addClass("li_action");

		 var int_value = $(".comm_style").find("div").find("div").find(".menu");
		 var ss_value = $(".left_menu_style").find("li").index(this);
		 var inss=$(int_value).length;
		 $(int_value).parent().hide();
		 if(ss_value>inss){
			 
		 }else{
			if(ss_value==0){
				$(".search_project").show();
				 var height=$("#search_project_value").find(".highcharts-container").height()+$(".project_info").height()+153;
				 if($("#search_project_value").is(':hidden')){
					 $(".bsdt").css("height","auto");
				 }else{
					 $(".bsdt").css("height",height+"px");
				 }
			}else{
				$(int_value[ss_value-1]).parent().show();
				 $(".bsdt").css("height","auto");
			}
		 }
	  });
	  
  </script>
</div>
</div>
