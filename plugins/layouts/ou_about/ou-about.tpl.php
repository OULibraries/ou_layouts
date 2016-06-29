 <!-- used on about and resources page -->
 <div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
 
  <div class="container-fluid">
  
	  <div class="row" style="margin:0px 0px 0px 0px;">
		<div class="col-md-8">
			<?php print $content['top1']; ?>
		</div>
		
		<div class="col-md-4">
			<?php print $content['top2']; ?>
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
	  
	  
	  <div class="row content-border">
		<div class="col-md-2">
			<?php print $content['item1']; ?>
		</div>
		
		<div class="col-md-2">
			<?php print $content['item2']; ?>
		</div>
	  
		<div class="col-md-2">
			<?php print $content['item3']; ?>
		</div>
		
		<div class="col-md-2">
			<?php print $content['item4']; ?>
		</div>
		
		<div class="col-md-2">
			<?php print $content['item5']; ?>
		</div>
		
		<div class="col-md-2">
			<?php print $content['item6']; ?>
		</div>
	  </div>
	  
	  
	 <div class="row">
	  <div class="col-md-8">
			<?php print $content['mleft']; ?>
	  </div>
		
	  <div class="col-md-4">
			<?php print $content['mright']; ?>
		</div>
	 </div>
	  
	  
	  <div class="row content-border">
		<div style="margin:0px 15px 0px 15px;">
			<?php print $content['middle']; ?>
		</div>
	  </div>
	  
	  
	  <div class="row content-border">
		<div style="margin:0px 15px 0px 15px;">
		<?php print $content['bottom']; ?>
		</div>
	  </div>
	  
	</div>
	
</div>
