@extends('admin.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.row -->
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gallery</h3>
                    </div>
                    <!-- /.card-header -->
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
                                    <div class="col-4">
                                        <img src="{{ env('APP_URL') . 'uploads/gallery/' . $image->filename }}"
                                            alt="{{ $image->filename }}" class="w-100 h-75 img-responsive" />
                                        <form method="post"
                                            action="{{ route('admin.gallery.delete', ['id' => $image->id]) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger mt-2 ml-2">Delete</button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
