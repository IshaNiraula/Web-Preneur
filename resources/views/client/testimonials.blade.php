@extends('client.layouts.master')
@section('content')
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">TESTIMONIALS</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Testimonials</a>
            </div>
        </div>

    </div>
    <div class="container">
        <section style="background-color: #f4f4f4" class="py-4">
            <div class="container">
                <h3 style="letter-spacing: 3px" class="text-primary fw-bold mt-4 pt-3">HAPPY CLIENTS</h3>
                <p>Let's See What Are Our Happy Clients Are Saying About Us.</p>
                <hr>
                </hr>
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center border-end py-3">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="team-2" class="testimonial-img">
                        <h5 class="pt-4 fw-bold">JOHN DOE</h5>
                        <p>Ceo founder</p>
                        <p class="px-4">It is a long established fact that a reader will be distracted by the readable
                            content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters,of using Lorem Ipsum is that it has a mor</p>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center py-3">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="team-2" class="testimonial-img">
                        <h5 class="pt-4 fw-bold">JOHN SNOW</h5>
                        <p>Knight Watch</p>
                        <p class="px-4">It is a long established fact that a reader will be distracted by the readable
                            content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of le</p>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center py-3">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="team-2" class="testimonial-img">
                        <h5 class="pt-4 fw-bold">JOHN SNOW</h5>
                        <p>Knight Watch</p>
                        <p class="px-4">It is a long established fact that a reader will be distracted by the readable
                            content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of le</p>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center py-3">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="team-2" class="testimonial-img">
                        <h5 class="pt-4 fw-bold">JOHN SNOW</h5>
                        <p>Knight Watch</p>
                        <p class="px-4">It is a long established fact that a reader will be distracted by the readable
                            content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of le</p>
                    </div>
                </div>
        </section>
    </div>
@endsection
