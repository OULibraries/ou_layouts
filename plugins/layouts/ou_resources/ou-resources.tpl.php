<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="container-fluid">
	  <div class="row">
		<?php print $content['top']; ?>
	  </div>
	  
	  <div class="row">
		<div class="col-md-7 col-sm-6 col-xs-12">
			<?php print $content['main']; ?>
		</div>
		
		<div class="col-md-5 col-sm-6 col-xs-12">
			<?php print $content['sidebar']; ?>
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
