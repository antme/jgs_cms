var current_node=5;
var ds,dss,dsss,dsd;
function create_chart(n,object,name,nub,ncolor){
    $("#back_div").css("height",$(document).height()+"px");
	var width=$(document).width();
	
	var arry_titles_op=['审批:1天,实际:1天','预计:10天,实际:10天','审批:13天,实际:13天','预计:48天,实际:48天','审批:1天,实际:1天','预计:10天,实际:10天'];
	
	var arry_project_name=[{name:'项目报建',child:''},{name:'设计合同备案',child:''},{name:'施工发包',child:''},{name:'施工合同备案',child:''},{name:'项目报监',child:''},{name:'施工许可',child:''}];
	var arry_title=['审批:1天,实际:1天','预计:10天,实际:10天','审批:1天,实际:1天','预计:10天,实际:10天','审批:6天,实际:6天','预计:10天,实际:10天','审批:1天,实际:1天','预计:10天,实际:10天','审批:1天,审批中','预计:10天'];
	
	var arry_project_names=[{name:'项目报建',child:''},{name:'设计发包',child:'0'},{name:'设计合同备案',child:''},{name:'勘察发包',child:'1'},{name:'勘察合同备案',child:''},{name:'施工发包',child:'2'},{name:'施工合同备案',child:''},{name:'监理发包',child:'3'},{name:'监理合同备案',child:''},{name:'施工图审查',child:''},{name:'项目报监',child:''},{name:'施工许可',child:''}];
	var arry_titles=['审批:1天,实际:1天','预计:10天,实际:10天','审批:13天,实际:13天','预计:48天,实际:48天','审批:1天,实际:1天','预计:10天,实际:10天','审批:13天,实际:13天','预计:48天,实际:48天','审批:1天,审批中','预计:10天','审批:13天,实际:13天','预计:53天,实际53天','审批:1天','预计:10天','审批:13天','预计:48天','审批:1天','预计:10天','审批:20天','预计:10天','审批:1天,实际:1天','预计:10天,实际:10天'];
	
	var arry_names=['设计发包流程','勘察发包流程','施工发包流程','监理发包流程'];
	var arry_fb=[{name:'设计招标登记',child:""},{name:"设计招标文件备案",child:""},{name:"设计招标文件备案",child:""},{name:"设计招投标书面报告<br>中标通知书备案",child:""}];
	var arry_kc=[{name:'勘察招标登记',child:""},{name:"勘察招标文件备案",child:''},{name:"勘察补充文件备案",child:''},{name:"勘察招投标书面报告<br>中标通知书备案",child:''}];
	var arry_sg=[{name:'施工招标登记',child:""},{name:"施工招标文件备案",child:''},{name:"施工补充文件备案",child:''},{name:"施工招投标书面报告<br>中标通知书备案",child:''}];
	var arry_jl=[{name:'监理招标登记',child:""},{name:"监理招标文件备案",child:''},{name:"监理补充文件备案",child:''},{name:"监理招投标书面报告<br>中标通知书备案",child:''}];
	
	//弹出层
	var add=0;
	var Arrow_down_right;
    var Arrow_down_left;
    
	var arry_simple=[{x:10,y:82},{x:270,y:82},{x:540,y:82},{x:540,y:182},{x:270,y:182},{x:10,y:182},{x:10,y:282},{x:270,y:282},{x:540,y:282},{x:540,y:382},{x:270,y:382},{x:10,y:382}];
	var arry_Arrow=[{x:150,y:100},{x:410,y:100},{x:0,y:0},{x:410,y:200},{x:150,y:200},{x:0,y:0},{x:150,y:300},{x:410,y:300},{x:0,y:0},{x:410,y:400},{x:150,y:400}];
	var arry_title_location=[{x:150,y:75},{x:150,y:105},{x:410,y:75},{x:410,y:105},{x:590,y:135},{x:590,y:145},{x:150,y:175},{x:150,y:205},{x:410,y:175},{x:410,y:205}];
	
	//查询层
	var arry_label_location=[{x:0,y:42},{x:180,y:42},{x:360,y:42},{x:360,y:142},{x:180,y:142},{x:0,y:142},{x:0,y:242},{x:180,y:242},{x:360,y:242},{x:360,y:342},{x:180,y:342},{x:0,y:342}];
	var arry_Arrow_location=[{x:100,y:60},{x:280,y:60},{x:0,y:0},{x:280,y:160},{x:100,y:160},{x:0,y:0},{x:100,y:260},{x:280,y:260},{x:0,y:0},{x:280,y:360},{x:100,y:360},{x:0,y:0},{x:100,y:460},{x:280,y:460}];
	var arry_title_locations=[{x:90,y:25},{x:90,y:75},{x:270,y:25},{x:270,y:75},{x:410,y:95},{x:410,y:105},{x:270,y:125},{x:270,y:175},{x:90,y:125},{x:90,y:175},{x:45,y:195},{x:45,y:205},{x:90,y:225},{x:90,y:275},{x:270,y:225},{x:270,y:275},{x:410,y:295},{x:410,y:305},{x:270,y:325},{x:270,y:375},{x:90,y:325},{x:90,y:375}];
	
	
    
	switch(n)
	{ 
	case 1:{
		$("#back_div").show();
		$("#container").show();
		width=(width-700)/2;
		$("#container").css({"width":"700px","height":"300px","left":width+"px","top":$(object).offset().top+"px"});
	    var chart = new Highcharts.Chart({
	        chart: {
	            renderTo: 'container',
	            events: {
	                load: function () {
	                    
	                    // 定义颜色和左右箭头 
	                    var ren = this.renderer,
	                        colors = Highcharts.getOptions().colors;
	                    var rightArrow = ['M', 0, 0, 'L', 100, 0, 'L', 95, 5, 'M', 100, 0, 'L', 95, -5];
	                    var leftArrow = ['M', 100, 0, 'L', 0, 0, 'L', 5, 5, 'M', 0, 0, 'L', 5, -5];
	                        
                        //定义项目流程
	                    
	                    for(var i=0;i<nub.length;i++){
	                    	ren.label(nub[i].name, arry_simple[i].x, arry_simple[i].y).attr({fill: ncolor,stroke: 'white','stroke-width': 2,padding: 10,r: 5}).css({color: 'white',}).add().shadow(true);
	                    }
                        
	                    //定义箭头
						for(var i=0;i<nub.length-1;i++){
							if((i+1)%3==0){
								if(i%3==2){
									Arrow_down_right=['M', 585, 120+add*100, 'L', 585, 175+add*100, 'L', 580, 170+add*100, 'M', 585, 175+add*100, 'L', 590, 170+add*100];
									ren.path(Arrow_down_right).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).add();
								}else{
									Arrow_down_left=['M', 55, 120+add*100, 'L', 55, 175+add*100, 'L', 50, 170+add*100, 'M', 55, 175+add*100, 'L', 60, 170+add*100];
									ren.path(Arrow_down_left).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).add();
								}
								
							}else{
								if((parseInt(i/3)%2)==0){
									ren.path(rightArrow).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).translate(arry_Arrow[i].x, arry_Arrow[i].y).add();
								}else{
									ren.path(leftArrow).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).translate(arry_Arrow[i].x, arry_Arrow[i].y).add();
								}
								
							}
						}
						//定义说明文字
						for(var i=0;i<arry_titles_op.length;i++){
							ren.label(arry_titles_op[i], arry_title_location[i].x,arry_title_location[i].y).css({fontSize: '10px',color: colors[2]}) .add();
						}
	                }
	            }
	        },
	        title: {
	            text: name
	        }
	            
	    });
	    $("#container").find(".highcharts-container").find("g").find("rect").attr("width","120");
	    break;
	  }
	
	case 2:{
		$("#search_project_value").css({"width":"540px","height":"300px"});
	    var chart = new Highcharts.Chart({
	        chart: {
	            renderTo: 'search_project_value',
	            events: {
	                load: function () {
	                    
	                    // 定义颜色和左右箭头
	                    var ren = this.renderer,
	                        colors = Highcharts.getOptions().colors,
	                        rightArrow = ['M', 0, 0, 'L', 70, 0, 'L', 65, 5, 'M', 70, 0, 'L', 65, -5],
	                        leftArrow = ['M', 70, 0, 'L', 0, 0, 'L', 5, 5, 'M', 0, 0, 'L', 5, -5];
	                        
	                    //定义项目流程
	                    for(var i=0;i<arry_project_name.length;i++){
	                    	if(arry_project_name[i].child!=''){
	                    		ren.label(arry_project_name[i].name+'(*)', arry_label_location[i].x, arry_label_location[i].y).attr({fill: add_color(current_node,i),stroke: 'white','stroke-width': 2,padding: 10,r: 5}).on('click',function(){create_chart(1,this);}).css({color: 'white',cursor: 'pointer'}).add().shadow(true);
	                    	}else{
	                    		ren.label(arry_project_name[i].name, arry_label_location[i].x, arry_label_location[i].y).attr({fill: add_color(current_node,i),stroke: 'white','stroke-width': 2,padding: 10,r: 5}).css({color: 'white',}).add().shadow(true);
	                    	}
	                    }
	                    
	                    //定义箭头
						for(var i=0;i<arry_project_name.length-1;i++){
							if((i+1)%3==0){
								add=parseInt(i/3);
								if(i%3==2){
									Arrow_down_right=['M', 405, 85+add*100, 'L', 405, 135+add*100, 'L', 400, 130+add*100, 'M', 405, 135+add*100, 'L', 410, 130+add*100];
									ren.path(Arrow_down_right).attr({'stroke-width': 2,stroke: colors[2]}).add();
								}else{
									Arrow_down_left=['M', 40, 85+add*100, 'L', 40, 135+add*100, 'L', 35, 130+add*100, 'M', 40, 135+add*100, 'L', 45, 130+add*100];
									ren.path(Arrow_down_left).attr({'stroke-width': 2,stroke: colors[2]}).add();
								}
								
							}else{
								if((parseInt(i/3)%2)==0){
									ren.path(rightArrow).attr({'stroke-width': 2,stroke: colors[2]}).translate(arry_Arrow_location[i].x, arry_Arrow_location[i].y).add();
								}else{
									ren.path(leftArrow).attr({'stroke-width': 2,stroke: colors[2]}).translate(arry_Arrow_location[i].x, arry_Arrow_location[i].y).add();
								}
								
							}
						}
	                    
						
						//定义说明文字
						for(var i=0;i<arry_title.length;i++){
							ren.label(arry_title[i], arry_title_locations[i].x,arry_title_locations[i].y).css({fontSize: '10px',color: colors[2]}) .add();
						}
						
	                }
	            }
	        },
	        title: {
	            text: name
	        }
	            
	    });
	    $(".highcharts-container").find("g").find("rect").attr("width","88");
	    break;
	  }
	
