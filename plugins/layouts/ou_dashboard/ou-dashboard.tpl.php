<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="container-fluid">
	  
	  <div class="row col-md-12">
		<?php print $content['header']; ?>
	  </div>
	  
	  <div class="row resources_by_subject_links">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php print $content['topl']; ?>
		</div>
		
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php print $content['topm']; ?>
		</div>
		
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php print $content['topr']; ?>
	    </div>
	  </div>
	  
	  <div class="row resources_by_subject_links">
			<?php print $content['middle']; ?>
	  
	  
	  <div class="row">
		<div class="col-md-6">
			<?php print $content['lmiddle']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['rmiddle']; ?>
		</div>
	  </div>
	  </div>
		
		<div class="row resources_by_subject_links">
		
		<?php print $content['reviewheader']; ?>
	  
		<div class="col-md-6">
			<?php print $content['lreview']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['rreview']; ?>
		</div>	
	  </div>
	  
	  <div class="row resources_by_subject_links">
		
		<?php print $content['bottom']; ?>
	  
	</div>
	</div>
</div>
