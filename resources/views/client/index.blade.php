   @extends('client.layouts.master')
   @section('content')
       <!-- main-area -->
       <main>

           <!-- banner-post-area -->
           <section class="banner-post-area-two pt-50 pb-30">
               <div class="container">
                   <div class="banner-post-inner">
                       <div class="row">
                           @if (isset($slider) && $slider)
                               <div class="col-70">
                                   <div class="banner-post-two big-post">
                                       <div class="banner-post-thumb-two">
                                           <a href="{{ route('post.show', ['post_slug' => $slider->slug]) }}">
                                               <img src="{{ env('APP_URL') . 'uploads/post/' . $slider->filename }}"
                                                   alt="{{ $slider->title }}" class="w-100 img-responsive" /></a>
                                       </div>
                                       <div class="banner-post-content-two">
                                           <a href="{{ route('category', ['category_slug' => $slider->category_slug]) }}" class="post-tag">{{ $slider->category_slug }}</a>
                                           <h2 class="post-title bold-underline"><a
                                                   href="{{ route('post.show', ['post_slug' => $slider->slug]) }}">{{ $slider->title }}</a>
                                           </h2>
                                           <div class="blog-post-meta white-blog-meta">
                                               <ul class="list-wrap">
                                                   <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a>
                                                   </li>
                                                   <li><i
                                                           class="flaticon-calendar"></i>{{ $slider->created_at->format('d F, Y') }}
                                                   </li>

                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           @else
                               No slider posts found.
                           @endif

                           <div class="col-30">
                               @if (isset($topsidebar) && $topsidebar)
                                   @foreach ($topsidebar as $index => $post)
                                       @if ($index < 3)
                                           <div class="banner-post-two small-post">
                                               <div class="banner-post-thumb-two">
                                                   <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"> <img
                                                           src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                           alt="{{ $post->title }}" class="w-100 img-responsive" /></a>
                                               </div>
                                               <div class="banner-post-content-two">
                                                   <a href="{{ route('category', ['category_slug' => $post->category_slug]) }}" class="post-tag">{{ $post->category_slug }}</a>
                                                   <h2 class="post-title"><a
                                                           href="{{ route('post.show', ['post_slug' => $post->slug]) }}">{{ $post->title }}</a>
                                                   </h2>
                                                   <div class="blog-post-meta white-blog-meta">
                                                       <ul class="list-wrap">
                                                           <li><i
                                                                   class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>
                                       @endif
                                   @endforeach
                               @endif
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- banner-post-area-end -->

           <!-- editor-post-area -->
           <section class="editor-post-area pt-50">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="section-title-wrap mb-30">
                               <div class="section-title">
                                   <h2 class="title">Editors Choice</h2>
                               </div>
                               <div class="editor-nav"></div>
                               <div class="section-title-line"></div>
                           </div>
                       </div>
                   </div>
                   <div class="editor-post-wrap">
                       @if (isset($iseditor) && $iseditor)
                           <div class="row editor-post-active">
                               @foreach ($iseditor as $index => $post)
                                   <div class="col-lg-4">
                                       <div class="editor-post-item">
                                           <div class="editor-post-thumb">
                                               <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"><img
                                                       src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                       alt=""></a>
                                           </div>
                                           <div class="editor-post-content">
                                               <a href="{{ route('category', ['category_slug' => $post->category_slug]) }}" class="post-tag-two">{{ $post->category_slug }}</a>
                                               <h2 class="post-title"><a
                                                       href="{{ route('post.show', ['post_slug' => $post->slug]) }}">{{ $post->title }}</a>
                                               </h2>
                                               <div class="blog-post-meta">
                                                   <ul class="list-wrap">
                                                       <li><i
                                                               class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}
                                                       </li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                       @endif
                   </div>
               </div>
           </section>
           <!-- editor-post-area-end -->

           <!-- trending-post-area -->
           <section class="trending-post-area pt-60 pb-60">
               <div class="container">
                   <div class="trending-post-inner">
                       <div class="row justify-content-center">
                           <div class="col-70">
                               <div class="recent-post-wrap">
                                   <div class="section-title-wrap mb-30">
                                       <div class="section-title">
                                           <h2 class="title">Recent Posts</h2>
                                       </div>
                                       <div class="view-all-btn">
                                           <a href="" class="link-btn">View All
                                               <span class="svg-icon">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                       fill="none">
                                                       <path
                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                           fill="currentColor" />
                                                       <path
                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                           fill="currentColor" />
                                                   </svg>
                                               </span>
                                           </a>
                                       </div>
                                       <div class="section-title-line"></div>
                                   </div>
                                   <div class="row">
                                       @if (isset($recentFirstPost))
                                           <div class="col-54">
                                               <div class="overlay-post-two">
                                                   <div class="overlay-post-thumb">
                                                       <a
                                                           href="{{ route('post.show', ['post_slug' => $recentFirstPost->slug]) }}">
                                                           <img src="{{ env('APP_URL') . 'uploads/post/' . $recentFirstPost->filename }}"
                                                               alt="{{ $recentFirstPost->title }}"
                                                               class="w-100 img-responsive" /></a>
                                                   </div>
                                                   <div class="overlay-post-content">
                                                       <a href="{{ route('category', ['category_slug' => $recentFirstPost->category_slug]) }}"
                                                           class="post-tag">{{ $recentFirstPost->category_slug }}</a>
                                                       <h2 class="post-title"><a
                                                               href="{{ route('post.show', ['post_slug' => $recentFirstPost->slug]) }}">{{ $recentFirstPost->title }}</a>
                                                       </h2>
                                                       <div class="blog-post-meta white-blog-meta">
                                                           <ul class="list-wrap">
                                                               <li><i class="flaticon-user"></i>by<a
                                                                       href="author.html">Admin</a></li>
                                                               <li><i
                                                                       class="flaticon-calendar"></i>{{ $recentFirstPost->created_at->format('d F, Y') }}
                                                               </li>

                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       @endif
                                       <div class="col-46">
                                           @if (isset($secondToForthPosts))
                                               @foreach ($secondToForthPosts as $index => $post)
                                                   @if ($index < 3)
                                                       <div class="horizontal-post-two">
                                                           <div class="horizontal-post-thumb">
                                                               <a
                                                                   href="{{ route('post.show', ['post_slug' => $post->slug]) }}">
                                                                   <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                                       alt="{{ $post->title }}"
                                                                       class="w-100 img-responsive" /></a>
                                                           </div>
                                                           <div class="horizontal-post-content">
                                                               <a href="{{ route('category', ['category_slug' => $post->category_slug]) }}"
                                                                   class="post-tag">{{ $post->category_slug }}</a>
                                                               <h2 class="post-title"><a
                                                                       href="{{ route('post.show', ['post_slug' => $post->slug]) }}">{{ $post->title }}</a>
                                                               </h2>
                                                               <div class="blog-post-meta">
                                                                   <ul class="list-wrap">
                                                                       <li><i
                                                                               class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   @endif
                                               @endforeach
                                           @endif
                                       </div>

                                   </div>
                               </div>

                               <div class="trending-post-wrap">
                                   <div class="section-title-wrap mb-30">
                                       <div class="section-title">
                                           <h2 class="title">Trending News</h2>
                                       </div>
                                       <div class="view-all-btn">
                                           <a href="blog.html" class="link-btn">View All
                                               <span class="svg-icon">
                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                       fill="none">
                                                       <path
                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                           fill="currentColor" />
                                                       <path
                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                           fill="currentColor" />
                                                   </svg>
                                               </span>
                                           </a>
                                       </div>
                                       <div class="section-title-line"></div>
                                   </div>
                                   <div class="row justify-content-center">
                                       <div class="col-lg-12">
                                           @if (isset($istrending))
                                               @php $firstPost = $istrending->shift(); @endphp
                                               <div class="trending-post">
                                                   <div class="trending-post-thumb">
                                                       <a
                                                           href="{{ route('post.show', ['post_slug' => $firstPost->slug]) }}">
                                                           <img src="{{ env('APP_URL') . 'uploads/post/' . $firstPost->filename }}"
                                                               alt="{{ $firstPost->title }}">
                                                       </a>
                                                   </div>
                                                   <div class="trending-post-content">
                                                       <a href="{{ route('category', ['category_slug' => $firstPost->category_slug]) }}"
                                                           class="post-tag">{{ $firstPost->category_slug }}</a>
                                                       <h2 class="post-title bold-underline">
                                                           <a
                                                               href="{{ route('post.show', ['post_slug' => $firstPost->slug]) }}">{{ $firstPost->title }}</a>
                                                       </h2>
                                                       <div class="blog-post-meta">
                                                           <ul class="list-wrap">
                                                               <li><i class="flaticon-user"></i>by <a
                                                                       href="">Admin</a></li>
                                                               <li><i
                                                                       class="flaticon-calendar"></i>{{ $firstPost->created_at->format('d F, Y') }}
                                                               </li>
                                                           </ul>
                                                       </div>
                                                       <div class="view-all-btn">
                                                           <a href="" class="link-btn">Read More
                                                               <span class="svg-icon">
                                                                   <svg xmlns="http://www.w3.org/2000/svg"
                                                                       viewBox="0 0 10 10" fill="none">
                                                                       <path
                                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                           fill="currentColor" />
                                                                       <path
                                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                           fill="currentColor" />
                                                                   </svg>
                                                               </span>
                                                           </a>
                                                       </div>
                                                   </div>
                                               </div>
                                           @endif
                                       </div>
                                       @if (isset($istrending))
                                           @foreach ($istrending as $index => $post)
                                               @if ($index < 3)
                                                   <div class="col-lg-4 col-md-6">
                                                       <div class="trending-post-two">
                                                           <div class="trending-post-thumb-two">
                                                               <a
                                                                   href="{{ route('post.show', ['post_slug' => $post->slug]) }}">
                                                                   <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                                       alt="{{ $post->title }}"
                                                                       class="w-100 img-responsive" />
                                                               </a>
                                                               <a href="{{ route('blog.category', $post->category_slug) }}"
                                                                   class="post-tag">{{ $post->category_slug }}</a>
                                                           </div>
                                                           <div class="trending-post-content-two">
                                                               <h2 class="post-title">
                                                                   <a
                                                                       href="{{ route('post.show', ['post_slug' => $post->category_slug]) }}">{{ $post->title }}</a>
                                                               </h2>
                                                               <div class="blog-post-meta">
                                                                   <ul class="list-wrap">
                                                                       <li><i class="flaticon-user"></i>by <a
                                                                               href="">Admin</a></li>
                                                                       <li><i
                                                                               class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               @endif
                                           @endforeach
                                       @endif
                                   </div>
                               </div>
                           </div>
                           <div class="col-30">
                               <div class="sidebar-wrap">
                                   {{-- <div class="sidebar-widget sidebar-widget-two">
                                       <div class="sidebar-newsletter">
                                           <div class="icon"><i class="flaticon-envelope"></i></div>
                                           <h4 class="title">Daily Newsletter</h4>
                                           <p>Get all the top stories from Blogs to keep track.</p>
                                           <div class="sidebar-newsletter-form">
                                               <form action="#">
                                                   <input type="text" placeholder="Enter your e-mail">
                                                   <button type="submit">
                                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                           fill="none">
                                                           <path
                                                               d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                               fill="currentcolor" />
                                                       </svg>
                                                   </button>
                                               </form>
                                           </div>
                                       </div>
                                   </div> --}}
                                   <div class="sidebar-widget sidebar-widget-two">
                                       <div class="widget-title mb-30">
                                           <h6 class="title">Top Categories</h6>
                                           <div class="section-title-line"></div>
                                       </div>
                                       <div class="sidebar-categories">
                                           <ul class="list-wrap">
                                               @foreach ($categories as $category)
                                                   <li>
                                                       <a href="{{ route('category', ['category_slug' => $category->slug]) }}"
                                                           data-background="{{ env('APP_URL') . 'uploads/project_cat/' . $category->image }}">
                                                           <span
                                                               class="post-tag post-tag-three">{{ $category->name }}</span>
                                                           <span class="right-arrow">
                                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                   fill="none">
                                                                   <path
                                                                       d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                       fill="currentcolor"></path>
                                                                   <path
                                                                       d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z"
                                                                       fill="currentcolor"></path>
                                                               </svg>
                                                           </span>
                                                       </a>
                                                   </li>
                                               @endforeach
                                           </ul>
                                       </div>
                                   </div>
                                   @livewire('post.popular-post')
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- trending-post-area-end -->

           <!-- overlay-post-area -->
           <section class="overlay-post-area fix">
               <div class="container-fluid p-0">
                   <div class="overlay-post-item-wrap">
                       <div class="row overlay-post-active">
                           @foreach ($sliders as $slider)
                               <div class="col-lg-3">
                                   <div class="overlay-post-three">
                                       <div class="overlay-post-thumb-three">
                                           <a href="{{ route('post.show', ['post_slug' => $slider->slug]) }}"><img
                                                   src="{{ env('APP_URL') . 'uploads/post/' . $slider->filename }}"
                                                   alt="{{ $slider->title }}" class="w-100 img-responsive" /></a>
                                       </div>
                                       <div class="overlay-post-content-three">
                                           <a href="{{ route('category', ['category_slug' => $slider->category_slug]) }}" class="post-tag">{{ $slider->category_slug }}</a>
                                           <h2 class="post-title bold-underline"><a
                                                   href="{{ route('post.show', ['post_slug' => $slider->slug]) }}">{{ $slider->title }}</a>
                                           </h2>
                                           <div class="blog-post-meta white-blog-meta">
                                               <ul class="list-wrap">
                                                   <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                   <li><i
                                                           class="flaticon-calendar"></i>{{ $slider->created_at->format('d F, Y') }}
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           @endforeach
                       </div>
                   </div>
               </div>
           </section>
           <!-- overlay-post-area-end -->

           <!-- weekly-post-area -->
           <section class="weekly-post-area-two pt-60 pb-30">
               <div class="container">
                   <div class="weekly-post-inner-wrap">
                       <div class="row justify-content-center">
                           <div class="col-100">
                               <div class="section-title-wrap mb-30">
                                   <div class="section-title">
                                       <h2 class="title">Weekly Best News</h2>
                                   </div>
                                   <div class="view-all-btn">
                                       <a href="blog.html" class="link-btn">View All
                                           <span class="svg-icon">
                                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                   fill="none">
                                                   <path
                                                       d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                       fill="currentColor" />
                                                   <path
                                                       d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                       fill="currentColor" />
                                               </svg>
                                           </span>
                                       </a>
                                   </div>
                                   <div class="section-title-line"></div>
                               </div>
                               <div class="weekly-post-item-wrap-two">
                                   @if (isset($weeklypost))
                                       @foreach ($weeklypost as $index => $post)
                                           @if ($index < 4)
                                               <div class="weekly-post-item weekly-post-two">
                                                   <div class="weekly-post-thumb">
                                                       <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"><img
                                                               src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                               alt=""></a>
                                                   </div>
                                                   <div class="weekly-post-content">
                                                       <a href="{{ route('category', ['category_slug' => $category->slug]) }}"
                                                           class="post-tag">{{ $post->category_slug }}</a>
                                                       <h2 class="post-title"><a
                                                               href="{{ route('post.show', ['post_slug' => $post->slug]) }}">{{ $post->title }}</a>
                                                       </h2>
                                                       <div class="blog-post-meta">
                                                           <ul class="list-wrap">
                                                               <li><i
                                                                       class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}
                                                               </li>
                                                           </ul>
                                                       </div>
                                                       <p>{!! Str::words($post->description, 40, ' ...') !!}</p>
                                                       <div class="view-all-btn">
                                                           <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"
                                                               class="link-btn">Read More
                                                               <span class="svg-icon">
                                                                   <svg xmlns="http://www.w3.org/2000/svg"
                                                                       viewBox="0 0 10 10" fill="none">
                                                                       <path
                                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                           fill="currentColor" />
                                                                       <path
                                                                           d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                           fill="currentColor" />
                                                                   </svg>
                                                               </span>
                                                           </a>
                                                       </div>
                                                   </div>
                                               </div>
                                           @endif
                                       @endforeach
                                   @endif
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
               </div>
           </section>
           <!-- weekly-post-area-end -->

           <!-- newsletter-area -->
           <section class="newsletter-area-three">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="newsletter-wrap-three">
                               <div class="newsletter-content">
                                   <h2 class="title">Get Our Latest News & Update</h2>
                               </div>
                               <div class="newsletter-form">
                                   <form action="#">
                                       <div class="form-grp">
                                           <input type="text" placeholder="Name">
                                       </div>
                                       <div class="form-grp">
                                           <input type="email" placeholder="E-mail">
                                       </div>
                                       <button type="submit" class="btn">Submit Now</button>
                                   </form>
                               </div>
                               <div class="newsletter-social">
                                   <h4 class="title">Follow Us:</h4>
                                   <ul class="list-wrap">
                                       <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                       <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                       <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- newsletter-area-end -->

       </main>
       <!-- main-area-end -->
   @endsection
