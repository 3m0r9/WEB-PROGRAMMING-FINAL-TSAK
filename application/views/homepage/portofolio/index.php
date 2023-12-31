<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Portfolio</h2>
				<nav aria-label="breadcrumb mx-auto" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?=base_url('home')?>">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>

<!-- Start Portfolio Section
=========================================== -->
<section class="portfolio section" id="portfolio">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>RECENT WORK</h4>
					<h2>WORK SHOWCASE.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-lg-12">
				<!-- /section title -->
				<div class="portfolio-filter">
					<button class="active" type="button" data-filter="all">All</button>
					<button type="button" data-filter="photography">Photography</button>
					<button type="button" data-filter="ios">IOS App</button>
					<button type="button" data-filter="development">Development</button>
					<button type="button" data-filter="design">Design</button>
				</div>
			</div>
		</div> <!-- /end col-lg-12 -->
		<div class="row filtr-container">
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?=home_assets()?>images/portfolio/portfolio-1.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design, ios">
				<div class="portfolio-block ">
					<img class="img-fluid" src="<?=home_assets()?>images/portfolio/portfolio-2.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="photography, development">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?=home_assets()?>images/portfolio/portfolio-3.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="photography, ios">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?=home_assets()?>images/portfolio/portfolio-4.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?=home_assets()?>images/portfolio/portfolio-5.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design, development">
				<div class="portfolio-block">
					<img class="img-fluid" src="<?=home_assets()?>images/portfolio/portfolio-1.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">Photography Website</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end row -->
</section>   <!-- End section -->