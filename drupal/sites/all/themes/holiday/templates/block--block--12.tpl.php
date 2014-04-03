<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="cloudy" style="height:auto;border:none;">
          <iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&icon=1&wind=0&num=1"></iframe>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
var data = {
		"node[title]":　"test",
		"node[type]": "gsgg"
};
$.ajax({
	type:'post',
	url:'/note/node',
	dataType: 'json',
	data:data,
	contentType:'multipart/form-data',
	success:function(data){
	  alert(data);
	}
});
});
</script>