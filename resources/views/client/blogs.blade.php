@extends('client.layouts.master')
@section('content')

<section>
    <div id="popupOverlay" class="overlay">
        <div class="popup-form">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2>Register</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="game">Game To Play:</label>
                    <input type="text" id="game" name="game" required>
                </div>
                <div class="form-group">
                    <label for="points">Points:</label>
                    <input type="text" id="points" name="points" required>
                </div>
                <div class="form-group">
                    <label for="social-media">Add any one Social Media Link:</label>
                    <select id="social-media" name="social-media">
                        <option value="Facebook">Facebook</option>
                        <option value="Telegram">Telegram</option>
                        <option value="WhatsApp">WhatsApp</option>
                    </select>
                   <input type="text" id="social-media" name="social-media" style="margin-top:10px;" required>
                </div>
                <button type="submit" class="register">Register</button>
            </form>
        </div>
    </div>
   </section>
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

@push('scripts')
<script>
   window.onload = function () {
     document.getElementById("popupOverlay").style.display = "block";
 };

 // Function to close the popup
 function closePopup() {
     document.getElementById("popupOverlay").style.display = "none";
 }
</script>
@endpush
