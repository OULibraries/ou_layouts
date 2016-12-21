 <!-- used on the OneSearch results page -->
 <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 
  <div class="container-fluid">
	  <div class="col-md-12">
		<?php print $content['search']; ?>
	  </div>
	  
	  <div class="col-md-12">
		<?php print $content['header']; ?>
	  </div>
	  
	  <div class="row">
		<div class="col-md-6">
			<?php print $content['books']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['articles']; ?>
		</div>
	  </div>
	  
	    <div class="row">
		<div class="col-md-6">
			<?php print $content['websites']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['guides']; ?>
		</div>	
	   </div>
	   
	   <div class="row">
		<div class="col-md-6">
			<?php print $content['shareok']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['speccoll']; ?>
		</div>	
	  </div>
	  
	  <div class="col-md-12">
		<?php print $content['specialists']; ?>
	  </div>
	</div>
	
	  <div class="col-md-12">
		<?php print $content['othersearch']; ?>
	  </div>
	</div>
	
</div>
