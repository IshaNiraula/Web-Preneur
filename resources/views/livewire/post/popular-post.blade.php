<div class="sidebar-widget sidebar-widget-two">
    <div class="widget-title mb-30">
        <h6 class="title">Popular Posts</h6>
        <div class="section-title-line"></div>
    </div>
    @foreach ($posts as $post)
        <div class="popular-post">
            <div class="thumb">
                <a href="blog-details.html">
                    <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                                       alt="{{ $post->title }}"
                                                                       class="w-100 h-100 img-responsive" />
                </a>
            </div>
            <div class="content">
                <a href="blog.html" class="post-tag-two">{{$post->category_slug}}</a>
                <h2 class="post-title"><a href="blog-details.html">{{$post->title}}</a></h2>
                <div class="blog-post-meta">
                    <ul class="list-wrap">
                        <li><i class="flaticon-calendar"></i>{{ $post->created_at->format('d F, Y') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
