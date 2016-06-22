<!-- used on about and resources page -->
<div class="<?php print $classes ?>" <?php if (!empty($css_id)) {
  print "id=\"$css_id\"";
} ?>>

  <div class="container-fluid ga-stats-group">
    <!--	  <div class="row">-->
    <!--		<div style="margin:0px 15px 0px 15px;">-->
    <!--		--><?php //print $content['top']; ?>
    <!--		</div>-->
    <!--	  </div>-->
    <div class="row">
      <div class="col-md-9">
        <div class="row">
        <div class="col-md-9">
          <?php print $content['tleft']; ?>
          <p class="on-site-now">people on the OU Library website now</p>
        </div>
          </div>
      <div class="row">
        <div class="col-md-9">
          <?php print $content['tleft2']; ?>
        </div>
      </div>
        <div class="row">
          <div class="col-md-3">
            <?php print $content['mleft1of3']; ?>
          </div>
          <div class="col-md-3">
            <?php print $content['mleft2of3']; ?>
          </div>
          <div class="col-md-3">
            <?php print $content['mleft3of3']; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <?php print $content['bleft1of2']; ?>
          </div>
          <div class="col-md-4">
            <?php print $content['bleft2of2']; ?>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <?php print $content['tright']; ?>
      </div>
    </div>
    <!--  <div class="row">-->
    <!---->
    <!--    --><?php //print $content['mheader']; ?>
    <!---->
    <!--  </div>-->
    <!--  <div class="row">-->
    <!--    <div class="col-md-6">-->
    <!--      --><?php //print $content['mleft']; ?>
    <!--    </div>-->
    <!---->
    <!--    <div class="col-md-6">-->
    <!--      --><?php //print $content['mright']; ?>
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="row" style="margin-left:0px; margin-right:0px;">-->
    <!--    <div class="col-md-8 col-sm-6">-->
    <!--      --><?php //print $content['bleft']; ?>
    <!--    </div>-->
    <!---->
    <!--    <div class="col-md-4 col-sm-6">-->
    <!--      --><?php //print $content['bright']; ?>
    <!--    </div>-->
    <!--  </div>-->
    <!---->
    <!--  <div class="row">-->
    <!--    <!-- <div style="margin:0px 15px 0px 15px;"> -->
    <!--    --><?php //print $content['bottom']; ?>
    <!--  </div>-->
  </div>
</div>
