        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem; visibility: visible; animation-delay: 0.1s; animation-name: none;">

            <div class="container py-5">
                <div class="row g-5">
                    {{-- <div class="col-lg-4 col-md-6">
                        <h4 class="text-light mb-4">Address</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $Home->city }}Irbid</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $Home->phone }}+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $Home->email }}info@example.com</p>
                    </div> --}}

                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-light mb-4">Address</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Irbid</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="route{{ ('about') }}">About Us</a>
                        <a class="btn btn-link" href="route{{ ('Ourgradute') }}">Our Graduate</a>
                        <a class="btn btn-link" href="route{{ ('Team') }}">Our Team</a>
                        <a class="btn btn-link" href="route{{ ('show.contact') }}">Contact Us</a>
                        <a class="btn btn-link" href="route{{( 'index') }}">Home </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative" style="max-width: 400px;">
                            <input id="emailInput" class="form-control border-0 w-300 py-3 ps-4 pe-5" type="email"
                                placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                                onclick="contactUs()">Contact us now</button>
                        </div>

                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"
                                    target="_blank"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"
                                    target="_blank"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"
                                    target="_blank"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"
                                    target="_blank"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            © <a class="border-bottom" href="https://github.com/SaraAbabneh"> Sara Ababneh</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top" style="display: none;"><i
                class="bi bi-arrow-up"></i>
        </a>

       


        <script>
            function contactUs() {
                var email = document.getElementById('emailInput').value;
                window.location.href = 'route{{ ('Contact') }}' + email;
            }
        </script>
        {{-- <script>
            function contactUs() {
                var email = document.getElementById('emailInput').value;
                window.location.href = 'Contact' + email;
            }
        </script> --}}

        {{-- <script>
            function contactUs() {
                var email = document.getElementById('emailInput').value;
                window.location.href = 'Contact/' + email;
            }
        </script> --}}

        
