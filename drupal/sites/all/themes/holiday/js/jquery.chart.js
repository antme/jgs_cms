var datas=[//3000W以下的5条记录
           {   BJBH:'1402HK0026',
        	   BUILD_UNIT_NAME:'上海市虹口区社会福利院',
        	   BUILD_UNIT_PROPERTY_ID:'2',
        	   PROJECT_NAME:'虹口区第一福利院改扩建工程项目',
        	   BUILD_ADDRESS:'密云路623号',
        	   TOTAL_INVESTMENT:'2683.9',
        	   BUILD_PROPERTY_ID:'3',
        	   PROJECT_TYPE_ID:'10109',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1402HK0001',
        	   BUILD_UNIT_NAME:'上海集优机械股份有限公司',
        	   BUILD_UNIT_PROPERTY_ID:'3',
        	   PROJECT_NAME:'紧焊所房屋建筑物装修修缮项目',
        	   BUILD_ADDRESS:'松花江路2747号',
        	   TOTAL_INVESTMENT:'2200',
        	   BUILD_PROPERTY_ID:'5',
        	   PROJECT_TYPE_ID:'90008',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1302HK0087',
        	   BUILD_UNIT_NAME:'中国邮政储蓄银行股份有限公司上海分行',
        	   BUILD_UNIT_PROPERTY_ID:'4',
        	   PROJECT_NAME:'邮储银行上海分行营运办公用房装修工程',
        	   BUILD_ADDRESS:'东大名路1080号、1082号',
        	   TOTAL_INVESTMENT:'2591',
        	   BUILD_PROPERTY_ID:'5',
        	   PROJECT_TYPE_ID:'90009',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1302HK0052',
        	   BUILD_UNIT_NAME:'上海市公共卫生临床中心',
        	   BUILD_UNIT_PROPERTY_ID:'2',
        	   PROJECT_NAME:'上海市公共卫生临床中心市区分部医疗辅助用房修缮项目',
        	   BUILD_ADDRESS:'水电路56号',
        	   TOTAL_INVESTMENT:'2021.6784',
        	   BUILD_PROPERTY_ID:'5',
        	   PROJECT_TYPE_ID:'90007',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1302HK0034',
        	   BUILD_UNIT_NAME:'上海市虹口区教育局',
        	   BUILD_UNIT_PROPERTY_ID:'1',
        	   PROJECT_NAME:'上海市第五十二中学加固修缮项目',
        	   BUILD_ADDRESS:'广灵二路122号',
        	   TOTAL_INVESTMENT:'2426.16',
        	   BUILD_PROPERTY_ID:'5',
        	   PROJECT_TYPE_ID:'100201',
        	   ywxjfwjz:'是'
           },
         //3000W以上的5条记录
           
           {   BJBH:'1402HK0032',
        	   BUILD_UNIT_NAME:'上海市虹口区绿化管理署',
        	   BUILD_UNIT_PROPERTY_ID:'2',
        	   PROJECT_NAME:'新建虹湾绿地（一期）项目',
        	   BUILD_ADDRESS:'规划安汾路以南，规划水电路以东',
        	   TOTAL_INVESTMENT:'11649.58',
        	   BUILD_PROPERTY_ID:'1',
        	   PROJECT_TYPE_ID:'10109',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1401HK0003',
        	   BUILD_UNIT_NAME:'上海财经大学',
        	   BUILD_UNIT_PROPERTY_ID:'2',
        	   PROJECT_NAME:'上海财经大学新建商学院教学科研中心大楼项目',
        	   BUILD_ADDRESS:'中山北一路校区内',
        	   TOTAL_INVESTMENT:'24214',
        	   BUILD_PROPERTY_ID:'1',
        	   PROJECT_TYPE_ID:'10105',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1402HK0025',
        	   BUILD_UNIT_NAME:'上海一方竞艺企业管理有限公司',
        	   BUILD_UNIT_PROPERTY_ID:'8',
        	   PROJECT_NAME:'虹口区提篮桥街道66街坊综合开发项目',
        	   BUILD_ADDRESS:'东至商丘路、南至东长治路、西至旅顺路、北至西安路',
        	   TOTAL_INVESTMENT:'340000',
        	   BUILD_PROPERTY_ID:'1',
        	   PROJECT_TYPE_ID:'10110',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1402HK0012',
        	   BUILD_UNIT_NAME:'上海新琪投资管理有限公司',
        	   BUILD_UNIT_PROPERTY_ID:'9',
        	   PROJECT_NAME:'江湾镇街道A06-05地块商办综合开发项目',
        	   BUILD_ADDRESS:'基地东至凉城路西至江杨家园南至江杨家园北至规划三门路',
        	   TOTAL_INVESTMENT:'25431',
        	   BUILD_PROPERTY_ID:'1',
        	   PROJECT_TYPE_ID:'10110',
        	   ywxjfwjz:'是'
           },
           {   BJBH:'1402HK0008',
        	   BUILD_UNIT_NAME:'上海市虹口区教育局',
        	   BUILD_UNIT_PROPERTY_ID:'1',
        	   PROJECT_NAME:'上海航海人才公共实训基地暨南湖职校（第二分校）改建工程项目',
        	   BUILD_ADDRESS:'密云路481号',
        	   TOTAL_INVESTMENT:'20000',
        	   BUILD_PROPERTY_ID:'2',
        	   PROJECT_TYPE_ID:'10105',
        	   ywxjfwjz:'是'
           }
];


