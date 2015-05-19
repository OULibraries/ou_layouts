 <!-- used on about and resources page -->
 <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 
  <div class="container-fluid">
  
	  <div class="row locations-description" style="margin:0px 0px 0px 0px;">
		<div class="col-md-8">
			<?php print $content['top1']; ?>
		</div>
		
		<div class="col-md-4">
			<?php print $content['top2']; ?>
		</div>
	  </div>
	  
	  <div class="row">
		<div class="col-md-6 homepage-video">
			<?php print $content['tleft']; ?>
		</div>
		
		<div class="homepage-login col-md-6">
			<?php print $content['tright']; ?>
		</div>
	  </div>
	  
	  <div class="row">
		<div style="margin:0px 15px 0px 15px;">
			<?php print $content['middle']; ?>
		</div>
	  </div>
	  
		<div class="row">
			<div class="col-md-2 hidden-xs hidden-sm">
				<?php print $content['mdetail']; ?>
			</div>
			<div class="col-md-3">
				<?php print $content['mleft']; ?>
			</div>
			<div class="col-md-3">
				<?php print $content['mmiddle']; ?>
			</div>
			<div class="col-md-4">
				<?php print $content['mright']; ?>
			</div>
	   </div>
	   
	   <div class="row" style="margin-left:0px;">
		<div class="col-md-8 col-sm-6">
			<?php print $content['bleft']; ?>
		</div>
		
		<div class="col-md-4 col-sm-6">
			<?php print $content['bright']; ?>
		</div>	
	  </div>
	  
	  <div class="row">
		<div style="margin:0px 15px 0px 15px;">
		<?php print $content['bottom']; ?>
		</div>
	  </div>
	</div>
</div>
