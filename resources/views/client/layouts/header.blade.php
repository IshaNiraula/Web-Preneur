
    <header class="header">

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row justify-content-between ">
                        <div class="top_bar_contact_items">
                            <div class="top_bar_icon">
                                <i class="fas fa-phone"></i><a href="tel:1234567890">1234567890</a></div>
                            <div class="top_bar_icon"><i class="fas fa-envelope"></i><a
                                href="mailto:blog@gmail.com">blog@gmail.com</a></div>
                        </div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_user">
                                <div><a href="#"><i class="fab fa-facebook"></i></a></div>
                                <div><a href="#"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="{{ route('home') }}">Blog</a></div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <input type="search" required="required" class="header_search_input"
                                            placeholder="Search for products...">
                                        <div class="custom_dropdown" style="display: none;">
                                            <div class="custom_dropdown_list">
                                                <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="submit" class="header_search_button trans_300"
                                            value="Submit"><img
                                                src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png"
                                                alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">
        
                        <div class="main_nav_content d-flex flex-row justify-content-between">
        
                            <div class="main_nav_menu">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Game</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Game Option 1</a></li>
                                            <li><a href="#">Game Option 2</a></li>
                                            <li><a href="#">Game Option 3</a></li>
                                            <li><a href="#">Game Option 4</a></li>
                                            <li><a href="#">Game Option 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
                                    <div><a href="#">Register</a></div>
                                    <div><a href="#">Login</a></div>
                                </div>
                            </div>
        
                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        {{-- <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page_menu_content">

                            <div class="page_menu_search">
                                <form action="#">
                                    <input type="search" required="required" class="page_menu_search_input"
                                        placeholder="Search for products...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item">
                                    <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item has-children">
                                            <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="blog.html">blog<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item"><a href="contact.html">contact<i
                                            class="fa fa-angle-down"></i></a></li>
                            </ul>

                            <div class="menu_contact">
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/phone_white.png" alt="">
                                    </div>+38 068 005 3570
                                </div>
                                <div class="menu_contact_item">
                                    <div class="menu_contact_icon"><img src="images/mail_white.png" alt="">
                                    </div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </header>
