<!-- HEADER START -->
<?php require "./required/header.php" ?>
<!-- HEADER END -->

<!-- IMAGE CAROUSEL START -->
<section class="">
	<div class="imageSlider owl-carousel">
		<div class="card">
			<img class="img-fluid" src="assets/images/home/abs1.jpg" alt="Image">
		</div>
		<div class="card">
			<img class="img-fluid" src="assets/images/home/abs1.jpg" alt="Image">
		</div>
		<div class="card">
			<img class="img-fluid" src="assets/images/home/abs1.jpg" alt="Image">
		</div>
	</div>
</section>
<!-- IMAGE CAROUSEL END -->

<!-- VIDEO CAROUSEL START -->
<section class="py-3">
	<div class="text-center py-3">
		<h3>Videos</h3>
	</div>
	<div class="sliderTemplates owl-carousel">
		<?php $run = $mysqli->query("SELECT `link` FROM `youtube_videos` WHERE `isDeleted` = '0'");
		if ($run && $run->num_rows > 0) {
			while ($row = $run->fetch_object()) {
		?>
				<div class="card mx-1">
					<iframe height="400" class="w-100" src="<?= $row->link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
				</div>
		<?php
			}
		}
		?>
	</div>
</section>
<!-- VIDEO CAROUSEL END -->

<!-- CTA START -->
<section>
	<div class="container-fluid cta-index">
		<div class="row">
			<div class="col-lg-8">
				<div class="">

					<div class="">
						<h3>Lorem Ipsum</h3>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nisi quibusdam quae nihil, ducimus repudiandae ullam. Est in iste officia sapiente pariatur maxime molestias accusantium enim commodi harum, magnam nobis.
					</div>

					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="my-5 d-flex flex-column ">
									<p class="fa-lg fw-bold text-primary">To Know More About Me</p>
									<p class="fw-bold">Click Here</p>
									<div class="">
										<a href="about.php" class="btn fw-bold fw-bold w-25 text-white" style="background: #0F046F;">About</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="my-5 d-flex flex-column ">
									<p class="fa-lg fw-bold text-primary">To Book for an Event</p>
									<p class="fw-bold">Click Here</p>
									<div class="">
										<a href="contact.php" class="btn fw-bold fw-bold w-25 text-white" style="background: #0F046F;">Contact</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4"></div> -->
		</div>
	</div>
</section>
<!-- CTA END -->

<!-- CATEGORIES START  -->
<section class="photos-section masonry">
	<div class="text-center pb-4">
		<h3>Categories</h3>
	</div>
	<section class="gallery-section pinterest-style full ">
		<div class="gallery-box iso-call col4">
			<?php
			$run = $mysqli->query("SELECT * FROM `categories` WHERE `isDeleted` = '0'");
			while ($row = $run->fetch_object()) {
			?>
				<div class="gallery-post" role="button" onclick="window.location.href = 'album.php?cat=<?= $row->slug ?>';">
					<div class="inner-gallery-post bg-success" style="height: 350px;">
						<img src="./assets/images/categories/<?= $row->image ?>" class="h-100 w-100" alt="">
						<div class="hover-box">
							<h3 class="text-white"><?= $row->name ?></h3>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</section>
</section>
<!-- CATEGORIES END -->


<!-- FOOTER START -->
<?php require "./required/footer.php" ?>
<!-- FOOTER END -->