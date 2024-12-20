@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>
            <h3 class="py-2">Add Profile</h3>
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
                <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email"
                                name="email" value="{{ old('email') }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="description">Short Description</label>
                            <textarea class="form-control" id="description" placeholder="Enter the Description" name="description">{{old('description')}}</textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address"
                                    name="address" value="{{ old('address') }}">
                                <span class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        <div class="form-group">
                            <label for="pri_number" >Primary Phone Number</label>
                            <input class="form-control" id="pri_number"  placeholder="Enter the phone number"  name="pri_number" type="number
                            " value="{{ old('pri_number') }}">
                            <span class="text-danger">
                                @error('pri_number' )
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="sec_number" >Secondary Phone Number</label>
                            <input class="form-control" id="sec_number"  placeholder="Enter the phone number"  name="sec_number" type="number
                            " value="{{ old('sec_number') }}">
                            <span class="text-danger">
                                @error('sec_number' )
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="facebookLink">Facebook Link</label>
                            <input type="text" class="form-control" id="facebookLink" placeholder="https://www.twitter.com/profilelink"
                                name="facebookLink" value="{{ old('facebookLink') }}">
                            <span class="text-danger">
                                @error('facebookLink')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="twitterLink">Twitter Link</label>
                            <input type="text" class="form-control" id="twitterLink" placeholder="https://www.twitter.com/profilelink"
                                name="twitterLink" value="{{ old('twitterLink') }}">
                            <span class="text-danger">
                                @error('twitterLink')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="linkdinLink">Linkdin Link</label>
                            <input type="text" class="form-control" id="linkdinLink" placeholder="https://www.linkedin.com/profilelink"
                                name="linkdinlink" value="{{ old('linkdinlink') }}">
                            <span class="text-danger">
                                @error('linkdinlink')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="instalink">Instagram Link</label>
                            <input type="text" class="form-control" id="instalink" placeholder="https://www.instagram.com/profilelink"
                                name="instalink" value="{{ old('instalink') }}">
                            <span class="text-danger">
                                @error('instalink')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Add Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" />
                                </div>
                            </div>
                        </div>
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
