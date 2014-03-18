<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="cloudy" style="height:auto;border:none;">
          <iframe width="260" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&icon=1&wind=0&num=1"></iframe>
    </div>
	<div id="now_date" class="now_date"></div>
	<div class="now_date">
	   <a href="#" onclick="SetHome(this,window.location)" > 设为首页 </a>
       <a href="#" onclick="AddFavorite(window.location,document.title)"> 收藏本站 </a>
    </div>
	<script>
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
	</script>
</div>


