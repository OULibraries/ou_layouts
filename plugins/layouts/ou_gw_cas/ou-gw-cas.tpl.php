 <!-- used on about and resources page -->
 <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 
  <div class="container-fluid">
  
	  <div class="row locations-description" style="margin:0px 0px 15px 0px;">
		<div class="col-md-12">
			<?php print $content['top']; ?>
		</div>
	  </div>
	  
	  <div class="row">
			<div class="col-md-4">
				<?php print $content['mleft']; ?>
			</div>
			<div class="col-md-4">
				<?php print $content['mmiddle']; ?>
			</div>
			<div class="col-md-4">
				<?php print $content['mright']; ?>
			</div>
	   </div>
	  
	  <div class="row">
		<div class="col-md-6 homepage-video">
			<?php print $content['mid-bottom-left']; ?>
		</div>
		
		<div class="homepage-login col-md-6">
			
			<div class="login row">
				<div class="col-md-6">
					<?php print $content['login-left']; ?>
				</div>
				<div class="col-md-6">
					<?php print $content['login-right']; ?>
				</div>
			</div>
			
			<?php print $content['mid-bottom-right']; ?>
		
		</div>
	  </div>
	  
	  <div class="row">
		<div style="margin:0px 15px 0px 15px;">
		<?php print $content['bottom']; ?>
		</div>
	  </div>
	</div>
</div>
