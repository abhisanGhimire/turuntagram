@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" align="center">
        <div class="col-8" align="right">
            <img src="/storage/{{$post->image}}" class="w-50">
        </div>
        <div class="col-4" align="left">
            <div>
                <h3>{{$post->user->username}}</h3>
                <p>{{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
