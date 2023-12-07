<!-- header-area -->
<header class="header-style-three">
    <div id="header-fixed-height"></div>
    <div class="header-top-wrap-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="header-top-left">
                        <div class="offcanvas-toggle">
                            <a href="javascript:void(0)" class="menu-tigger-two">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="header-top-social">
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
                <div class="col-lg-8">
                    <div class="header-top-right">
                        <div class="header-search-wrap header-search-wrap-two">
                            <form action="#">
                                <input type="text" placeholder="Search here . . .">
                                <button type="submit"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="menu-area menu-style-three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                @if (isset($profile))
                                <a href="{{route('home')}}">
                                    <img src="{{ asset(env('APP_URL') . 'uploads/profile/' . $profile->image) }}"
                                    alt="" class="img-responsive" />
                                </a>
                                @endif
                            </div>
                            <div class="logo d-none">
                                @if (isset($profile))
                                <a href="{{route('home')}}">
                                    <img src="{{ asset(env('APP_URL') . 'uploads/profile/' . $profile->image) }}"
                                    alt="" class="img-responsive" />
                                </a>
                                @endif
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active "><a href="{{route('home')}}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
                                    </li>
                                    <li><a href="#" class="{{ Route::currentRouteName() === 'post' ? 'active' : '' }}">Post</a>
                                    </li>
                                    <li class="menu-item-has-children"><a class="{{ Route::currentRouteName() === 'category' ? 'active' : '' }}">Categories</a>
                                        <ul class="sub-menu">
                                            @foreach($categories as $category)
                                            <li><a href="{{ route('category', ['category_slug' => $category->slug]) }}">{{$category->name}}</a></li>
                                          @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}" class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">Contact</a></li>
                                </ul>
                            </div>
                           
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                @if (isset($profile))
                                <a href="{{route('home')}}">
                                    <img src="{{ asset(env('APP_URL') . 'uploads/profile/' . $profile->image) }}"
                                    alt="" class="img-responsive" />
                                </a>
                                @endif
                            </div>
                            <div class="nav-logo d-none">
                                @if (isset($profile))
                                <a href="{{route('home')}}">
                                    <img src="{{ asset(env('APP_URL') . 'uploads/profile/' . $profile->image) }}"
                                    alt="" class="img-responsive" />
                                </a>
                                @endif
                            </div>
                            <div class="mobile-search">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    @if (isset($profile))
                                    <li><a href="{{$profile->facebookLink}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$profile->twitterLink}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$profile->linkdinlink}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$profile->instalink}}"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>
    </div>

    <!-- offCanvas-area -->
    <div class="offCanvas-wrap">
        <div class="offCanvas-body">
            <div class="offCanvas-toggle">
                <span></span>
                <span></span>
            </div>
            @if(isset($profile))
            <div class="offCanvas-content">
                <div class="offCanvas-logo logo">
                    <a href="{{route('home')}}" class="logo-dark"><img src="{{ asset(env('APP_URL') . 'uploads/profile/' . $profile->image) }}" alt="Logo"></a>
                </div>
                <p>{{$profile->description}}</p>
            </div>
            <div class="offCanvas-contact">
                <h4 class="title">Get In Touch</h4>
                <ul class="offCanvas-contact-list list-wrap">
                    <li><i class="fas fa-envelope-open"></i><a href="mailto:{{$profile->email}}">{{$profile->email}}</a></li>
                    <li><i class="fas fa-phone"></i>
                        <a href="tel:{{ $profile->pri_number }}">{{ $profile->pri_number }}</a>|
                        <a href="tel:{{ $profile->sec_number }}">{{ $profile->sec_number }}</a></li>
                    <li><i class="fas fa-map-marker-alt"></i> {{ $profile->address }}</li>
                </ul>
                <ul class="offCanvas-social list-wrap">
                    <li><a href="{{$profile->facebookLink}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{$profile->twitterLink}}"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{$profile->linkdinlink}}"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{$profile->instalink}}"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="offCanvas-overlay"></div>
    <!-- offCanvas-area-end -->
</header>
<!-- header-area-end -->