<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

<!--Upload Button at top of Page-->

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 col-md-offset-0 col-md-8 col-lg-offset-0 col-lg-8" id="upload">
				<?php print $content['top']; ?>
			</div>
		</div>

<!--start 2 column layout-->

	<div class="container-fluid">
		<div class="row content">
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 col-md-offset-0 col-md-8 col-lg-offset-0 col-lg-8">

				<!--Recently Added View--->
				<div class="row">
					<div class="col-md-12" id="recent">
						<?php print $content['body']; ?>
					</div>
				</div>

			<!--Collections-->
			<div class="row">
				<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12" id="collections">"

					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="col">
						<?php print $content['section1']; ?>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="col">
						<?php print $content['section2']; ?>
					</div>

					<div class="col-sx-12 col-sm-4 col-md-4 col-lg-4" id="col">
						<?php print $content['section3']; ?>
					</div>

			</div><!--column collections-->
		</div> <!--row collections-->
	</div><!--column recent and collections-->

		<div class ="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-12 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-3" id="toolkits">
			<?php print $content['sidebar']; ?>
		</div>

	</div> <!-- row 2 column layout-->
</div> <!-- container 2 column layout-->
