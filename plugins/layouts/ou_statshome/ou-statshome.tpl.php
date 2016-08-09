 <!-- used on about and resources page -->
 <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 
  <div class="container-fluid">
	<div class="row at-a-glance">
		<div class="row" style="margin:15px;">
			<div class="col-md-12">
				<?php print $content['glance-header']; ?>
			</div>
		</div>

		<div class="row" style="margin:15px;">
			<div class="col-md-3 content-border sidebar-center">
				<?php print $content['glance-stats1']; ?>
			</div>
		
			<div class="col-md-3 content-border sidebar-center">
				<?php print $content['glance-stats2']; ?>
			</div>
		
			<div class="col-md-3 content-border sidebar-center">
				<?php print $content['glance-stats3']; ?>
			</div>
		
			<div class="col-md-3 content-border sidebar-center">
				<?php print $content['glance-stats4']; ?>
			</div>
		</div>
	</div>



	  <div class="row">
		<div class="col-md-12">
			<?php print $content['top']; ?>
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
	  
	  <div class="row">
		<div class="col-md-12">
			<?php print $content['mheader']; ?>
		</div>
		
	  </div>
	    <div class="row">
		<div class="col-md-6">
			<?php print $content['mleft']; ?>
		</div>
		
		<div class="col-md-6">
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
	  <div class="col-md-12">
		<?php print $content['bottom']; ?>
		</div>
	  </div>
	</div>
</div>
