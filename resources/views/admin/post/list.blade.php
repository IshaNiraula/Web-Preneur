@extends('admin.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">posts</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($posts) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any post avaliable yet.
                            </p>
                        </center>
                    @elseif(count($posts) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Slider</th>
                                        <th>Top Sidebar</th>
                                        <th>Editor's Choice</th>
                                        <th>Trending Now</th>
                                        <th>Weekly News</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div id="draggable">
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->category_slug }}</td>
                                                <td> {{ $post->slider ? 'Yes' : 'No' }}</td>
                                                <td> {{ $post->topsidebar ? 'Yes' : 'No' }}</td>
                                                <td> {{ $post->iseditor ? 'Yes' : 'No' }}</td>
                                                <td> {{ $post->istrending ? 'Yes' : 'No' }}</td>
                                                <td> {{ $post->weeklypost ? 'Yes' : 'No' }}</td>
                                                <td><img src="{{ env('APP_URL') . 'uploads/post/' . $post->filename }}"
                                                    alt="{{ $post->title }}" class="w-100 img-responsive" />
                                                </td>
                                                <td>{{ $post->status }}</td>
                                                <td class="d-flex"><button class="btn btn-primary"><a class="text-white"
                                                            href="{{ route('admin.post.edit', ['id' => $post->id]) }}">Edit</a></button>
                                                    <form method="post"
                                                        action="{{ route('admin.post.delete', ['id' => $post->id]) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal"
                                                        data-target="#staticBackdrop{{ $loop->iteration }}" type="button"
                                                        class="btn btn-warning ml-2"><a class="text-white"
                                                            href="#">View
                                                            Content</a></button>
                                                </td>
                                            </tr>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{ $loop->iteration }}" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Description</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <section> {!! $post->description !!}</section>
                                                    <div class="p-2 shadow rounded mt-2">
                                                        <p>meta_title</p>
                                                        {{ $post->meta_title }}
                                                    </div>
                                                    <div class="p-2 shadow rounded mt-2">
                                                        <p>meta_description</p>
                                                        {{ $post->meta_description }}
                                                    </div>
                                                    <div class="p-2 shadow rounded mt-2">
                                                        <p>meta_keywords</p>
                                                        {{ $post->meta_keywords }}
                                                    </div>
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
                </tbody>
                </table>
            </div>
            @endif
        </div>
        <!-- /.card -->
    </div>
    </div>
    <!-- /.row -->
    </div>
@endsection

@push('scripts')
    <script>
        $("#draggable").draggable({
            stop: function(event, ui) {
                // Send an AJAX request to the server with the updated position of the item
                console.log(ui)
            }
        });
    </script>
@endpush
