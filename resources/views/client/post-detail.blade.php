@extends('client.layouts.master')
{{-- @section('metadata')
    <title>{{ $post->meta_title }}</title>
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
    <meta name="Devchandant" content="tech blogs">
    <meta image="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}">
    <link rel="canonical" href="{{ env('APP_URL') . '/post/' . $post->slug }}" />
    <link rel="image_src" href="https://www.devchandant.com/assets/logo.png" />
    <meta property="og:type" content="website">
    <meta property="og:determiner" content="An" />
    <meta property="og:site_name" content="Himalyan Buds" />
    <meta property="og:url" content="{{ env('APP_URL') . 'post' . '/' . $post->category_slug . '/' . $post->slug }}" />
    <meta property="og:title" content="{{ $post->meta_title }}" />
    <meta property="og:image" content="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}" />
    <meta property="og:image:width" content="960" />
    <meta property="og:image:height" content="400" />
    <meta property="og:locale" content="en_GB" />
@endsection --}}
@section('content')
    <!-- main-area -->


    <main>
        <!-- breadcrumb-area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="blog.html">Post</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-70">
                            <div class="blog-details-wrap">
                                <div class="blog-details-content">
                                    <div class="blog-details-content-top">
                                        <a href="{{ route('category', ['category_slug' => $post->category_slug]) }}" class="post-tag">{{ $post->category_slug }}</a>
                                        <h2 class="title">{{ $post->title }}</h2>
                                        <div class="bd-content-inner">
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                    <li><i
                                                            class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}
                                                    </li>
                                                    <li><i class="far fa-eye"></i> @livewire('post.post-view', ['postSlug' => request()->segment(1)])</li>
                                                </ul>
                                            </div>
                                            <div class="blog-details-social">
                                                <ul class="list-wrap">
                                                    <li><a href="https://www.facebook.com/sharer.php?u={{env('APP_URL') . 'post/' . $post->slug }}"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://www.twitter.com/sharer.php?u={{env('APP_URL') . 'post/' . $post->slug }}"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.instagram.com/sharer.php?u={{env('APP_URL') . 'post/' . $post->slug }}"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="https://www.linkdin.com/sharer.php?u={{env('APP_URL') . 'post/' . $post->slug }}"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-details-thumb">
                                        <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                            alt="{{ $post->title }}" class="w-100 img-responsive" />
                                    </div>
                                    <p class="first-info">{!! $post->description !!}</p>

                                </div>

                            </div>
                        </div>
                        <div class="col-30">
                            <div class="sidebar-wrap">

                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Top Categories</h6>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="sidebar-categories">
                                        <ul class="list-wrap">
                                            @foreach($categories as $category)
                                            <li>
                                                <a href="{{ route('category', ['category_slug' => $category->slug]) }}" data-background="{{ env('APP_URL') . 'uploads/project_cat/' . $category->image }}">
                                                    <span class="post-tag post-tag-three">{{$category->name}}</span>
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

                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Recent Posts</h6>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="hot-post-wrap">
                                        @if (isset($recentFirstPost))
                                        <div class="hot-post-item">
                                            <div class="hot-post-thumb">
                                                <a href="{{ route('post.show', ['post_slug' => $recentFirstPost->slug]) }}"><img src="{{ env('APP_URL') . 'uploads/post/' . $recentFirstPost->filename }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="hot-post-content">
                                                <a href="{{ route('category', ['category_slug' => $recentFirstPost->category_slug]) }}" class="post-tag">{{ $recentFirstPost->category_slug }}</a>
                                                <h4 class="post-title"><a href="{{ route('post.show', ['post_slug' => $recentFirstPost->slug]) }}">{{$recentFirstPost->title}}s</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{ $recentFirstPost->created_at->format('d F, Y') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if (isset($secondToForthPosts))
                                        @foreach ($secondToForthPosts as $index => $post)
                                            @if ($index < 2)
                                        <div class="hot-post-item">
                                            <div class="hot-post-content">
                                                <a href="{{ route('category', ['category_slug' => $post->category_slug]) }}" class="post-tag">{{ $post->category_slug }}</a>
                                                <h4 class="post-title"><a href="{{ route('post.show', ['post_slug' => $post->slug]) }}">{{ $post->title }}</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    @endif
                                    </div>
                                </div>
                                {{-- <div class="sidebar-widget sidebar-widget-two">
                                    <div class="sidebar-newsletter">
                                        <div class="icon"><i class="flaticon-envelope"></i></div>
                                        <h4 class="title">Daily Newsletter</h4>
                                        <p>Get all the top stories from Blogs to keep track.</p>
                                        <div class="sidebar-newsletter-form-two">
                                            <form action="#">
                                                <div class="form-grp">
                                                    <input type="text" placeholder="Enter your e-mail">
                                                    <button type="submit" class="btn">Subscribe Now</button>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox">
                                                    <label for="checkbox">I agree to the terms & conditions</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
