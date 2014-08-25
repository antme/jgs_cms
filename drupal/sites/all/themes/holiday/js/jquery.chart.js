var pro_number;
//流程显示入口     报建编号判断
function show_project(){
	var url ='/sites/all/themes/holiday/project_info.php';
	$.ajax({
		type:'post',
		url:url,
		data:{
			"bjbh": pro_number,
		},
		success:function(data){
			if(data){
				var proData=data;
				proData = JSON.parse(proData);
				loading_projec_data(proData);
				display_div();
			}else{
				alert("请输入正确的报建编号！");
			}
							
		},
		error: function(jqXHR, data) {
			alert("网络异常！");
		}
	   });
	
}

//流程显示
function display_div(){
	$("#container").show();
	$("#back_div").show();
	var marginheight=$(".search_project").offset().top-200;
	var slHeight=document.body.scrollHeight;
	$("#container").css("top",marginheight+"px");
	$("#back_div").css("height",slHeight+"px");
}

//项目信息加载
function loading_projec_data(data){
	$(".project_info").find("#project_info_name").text(data.projectName);
	$(".project_info").find("#project_info_number").text(data.bjbh);
	$(".project_info").find("#project_info_address").text(data.buildAddress);
	$(".project_info").find("#project_info_unit").text(data.buildUnitName);
	$(".project_info").find("#total_Investment").text(data.totalInvestment+"万元");
	process_judge(data);
}
																						
//流程判断开始
function process_judge(data){
	BJ_judge(data.bjAction);
	st_process_judge(data.sgt);
	xmbj_process_judge(data.xmbj);
	sgxk_process_judge(data.sgxk);
	
}

function BJ_judge(data){
	if(data.complete){
		$(".bj").addClass("project_wc");
	}else{
		$(".bj").addClass("project_bx");
	}
	$(".bj").click(function(){
		$("#list_info").find("li").remove();
		for(var i=0;i<data.child.length;i++){
			var str="<li>受理操作："+data.child[i].name+"&nbsp;&nbsp;&nbsp;&nbsp;原因：<label style='width:65px;display:inline-block;'>"+data.child[i].results+"</label>&nbsp;&nbsp;&nbsp;&nbsp;时间："+data.child[i].time+"</li>";
			$("#list_info").append(str);
		}
		$("#list_info").show();
		$(".list_info").hide();
		$(".lc-two").hide();
		$(".lc-three").hide();
		$(".zjd").hide();
	});
}

function load_sl_data(data){
	if(data){
		var url ='/sites/all/themes/holiday/project_node.php';
		$.ajax({
			type:'post',
			url:url,
			data:{
				"bizCode": data.bizCode,
				"bidMethod": data.bidMethod,
				"childId": data.childId
			},
			success:function(data){
				if(data){
					$("#list_info").find("li").remove();
					var proData=JSON.parse(data);
					for(var i=0;i<proData[0].child.length;i++){
						var str="<li>受理操作："+proData[0].child[i].name+"&nbsp;&nbsp;&nbsp;&nbsp;原因：<label style='width:65px;display:inline-block;'>"+proData[0].child[i].results+"</label>&nbsp;&nbsp;&nbsp;&nbsp;时间："+proData[0].child[i].time+"</li>";
						$("#list_info").append(str);
					}
					$("#list_info").show();
				}			
			},
			error: function(jqXHR, data) {
				alert("网络异常！");
			}
		});
	}
}


//加载发包节点数据
function load_node_data(data){
	console.log(data);
	$(".zjd").find("li").remove();
	$(".zjd").show();
	if(data){
		var url ='/sites/all/themes/holiday/project_node.php';
		$.ajax({
			type:'post',
			url:url,
			data:{
				"bizCode": data.bizCode,
				"bidMethod": data.bidMethod,
				"childId": data.childId
			},
			success:function(data){
				if(data){
					var proData=JSON.parse(data);
					node_info=proData;
					var completeclass;
					var str
					for(var i=0;i<proData.length;i++){
						if(proData[i].need){
							completeclass="project_bx";
						}else{
							completeclass="project_fbx";
						}
						if(proData[i].complete){
							completeclass="project_wc";
						}
						if(i<proData.length-1){
							str="<li><div class='"+completeclass+"' onclick='showNodeCZ(this)' >"+proData[i].childName+"</div></li><li><div class='down_img'></div></li>";
						}else{
							str="<li><div class='"+completeclass+"' onclick='showNodeCZ(this)' >"+proData[i].childName+"</div></li>";
						}
						$(".zjd").append(str);
					}
				}			
			},
			error: function(jqXHR, data) {
				alert("网络异常！");
			}
		});
	}
}


