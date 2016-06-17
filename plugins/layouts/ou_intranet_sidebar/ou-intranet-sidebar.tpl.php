<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<?php print $content['top']; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3 sidebar">
				<?php print $content['sidebar']; ?>
			</div>
		
			<div class="col-md-9">
				<?php print $content['body']; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<?php print $content['bottom']; ?>
			</div>
		</div>
		
		
		 </div>
	</div>

