
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="partner">
      <div class="title">友情链接</div>
        <ul>
          <li class="partner_li">
              <span class="span_style"><a href="http://www.shanghai.gov.cn/" target="_blank"><img src="sites/all/themes/holiday/images/14.jpg"></a></span>
              <span class="span_style"><a href="http://www.shucm.sh.cn/" target="_blank"><img src="sites/all/themes/holiday/images/15.jpg"></a></span>
              <span class="span_style"><a href="http://www.ciac.sh.cn/" target="_blank"><img src="sites/all/themes/holiday/images/16.jpg"></a></span>
              <span class="span_style"><a href="http://www.shhk.gov.cn/" target="_blank"><img src="sites/all/themes/holiday/images/17.jpg"></a></span>
              <span class="span_style">各区建管署链接</span>
              <span class="span_style">
                  <select id="selected">
                      <option value='0'>请选择</option>
                      <option value='1'>松江区建管署</option>
                      <option value='2'>崇明区建交委</option>
                      <option value='3'>长宁区建管署</option>
                  </select>
              </span>
              <script type="text/javascript">
              $(document).ready(function () {
                   $("#selected").change(function(){
                       if($(this).val()=='1'){
                    	   window.open ('http://www.sjqjgs.com.cn');
                       }
                       if($(this).val()=='2'){
                    	   window.open ('http://jsgl.shcm.gov.cn');
                       }
                       if($(this).val()=='3'){
                    	   window.open ('http://jianw.changning.sh.cn');
                       }
                   });
              });
              </script>
          </li>
        </ul>
       </div>
</div>