//加载发包节点受理操作
var node_info;
function showNodeCZ(obj){
	var texts=$(obj).text();
	for(var i=0;i<node_info.length;i++){
		if(texts==node_info[i].childName){
			showNode(node_info[i].child);
		}
	}
}

function showNode(data){
	$("#list_info").find("li").remove();
	for(var i=0;i<data.length;i++){
		var str="<li>受理操作："+data[i].name+"&nbsp;&nbsp;&nbsp;&nbsp;原因：<label style='width:65px;display:inline-block;'>"+data[i].results+"</label>&nbsp;&nbsp;&nbsp;&nbsp;时间："+data[i].time+"</li>";
		$("#list_info").append(str);
	}
	$("#list_info").show();
}


//判断承发包一级节点是否完成
function add_fb_data(data){
	$(".list_info").find(".adddata").remove();
	$(".zjd").hide();
	for(var i=0;i<data.children.length;i++){
		if(data.type=="SJ_BA" || data.type=="JL_BA" || data.type=="KC_BA" || data.type=="SG_BA"){
			var da_sl=JSON.stringify(data.children[i]);
			var str="<li class='adddata' bidMethod='"+data.bidMethod+"'><span class='list_info_left' onclick='load_sl_data("+da_sl+")'><a>"+data.children[i].childName+"</a></span><span class='list_info_right'>"+data.children[i].childTime+"</span></li>";
		}else{
			var da_sl=JSON.stringify(data.children[i]);
			var str="<li class='adddata' bidMethod='"+data.bidMethod+"'><span class='list_info_left' onclick='load_node_data("+da_sl+")'><a>"+data.children[i].childName+"</a></span><span class='list_info_right'>"+data.children[i].childTime+"</span></li>";
		}
		
		$(".list_info").append(str);
	}
	$(".list_info").show();
	$("#list_info").hide();
}

//设计发包判断
function sj_process_judge(data){
	if(data.need){
		$(".sjfb").addClass("project_bx");
	}else{
		$(".sjfb").addClass("project_fbx");
	}
	if(data.complete){
		$(".sjfb").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".sjfb").click(function(){
		if(data.children.lengt!=0){
			add_fb_data(data);
		}
	});
}



//勘擦发包判断
function kc_process_judge(data){
	if(data.need){
		$(".kcfb").addClass("project_bx");
	}else{
		$(".kcfb").addClass("project_fbx");
	}
	if(data.complete){
		$(".kcfb").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".kcfb").click(function(){
		if(data.children.lengt!=0){
			add_fb_data(data);
		}
	});
}


//施工发包判断
function sg_process_judge(data){
	if(data.need){
		$(".sgfb").addClass("project_bx");
	}else{
		$(".sgfb").addClass("project_fbx");
	}
	if(data.complete){
		$(".sgfb").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".sgfb").click(function(){
		if(data.children.lengt!=0){
			add_fb_data(data);
		}
	});
}


//监理发包判断
function jl_process_judge(data){
	if(data.need){
		$(".jlfb").addClass("project_bx");
	}else{
		$(".jlfb").addClass("project_fbx");
	}
	if(data.complete){
		$(".jlfb").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".jlfb").click(function(){
		add_fb_data(data);
	});
}


//设计备案判断
function sjba_process_judge(data){
	if(data.need){
		$(".sjba").addClass("project_bx");
	}else{
		$(".sjba").addClass("project_fbx");
	}
	if(data.complete){
		$(".sjba").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".sjba").click(function(){
		add_fb_data(data);
	});
}

//勘察备案判断
function kcba_process_judge(data){
	if(data.need){
		$(".kcba").addClass("project_bx");
	}else{
		$(".kcba").addClass("project_fbx");
	}
	if(data.complete){
		$(".kcba").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".kcba").click(function(){
		add_fb_data(data);
	});
}

//监理备案判断
function jlba_process_judge(data){
	if(data.need){
		$(".jlba").addClass("project_bx");
	}else{
		$(".jlba").addClass("project_fbx");
	}
	if(data.complete){
		$(".jlba").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".jlba").click(function(){
		add_fb_data(data);
	});
}

//施工备案判断
function sgba_process_judge(data){
	if(data.need){
		$(".sgba").addClass("project_bx");
	}else{
		$(".sgba").addClass("project_fbx");
	}
	if(data.complete){
		$(".sgba").addClass("project_wc").removeClass("project_fbx").removeClass("project_bx");
	}
	$(".sgba").click(function(){
		add_fb_data(data);
	});
}


//审图判断
function st_process_judge(data){
    if(data.need){
    	$(".sg").addClass("project_bx");
    }else{
    	$(".sg").addClass("project_fbx");
    }
    if(data.complete){
    	$(".sg").addClass("project_wc_f").removeClass("project_bx").removeClass("project_fbx");
    }
    $("#list_info").hide();
	$(".list_info").hide();
	$(".lc-two").hide();
	$(".lc-three").hide();
	$(".zjd").hide();
}

