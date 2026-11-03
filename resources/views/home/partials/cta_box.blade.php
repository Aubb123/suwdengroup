	<!-- Cta Box Section Start -->
	<div class="cta-box">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-8">
					<!-- Section Title Start -->
					<div class="section-title">
						<h2 class="text-anime-style-3" data-cursor="-opaque">Construisons quelque chose de grand ensemble !</h2>
						<p class="wow fadeInUp">
                            Chez Suwdengroup, nous croyons que chaque projet est une opportunité de créer un impact durable et positif. 
                            Que vous ayez besoin d'infrastructures robustes, de solutions de transport efficaces, ou d'un soutien dans le développement de grands projets, 
                            nous sommes là pour transformer vos idées en réalité.
                        </p>
					</div>
					<!-- Section Title End -->

					<!-- Section Btn Start -->
					<div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
						<a href="{{ route('home.contact') }}" class="btn-default btn-large">Nous Contacter</a>
					</div>
					<!-- Section Btn End -->
				</div>

				<div class="col-lg-5 col-md-4">
					<!-- Cta Box Image Start -->
					<div class="cta-box-image">
						<figure>
							<img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/cta-box-img.png') }}" alt="">
						</figure>
					</div>
					<!-- Cta Box Image End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Cta Box Section End -->