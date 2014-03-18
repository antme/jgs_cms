<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="cloudy" style="height:auto;border:none;">
          <iframe width="250" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&icon=1&wind=0&num=1"></iframe>
    </div>
	<div class="now_date"></div>
	<script>
	     var myDate = new Date();
		 var date_txt = myDate.toLocaleDateString();
		 $(".now_date").text(date_txt);
	</script>
</div>


