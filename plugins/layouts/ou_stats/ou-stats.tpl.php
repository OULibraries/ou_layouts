<!-- used on about and resources page -->
<div class="<?php print $classes ?>" <?php if (!empty($css_id)) {
  print "id=\"$css_id\"";
} ?>>

  <div class="container-fluid ga-stats-group">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
        <div class="col-md-9">
          <?php print $content['tleft']; ?>
        </div>
          </div>
      <div class="row">
        <div class="col-md-9">
          <?php print $content['tleft2']; ?>
        </div>
      </div>
        <div class="row" id="threeGroup">
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
  </div>
</div>

<script>
  function SetTopMargin () {
    document.getElementById('threeGroup').style.marginleft = "-150px";
  }
  SetTopMargin();
</script>