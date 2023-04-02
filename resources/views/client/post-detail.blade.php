@extends('client.layouts.master')
@section('content')
    <!-- Start Page Title Area -->
    {{-- <div class="page-title-area bg-12">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>Post</li>

                    <li>{{ $post->title }}</li>


                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Posted On:</span> <a href="#">
                                            {{ $post->created_at->toDateString() }}</a></li>
                                    <li><span>Posted By:</span> <a href="#">Chandan Thakur</a></li>
                                </ul>
                            </div>
                            <h3>{{ $post->title }}</h3>

                            <div class="article-image">
                                <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                    alt="{{ $post->title }}" class="w-100" />
                            </div>
                            <div>
                                {!! $post->description !!}
                            </div>
                            <h3 class="related-posts">Related Post</h3>
                            {{-- <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="b-d-s-item">
                                        <a href="post-style-one.html">
                                            <img src="assets/img/blog-img/1.jpg" alt="Image">
                                            <span class="s-date">
                                                08 <br> jun
                                            </span>
                                            <h3>Why We Need For Guidelines For Brain Scan Data</h3>
                                        </a>

                                        <p>Lorem ipsum, dolor sit amet consectetur sit adipisicing Consectetur nisi pariatur
                                            quos.</p>

                                        <a href="post-style-one.html">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="b-d-s-item mb-0">
                                        <a href="post-style-one.html">
                                            <img src="assets/img/blog-img/2.jpg" alt="Image">
                                            <span class="s-date">
                                                09 <br> jun
                                            </span>
                                            <h3>How To Build Artificial Intelligence You Can Trust</h3>
                                        </a>

                                        <p>Lorem ipsum, dolor sit amet consectetur sit adipisicing Consectetur nisi pariatur
                                            quos.</p>

                                        <a href="post-style-one.html">Read More</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class='bx bx-share-alt'></i></span>

                                <a href="#">Share</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <a href="#"><i class='bx bx-left-arrow-alt'></i> Prev Post</a>
                                </div>

                                <div class="nav-next">
                                    <a href="#">Next Post <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area">
                            <h3 class="comments-title">3 Comments:</h3>

                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/blog-details/comment-img-1.jpg" class="avatar"
                                                    alt="image">
                                                <b class="fn">Jimy Pearson</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>Jun 24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>

                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/blog-details/comment-img-2.jpg" class="avatar"
                                                            alt="image">
                                                        <b class="fn">Karl Mekar</b>
                                                        <span class="says">says:</span>
                                                    </div>

                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <span>Jun 24, 2020 at 10:59 am</span>
                                                        </a>
                                                    </div>
                                                </footer>

                                                <div class="comment-content">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae vitae
                                                        dicta sunt explicabo. Nemo enim</p>
                                                </div>

                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <li class="comment">
                                    <div class="comment-body border-none">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/blog-details/comment-img-3.jpg" class="avatar"
                                                    alt="image">
                                                <b class="fn">Tesa Jack</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>Jun 24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>

                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" id="author" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" name="url">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit"
                                            value="Post A Comment">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget-peru-posts-thumb">
                            <h3 class="widget-title">Popular Posts</h3>
                            <div class="post-wrap">
                                @foreach ($posts as $post)
                                    <article class="item">
                                        <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}" class="thumb">
                                            <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                alt="{{ $post->title }}" class="w-100" />
                                        </a>
                                        <div class="info">
                                            <time datetime="2020-06-30">{{ $post->created_at->toDateString() }}</time>
                                            <h4 class="title usmall">
                                                <a href="{{ route('post.show', ['category_slug' => $post->category_slug, 'post_slug' => $post->slug]) }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h4>
                                        </div>

                                        <div class="clear"></div>
                                    </article>
                                @endforeach
                            </div>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Archives</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">January <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">February <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">March <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">April <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">May <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">June <span>2020</span></a>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <div class="post-wrap">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->name }} <span>(10)</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>


                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>
                            <div class="post-wrap">
                                <div class="tagcloud">
                                    <a href="#">Digital Marketing</a>
                                    <a href="#">Web Development</a>
                                    <a href="#">Artificial Intelligence</a>
                                    <a href="#">Robotics</a>
                                    <a href="#">Electric vechile</a>
                                    <a href="#">Crypto</a>
                                </div>
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
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
