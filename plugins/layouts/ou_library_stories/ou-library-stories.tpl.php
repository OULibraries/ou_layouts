<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="container-fluid">
	  <div class="row">
		<?php print $content['top']; ?>
	  </div>
	  <div class="row">
		<div class="col-md-6 col-sm-4 col-xs-12">
			<?php print $content['lmiddle']; ?>
		</div>
		
		<div class="col-md-6 col-sm-8 col-xs-12">
			<?php print $content['rmiddle']; ?>
		</div>	
	  </div>
	  
	  <div class="row">
		<?php print $content['middle']; ?>
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
</div>
