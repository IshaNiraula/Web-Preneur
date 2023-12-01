   @extends('client.layouts.master')
   @section('content')
       <section class="main-inspiration-area pb-100 pt-100">
           <div class="container">
               <div class="row">
                   @foreach ($posts as $post)
                       <div class="col-lg-4 col-md-6 plr-5">
                           <div class="single-featured">
                               <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"
                                   class="blog-img">
                                   <img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                       alt="{{ $post->title }}" class="" />
                                   <span>{{ $post->category_slug }}</span>
                               </a>

                               <div class="featured-content">
                                   <ul>
                                       <li>
                                           <a href="#" class="admin">
                                               <i class="bx bx-user"></i>
                                               Posted By : Admin
                                           </a>
                                       </li>
                                       <li>
                                           <i class="bx bx-calendar"></i>
                                           {{ $post->created_at->toDateString() }}
                                       </li>
                                   </ul>

                                   <a
                                       href="{{ route('post.show', ['post_slug' => $post->slug]) }}">
                                       <h3>{{ $post->title }}</h3>
                                   </a>

                                   <p> {!! Str::words($post->description, 15, ' ...') !!}</p>

                                   <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}"
                                       class="read-more">Read More</a>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>
       </section>
   @endsection
