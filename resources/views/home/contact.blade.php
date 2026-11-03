@extends('home/layouts/home_app')

@section('content')

    @include('home/partials/home_fil_dariane')

    <!-- Contact Information Section Start -->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">                        
                        <div class="icon-box">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-phone.svg') }}" alt="">
                        </div>
                        <div class="contact-info-body">
                            <h3>Appeler le centre d'assistance 24h/24 et 7j/7</h3>
                            <p>+229 0166480303 / +229 0166992200</p>
                            <P>+229 0140520264</P>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">                        
                        <div class="icon-box">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-mail.svg') }}" alt="">
                        </div>
                        <div class="contact-info-body">
                            <h3>Écrivez-nous</h3>
                            <p>suwdengroup@gmail.com</p>
                            <p>pinheiro@suwdengroup.se</p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">                        
                        <div class="icon-box">
                            <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-location.svg') }}" alt="">
                        </div>
                        <div class="contact-info-body">
                            <h3>Visitez-nous</h3>
                            <p>République du Bénin Abomey-Calavi</p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information Section End -->

    <!-- Page Contact Us Start -->
    <div class="contact-us page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <!-- Contact Form start -->
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Prêt à commencer ? Discutons</h2>
                            <p>Veuillez remplir le formulaire ci-dessous et un membre de notre équipe vous répondra dans les plus brefs délais.</p>
                        </div>
                        <!-- Section Title End -->
                         
                        <form class="" method="post" action="{{ route('home.contact.store') }}">
                            @include('home/partials/message')
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-12 mb-3">
                                <input class="form-control" type="text" name="name" value="{{ old('name','') }}" placeholder="{{'Ex: John Doe'}}" required>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                    
                                <div class="form-group col-md-12 mb-3">
                                    <input class="form-control" type="email" name="email" value="{{ old('email', '') }}" placeholder="{{ 'Ex: votreadresse@gmail.com' }}" required>
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                    
                                <div class="form-group col-md-12 mb-3">
                                    <input class="form-control" type="tel" name="phone" value="{{ old('phone', '') }}" placeholder="{{ 'Ex: (+xxx) 123456789' }}" required>
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                    
                                <div class="form-group col-md-12 mb-4">
                                    <textarea class="form-control" placeholder="Entrer ici le contenu de votre message" maxlength="975" name="message" rows="4" required>{{ old('message', '') }}</textarea>
                                    @error('message') <span class="text-danger">{{ $message }}</span> <br> @enderror
                                    <span class="text-warning">Pas plus de 1.000 caractères</span>
                                </div>
                    
                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form end -->
                </div>

                <div class="col-lg-4 col-md-5">
                    <!-- Contact Sidebar Start -->
                    <div class="contact-sidebar page-contact-sidebar wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-social-list">
                            <h3>Suivez-nous</h3>
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61564373498612"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://wa.me/message/BUOUOUYDP7ZXA1?src=qr"><i class="fa-brands fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Info Image Start -->
                        <div class="contact-info-image">
                            <figure>
                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/contact-info-img.png') }}" alt="">
                            </figure>
                        </div>
                        <!-- Contact Info Image End -->
                    </div>
                    <!-- Contact Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

@endsection()