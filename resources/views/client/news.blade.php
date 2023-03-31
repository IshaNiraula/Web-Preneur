@extends('client.layouts.master')
@section('content')
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">NEWS</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">News</a>
            </div>
        </div>
     
    </div>
    <div class="container">
        @if (count($news) == 0)
            <div class="intro">
                <h1 class="text-gray fw-bold">No any news avaliable yet.</h1>
            </div>
        @elseif(count($news) >= 1)
            @foreach ($news as $post)
                <div class="card shadow">
                    <img style="object-fit: cover;" src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                        alt="{{ $post->title }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text"> {!! Str::words($post->description, 10, ' ...') !!}</p>
                        <a href="{{ route('postDetails', ['slug' => $post->slug]) }}" class="btn btn-success ">Read
                            More</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
