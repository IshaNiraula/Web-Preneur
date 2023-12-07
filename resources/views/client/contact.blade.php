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
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area pt-80 pb-50">
            <div class="container">
                <div class="contact-info-wrap">
                    <div class="row justify-content-center">
                        @if (isset($profile))
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Location</h5>
                                        <p>{{ $profile->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">E-mail</h5>
                                        <a href=" mailto:{{ $profile->email }}"><span class="__cf_email__"
                                                data-cfemail="3f575a5353507f4f5a4d4a115c5052">
                                                {{ $profile->email }}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Phone</h5>
                                        <a href="tel:{{ $profile->pri_number }}">{{ $profile->pri_number }}</a>,
                                        <a href="tel:{{ $profile->sec_number }}">{{ $profile->sec_number }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="contact-img">
                            <img src="{{ asset('assets/img/images/contact_img.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <h4 class="title">Drop Us a Message</h4>
                            <p>Have a question?</p>
                            <form method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="E-mail*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <input type="number" name="phone" placeholder="Phone*">
                                </div>
                                <div class="form-grp">
                                    <input type="text" name="subject" placeholder="Subject*">
                                </div>
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Message*"></textarea>
                                </div>
                                <button type="submit" class="btn btn-two">Submit Now</button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- contact-map -->
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3646824957286!2d85.40703257523901!3d27.675121426912483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a90f3fe73bd%3A0x6717557a3e66a878!2sSallaghari%20Shopping%20Complex!5e0!3m2!1sen!2snp!4v1701943973047!5m2!1sen!2snp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- contact-map-end -->

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
