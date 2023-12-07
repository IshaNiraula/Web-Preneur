@extends('client.layouts.master')
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
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                                    <li class="breadcrumb-item active capitalize" aria-current="page">{{request()->segment(2)}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area pt-60 pb-60">
            <div class="container">
                <div class="author-inner-wrap">
                    <div class="row justify-content-center">

                        <div class="col-70">
                            @if (isset($posts))
                                @foreach ($posts as $index => $post)
                                    <div class="weekly-post-item-wrap">
                                        <div class="weekly-post-item weekly-post-four">
                                            <div class="weekly-post-thumb" style="margin-right: 1rem">
                                                <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"><img
                                                        src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                        alt="{{$post->title}}"></a>
                                            </div>
                                            <div class="weekly-post-content ">
                                                <a href="{{ route('category', ['category_slug' => $post->category_slug]) }}" class="post-tag">{{ $post->category_slug }}</a>
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
                                                <section>{!! Str::words($post->description, 20, ' ...') !!}</section>
                                                <div class="view-all-btn">
                                                    <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"
                                                        class="link-btn">Read More
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
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h2>There is no post available in this category.</h2>
                            @endif

                            <div class="pagination">
                                {{ $posts->links() }}
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
                                    <div class="widget-title mb-25">
                                        <h2 class="title">Subscribe & Followers</h2>
                                        <div class="section-title-line"></div>
                                    </div>
                                    <div class="sidebar-social-wrap">
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i>facebook</a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i>youtube</a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget sidebar-widget-two">
                                    <div class="widget-title mb-30">
                                        <h6 class="title">Recent News</h6>
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
        <!-- blog-area-end -->

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
