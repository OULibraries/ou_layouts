<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

<!--header and nav buttons for page-->

	<header class="title container">
		<div class="row">
			<div class="col-md-12" id="title">
				<?php print $content['top']; ?>

					<div class="nav button row">
						<section class="col-md-offset-1" id="navbutton">
							<?php print $content['navbar']; ?>
						</section>
				</div>
			</div>
		</div>
	</header>

<!--start 2 column layout-->

	<div class="content container">
		<div class="row">
			<div class="col-md-8">
				<?php print $content['body']; ?>

				<section class="row" id="search">
				<div class="col-md-4">
						<?php print $content['section1']; ?>
				</div>
			</section>

			<section class="row">
				<div class="col-md-12" id="recent">
						<?php print $content['section2']; ?>
				</div>
			</section>

			<section class="row">
				<div class="col-md-12" id="collections">
					<?php print $content['section3']; ?>
				</div>
			</section>

		</div> <!--end column search, recent, collections-->

		<section class ="col-md-offset-1 col-md-3" id="toolkits">
			<?php print $content['sidebar']; ?>
		</section>

	</div> <!-- row 2 column layout-->
</div> <!-- container 2 column layout-->

<!--footer-->
	<footer class="container-fluid">
		<section class="col-md-12" id="footer">
			<?php print $content['bottom']; ?>
		</section>
	</footer>

</div>
