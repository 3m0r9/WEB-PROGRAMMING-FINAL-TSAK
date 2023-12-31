<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contact Us</h2>
				<nav aria-label="breadcrumb mx-auto" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?=base_url('home')?>">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>

<!-- Srart Contact Us
		=========================================== -->		
    <section class="contact-us section bg-gray" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>Drop us a note</h4>
					<h2>Contact Us.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Contact Details -->
			<div class="col-md-6">
				<div class="map">
					<div id="map"></div>
				</div>

			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<form id="contact-form" method="post" action="sendmail.php" role="form">
				
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					<div id="success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>
					
					<div id="error" class="error">
						Sorry, don't know what happened. Try later :(
					</div>
					
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
					</div>
					
				</form>
			</div>
			<!-- ./End Contact Form -->
		</div> <!-- end row -->
		<div class="row">
			<div class="col-md-4">
				<div class="address-block contact-meta-block">
					<i class="tf-ion-android-pin"></i>
					<h4>Our Location</h4>
					<p>
						14/05, Stockhome <br>
					Victori Palace , United States <br>
					
					</p>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="phone-block contact-meta-block">
					<i class="tf-ion-ios-telephone"></i>
					<h4>Call Us</h4>
					<p>
						Office: (03) 9283 2617 <br>
						Fax: +61 3827 3590
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="social-icons-block contact-meta-block">
					<i class="tf-ion-ios-contact"></i>
					<h4>We are social</h4>
					<ul class="list-inline social-icon">
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-facebook"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-twitter"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-linkedin"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-dribbble"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="tf-ion-social-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
	</div> <!-- end container -->
</section> <!-- end section -->