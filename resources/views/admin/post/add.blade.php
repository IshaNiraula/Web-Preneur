@extends('admin.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>
            <h3 class="py-2">Add Post</h3>
        </center>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
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
                <form method="post" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title"
                                name="title" value="{{ old('title') }}">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_slug" id="" class="form-control">
                                <option value="" selected>choose category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->slug }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Enter the Description" name="description"></textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="slider" name="slider" value="1" {{ old('slider') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="slider">Slider</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="topsidebar" name="topsidebar" value="1" {{ old('topsidebar') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="topsidebar">Top Side Bar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="iseditor" name="iseditor" value="1" {{ old('iseditor') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="iseditor">Editor's Choice</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="istrending" name="istrending" value="1" {{ old('istrending') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="istrending">Trending Now</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="weeklypost" name="weeklypost" value="1" {{ old('weeklypost') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="weeklypost">Weekly Best News</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <span class="text-danger">
                                @error('status')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                        <div class="form-group">
                            {{-- <label for="title">Position</label> --}}
                            <input type="number" class="form-control" id="position" placeholder="Enter position"
                                name="position">
                            <span class="text-danger">
                                @error('position')
                                    {{ $position }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="meta_title">meta_title</label>
                        <input type="text" class="form-control" id="meta_title" placeholder="Enter meta_title"
                            name="meta_title" value="{{ old('meta_title') }}">
                        <span class="text-danger">
                            @error('meta_title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="meta_description">meta_description</label>
                        <textarea class="form-control" id="meta_description" placeholder="Enter the meta_description" name="meta_description"></textarea>
                        <span class="text-danger">
                            @error('meta_description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="meta_keywords">meta_keywords</label>
                        <textarea class="form-control" id="meta_keywords" placeholder="Enter the meta_keywords" name="meta_keywords"></textarea>
                        <span class="text-danger">
                            @error('meta_keywords')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ 'https://devchandant.com/upload_post_editor_image?_token=' . csrf_token() }}",
            filebrowserUploadMethod: 'form',
            toolbar: 'Basic',
             height: 200,
        })
  
    </script>
@endpush
