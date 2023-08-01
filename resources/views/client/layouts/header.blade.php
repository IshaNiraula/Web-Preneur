 <!-- Start Header Area -->
 {{-- <header class="header-area">
     <div class="top-header">
         <div class="container">
             <span>New</span>
             <p> Breaking news - U.S., China Move on From Year of the Spat: Global Economy Week!</p>
             <a href="post-style-one.html" class="read-more">
                 Read More
             </a>
         </div>
     </div>

     <div class="bottom-header">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-4">
                     <ul>
                         <li>
                             <a href="#"><i class="bx bxl-facebook"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="bx bxl-twitter"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="bx bxl-instagram"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="bx bxl-youtube"></i></a>
                         </li>
                     </ul>
                 </div>

                 <div class="col-lg-4 col-md-4">
                     <a class="logo-title" href="index.html">The Linka News</a>
                 </div>

                 <div class="col-lg-4 col-md-4">
                     <div class="others-option">

                         <div class="option-item">
                             <i class="search-btn bx bx-search"></i>
                             <i class="close-btn bx bx-x"></i>

                             <div class="search-overlay search-popup">

                                 <div class='search-box'>
                                     <form class="search-form">
                                         <input class="search-input" name="search" placeholder="Search" type="text">

                                         <button class="search-button" type="submit"><i
                                                 class="bx bx-search"></i></button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header> --}}

 {{-- <div class="navbar-area navbar-area-four">
     <!-- Menu For Mobile Device -->
     <div class="mobile-nav">
         <a href="index.html" class="logo">
             <img src="assets/img/logo.png" alt="Logo">
         </a>
     </div>

     <!-- Menu For Desktop Device -->
     <div class="main-nav">
         <nav class="navbar navbar-expand-md">
             <div class="container">
                 <div class="collapse navbar-collapse mean-menu">
                     <ul class="navbar-nav m-auto">
                         @foreach ($categories as $category)
                             <li class="nav-item">
                                 <a href="#" class="nav-link active">
                                     {{ $category->name }}
                                 </a>
                             </li>
                         @endforeach
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </div> --}}
 <!-- End Header Area -->
 <!-- Start Navbar Area -->
 <div class="navbar-area navbar-area-two">
     <!-- Menu For Mobile Device -->
     <div class="mobile-nav">
         <a href="{{route('home')}}" class="logo">
             {{-- <img src="assets/img/logo.png" alt="Logo"> --}}
             <h3>@devchandant</h3>
         </a>
     </div>

     <!-- Menu For Desktop Device -->
     <div class="main-nav">
         <nav class="navbar navbar-expand-md">
             <div class="container-fluid">
                 {{-- <div class="burger-menu">
                     <i class='bx bx-menu'></i>
                 </div> --}}
                 <a class="navbar-brand" href="{{route('home')}}">
                     {{-- <img src="webwondors-01.png" alt="Logo" style="width:15%"> --}}
                     <h3>@devchandant</h3>
                 </a>

                 <div class="collapse navbar-collapse mean-menu">
                     <ul class="navbar-nav m-auto">
                         @foreach ($categories as $category)
                             <li class="nav-item">
                                 <a href="{{route('blog.category',['slug' => $category->slug])}}" class="nav-link">
                                     {{ $category->name }}
                                 </a>
                             </li>
                         @endforeach
                     </ul>
                     <!-- Start Other Option -->
                     {{-- <div class="others-option">
                         <div class="follow">
                             <span>Follow</span>
                             <i class="bx bx-chevron-down"></i>

                             <ul>
                                 <li>
                                     <a href="#" target="_blank">
                                         <i class="bx bxl-facebook"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#" target="_blank">
                                         <i class="bx bxl-twitter"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#" target="_blank">
                                         <i class="bx bxl-instagram"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#" target="_blank">
                                         <i class="bx bxl-youtube"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="#" target="_blank">
                                         <i class="bx bxl-linkedin"></i>
                                     </a>
                                 </li>
                             </ul>
                         </div>

                         <div class="option-item">
                             <i class="search-btn bx bx-search"></i>
                             <i class="close-btn bx bx-x"></i>

                             <div class="search-overlay search-popup">
                                 <div class='search-box'>
                                     <form class="search-form">
                                         <input class="search-input" name="search" placeholder="Search"
                                             type="text">

                                         <button class="search-button" type="submit"><i
                                                 class="bx bx-search"></i></button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div> --}}
                     <!-- End Other Option -->
                 </div>
             </div>
         </nav>
     </div>
 </div>
 <!-- End Navbar Area -->

 <!-- Sidebar Modal Area -->
 {{-- <div class="sidebar-modal">
     <div class="sidebar-modal-inner">
         <div class="sidebar-about-area">
             <div class="title">
                 <h2>About Us</h2>
                 <p>We believe brand interaction is key in communication. Real innovations and a positive customer
                     experience are the heart of successful communication. No fake products and services. The customer
                     is king, their lives and needs are the inspiration.</p>
             </div>
         </div>

         <div class="sidebar-instagram-feed">
             <h2>Blog</h2>

             <ul>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/1.jpg" alt="image">
                     </a>
                 </li>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/2.jpg" alt="image">
                     </a>
                 </li>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/3.jpg" alt="image">
                     </a>
                 </li>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/4.jpg" alt="image">
                     </a>
                 </li>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/5.jpg" alt="image">
                     </a>
                 </li>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/6.jpg" alt="image">
                     </a>
                 </li>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/7.jpg" alt="image">
                     </a>
                 </li>
                 <li>
                     <a href="post-style-one.html">
                         <img src="assets/img/home-two/sidebar-img/8.jpg" alt="image">
                     </a>
                 </li>
             </ul>
         </div>

         <div class="sidebar-contact-area">
             <div class="contact-info">
                 <div class="contact-info-content">
                     <h2>
                         <a href="tel:+61-821-456">+61-821-456</a>
                         <span>OR</span>
                         <a
                             href="https://templates.envytheme.com/cdn-cgi/l/email-protection#bcd4d9d0d0d3fcc8ced5dfd992dfd3d1"><span
                                 class="__cf_email__"
                                 data-cfemail="a6cec3cacac9e6d2d4cfc5c388c5c9cb">[email&#160;protected]</span></a>
                     </h2>

                     <ul class="social">
                         <li>
                             <a href="#" target="_blank">
                                 <i class="bx bxl-facebook"></i>
                             </a>
                         </li>
                         <li>
                             <a href="#" target="_blank">
                                 <i class="bx bxl-twitter"></i>
                             </a>
                         </li>
                         <li>
                             <a href="#" target="_blank">
                                 <i class="bx bxl-linkedin"></i>
                             </a>
                         </li>
                         <li>
                             <a href="#" target="_blank">
                                 <i class="bx bxl-youtube"></i>
                             </a>
                         </li>
                         <li>
                             <a href="#" target="_blank">
                                 <i class="bx bxl-instagram"></i>
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>

         <span class="close-btn sidebar-modal-close-btn">
             <i class="bx bx-x"></i>
         </span>
     </div>
 </div> --}}
 <!-- End Sidebar Modal Area -->
