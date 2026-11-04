    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <figure>
                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/logo.png') }}"
                                    alt="">
                            </figure>
                        </div>
                        <!-- Footer Logo End -->

                        <!-- Footer Content Start -->
                        <div class="footer-content">
                            <p>
                                Depuis notre création, Suwdengroup s'est imposée comme un acteur clé dans les secteurs du dragage, de l'infrastructure, de la location 
                                d'engins de travaux publics, de l'import-export, du forage, et du transport.
                            </p>
                        </div>
                        <!-- Footer Content End -->
                    </div>

                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Footer Quick Links Start -->
                    <div class="footer-links">
                        <h3>Nos services</h3>
                        <ul>
                            <li><a href="{{ route('home.services') }}">Dragage</a></li>
                            <li><a href="{{ route('home.services') }}">Infrastructure</a></li>
                            <li><a href="{{ route('home.services') }}">location d'engins de TP</a></li>
                            <li><a href="{{ route('home.services') }}">Import & Export</a></li>
                            <li><a href="{{ route('home.services') }}">Forage</a></li>
                            <li><a href="{{ route('home.services') }}">Transport</a></li>
                        </ul>
                    </div>
                    <!-- Footer Quick Links End -->
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Suwdengroup</h3>
                        <ul>
                            <li><a href="{{ route('home.about') }}">À propos</a></li>
                            <li><a href="{{ route('home.services') }}">Services</a></li>
                            <li><a href="{{ route('home.contact') }}">Contactez-nous</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Footer Contact Info Box Start -->
                    <div class="footer-links footer-contact-box">
                        <h3>Contactez-nous</h3>
                        <!-- Info Box Start -->
                        <div class="footer-info-box">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-phone.svg') }}"
                                    alt="">
                            </div>
                            <!-- Icon Box End -->
                            <p>+229 0166480303</p>
                            <p>+229 0166992200</p>
                            <p>+229 0140520264</p>
                        </div>
                        <!-- Info Box End -->

                        <!-- Info Box Start -->
                        <div class="footer-info-box">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-mail.svg') }}"
                                    alt="">
                            </div>
                            <!-- Icon Box End -->
                            <p>suwdengroup@suwdengroup.se</p>
                            <p>contact@suwdengroup.se</p>
                        </div>
                        <!-- Info Box End -->

                        <!-- Info Box Start -->
                        <div class="footer-info-box">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/icon-location.svg') }}"
                                    alt="">
                            </div>
                            <!-- Icon Box End -->
                            <p>République du Bénin Abomey-Calavi</p>
                        </div>

                        <div class="footer-info-box">
                            <!-- Icon Box End -->
                            <p>RCCM: RB/COT/17B19119</p>
                            <p>IFU: 3201710028263</p>
                        </div>
                        <!-- Info Box End -->
                    </div>
                    <!-- Footer Contact Info Box End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2026 <a href="{{ route('home.index') }}">Suwdengroup</a> Tous droits réservés</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-6 col-md-5">
                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                Conçu par <a href="mailto:aubanelk@gmail.com">Digital Ventures</a>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer End -->