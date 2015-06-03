<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

 
<div class="row">
	<div class="col-md-12">
    <div style="margin:0px 0px 0px 0px;">
	<?php print $content['top']; ?>
	</div>
	</div>
  </div>
  
  <div class="row">
	<div class="col-md-6" style="margin-left:0px;">
    <?php print $content['left']; ?>
	</div>	
	<div class="col-md-6" style="margin-right:0px;">
    <?php print $content['right']; ?>
	</div>
  </div>
  
  <div class="row">
  <div style="margin:0px 0px 0px 0px;">
	<div class="col-md-12">
    <?php print $content['bottom']; ?>
	</div>
	</div>
  </div>
</div>

