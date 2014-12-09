<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row">
    <?php print $content['top']; ?>
  </div>
  <div class="row">
	<div class="col-md-4">
		<?php print $content['tleft']; ?>
	</div>
	
	<div class="col-md-4">
		<?php print $content['tmid']; ?>
	</div>
	
	<div class="col-md-4">
		<?php print $content['tright']; ?>
	</div>
  </div>
   
     
  <div class="row">
    <?php print $content['bottom1']; ?>
  </div>
  
   <div class="row">
    <?php print $content['bottom2']; ?>
  </div>
  
   <div class="row">
    <?php print $content['bottom3']; ?>
  </div>
</div>
