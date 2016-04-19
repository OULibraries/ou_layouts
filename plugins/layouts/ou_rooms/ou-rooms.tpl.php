<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<div class="container-fluid">
		<div class="row location_header">
			<div class="col-md-4">
				<?php print $content['rooms_pic']; ?>
			</div>
			<div class="col-md-8">
				<?php print $content['rooms_description']; ?>
			</div>
		</div>
		
		<div class="row location_description">
			<div class="col-md-12">
				<?php print $content['main_content']; ?>
			</div>
		</div>
		
		<div class="row location_top">
			<div class="col-md-12">
				<?php print $content['top']; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<?php print $content['left']; ?>
			</div>
			<div class="col-md-6">
				<?php print $content['right']; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<?php print $content['tleft']; ?>
			</div>
		
			<div class="col-md-6">
				<?php print $content['tright']; ?>
			</div>
		</div>	
		
		<div class="row location_bottom">
			<div class="col-md-12">
				<?php print $content['bottom']; ?>
			</div>
		</div>
		
		<div class="row location_footer">
			<div class="col-md-4">
				<?php print $content['footerl']; ?>
			</div>
			<div class="col-md-4">
				<?php print $content['footerm']; ?>
			</div>
			<div class="col-md-4">
				<?php print $content['footerr']; ?>
			</div>
		</div>
		 </div>
	</div>

