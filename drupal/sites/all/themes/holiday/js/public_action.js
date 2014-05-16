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
}

function subimt_update(){
	var oldpw = $("#oldpw").val();
	var newpw = $("#newpw").val();
	var somepw = $("#somepw").val();
	if(oldpw){
		if(newpw){
			if(newpw==somepw){
				$.ajax({
					type:'post',
					url:'http://www.hkjgzx.sh.cn:8080/login/passSync.do',
					dataType: 'jsonp',
					data:'oldPass='+oldpw+'&newPass='+newpw,
					success:function(data){
						console.log(data);
						$("#container").hide();
					    $("#back_div").hide();
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