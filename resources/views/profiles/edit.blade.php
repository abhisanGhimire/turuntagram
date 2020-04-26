@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/profile/'. $user->id)  }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h3>
                        Edit Profile
                    </h3>
                </div>
                <div class="d-flex pt-4">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title') ?? $user->profile->title ??''}}" autocomplete="title" autofocus>
                    @error('title')
                    <span class="invalid-feedback pl-5" role="alert">
                        <strong>
                            {{ $message }}
                            <strong>
                    </span>
                    @enderror
                </div>


                <div class="d-flex pt-4">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                        name="description" value="{{ old('description')?? $user->profile->description ??''}}"
                        autocomplete="description" autofocus>
                    @error('description')
                    <span class="invalid-feedback pl-5" role="alert">
                        <strong>
                            {{ $message }}
                            <strong>
                    </span>
                    @enderror
                </div>


                <div class="d-flex pt-4">
                    <label for="url" class="col-md-4 col-form-label">URL</label>
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url"
                        value="{{ old('url')??$user->profile->url ??''}}" autocomplete="url" autofocus>
                    @error('url')
                    <span class="invalid-feedback pl-5" role="alert">
                        <strong>
                            {{ $message }}
                            <strong>
                    </span>
                    @enderror
                </div>

                <div class="d-flex pt-4">
                    <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                    <input type="file" , class="form-row col-form-label-lg" id="image" name="image">
                    @error('image')
                    <strong>
                        {{ $message }}
                    </strong>
                    @enderror
                </div>

                <center>
                    <div class="align-self-center mx-auto mt-5">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>
                </center>
            </div>
        </div>
    </form>
</div>
@endsection