var sj_judge={
		TOTAL_INVESTMENT:'3000',
		PROJECT_TYPE_one:'11'
};
var kc_judge={
		       TOTAL_INVESTMENT:'3000',
		       PROJECT_TYPE_one:'08',
		       PROJECT_TYPE_two:'09',
		       PROJECT_TYPE_three:'1002',
		       PROJECT_TYPE_four:'11',
		       PROJECT_TYPE_five:'060001',
		       BUILD_PROPERTY_one:'3',
		       BUILD_PROPERTY_two:'1',
		       BUILD_PROPERTY_three:'N'
		     };
var sg_judge={
		TOTAL_INVESTMENT:'200'
};
var jl_judge={
		TOTAL_INVESTMENT:'3000',
		BUILD_UNIT_NAME:'教育局'
};

var st_judge={
		BUILD_PROPERTY_one:'1',
		BUILD_PROPERTY_two:'2',
		BUILD_PROPERTY_three:'3',
		BUILD_PROPERTY_four:'5',
		PROJECT_TYPE_one:'01',
		PROJECT_TYPE_two:'09',
		PROJECT_TYPE_three:'10',
		PROJECT_TYPE_four:'1003',
		PROJECT_TYPE_five:'100202',
		ywxjfwjz:'是',
};

//流程显示入口     报建编号判断
function show_project(pro_number){
	var num=false;
	var project_data;
	for(var i=0;i<datas.length;i++){
		if(pro_number==datas[i].BJBH){
			num=true;
			project_data=datas[i];
		}
	}
	if(num){
		loading_projec_data(project_data);
		display_div();
	}else{
		alert('请输入正确的报建编号');
	}
	
}

//流程显示
function display_div(){
	$("#container").show();
	$("#back_div").show();
	var marginheight=$(".search_project").offset().top-200;
	var marginLeft=(screen.width-$("#container").width())/2;
	var slHeight=document.body.scrollHeight;
	$("#container").css("left",marginLeft+"px");
	$("#container").css("top",marginheight+"px");
	$("#back_div").css("height",slHeight+"px");
}

//数据加载
function loading_projec_data(data){
	$(".project_info").find("#project_info_name").text(data.PROJECT_NAME);
	$(".project_info").find("#project_info_number").text(data.BJBH);
	$(".project_info").find("#project_info_address").text(data.BUILD_ADDRESS);
	$(".project_info").find("#project_info_unit").text(data.BUILD_UNIT_NAME);
	process_judge(data);
}

//流程判断开始
function process_judge(data){
	sj_process_judge(data);
	kc_process_judge(data);
	sg_process_judge(data);
	jl_process_judge(data);
	st_process_judge(data);
}

