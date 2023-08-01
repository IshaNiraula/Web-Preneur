   @extends('client.layouts.master')
   @section('content')
       <!-- Start Linka Top News Area -->
       {{-- <section class="linka-top-news-area pt-100 pb-70">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="single-top-news">
                                   <div class="top-news-img">
                                       <a href="post-style-one.html">
                                           <img src="assets/img/home-four/linka-top-news/1.jpg" alt="Image">
                                       </a>
                                       <span>Politics</span>
                                   </div>

                                   <div class="linka-news-content">
                                       <a href="post-style-one.html">
                                           <h3>What to Do if You Overspent During the Holidays</h3>
                                       </a>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12 col-md-6">
                               <div class="single-top-news">
                                   <div class="top-news-img">
                                       <a href="post-style-one.html">
                                           <img src="assets/img/home-four/linka-top-news/2.jpg" alt="Image">
                                       </a>
                                       <span>Politics</span>
                                   </div>

                                   <div class="linka-news-content">
                                       <a href="post-style-one.html">
                                           <h3>What to Do if You Overspent During the Holidays</h3>
                                       </a>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-6">
                       <div class="single-top-news">
                           <div class="top-news-img">
                               <a href="post-style-one.html">
                                   <img src="assets/img/home-four/linka-top-news/3.jpg" alt="Image">
                               </a>
                               <span>Politics</span>
                           </div>

                           <div class="linka-news-content">
                               <a href="post-style-one.html">
                                   <h3>Amid protests, Pentagon Squirms Under Pressure to do Trump's.</h3>
                               </a>
                               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam assumenda praesentium ut
                                   quo vel autem quod, nesciunt id et mollitia consequatur ipsam.</p>

                               <ul>
                                   <li>
                                       <a href="#" class="admin">
                                           <i class="bx bx-user"></i>
                                           By Jhona Walker
                                       </a>
                                   </li>
                                   <li>
                                       <i class="bx bx-calendar"></i>
                                       25 Jun 2020
                                   </li>
                               </ul>

                               <a href="post-style-one.html" class="read-more">
                                   Read More
                               </a>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-3">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="single-top-news">
                                   <div class="top-news-img">
                                       <a href="post-style-one.html">
                                           <img src="assets/img/home-four/linka-top-news/4.jpg" alt="Image">
                                       </a>
                                       <span>Politics</span>
                                   </div>

                                   <div class="linka-news-content">
                                       <a href="post-style-one.html">
                                           <h3>What to Do if You Overspent During the Holidays</h3>
                                       </a>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-12 col-md-6">
                               <div class="single-top-news">
                                   <div class="top-news-img">
                                       <a href="post-style-one.html">
                                           <img src="assets/img/home-four/linka-top-news/5.jpg" alt="Image">
                                       </a>
                                       <span>Politics</span>
                                   </div>

                                   <div class="linka-news-content">
                                       <a href="post-style-one.html">
                                           <h3>What to Do if You Overspent During the Holidays</h3>
                                       </a>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}
       <!-- End Linka Top News Area -->

       <!-- Start Latest Project Area -->
       {{-- <section class="latest-project-area pt-100 pb-70">
           <div class="container">
               <div class="section-title">
                   <h2>Digital Marketing</h2>
               </div>
               <div class="row">
                   <div class="col-lg-8">
                       <div class="row">
                           @foreach ($top_posts as $post)
                               <div class="col-lg-6 col-md-6">
                                   <div class="single-featured">
                                       <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}" class="blog-img">
                                           <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                               alt="{{ $post->title }}" class="w-100" />
                                           <span>{{ $post->category_slug }}</span>
                                       </a>

                                       <div class="featured-content">
                                           <ul>
                                               <li>
                                                   <a href="#" class="admin">
                                                       <i class="bx bx-user"></i>
                                                       Admin By Chandan Thakur
                                                   </a>
                                               </li>
                                               <li>
                                                   <i class="bx bx-calendar"></i>
                                                   {{ $post->created_at->toDateString() }}
                                               </li>
                                           </ul>

                                           <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}">
                                               <h3>{{ $post->title }}</h3>
                                           </a>

                                           <p> {!! Str::words($post->description, 15, ' ...') !!}</p>

                                           <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}"
                                               class="read-more">Read More</a>
                                       </div>
                                   </div>
                               </div>
                           @endforeach
                       </div>
                   </div>

                   <div class="col-lg-4">
                       <div class="latest-project-right-sidebar">

                           @foreach ($sidebarPosts as $post)
                               <div class="right-blog-editor media align-items-center">
                                   <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}">
                                       <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                           alt="{{ $post->title }}" class="sidebar-img" />
                                   </a>

                                   <div class="right-blog-content">
                                       <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}">
                                           <h3>{{ $post->title }}</h3>
                                       </a>

                                       <span>
                                           <i class="bx bx-calendar"></i>
                                           {{ $post->created_at->toDateString() }}
                                       </span>
                                   </div>
                               </div>
                           @endforeach

                           <div class="light-news mb-30">
                               <img src="assets/img/home-four/recent-news/8.jpg" alt="Image">

                               <div class="light-news-content">
                                   <a href="post-style-one.html">
                                       <h3>What Would It Take To Shut-down the Internet</h3>
                                   </a>

                                   <ul>
                                       <li>
                                           <a href="#" class="admin">
                                               <i class="bx bx-user"></i>
                                               By Admon Altk Walker
                                           </a>
                                       </li>
                                       <li>
                                           <i class="bx bx-calendar"></i>
                                           30 Jun 2020
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}
       <!-- End Latest Project Area -->

       <!-- Start Adds Area -->
       {{-- <div class="adds-area pb-100">
           <div class="container">
               <a href="#">
                   <img src="assets/img/home-three/adds.jpg" alt="Image">
               </a>
           </div>
       </div> --}}
       <!-- End Adds Area -->
       <section class="main-inspiration-area pb-100">
           <div class="container">
               {{-- <div class="section-title text-center">
                   <h2>Web Development</h2>
               </div> --}}
               <div class="row">
                   @foreach ($web_posts as $post)
                       <div class="col-lg-4 col-md-6 plr-5">
                           <div class="single-main-blog-item mb-8">
                               <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                   alt="{{ $post->title }}" class="sidebar-img" />
                               <span class="blog-link">
                                   {{ $post->category_slug }}
                               </span>

                               <div class="main-blog-content">
                                   <a href="{{route('post.show',['category_slug' => $post->category_slug, 'post_slug' => $post->slug])}}">
                                       <h3>{{ $post->title }}</h3>
                                   </a>

                                   <ul>
                                       <li>
                                           <a class="admin" href="#">
                                               <i class="bx bx-user"></i>
                                               By Admin
                                           </a>
                                       </li>
                                       <li>
                                           <i class="bx bx-calendar"></i>
                                           {{ $post->created_at->toDateString() }}
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>
       </section>
       <!-- Start Latest Project Area -->
       {{-- <section class="latest-project-area four pt-100 pb-70">
           <div class="container">
               <div class="section-title">
                   <h2>Politics News</h2>
               </div>

               <div class="row">
                   @foreach ($sl_posts as $post)
                       <div class="col-lg-4 col-md-6">
                           <div class="single-featured">
                               <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}" class="blog-img">
                                   <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                       alt="{{ $post->title }}" class="w-100" />
                                   <span>{{ $post->category_slug }}</span>
                               </a>
                               <div class="featured-content">
                                   <ul>
                                       <li>
                                           <a href="#" class="admin">
                                               <i class="bx bx-user"></i>
                                               Admin By Chandan Thakur
                                           </a>
                                       </li>
                                       <li>
                                           <i class="bx bx-calendar"></i>
                                           {{ $post->created_at->toDateString() }}
                                       </li>
                                   </ul>

                                   <a href="{{ route('post.show',['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}">
                                       <h3>{{ $post->title }}</h3>
                                   </a>

                                   <a href="{{ route('post.show',['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}" class="read-more">Read
                                       More</a>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>
       </section> --}}
       <!-- End Latest Project Area -->

       <!-- Start Economics News Area -->
       {{-- <section class="economics-area pb-70">
           <div class="container">
               <div class="section-title">
                   <h2>Current Events</h2>
               </div>

               <div class="row">
                   <div class="col-lg-6">
                       <div class="single-featured">
                           <a href="post-style-one.html">
                               <img src="assets/img/home-four/events/1.jpg" alt="Image">
                           </a>

                           <div class="featured-content">
                               <a href="post-style-one.html">
                                   <h3>And a Lonely Stranger Has Spoke To Me Ever Science of Technology</h3>
                               </a>

                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam eveniet debitis
                                   tenetur consectetur adipisicing elit Lorem ipsum dolor sit.</p>

                               <ul class="mb-0">
                                   <li>
                                       <a href="#" class="admin">
                                           <i class="bx bx-user"></i>
                                           Admin By Jhona Walker
                                       </a>
                                   </li>
                                   <li>
                                       <i class="bx bx-calendar"></i>
                                       25 Jun 2020
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-6">
                       <div class="row">
                           <div class="col-lg-6 col-md-6">
                               <div class="right-blog-editor pt-0 pb-0">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/events/2.jpg" alt="Image">
                                   </a>

                                   <a href="blog-detauls.html">
                                       <h3>Facebook takes down white nationalist and fake anita account</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       25 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                               <div class="right-blog-editor pt-0 pb-0">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/events/3.jpg" alt="Image">
                                   </a>

                                   <a href="blog-detauls.html">
                                       <h3>Understanding your dog for dummies cheatsheet</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       26 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                               <div class="right-blog-editor pt-0 pb-0">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/events/4.jpg" alt="Image">
                                   </a>

                                   <a href="blog-detauls.html">
                                       <h3>Is the Natural Hair Movement Coming to an End?</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       27 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="col-lg-6 col-md-6">
                               <div class="right-blog-editor pt-0 pb-0">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/events/5.jpg" alt="Image">
                                   </a>

                                   <a href="blog-detauls.html">
                                       <h3>Genderless Kei – Japan’s Hot New Fashion Trend</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       27 Jun 2020
                                   </span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}
       <!-- End Economics News Area -->

       <!-- Start Latest Article Area -->
       {{-- <section class="latest-article-area pb-70">
           <div class="container">
               <div class="section-title">
                   <h2>Latest Article</h2>
               </div>

               <div class="row">
                   <div class="col-lg-8">
                       <div class="single-featured article">
                           <div class="row align-items-center">
                               <div class="col-lg-5 col-md-6">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/article/1.jpg" alt="Image">
                                   </a>
                               </div>

                               <div class="col-lg-7 col-md-6">
                                   <div class="featured-content">
                                       <span>
                                           Politics
                                       </span>
                                       <a href="post-style-one.html">
                                           <h3>The Scariest Moment is Always Just Before You Start</h3>
                                       </a>

                                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, cum eligendi
                                           placeat, nemo aliquam ex esse tenetur illo beatae temporibus ipsum</p>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   Admin By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="single-featured article">
                           <div class="row align-items-center">
                               <div class="col-lg-5 col-md-6">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/article/2.jpg" alt="Image">
                                   </a>
                               </div>

                               <div class="col-lg-7 col-md-6">
                                   <div class="featured-content">
                                       <span>
                                           Army
                                       </span>
                                       <a href="post-style-one.html">
                                           <h3>Do You Want Stronger Friendships, a More Balanced Mindset?</h3>
                                       </a>

                                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, cum eligendi
                                           placeat, nemo aliquam ex esse tenetur illo beatae temporibus ipsum</p>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   Admin By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="single-featured article">
                           <div class="row align-items-center">
                               <div class="col-lg-5 col-md-6">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/article/3.jpg" alt="Image">
                                   </a>
                               </div>

                               <div class="col-lg-7 col-md-6">
                                   <div class="featured-content">
                                       <span>
                                           Tech
                                       </span>
                                       <a href="post-style-one.html">
                                           <h3>The Expert’s Guide to Surviving Long Haul Flights</h3>
                                       </a>

                                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, cum eligendi
                                           placeat, nemo aliquam ex esse tenetur illo beatae temporibus ipsum</p>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   Admin By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="single-featured article">
                           <div class="row align-items-center">
                               <div class="col-lg-5 col-md-6">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/article/4.jpg" alt="Image">
                                   </a>
                               </div>

                               <div class="col-lg-7 col-md-6">
                                   <div class="featured-content">
                                       <span>
                                           News
                                       </span>
                                       <a href="post-style-one.html">
                                           <h3>Barack Obama’s year in film: from The Irishman to Amazing</h3>
                                       </a>

                                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, cum eligendi
                                           placeat, nemo aliquam ex esse tenetur illo beatae temporibus ipsum</p>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   Admin By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="single-featured article">
                           <div class="row align-items-center">
                               <div class="col-lg-5 col-md-6">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/article/5.jpg" alt="Image">
                                   </a>
                               </div>

                               <div class="col-lg-7 col-md-6">
                                   <div class="featured-content">
                                       <span>
                                           Television
                                       </span>
                                       <a href="post-style-one.html">
                                           <h3>Do You Want Stronger Friendships, a More Balanced</h3>
                                       </a>

                                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, cum eligendi
                                           placeat, nemo aliquam ex esse tenetur illo beatae temporibus ipsum</p>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   Admin By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="single-featured article">
                           <div class="row align-items-center">
                               <div class="col-lg-5 col-md-6">
                                   <a href="post-style-one.html">
                                       <img src="assets/img/home-four/article/1.jpg" alt="Image">
                                   </a>
                               </div>

                               <div class="col-lg-7 col-md-6">
                                   <div class="featured-content">
                                       <span>
                                           Politics
                                       </span>
                                       <a href="post-style-one.html">
                                           <h3>The Scariest Moment is Always Just Before You Start</h3>
                                       </a>

                                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, cum eligendi
                                           placeat, nemo aliquam ex esse tenetur illo beatae temporibus ipsum</p>

                                       <ul>
                                           <li>
                                               <a href="#" class="admin">
                                                   <i class="bx bx-user"></i>
                                                   Admin By Jhona Walker
                                               </a>
                                           </li>
                                           <li>
                                               <i class="bx bx-calendar"></i>
                                               25 Jun 2020
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-4">
                       <div class="right-blog-article-wrap-three">
                           <h3 class="latest-post-sub-title">Latest Post</h3>

                           <div class="right-blog-editor media align-items-center">
                               <a href="post-style-one.html">
                                   <img src="assets/img/home-four/article/6.jpg" alt="Image">
                               </a>

                               <div class="right-blog-content">
                                   <a href="blog-detauls.html">
                                       <h3>Advantage & Disadvantages of having Matchbook</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       25 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="right-blog-editor media align-items-center">
                               <a href="post-style-one.html">
                                   <img src="assets/img/home-four/article/7.jpg" alt="Image">
                               </a>

                               <div class="right-blog-content">
                                   <a href="blog-detauls.html">
                                       <h3>The Scariest Moment is Always Just Before You</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       26 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="right-blog-editor media align-items-center">
                               <a href="post-style-one.html">
                                   <img src="assets/img/home-four/article/8.jpg" alt="Image">
                               </a>

                               <div class="right-blog-content">
                                   <a href="blog-detauls.html">
                                       <h3>The Expert's Guide To Surviving long Haul Flights</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       27 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="right-blog-editor media align-items-center">
                               <a href="post-style-one.html">
                                   <img src="assets/img/home-four/article/9.jpg" alt="Image">
                               </a>

                               <div class="right-blog-content">
                                   <a href="blog-detauls.html">
                                       <h3>Advantage & Disadvantages of having Matchbook</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       25 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="right-blog-editor media align-items-center">
                               <a href="post-style-one.html">
                                   <img src="assets/img/home-four/article/10.jpg" alt="Image">
                               </a>

                               <div class="right-blog-content">
                                   <a href="blog-detauls.html">
                                       <h3>The Scariest Moment is Always Just Before You</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       26 Jun 2020
                                   </span>
                               </div>
                           </div>

                           <div class="right-blog-editor media align-items-center">
                               <a href="post-style-one.html">
                                   <img src="assets/img/home-four/article/11.jpg" alt="Image">
                               </a>

                               <div class="right-blog-content">
                                   <a href="blog-detauls.html">
                                       <h3>The Expert's Guide To Surviving long Haul Flights</h3>
                                   </a>

                                   <span>
                                       <i class="bx bx-calendar"></i>
                                       27 Jun 2020
                                   </span>
                               </div>
                           </div>
                       </div>

                       <div class="categories-area">
                           <h3 class="categories-title">
                               Categories
                           </h3>

                           <div class="categories-item bg-1">
                               <a href="#" class="default-btn">
                                   Politics News
                               </a>
                           </div>
                           <div class="categories-item bg-2">
                               <a href="#" class="default-btn">
                                   Business
                               </a>
                           </div>
                           <div class="categories-item bg-3">
                               <a href="#" class="default-btn">
                                   Breaking News
                               </a>
                           </div>
                           <div class="categories-item bg-4 mb-0">
                               <a href="#" class="default-btn">
                                   Creative
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}
       <!-- End Latest Article Area -->
   @endsection
