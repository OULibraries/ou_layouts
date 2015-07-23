<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="container-fluid">
	  <div class="row">
		<div class="col-md-8 col-sm-4 col-xs-12">
			<?php print $content['top1']; ?>
		</div>
		
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php print $content['top2']; ?>
		</div>
	  </div>
	  <div class="row">
		<?php print $content['top']; ?>
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
	   
	  <div class="row">
		<?php print $content['middle']; ?>
	  </div>
	  
	  <div class="row">
		<div class="col-md-6">
			<?php print $content['lmiddle']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['rmiddle']; ?>
		</div>
		
		<div class="row">
		<?php print $content['bottom']; ?>
	  </div>
		
		<div class="row">
		<div class="col-md-6">
			<?php print $content['lbottom']; ?>
		</div>
		
		<div class="col-md-6">
			<?php print $content['rbottom']; ?>
		</div>
		
	  </div>
	</div>
</div>
