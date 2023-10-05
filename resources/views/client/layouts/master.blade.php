<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @yield('metadata')
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Owl Magnific Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V92PJHRNZ1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
      
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-V92PJHRNZ1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7626929454424760"
        crossorigin="anonymous"></script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    @stack('styles')
</head>

<body>
    <div>
        @include('client.layouts.header')
      
        <div class="">
            @yield('content')
        </div>
        @include('client.layouts.footer')
        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-chevrons-up'></i>
            <i class='bx bx-chevrons-up'></i>
        </div>
        <!-- End Go Top Area -->
    </div>

    <!-- Jquery Min JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Meanmenu Min JS -->
    <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
    <!-- Wow Min JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Owl Magnific Min JS -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice Select Min JS -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            "use strict";

            var menuActive = false;
            var header = $('.header');
            setHeader();
            initCustomDropdown();
            initPageMenu();

            function setHeader() {

                if (window.innerWidth > 991 && menuActive) {
                    closeMenu();
                }
            }

            function initCustomDropdown() {
                if ($('.custom_dropdown_placeholder').length && $('.custom_list').length) {
                    var placeholder = $('.custom_dropdown_placeholder');
                    var list = $('.custom_list');
                }

                placeholder.on('click', function(ev) {
                    if (list.hasClass('active')) {
                        list.removeClass('active');
                    } else {
                        list.addClass('active');
                    }

                    $(document).one('click', function closeForm(e) {
                        if ($(e.target).hasClass('clc')) {
                            $(document).one('click', closeForm);
                        } else {
                            list.removeClass('active');
                        }
                    });

                });

                $('.custom_list a').on('click', function(ev) {
                    ev.preventDefault();
                    var index = $(this).parent().index();

                    placeholder.text($(this).text()).css('opacity', '1');

                    if (list.hasClass('active')) {
                        list.removeClass('active');
                    } else {
                        list.addClass('active');
                    }
                });

                $('select').on('change', function(e) {
                    placeholder.text(this.value);

                    $(this).animate({
                        width: placeholder.width() + 'px'
                    });
                });
            }

            function initPageMenu() {
                if ($('.page_menu').length && $('.page_menu_content').length) {
                    var menu = $('.page_menu');
                    var menuContent = $('.page_menu_content');
                    var menuTrigger = $('.menu_trigger');

                    //Open / close page menu
                    menuTrigger.on('click', function() {
                        if (!menuActive) {
                            openMenu();
                        } else {
                            closeMenu();
                        }
                    });

                    //Handle page menu
                    if ($('.page_menu_item').length) {
                        var items = $('.page_menu_item');
                        items.each(function() {
                            var item = $(this);
                            if (item.hasClass("has-children")) {
                                item.on('click', function(evt) {
                                    evt.preventDefault();
                                    evt.stopPropagation();
                                    var subItem = item.find('> ul');
                                    if (subItem.hasClass('active')) {
                                        subItem.toggleClass('active');
                                        TweenMax.to(subItem, 0.3, {
                                            height: 0
                                        });
                                    } else {
                                        subItem.toggleClass('active');
                                        TweenMax.set(subItem, {
                                            height: "auto"
                                        });
                                        TweenMax.from(subItem, 0.3, {
                                            height: 0
                                        });
                                    }
                                });
                            }
                        });
                    }
                }
            }

            function openMenu() {
                var menu = $('.page_menu');
                var menuContent = $('.page_menu_content');
                TweenMax.set(menuContent, {
                    height: "auto"
                });
                TweenMax.from(menuContent, 0.3, {
                    height: 0
                });
                menuActive = true;
            }

            function closeMenu() {
                var menu = $('.page_menu');
                var menuContent = $('.page_menu_content');
                TweenMax.to(menuContent, 0.3, {
                    height: 0
                });
                menuActive = false;
            }


        });
    </script>
    @stack('scripts')
</body>

</html>
