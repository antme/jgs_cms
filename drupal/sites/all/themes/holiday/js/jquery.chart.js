function create_chart(n,object){
    $("#back_div").css("height",$(document).height()+"px");
	var width=$(document).width();
	switch(n)
	{
	case 1:{
		$("#container").css({"width":"700px","height":"400px","left":(width-600)/2+"px","top":"100px"});
		$("#container").show();
		$("#back_div").show();
	    var chart = new Highcharts.Chart({
	        chart: {
	            renderTo: 'container',
	            events: {
	                load: function () {
	                    
	                    // 定义颜色和左右箭头
	                    var ren = this.renderer,
	                        colors = Highcharts.getOptions().colors,
	                        rightArrow = ['M', 0, 0, 'L', 100, 0, 'L', 95, 5, 'M', 100, 0, 'L', 95, -5],
	                        leftArrow = ['M', 100, 0, 'L', 0, 0, 'L', 5, 5, 'M', 0, 0, 'L', 5, -5];
	                        
	                    // Headers

						ren.label('项目报建 ', 10, 82)
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
						
					 ren.label('设计合同备案 ', 270, 82)
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
						
					ren.label('施工发包 ', 540, 82)
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
						
					
					ren.label('施工合同备案 ', 540, 182)
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
						
					ren.label('项目报监', 270, 182)
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
						
					ren.label('施工许可 ', 10, 182)
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
						
						
						
						//箭头
						ren.path(rightArrow)
							.attr({
								'stroke-width': 2,
								stroke: colors[2]
							})
							.translate(150, 100)
							.add();						 
					 
						ren.path(rightArrow)
							.attr({
								'stroke-width': 2,
								stroke: colors[2]
							})
							.translate(410, 100)
							.add();
				
						ren.path(leftArrow)
							.attr({
								'stroke-width': 2,
								stroke: colors[2]
							})
							.translate(410, 200)
							.add();
					 
						ren.path(leftArrow)
							.attr({
								'stroke-width': 2,
								stroke: colors[8]
							})
							.translate(150, 200)
							.add();
					 
							 
						 ren.path(['M', 605, 120, 'L', 605, 175, 'L', 600, 170, 'M', 605, 175, 'L', 610, 170])
	                         .attr({
	                             'stroke-width': 2,
	                             stroke: colors[2]
	                         })
	                         .add();
						
						

							 
							 
						//箭头文字
						 ren.label('完成度100%', 150, 75)
	                        .css({
	                            fontSize: '10px',
	                            color: colors[2]
	                        }) 
	                        .add();
							
						ren.label('完成度100%', 410, 75)
	                        .css({
	                            fontSize: '10px',
	                            color: colors[2]
	                        }) 
	                        .add();
							
						ren.label('完成度100%', 610, 135)
	                        .css({
	                            fontSize: '10px',
	                            color: colors[2]
	                        }) 
	                        .add();
							
						ren.label('完成度100%', 410, 175)
	                        .css({
	                            fontSize: '10px',
	                            color: colors[2]
	                        }) 
	                        .add();
							
						ren.label('完成度0%', 150, 175)
	                        .css({
	                            fontSize: '10px',
	                            color: colors[8]
	                        }) 
	                        .add();
							
						ren.label('审批中', 150, 205)
	                        .css({
	                            fontSize: '10px',
	                            color: colors[8]
	                        }) 
	                        .add();
	                }
	            }
	        },
	        title: {
	            text: '简易流程'
	        }
	            
	    });
	  break;
	  }
	case 2:{
		$("#container").css({"width":"700px","height":"1000px","left":(width-700)/2+"px"});
		$("#container").show();
		$("#back_div").show();
		 var chart = new Highcharts.Chart({
		        chart: {
		            renderTo: 'container',
		            events: {
		                load: function () {
		                    
		                    // D定义颜色和左右箭头
		                    var ren = this.renderer,
		                        colors = Highcharts.getOptions().colors,
		                        rightArrow = ['M', 0, 0, 'L', 100, 0, 'L', 95, 5, 'M', 100, 0, 'L', 95, -5],
								rightArrow = ['M', 0, 0, 'L', 100, 0, 'L', 95, 5, 'M', 100, 0, 'L', 95, -5],
		                        leftArrow = ['M', 100, 0, 'L', 0, 0, 'L', 5, 5, 'M', 0, 0, 'L', 5, -5];
		                        
								
		                    // Headers
		                     ren.label('项目报建 ', 10, 82)
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
								
							 ren.label('设计招标登记 ', 270, 82)
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
								
							ren.label('设计招标文件备案 ', 540, 82)
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
								
							
							ren.label('设计补充文件备案 ', 540, 182)
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
								
							ren.label('设计招投标书面报告<br>中标通知书备案 ', 270, 182)
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
								
							ren.label('设计合同备案 ', 10, 182)
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
								
							ren.label('勘察招标登记 ', 10, 282)
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
								
								
							ren.label('勘察招标文件备案 ', 270, 282)
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
								
							ren.label('勘察补充文件备案 ', 540, 282)
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
								
							ren.label('勘察招投标书面报告<br>、中标通知书备案 ', 540, 382)
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
								
							ren.label('勘察合同备案', 270, 382)
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
								
							ren.label('施工招标登记 ', 10, 382)
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
								
							ren.label('施工招标文件备案', 10, 482)
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
								
							ren.label('施工补充文件备案', 270, 482)
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
								
							ren.label('施工招投标书面报告<br>、中标通知书备案', 540, 482)
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
								
							ren.label('施工合同备案', 540, 582)
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
								
							ren.label('监理招标登记', 270, 582)
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
								
							ren.label('监理招标文件备案', 10, 582)
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
								
							ren.label('监理补充文件备案', 10, 682)
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
								
							ren.label('监理招投标书面报告<br>、中标通知书备案', 270, 682)
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
								
							ren.label('监理合同备案', 540, 682)
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
								
							ren.label('施工图审查', 540, 782)
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
								
							ren.label('项目报监', 270, 782)
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
		                        .translate(150, 100)
		                         .add();						 
								 
							ren.path(rightArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[2]
		                         })
		                        .translate(410, 100)
		                         .add();
							
							ren.path(leftArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[2]
		                         })
		                        .translate(410, 200)
		                         .add();
								 
							ren.path(leftArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[8]
		                         })
		                        .translate(150, 200)
		                         .add();
								 
							ren.path(rightArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(150, 300)
		                         .add();
								 
							ren.path(rightArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(410, 300)
		                         .add();
							
							ren.path(leftArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(410, 400)
		                         .add();
							
							ren.path(leftArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(150, 400)
		                         .add();
							
							ren.path(rightArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(150, 500)
		                         .add();
							
							ren.path(rightArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(410, 500)
		                         .add();					
							
							ren.path(leftArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(410, 600)
		                         .add();
							
							ren.path(leftArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(150, 600)
		                         .add();
							
							ren.path(rightArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(150, 700)
		                         .add();
							
							ren.path(rightArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(410, 700)
		                         .add();
							
							ren.path(leftArrow)
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                        .translate(410, 800)
		                         .add();
							
							
							 ren.path(['M', 605, 120, 'L', 605, 175, 'L', 600, 170, 'M', 605, 175, 'L', 610, 170])
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[2]
		                         })
		                         .add();
								 
							ren.path(['M', 55, 220, 'L', 55, 275, 'L', 50, 270, 'M', 55, 275, 'L', 60, 270])
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                         .add();
								 
							ren.path(['M', 605, 320, 'L', 605, 375, 'L', 600, 370, 'M', 605, 375, 'L', 610, 370])
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                         .add();
							
							ren.path(['M', 55, 420, 'L', 55, 475, 'L', 50, 470, 'M', 55, 475, 'L', 60, 470])
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                         .add();
							
							ren.path(['M', 605, 520, 'L', 605, 575, 'L', 600, 570, 'M', 605, 575, 'L', 610, 570])
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                         .add();
							
							ren.path(['M', 55, 620, 'L', 55, 675, 'L', 50, 670, 'M', 55, 675, 'L', 60, 670])
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                         .add();
							
							ren.path(['M', 605, 720, 'L', 605, 775, 'L', 600, 770, 'M', 605, 775, 'L', 610, 770])
		                         .attr({
		                             'stroke-width': 2,
		                             stroke: colors[1]
		                         })
		                         .add();
							
							
							
							
							
							//箭头文字
							ren.label('完成度100%', 150, 75)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[2]
		                        }) 
		                        .add();
								
							ren.label('完成度100%', 410, 75)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[2]
		                        }) 
		                        .add();
								
							ren.label('完成度100%', 610, 135)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[2]
		                        }) 
		                        .add();
								
							ren.label('完成度100%', 410, 175)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[2]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 150, 175)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[8]
		                        }) 
		                        .add();
								
							ren.label('审批中', 150, 205)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[8]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 60, 235)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 150, 275)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 410, 275)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 610, 335)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 410, 375)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 150, 375)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 60, 435)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();	
							
							ren.label('完成度0%', 150, 475)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 410, 475)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 610, 535)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
							
							ren.label('完成度0%', 150, 575)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 410, 575)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 60, 635)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 150, 675)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 410, 675)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 610, 735)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();
								
							ren.label('完成度0%', 410, 775)
		                        .css({
		                            fontSize: '10px',
		                            color: colors[1]
		                        }) 
		                        .add();

		                }
		            }
		        },
		        title: {
		            text: '复杂流程'
		        }
		            
		    });
	  break;
	  }
	default:
	  break;
	}
	$(".highcharts-button").find("rect").hide();
	$(".highcharts-button").find("path").hide();
	$(".highcharts-container").append("<div onclick='close_div()' style='position:absolute;right:5px;top:5px;background:url(sites/all/themes/holiday/images/close.gif);width:16px;height:16px;display:inline-block;cursor:pointer;'></div>");
	$(".highcharts-container").find("g").find("rect").attr("width","118");
	$(".highcharts-tooltip").next("text").hide();
}