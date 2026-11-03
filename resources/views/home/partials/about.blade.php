<!-- About Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <!-- About Us Image Start -->
                <div class="about-image">
                    <div class="about-img">
                        <figure class="reveal">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/about-us-img.png') }}"
                                alt="">
                        </figure>
                    </div>
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-7">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">À propos de nous</h3>
                        <h2 class="text-anime-style-3 fs-1" data-cursor="-opaque"> Nous nous engageons à offrir des services de la plus haute qualité</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Depuis notre création, Suwdengroup s'est imposée comme un acteur clé dans les secteurs du dragage, de l'infrastructure, 
                            de la location d'engins de travaux publics, de l'import-export, forage, et transport. 
                            Notre mission est de fournir des services intégrés et personnalisés à nos clients, en mettant un point d'honneur à la qualité, 
                            à l'efficacité et à la sécurité.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body wow fadeInUp" data-wow-delay="0.5s">
                        <ul>
                            <li>Services Complets</li>
                            <li>Technologie Avancée</li>
                            <li>Communication Transparente</li>
                        </ul>
                    </div>
                    <!-- About Content Body End -->

                    <!-- About Content Footer Start -->
                    <div class="about-content-footer wow fadeInUp" data-wow-delay="0.75s">

                        @if(Route::currentRouteName() == 'home.index')    
                            <div class="about-footer-btn">
                                <a href="{{ route('home.about') }}" class="btn-default">Lire plus</a>
                            </div>
                        @endif


                        <div class="about-contact-support">
                            <div class="icon-box">
                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-phone.svg') }}"
                                    alt="">
                            </div>
                            <div class="about-support-content">
                                <p>Centre d'assistance téléphonique 24h/24 et 7j/7</p>
                                <h3>+229 0140520264</</h3>
                            </div>
                        </div>
                    </div>
                    <!-- About Content Footer End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

@if(Route::currentRouteName() == 'home.about')    

	<!-- Our Company History Start -->
	<div class="our-company-history">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Company History Image Start -->
					<div class="company-history-image">
						<div class="company-history-img">
							<figure class="image-anime reveal">
								<img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/company-history-img.jpg') }}" alt="">
							</figure>
						</div>

						<!-- Company Experience Box Start -->
						<div class="company-experience">
							<div class="company-experience-content">
								<h3><span class="counter">07</span>+</h3>
								<p>années d'expérience</p>
							</div>
						</div>
						<!-- Company Experience Box End -->
					</div>
					<!-- Company History Image End -->
				</div>

				<div class="col-lg-6">
					<div class="company-history-content">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">Notre histoire</h3>
							<h2 class="text-anime-style-3" data-cursor="-opaque">Fabriquer des structures qui durent toute une vie</h2>
						</div>
						<!-- Section Title End -->

						<!-- Company History Body Start -->
						<div class="company-history-body">
							<p class="wow fadeInUp" data-wow-delay="0.25s">
                                Avec une équipe composée de professionnels hautement qualifiés et une flotte d'équipements modernes, 
                                nous sommes en mesure de relever les défis les plus complexes. Que ce soit pour des projets d'envergure 
                                internationale ou des initiatives locales, nous apportons la même rigueur et le même engagement pour assurer le succès de chaque mission.
                            </p>
							<p class="wow fadeInUp" data-wow-delay="0.5s">
                                Notre vision est de devenir un leader incontesté dans nos domaines d'expertise, en alliant innovation technologique, 
                                respect de l'environnement et excellence opérationnelle. Nous croyons fermement que la clé de notre succès réside dans les relations 
                                de confiance que nous établissons avec nos clients, nos partenaires et nos collaborateurs.
                            </p>
						</div>
						<!-- Company History Body End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Company History End -->

	<!-- Our Mission Vision Start -->
	<div class="our-mission-vision">
        <div class="container">
            <h2>Nos engagements :</h2> <br>
			<div class="row">
				<div class="col-lg-4">
					<!-- Mission Vision Item Start -->
					<div class="mission-vision-item wow fadeInUp">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-our-mission.svg') }}" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Mission Vision Content Start -->
						<div class="mission-vision-content">
							<h3>Qualité :</h3>
                            <p> 
                                Nous nous engageons à offrir des services de la plus haute qualité, en respectant les normes industrielles les plus strictes.
                                Nous investissons dans la formation de notre personnel pour rester à la pointe de l'industrie.
                            </p>
						</div>
						<!-- Mission Vision Content End -->
					</div>
					<!-- Mission Vision Item End -->
				</div>

				<div class="col-lg-4">
					<!-- Mission Vision Item Start -->
					<div class="mission-vision-item wow fadeInUp" data-wow-delay="0.25s">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-our-vision.svg') }}" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Mission Vision Content Start -->
						<div class="mission-vision-content">
							<h3>Sécurité :</h3>
                            <p>La sécurité est au cœur de toutes nos opérations. Nous mettons en œuvre des pratiques de travail sûres pour protéger nos employés, 
                                nos clients, et l'environnement. Nous sommes dédiés à la satisfaction de nos clients.
                            </p>
						</div>
						<!-- Mission Vision Content End -->
					</div>
					<!-- Mission Vision Item End -->
				</div>

				<div class="col-lg-4">
					<!-- Mission Vision Item Start -->
					<div class="mission-vision-item wow fadeInUp" data-wow-delay="0.5s">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-our-values.svg') }}" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Mission Vision Content Start -->
						<div class="mission-vision-content">
							<h3>Responsabilité environnementale :</h3>
                            <p>Conscients de notre impact, nous nous efforçons de réduire notre empreinte carbone et de promouvoir des pratiques respectueuses de l'environnement dans tous nos projets.</p>
						</div>
						<!-- Mission Vision Content End -->
					</div>
					<!-- Mission Vision Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Mission Vision End -->

	<!-- Intro Video Section Start -->
	<div class="intro-video">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- Intro Video Box Start -->
					<div class="intro-video-box">
						<!-- Video Image Start -->
						<div class="video-image">
							<a href="#" class="popup-video">
								<figure class="image-anime">
									<img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/video-bg.jpg') }}" alt="">
								</figure>
							</a>
						</div>
						<!-- Video Image End -->

					</div>
					<!-- Intro Video Box End -->
				</div>
			</div>
		</div>
	</div> <br><br>
	<!-- Intro Video Section End -->

    @include('home/partials/cta_box')

@endif