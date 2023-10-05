@extends('client.layouts.master')
@section('content')

    <!-- Contact Start -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/assets/img/blog-details/4.jpg" alt="Your Image">
                </div>
                <div class="col-md-6">
                    <form id="contact" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <h3>Contact Us</h3>
                        <fieldset>
                            <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" tabindex="2" name="email" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" type="tel" tabindex="3" name="phone" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Type your message here...." tabindex="5" name="message" required></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact End -->
@endsection
