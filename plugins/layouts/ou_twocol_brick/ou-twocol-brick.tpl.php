<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row">
    <?php print $content['top']; ?>
  </div>
  <div class="row">
	<div class="col-md-6">
		<?php print $content['tleft']; ?>
	</div>
	
	<div class="col-md-6">
		<?php print $content['tright']; ?>
	</div>
  </div>
   
   <div class="row">
	<div class="col-md-6">
		<?php print $content['bleft']; ?>
	</div>
	
	<div class="col-md-6">
		<?php print $content['bright']; ?>
	</div>	
  </div>
  
  <div class="row">
    <?php print $content['bottom']; ?>
  </div>
</div>
