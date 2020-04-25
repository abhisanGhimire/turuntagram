@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url('/posts')}}" enctype="multipart/form-data" method="post">
        @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h3>
                            Add New Post
                        </h3>
                    </div>
                    <div class="d-flex pt-4">
                        <label for="caption" class="col-md-4 col-form-label">Caption</label>
                            <input id="caption"
                            type="text" class="form-control @error('caption') is-invalid @enderror"
                            name="caption"
                            value="{{ old('caption') }}"
                            autocomplete="caption" autofocus>
                            @error('caption')
                            <span class="invalid-feedback pl-5" role="alert">
                                <strong>
                                    {{ $message }}
                                <strong>
                            </span>
                            @enderror
                    </div>

                    <div class="d-flex pt-4">
                        <label for="image" class="col-md-4 col-form-label ">Image</label>
                            <input type="file" , class="form-row col-form-label-lg" id="image" name="image">
                            @error('image')
                                <strong>
                                    {{ $message }}
                                </strong>
                            @enderror
                    </div>
                    <center>
                        <div class="align-self-center mx-auto mt-5">
                            <button class="btn btn-primary">Add New Post</button>
                        </div>
                    </center>
                </div>
            </div>
        </form>
    </div>
@endsection
