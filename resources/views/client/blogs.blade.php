@extends('client.layouts.master')
@section('content')
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">BLOGS</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Blogs</a>
            </div>
        </div>

    </div>
    <div class="container">
        @if (count($blogs) == 0)
            <div class="intro">
                <h1 class="text-gray fw-bold">No any blogs avaliable yet.</h1>
            </div>
        @elseif(count($blogs) >= 1)
            <div class="row py-3">
                @foreach ($blogs as $blog)
                    <div class="col-4">
                        <div class="card shadow">
                            <img style="object-fit: cover;" src="{{ env('APP_URL') . 'uploads/post/' . $blog->filename }}"
                                alt="{{ $blog->title }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text"> {!! Str::words($blog->description, 10, ' ...') !!}</p>
                                <a href="{{ route('blogDetails', ['slug' => $blog->slug]) }}" class="btn btn-primary ">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
