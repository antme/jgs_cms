//显示时间
var date = new Date();
	     var now = "";
	     now = date.getFullYear()+"年"; 
	     now = now + (date.getMonth()+1)+"月"; 
	     now = now + date.getDate()+"日";
		 $("#now_date").text(now);

		 function AddFavorite(sURL, sTitle)
		 {
		     try
		     {
		         window.external.addFavorite(sURL, sTitle);
		     }
		     catch (e)
		     {
		         try
		         {
		             window.sidebar.addPanel(sTitle, sURL, "");
		         }
		         catch (e)
		         {
		             alert("加入收藏失败，请使用Ctrl+D进行添加");
		         }
		     }
		 }
		 function SetHome(obj,vrl){
		     try{
		             obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl);
		     }
		     catch(e){
		             if(window.netscape) {
		                     try {
		                             netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
		                     }
		                     catch (e) {
		                             alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
		                     }
		                     var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
		                     prefs.setCharPref('browser.startup.homepage',vrl);
		              }
		     }
		 }



$(document).ready(function(){
	//轮播图片Bug修改
	var img_title = $(".img_title");
	var img_href =$(".img_href");
	for(var i=0;i<img_title.length;i++){
	    $(img_href[i]).find("a").attr("title",$(img_title[i]).find("a").text());
	}
	$(".img_title").hide();
});





function close_div(){
	    $("#container").hide();
	    $("#back_div").hide();
}
 
function close_divs(){
		$("#search_project_value").hide();
		$(".project_info").remove();
		$(".bsdt").css("height","auto");
}


function update_password(){
		$("#back_update").show();
		$("#back_div").css("height",$(document).height()+"px").show();
		var width=$(document).width();
		width=(width-$("#back_update").width())/2;
		$("#back_update").css({"left":width,"top":"200px"});
}

function closed_all(){
	$("#back_update").hide();
	$("#back_div").hide();
	$("#oldpw").val("");
	$("#newpw").val("");
	$("#somepw").val("");
}

function load_Task(userNames){
	var url ='/sites/all/themes/holiday/task.php';
	$(".display_ul_style").find("li").remove();
	$.ajax({
		type:'post',
		url:url,
		data:{
			"loginName" :userNames
		},
		success:function(data){
			var response = eval(data);
			if(response && response.length>0){
				for(var i=0;i<response.length;i++){
					var j=i+1;
					var str="<li class='display_info_li display_li display_li_img"+j+"'><a href='http://mis.hkjgzx.sh.cn:8080/login/loginForSite.do'>"+response[i].name+"<label style='color: red;display:inline'>("+response[i].count+")</label></a></li>";
					$(".display_ul_style").append(str);
				}
			}
		},
		error: function(jqXHR, data) {
			alert("网络异常！");
		}
  	 });
}


function subimt_update(){
	var oldpw = $("#oldpw").val();
	var newpw = $("#newpw").val();
	var somepw = $("#somepw").val();
	if(oldpw){
		if(newpw){
			if(newpw==somepw){
				var url ='/sites/all/themes/holiday/reset.php';
				$.ajax({
					type:'post',
					url:url,
					data:{
						"oldPass": oldpw,
						"newPass": newpw,
						"loginName" :userName
					},
					success:function(data){
						var response = eval(data);
						if(response[0].success==false){
							alert(response[0].msg);
						}else{
							alert(response[0].msg);
							$("#back_update").hide();
						    $("#back_div").hide();
						    $("#oldpw").val("");
							$("#newpw").val("");
							$("#somepw").val("");
						}						
					},
					error: function(jqXHR, data) {
						alert("网络异常！");
					}
				   });

			}else{
				alert("两次输入的密码不一致！");
			}
		}else{
			alert("请输入新密码！");
		}
	}else{
		alert("请输入原始密码！");
	}
}