<!-- used on about and resources page -->
<div class="<?php print $classes ?>" <?php if (!empty($css_id)) {
  print "id=\"$css_id\"";
} ?>>

  <div class="container-fluid">
   
        <div class="row at-a-glance">
          <div class="col-md-12">
            <?php print $content['top']; ?>
          </div>
        
        <div class="row" style="margin:15px;">
          <div class="col-md-3 content-border sidebar-center">
            <?php print $content['top1']; ?>
          </div>
          <div class="col-md-3 content-border sidebar-center">
            <?php print $content['top2']; ?>
          </div>
          <div class="col-md-3 content-border sidebar-center">
            <?php print $content['top3']; ?>
          </div>
          <div class="col-md-3 content-border sidebar-center">
            <?php print $content['top4']; ?>
          </div>
		  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <?php print $content['mid2']; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php print $content['mid3']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['mid4']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['mid5']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['mid6']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['mid7']; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <?php print $content['bot2']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['bot3']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['bot4']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['bot5']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['bot6']; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <?php print $content['foot1']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['foot2']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['foot3']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['foot4']; ?>
            </div>
            <div class="col-md-3">
              <?php print $content['foot5']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>