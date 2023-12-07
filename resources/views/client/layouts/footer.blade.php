 <!-- footer-area -->
 <footer>
    <div class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-7">
                        <div class="footer-widget">
                            @if (isset($profile))
                            <div class="fw-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{ asset(env('APP_URL') . 'uploads/profile/' . $profile->image) }}"
                                    alt="" class="img-responsive" />
                                </a>
                               
                            </div>
                            <div class="footer-content">
                                <p>{{$profile->description}}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Company</h4>
                            <div class="footer-link-wrap">
                                <ul class="list-wrap">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">The Test Kitchen</a></li>
                                    <li><a href="contact.html">Podcast</a></li>
                                    <li><a href="contact.html">Events</a></li>
                                    <li><a href="contact.html">Jobs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Get Help</h4>
                            <div class="footer-link-wrap">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">Contact & Faq</a></li>
                                    <li><a href="contact.html">Oders & Returns</a></li>
                                    <li><a href="contact.html">Gift Cards</a></li>
                                    <li><a href="contact.html">Register</a></li>
                                    <li><a href="contact.html">Catalog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Explore</h4>
                            <div class="footer-link-wrap">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">The Shop</a></li>
                                    <li><a href="contact.html">Recipes</a></li>
                                    <li><a href="contact.html">Food</a></li>
                                    <li><a href="contact.html">Travel</a></li>
                                    <li><a href="contact.html">Hotline</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Follow us On</h4>
                            <div class="footer-link-wrap">
                                <ul class="list-wrap">
                                    @if (isset($profile))
                                    <li><a href="{{$profile->facebookLink}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$profile->twitterLink}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$profile->linkdinlink}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$profile->instalink}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-bottom-menu">
                            <ul class="list-wrap">
                                <li><a href="contact.html">Privacy Policy & Terms</a></li>
                                <li><a href="contact.html">Site Credits</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p>© 2023 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->