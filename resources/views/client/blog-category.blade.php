@extends('client.layouts.master')


@section('content')
    <!-- Start Blog Details Area -->
    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area mt-0" id="secondary">
                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <div class="post-wrap">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('blog.category', ['slug' => $category->slug]) }}">{{ $category->name }}
                                                <span>(10)</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                        <div class="follows-area widget">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        Facebook <br>
                                        <span>532k Like</span>
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        Twitter <br>
                                        <span>500k Followers</span>
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        Instagram <br>
                                        <span>504k Followers</span>
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        YouTube <br>
                                        <span>502k Subscribe</span>
                                        <i class="bx bxl-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc left-sidebar-blog">
                        <div class="article-content">
                            <h3 class="related-posts">Related Post</h3>
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="b-d-s-item mb-30">
                                            <a href="{{ route('post.show', ['slug' => $post->slug]) }}">
                                                <img src="{{ asset('assets/img/blog-img/1.jpg') }}" alt="Image">
                                                <span class="s-date">
                                                    {{ $post->created_at->toDateString() }}
                                                </span>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="admin">
                                                            <i class="bx bx-user"></i>
                                                            Admin By Chandan Thakur
                                                        </a>
                                                    </li>
                                                </ul>
                                                <h3>{{ $post->title }}</h3>
                                            </a>

                                            <p> {!! Str::words($post->description, 15, '....') !!}</p>

                                            <a href="{{ route('post.show', ['slug' => $post->slug]) }}">Read More</a>
                                        </div>
                                    </div>
                                @endforeach

                                <center>
                                    {{ $posts->links() }}
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Details Area -->
@endsection
