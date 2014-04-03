<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>


<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
   <h2<?php print $title_attributes; ?>>
      <?php print $title; ?>
    </h2>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>
  <div class="content clearfix"<?php print $content_attributes; ?>>
     <div id="container" style="width: 600px; height: 500px; margin: 0 auto"></div>
     <script>
		    $(function () {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            events: {
                load: function () {
                    
                    // D定义颜色和左右箭头
                    var ren = this.renderer,
                        colors = Highcharts.getOptions().colors,
                        rightArrow = ['M', 0, 0, 'L', 100, 0, 'L', 95, 5, 'M', 100, 0, 'L', 95, -5],
                        leftArrow = ['M', 100, 0, 'L', 0, 0, 'L', 5, 5, 'M', 0, 0, 'L', 5, -5];
                        
                    // Headers
                     ren.label('前期手续 ', 10, 82)
                        .attr({
                            fill: colors[2],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					 ren.label('申领规划许可证 ', 210, 82)
                        .attr({
                            fill: colors[2],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					ren.label('施工图审查 ', 450, 82)
                        .attr({
                            fill: colors[2],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					
					ren.label('工程项目招投标 ', 450, 182)
                        .attr({
                            fill: colors[2],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					ren.label('缴纳有关费用 ', 210, 182)
                        .attr({
                            fill: colors[2],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					ren.label('安全报监 ', 10, 182)
                        .attr({
                            fill: colors[8],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					ren.label('质量监督 ', 10, 282)
                        .attr({
                            fill: colors[0],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
						
					ren.label('施工许可证 ', 210, 282)
                        .attr({
                            fill: colors[0],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					ren.label('工程项目开工 ', 450, 282)
                        .attr({
                            fill: colors[0],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
					ren.label('竣工验收备案 ', 450, 382)
                        .attr({
                            fill: colors[0],
                            stroke: 'white',
                            'stroke-width': 2,
                            padding: 10,
                            r: 5
                        })
                        .css({
                            color: 'white'
                        })
                        .add()
                        .shadow(true);
						
						
						
					//箭头
					ren.path(rightArrow)
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[2]
                         })
                        .translate(95, 100)
                         .add();
						 
						 
					ren.path(leftArrow)
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[2]
                         })
                        .translate(95, 110)
                         .add();
						 
					ren.path(['M', 235, 180, 'L', 235, 155, 'C', 235, 130, 235, 130, 435, 130, 'M', 435, 130,'L', 430, 125,
                               'M', 430, 135, 'L', 435, 130])
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[3]
                         })
                         .add();
						 
					ren.path(rightArrow)
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[2]
                         })
                        .translate(335, 100)
                         .add();
						 
					 ren.path(['M', 485, 120, 'L', 485, 175, 'L', 480, 170, 'M', 485, 175, 'L', 490, 170])
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[2]
                         })
                         .add();
					
					ren.path(leftArrow)
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[2]
                         })
                        .translate(335, 200)
                         .add();
						 
					ren.path(leftArrow)
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[8]
                         })
                        .translate(95, 200)
                         .add();
						 
					ren.path(rightArrow)
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[1]
                         })
                        .translate(95, 300)
                         .add();
						 
					ren.path(rightArrow)
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[1]
                         })
                        .translate(335, 300)
                         .add();
						 
					ren.path(['M', 45, 220, 'L', 45, 275, 'L', 40, 270, 'M', 45, 275, 'L', 50, 270])
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[1]
                         })
                         .add();
						 
					ren.path(['M', 485, 320, 'L', 485, 375, 'L', 480, 370, 'M', 485, 375, 'L', 490, 370])
                         .attr({
                             'stroke-width': 2,
                             stroke: colors[1]
                         })
                         .add();
						 
						 
					//箭头文字
					ren.label('完成度100%', 90, 75)
                        .css({
                            fontSize: '10px',
                            color: colors[2]
                        }) 
                        .add();
						
					ren.label('完成度100%', 330, 75)
                        .css({
                            fontSize: '10px',
                            color: colors[2]
                        }) 
                        .add();
						
					ren.label('完成度100%', 490, 135)
                        .css({
                            fontSize: '10px',
                            color: colors[2]
                        }) 
                        .add();
						
					ren.label('完成度100%', 330, 175)
                        .css({
                            fontSize: '10px',
                            color: colors[2]
                        }) 
                        .add();
						
					ren.label('完成度0%', 90, 175)
                        .css({
                            fontSize: '10px',
                            color: colors[8]
                        }) 
                        .add();
						
					ren.label('完成度0%', 50, 235)
                        .css({
                            fontSize: '10px',
                            color: colors[1]
                        }) 
                        .add();
						
					ren.label('完成度0%', 90, 275)
                        .css({
                            fontSize: '10px',
                            color: colors[1]
                        }) 
                        .add();
						
					ren.label('完成度0%', 330, 275)
                        .css({
                            fontSize: '10px',
                            color: colors[1]
                        }) 
                        .add();
						
					ren.label('完成度0%', 490, 335)
                        .css({
                            fontSize: '10px',
                            color: colors[1]
                        }) 
                        .add();

                }
            }
        },
        title: {
            text: '项目基本流程'
        }
            
    });
});
		</script>
  </div>


  <?php print render($content['comments']); ?>

</div>
