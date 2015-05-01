 <!-- used on about and resources page -->
 <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 
  <div class="container-fluid">
	  <div class="row">
		<?php print $content['top']; ?>
	  </div>
	  <div class="row location_middle">
		<div class="col-md-6">
			<?php print $content['tleft']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['tright']; ?>
		</div>
	  </div>
	  <div class="row">
		
		<?php print $content['mheader']; ?>
		
	  </div>
	    <div class="row">
		<div class="col-md-9">
			<?php print $content['mleft']; ?>
		</div>
		
		<div class="col-md-3">
			<?php print $content['mright']; ?>
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
</div>
