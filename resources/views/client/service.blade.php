@extends('client.layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Services</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Services</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid py-6 px-5">
        @if (count($services) == 0)
            <center>
                <h1 class="text-danger">no services avaliable yet</h1>
            </center>
        @elseif(count($services) >= 1)
            <div class="row g-5">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img style="object-fit: cover;"
                                src="{{ env('APP_URL') . 'uploads/post/' . $service->filename }}"
                                alt="{{ $service->title }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text"> {!! Str::words($service->description, 15, ' ...') !!}</p>
                                <a href="{{ route('serviceDetails', ['slug' => $service->slug]) }}"
                                    class="btn btn-primary ">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <!-- Services End -->
@endsection
