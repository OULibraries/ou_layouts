 <!-- used on marketing page -->
 <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 
  <div class="container-fluid">
	  
	  <div class="row">
		<div class="col-md-6">
			<?php print $content['tleft']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['tright']; ?>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-md-12">
			<?php print $content['middle']; ?>
		</div>
	  </div>
	   
	   <div class="row">
		<div class="col-md-4">
			<?php print $content['bleft']; ?>
		</div>
		
		<div class="col-md-8">
			<?php print $content['bright']; ?>
		</div>	
	  </div>
	  
	</div>
</div>