//设计发包判断
function sj_process_judge(data){
	var total_investment=parseInt(data.TOTAL_INVESTMENT);
	var length = data.PROJECT_TYPE_ID.length;
	
	if(length<6){
		var PROJECT_TYPE_ID='0' + data.PROJECT_TYPE_ID.substring(0,1);
	}else{
		var PROJECT_TYPE_ID=data.PROJECT_TYPE_ID.substring(0,2);
	}
	if(parseInt(sj_judge.TOTAL_INVESTMENT)>total_investment || PROJECT_TYPE_ID==sj_judge.PROJECT_TYPE_one){
		$(".sjfb").addClass("project_fbx");
		$(".sjba").addClass("project_fbx");
	}else{
		$(".sjfb").addClass("project_bx");
		$(".sjba").addClass("project_bx");
	}
}
//勘擦发包判断
function kc_process_judge(data){
	var total_investment=parseInt(data.TOTAL_INVESTMENT);
	var length = data.PROJECT_TYPE_ID.length;
	var BUILD_PROPERTY_ID = data.BUILD_PROPERTY_ID;
	if(length<6){
		var PROJECT_TYPE_ID='0' + data.PROJECT_TYPE_ID.substring(0,1);
	}else{
		var PROJECT_TYPE_ID=data.PROJECT_TYPE_ID.substring(0,2);
		var PROJECT_TYPE_IDs=data.PROJECT_TYPE_ID.substring(0,4);
	}
	
	if(parseInt(kc_judge.TOTAL_INVESTMENT)>total_investment || PROJECT_TYPE_ID==kc_judge.PROJECT_TYPE_one || PROJECT_TYPE_ID==kc_judge.PROJECT_TYPE_two || PROJECT_TYPE_ID==kc_judge.PROJECT_TYPE_four || PROJECT_TYPE_ID==kc_judge.PROJECT_TYPE_five || BUILD_PROPERTY_ID==kc_judge.BUILD_PROPERTY_one || BUILD_PROPERTY_ID==kc_judge.BUILD_PROPERTY_two || BUILD_PROPERTY_ID==kc_judge.BUILD_PROPERTY_three){
		$(".kcfb").addClass("project_fbx");
		$(".kcba").addClass("project_fbx");
	}else if(PROJECT_TYPE_IDs== kc_judge.PROJECT_TYPE_three){
		$(".kcfb").addClass("project_fbx");
		$(".kcba").addClass("project_fbx");
	}else{
		$(".kcfb").addClass("project_bx");
		$(".kcba").addClass("project_bx");
	}
}
//施工发包判断
function sg_process_judge(data){
	var total_investment=parseInt(data.TOTAL_INVESTMENT);
	if(parseInt(sg_judge.TOTAL_INVESTMENT)>total_investment){
		$(".sgfb").addClass("project_fbx");
		$(".sgba").addClass("project_fbx");
	}else{
		$(".sgfb").addClass("project_bx");
		$(".sgba").addClass("project_bx");
	}
}
//监理发包判断
function jl_process_judge(data){
	var total_investment=parseInt(data.TOTAL_INVESTMENT);
	if(data.BUILD_UNIT_PROPERTY_ID.indexOf(jl_judge.BUILD_UNIT_PROPERTY_ID)){
		$(".jlfb").addClass("project_bx");
		$(".jlba").addClass("project_bx");
	}else{
		if(parseInt(jl_judge.TOTAL_INVESTMENT)>total_investment){
			$(".jlfb").addClass("project_fbx");
			$(".jlba").addClass("project_fbx");
		}else{
			$(".jlfb").addClass("project_bx");
			$(".jlba").addClass("project_bx");
		}
	}
	
}

//审图判断
function st_process_judge(data){
	if(length<6){
		var PROJECT_TYPE_ID='0' + data.PROJECT_TYPE_ID.substring(0,1);
	}else{
		var PROJECT_TYPE_ID=data.PROJECT_TYPE_ID.substring(0,2);
		var PROJECT_TYPE_IDs=data.PROJECT_TYPE_ID.substring(0,4);
	}
	
	if(data.BUILD_PROPERTY_ID==st_judge.BUILD_PROPERTY_one || data.BUILD_PROPERTY_ID==st_judge.BUILD_PROPERTY_two || data.BUILD_PROPERTY_ID==st_judge.BUILD_PROPERTY_three){
		if(PROJECT_TYPE_ID==st_judge.PROJECT_TYPE_one || data.ywxjfwjz==st_judge.ywxjfwjz ){
			$(".sg").addClass("project_bx");
		}else{
			$(".sg").addClass("project_fbx");
		}
	}else if(data.BUILD_PROPERTY_ID==st_judge.BUILD_PROPERTY_four){
		if(PROJECT_TYPE_ID==st_judge.PROJECT_TYPE_two && data.ywxjfwjz==st_judge.ywxjfwjz){
			$(".sg").addClass("project_bx");
		}else if(PROJECT_TYPE_ID==st_judge.PROJECT_TYPE_three && PROJECT_TYPE_ID!=st_judge.PROJECT_TYPE_four && data.PROJECT_TYPE_ID!=st_judge.PROJECT_TYPE_five){
			$(".sg").addClass("project_bx");
		}
		else if(PROJECT_TYPE_ID==st_judge.PROJECT_TYPE_three && data.ywxjfwjz==st_judge.ywxjfwjz){
			$(".sg").addClass("project_bx");
		}else{
			$(".sg").addClass("project_fbx");
		}
	}else{
		$(".sg").addClass("project_fbx");
	}
}


function show_process(){
	$(".lc-two").show();
	$(".lc-three").show();
	$(".cfb_li").addClass("right_img");
	var marginLeft=(screen.width-$("#container").width())/2;
	$("#container").css("left",marginLeft+"px");
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
$(document).ready(function(){
	$(".lc-two").find("li").click(function(){
		$(".list_info").show();
		var marginLeft=(screen.width-$("#container").width())/2;
		$("#container").css("left",marginLeft+"px");
	});
	$(".lc-three").find("li").click(function(){
		$(".list_info").show();
		var marginLeft=(screen.width-$("#container").width())/2;
		$("#container").css("left",marginLeft+"px");
	});
});
