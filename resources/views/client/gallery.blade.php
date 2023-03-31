@extends('client.layouts.master')
@section('content')
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">GALLERY</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Gallery</a>
            </div>
        </div>
    </div>
    <!-- Our Gallery -->
    <section class="bg-secondary p-3">
        <div class="container mt-2">
            @if (count($galleries) === 0)
                <center>
                    <p class="text-2xl text-red-600 font-bold">
                        There is not any images avaliable yet.
                    </p>
                </center>
            @elseif(count($galleries) >= 1)
                <div class="card-body p-0">
                    <div class="row">
                        @foreach ($galleries as $image)
                            <div data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $loop->iteration }}"
                                type="button" class="col-4 mt-4">
                                <img src="{{ env('APP_URL') . 'uploads/gallery/' . $image->filename }}"
                                    alt="{{ $image->filename }}" class="w-100 h-100 img-responsive" />
                            </div>

                            <div class="modal fade" id="staticBackdrop{{ $loop->iteration }}" data-backdrop="static"
                                data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ env('APP_URL') . 'uploads/gallery/' . $image->filename }}"
                                                alt="{{ $image->filename }}" class="w-100 h-100 img-responsive" />

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>


    <!-- Our Gallery End here-->
@endsection