case 3:{
	$("#search_project_value").css({"width":"540px","height":"450px"});
	    var chart = new Highcharts.Chart({
	        chart: {
	            renderTo: 'search_project_value',
	            events: {
	                load: function () {
	                    
	                    // 定义颜色和左右箭头
	                    var ren = this.renderer,
	                        colors = Highcharts.getOptions().colors,
	                        rightArrow = ['M', 0, 0, 'L', 70, 0, 'L', 65, 5, 'M', 70, 0, 'L', 65, -5],
	                        leftArrow = ['M', 70, 0, 'L', 0, 0, 'L', 5, 5, 'M', 0, 0, 'L', 5, -5];
	                        
	                    // Headers

	                    //定义项目流程
	                    for(var i=0;i<arry_project_names.length;i++){
	                    	if(arry_project_names[i].child!=''){
	                    		if(arry_project_names[i].child=='0'){
	                    			ds = add_color_s(current_node,i);
	                    			ren.label(arry_project_names[i].name+"(*)", arry_label_location[i].x, arry_label_location[i].y).attr({fill: add_color(current_node,i),stroke: 'white','stroke-width': 2,padding: 10,r: 5}).on('click',function(){create_chart(1,this,arry_names[0],arry_fb,ds);}).css({color: 'white',cursor:'pointer'}).add().shadow(true);
	                    		}
	                    		if(arry_project_names[i].child=='1'){
	                    			dss = add_color_s(current_node,i);
	                    			ren.label(arry_project_names[i].name+"(*)", arry_label_location[i].x, arry_label_location[i].y).attr({fill: add_color(current_node,i),stroke: 'white','stroke-width': 2,padding: 10,r: 5}).on('click',function(){create_chart(1,this,arry_names[1],arry_kc,dss);}).css({color: 'white',cursor:'pointer'}).add().shadow(true);
	                    		}
	                    		if(arry_project_names[i].child=='2'){
	                    			dsss = add_color_s(current_node,i);
	                    			ren.label(arry_project_names[i].name+"(*)", arry_label_location[i].x, arry_label_location[i].y).attr({fill: add_color(current_node,i),stroke: 'white','stroke-width': 2,padding: 10,r: 5}).on('click',function(){create_chart(1,this,arry_names[2],arry_sg,dsss);}).css({color: 'white',cursor:'pointer'}).add().shadow(true);
	                    		}
	                    		if(arry_project_names[i].child=='3'){
	                    			dsd = add_color_s(current_node,i);
	                    			ren.label(arry_project_names[i].name+"(*)", arry_label_location[i].x, arry_label_location[i].y).attr({fill: add_color(current_node,i),stroke: 'white','stroke-width': 2,padding: 10,r: 5}).on('click',function(){create_chart(1,this,arry_names[3],arry_jl,dsd);}).css({color: 'white',cursor:'pointer'}).add().shadow(true);
	                    		}
	                    	}else{
	                    		ren.label(arry_project_names[i].name, arry_label_location[i].x, arry_label_location[i].y).attr({fill: add_color(current_node,i),stroke: 'white','stroke-width': 2,padding: 10,r: 5}).css({color: 'white',}).add().shadow(true);
	                    	}
	                    }
	                    
	                  //定义箭头
						for(var i=0;i<arry_project_names.length-1;i++){
							if((i+1)%3==0){
								add=parseInt(i/3);
								if(i%2==0){
									Arrow_down_right=['M', 405, 85+add*100, 'L', 405, 135+add*100, 'L', 400, 130+add*100, 'M', 405, 135+add*100, 'L', 410, 130+add*100];
									ren.path(Arrow_down_right).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).add();
								}else{
									Arrow_down_left=['M', 40, 85+add*100, 'L', 40, 135+add*100, 'L', 35, 130+add*100, 'M', 40, 135+add*100, 'L', 45, 130+add*100];
									ren.path(Arrow_down_left).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).add();
								}
								
								
							}else{
								if((parseInt(i/3)%2)==0){
									ren.path(rightArrow).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).translate(arry_Arrow_location[i].x, arry_Arrow_location[i].y).add();
								}else{
									ren.path(leftArrow).attr({'stroke-width': 2,stroke: add_color(current_node,i)}).translate(arry_Arrow_location[i].x, arry_Arrow_location[i].y).add();
								}
								
							}
						}
					
						//定义说明文字
						for(var i=0;i<arry_titles.length;i++){
							ren.label(arry_titles[i], arry_title_locations[i].x,arry_title_locations[i].y).css({fontSize: '10px',color: add_color_font(current_node,i)}) .add();
						}
	                }
	            }
	        },
	        title: {
	            text: name
	        }
	            
	    });
	    $(".highcharts-container").find("g").find("rect").attr("width","88");
	    break;
	  }
	default:
	  break;
	}
	$(".highcharts-button").find("rect").hide();
	$(".highcharts-button").find("path").hide();
	$("#container").find(".highcharts-container").append("<a class='highcharts-buttons' onclick='close_div()'></a>");
	$("#search_project_value").find(".highcharts-container").append("<a class='highcharts-buttons' onclick='close_divs()'></a>");
	
	$(".highcharts-tooltip").next("text").hide();
}

function add_color(n,i){
	if(i<=n){
		if(i<n){
			return '#8bbc21';
		}else{
			
			return '#f28f43';
		}
	}
	if(i>n){
		return '#bab6b3';
	}
}

function add_color_s(n,i){
	if(i<n){
		return '#8bbc21';
	}else if(i>n){
		return '#bab6b3';
	}
}

function add_color_font(n,i){
	if(i<(2*n)){
		return '#8bbc21';
	}
	if(i>=(2*n)){
		if((2*n)==i || (2*n+1)==i){
			return '#f28f43';
		}else{
			return '#bab6b3';
		}
	}
}