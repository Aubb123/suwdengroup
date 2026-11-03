@extends('home/layouts/home_app')

@section('content')

    <!-- Hero Section Start -->
    <div class="hero bg-section hero-video">
        <!-- Video Start -->
        <div class="hero-bg-video">
			<!-- Selfhosted Video Start -->
			<video autoplay muted loop id="myVideo"><source src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/hero-bg-video.mp4') }}" type="video/mp4"></video>
			<!-- Selfhosted Video End -->

			<!-- Youtube Video Start -->
				<!-- <div id="herovideo" class="player" data-property="{videoURL:'TzfnlPxCZv0',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
			<!-- Youtube Video End -->
		</div>
		<!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Bienvenue à Suwdengroup</h3>
                            <h1 class="text-anime-style-3 fs-1" data-cursor="-opaque">Leader dans le domaine des services industriels et logistiques</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                votre partenaire de confiance pour des services intégrés dans les domaines du dragage, de l'infrastructure, de la location d'engins de travaux publics, de l'import-export, du forage, et du transport.
                            </p>
                        </div>

                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="{{ route('home.services') }}" class="btn-default">Nos services</a>
                            <a href="{{ route('home.about') }}" class="btn-default btn-highlighted">Nous-contact</a>
                        </div>
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    @include('home/partials/about')

    <!-- Our Service Section Start -->
        @include('home/partials/services')
    <!-- Our Service Section End -->

<!-- Why Choose Us Section Start -->
<div class="why-choose-us">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Pourquoi nous choisir ?</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Pourquoi nous sommes votre meilleur choix</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                        Nous comprenons que le choix de votre partenaire pour vos projets est crucial. Voici pourquoi nous sommes le choix idéal :
                    </p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-why-choose-1.svg') }}"
                            alt="">
                    </div>
                    <div class="why-choose-content">
                        <h3>Expertise Diversifiée</h3>
                        <p>
                            Forts de notre expérience dans des secteurs variés tels que le dragage, l'infrastructure, la location d'engins, l'import-export, le forage et le transport, 
                            nous possédons une connaissance approfondie qui nous permet de répondre à vos besoins spécifiques.
                        </p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Image Start -->
                <div class="why-choose-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/services/01.PNG') }}"
                            alt="">
                    </figure>
                </div>
                <!-- Why Choose Image End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-why-choose-2.svg') }}"
                            alt="">
                    </div>
                    <div class="why-choose-content">
                        <h3>Technologie de Pointe</h3>
                        <p>
                            Nous investissons continuellement dans des équipements et des technologies de dernière génération, garantissant des solutions précises, 
                            efficaces et conformes aux normes les plus élevées.
                        </p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Image Start -->
                <div class="why-choose-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/why-choose-img-2.jpg') }}"
                            alt="">
                    </figure>
                </div>
                <!-- Why Choose Image End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-why-choose-3.svg') }}"
                            alt="">
                    </div>
                    <div class="why-choose-content">
                        <h3>Engagement envers la Qualité</h3>
                        <p>
                            La qualité est au cœur de tout ce que nous faisons. Chaque projet est exécuté avec un souci du détail rigoureux, visant l'excellence à chaque étape.
                        </p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Why Choose Image Start -->
                <div class="why-choose-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/why-choose-img-3.jpg') }}"
                            alt="">
                    </figure>
                </div>
                <!-- Why Choose Image End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

@include('home/partials/cta_box')

<!-- Our Testiminial Start -->
<div class="our-testimonial">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Témoignages</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Ce que les gens disent de nous</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                        Chez Suwdengroup, la satisfaction de nos clients est notre priorité absolue. Voici ce qu'ils disent de nous :
                    </p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Travailler avec Suwdengroup a été une expérience exceptionnelle. Leur équipe a démontré une expertise inégalée et a 
                                                livré notre projet d'infrastructure complexe dans les délais impartis. 
                                                Leur engagement envers la qualité et leur approche collaborative nous ont vraiment impressionnés.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/author-1.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Jean Dupont </h3>
                                            <p>Directeur de projet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p> 
                                                Nous avons fait appel à Suwdengroup pour leurs services de transport et logistique, et nous n'avons pas été déçus. 
                                                Leur capacité à gérer des opérations logistiques complexes tout en respectant les délais serrés a fait 
                                                toute la différence pour notre entreprise.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/author-2.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Olivier Gautier</h3>
                                            <p>Responsable Logistique </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>
                                                Leur service de location d'engins de travaux publics est incomparable. 
                                                Les équipements sont toujours en parfait état, et leur équipe technique est extrêmement réactive. 
                                                Cela nous a permis de mener à bien nos projets de dragage sans aucun accroc
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/author-3.jpg') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>Ahmed Belkacem</h3>
                                            <p>Chef de chantier</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Testiminial End -->

@endsection()