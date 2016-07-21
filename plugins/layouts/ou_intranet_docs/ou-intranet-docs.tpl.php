<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

<!--header and nav buttons for page-->

	<div class="container-fluid">
		<div class="row title">
			<div class="col-md-8 col-lg-8" id="title">
				<?php print $content['top']; ?>
			</div>
		</div>


	<div class="row search">
		<div class="col-md-8 col-lg-8">
		<section class="col-xs-12 col-sm-4 col-md-4" id="searchbutton1">
			<?php print $content['search1']; ?>
		</section>

		<section class="col-xs-12 col-sm-4 col-md-4" id="searchbutton2">
			<?php print $content['search2']; ?>
		</section>

		<section class="col-xs-12 col-sm-4 col-md-4" id="searchbutton3">
			<?php print $content['search3']; ?>
		</section>
		</div>
	</div>
</div>

<!--start 2 column layout-->

	<div class="container-fluid">
		<div class="row content">
			<div class="col-md-8 col-lg-8">
				<?php print $content['body']; ?>

				<section class="row">
				<div class ="col-md-8 col-lg-8">
				<div class="col-xs-12 col-sm-4 col-md-4">
						<?php print $content['section1']; ?>
				</div>
			</section>

			<section class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
						<?php print $content['section2']; ?>
				</div>
			</section>

			<section class="row">
				<div class="col-sx-12 col-sm-4 col-md-4">
					<?php print $content['section3']; ?>
				</div>
			</section>

		</div>
		</div> <!--end column search, recent, collections-->

		<section class ="col-md-3" id="toolkits">
			<?php print $content['sidebar']; ?>
		</section>

	</div> <!-- row 2 column layout-->
</digit v> <!-- container 2 column layout-->

<!--footer-->
	<footer class="container-fluid">
		<section class="col-md-12" id="footer">
			<?php print $content['bottom']; ?>
		</section>
	</footer>

</div>