//项目报监判断
function xmbj_process_judge(data){
	if(data.need){
    	$(".jl").addClass("project_bx");
    	var sl_data=data.child;
    	$(".jl").click(function(){
    		$("#list_info").find("li").remove();
    		for(var i=0;i<data.child.length;i++){
    			var str="<li>受理操作："+data.child[i].name+"&nbsp;&nbsp;&nbsp;&nbsp;原因：<label style='width:65px;display:inline-block;'>"+data.child[i].results+"</label>&nbsp;&nbsp;&nbsp;&nbsp;时间："+data.child[i].time+"</li>";
    			$("#list_info").append(str);
    		}
    		$("#list_info").show();
    		$(".list_info").hide();
    		$(".lc-two").hide();
    		$(".lc-three").hide();
    		$(".zjd").hide();
    	});
    }else{
    	$(".jl").addClass("project_fbx");
    }
    if(data.complete){
    	$(".jl").addClass("project_wc").removeClass("project_bx").removeClass("project_fbx");
    }
    
}

//施工许可判断
function sgxk_process_judge(data){
	if(data.need){
    	$(".xk").addClass("project_bx");
    	var sl_data=data.child;
    	$(".xk").click(function(){
    		$("#list_info").find("li").remove();
    		for(var i=0;i<data.child.length;i++){
    			var str="<li>受理操作："+data.child[i].name+"&nbsp;&nbsp;&nbsp;&nbsp;原因：<label style='width:65px;display:inline-block;'>"+data.child[i].results+"</label>&nbsp;&nbsp;&nbsp;&nbsp;时间："+data.child[i].time+"</li>";
    			$("#list_info").append(str);
    		}
    		$("#list_info").show();
    		$(".list_info").hide();
    		$(".lc-two").hide();
    		$(".lc-three").hide();
    		$(".zjd").hide();
    	});
    }else{
    	$(".xk").addClass("project_fbx");
    }
    if(data.complete){
    	$(".xk").addClass("project_wc").removeClass("project_bx").removeClass("project_fbx");
    }
}


//承发包信息
function show_process(){
	$(".lc-two").show();
	$(".lc-three").show();
	$(".cfb_li").addClass("right_img");
	$(".list_info").find(".adddata").remove();
	$(".list_info").hide();
	$("#list_info").find("li").remove();
	$("#list_info").hide();
	
	var url ='/sites/all/themes/holiday/project_cfb.php';
	$.ajax({
		type:'post',
		url:url,
		data:{
			"bjbh": pro_number,
		},
		success:function(data){
			var proData=data;
			proData = JSON.parse(proData);
			if(proData){
				for(var i=0;i<proData.length;i++){
					if(proData[i].type=="SJ_FB"){
						sj_process_judge(proData[i]);
					}
					if(proData[i].type=="KC_FB"){
						kc_process_judge(proData[i]);
					}
					if(proData[i].type=="JL_FB"){
						jl_process_judge(proData[i]);
					}
					if(proData[i].type=="SG_FB"){
						sg_process_judge(proData[i]);
					}
					if(proData[i].type=="SJ_BA"){
						sjba_process_judge(proData[i])
					}
					if(proData[i].type=="KC_BA"){
						kcba_process_judge(proData[i])
					}
					if(proData[i].type=="JL_BA"){
						jlba_process_judge(proData[i])
					}
					if(proData[i].type=="SG_BA"){
						sgba_process_judge(proData[i])
					}
				}
			}else{
				alert("请输入正确的报建编号！");
			}
							
		},
		error: function(jqXHR, data) {
			alert("网络异常！");
		}
	   });
	//sj_process_judge(data.SJ_FB);
	//kc_process_judge(data.KC_FB);
	//sg_process_judge(data.SG_FB);
	//jl_process_judge(data.JL_FB);
	
	//sjba_process_judge(data.SJ_ba);
	//kcba_process_judge(data.KC_ba);
	//jlba_process_judge(data.JL_ba);
	//sgba_process_judge(data.SG_ba);
}


function closed_process(){
	$("#container").hide();
 	$("#back_div").hide();
 	$(".lc-two").hide();
	$(".lc-three").hide();
	$(".list_info").hide();
	$(".cfb_li").removeClass("right_img");
	$(".project_process").find(".lc-two").find("li").find("div").removeClass("project_bx").removeClass("project_fbx");
	$(".project_process").find(".lc-three").find("li").find("div").removeClass("project_bx").removeClass("project_fbx");
}
