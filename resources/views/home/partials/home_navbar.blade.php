   <!-- Header Start -->
   <header class="main-header">
       <div class="header-sticky">
           <nav class="navbar navbar-expand-lg">
               <div class="container-fluid">
                   <!-- Logo Start -->
                   <a class="navbar-brand" href="{{ route('home.index') }}">
                       <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/logo.png') }}"
                           alt="Logo">
                   </a>
                   <!-- Logo End -->

                   <!-- Main Menu Start -->
                   <div class="collapse navbar-collapse main-menu">
                       <div class="nav-menu-wrapper">
                           <ul class="navbar-nav mr-auto" id="menu">
                               <li class="nav-item"><a class="nav-link @if(Route::currentRouteName() == 'home.index') text-warning @endif" href="{{ route('home.index') }}">Accueil</a></li>
                               <li class="nav-item"><a class="nav-link @if(Route::currentRouteName() == 'home.about') text-warning @endif" href="{{ route('home.about') }}">À propos</a></li>
                               <li class="nav-item"><a class="nav-link @if(Route::currentRouteName() == 'home.services') text-warning @endif" href="{{ route('home.services') }}">Services</a></li>
                               <li class="nav-item"><a class="nav-link @if(Route::currentRouteName() == 'home.contact') text-warning @endif" href="{{ route('home.contact') }}">Contactez-nous</a></li>
                               <li class="nav-item highlighted-menu"><a class="nav-link" href="#">Suwdengroup</a></li>
                           </ul>
                       </div>
                       <!-- Let’s Start Button Start -->
                       <div class="header-btn d-inline-flex">
                           <a href="contact.html" class="btn-default">Suwdengroup</a>
                       </div>
                       <!-- Let’s Start Button End -->
                   </div>
                   <!-- Main Menu End -->
                   <div class="navbar-toggle"></div>
               </div>
           </nav>
           <div class="responsive-menu"></div>
       </div> 
   </header>
   <!-- Header End -->