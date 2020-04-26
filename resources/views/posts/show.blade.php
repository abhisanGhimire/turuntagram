@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" align="center">
        <div class="col-8" align="right">
            <img src="/storage/{{$post->image}}" class="w-50">
        </div>
        <div class="col-4" align="left">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100"
                            style="max-width:40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="{{ url('/profile/'.$post->user->id)}}">
                                <span class="
                                    text-dark  pr-1">{{ $post->user->username }}
                                </span>
                            </a>&#9679;
                            <a href="#" class="pl-1">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p><span class=" font-weight-bold pr-3">
                        <a href="{{ url('/profile/'.$post->user->id)}}">
                            <span class="
                                text-dark">{{ $post->user->username }}
                            </span>
                        </a></span>
                    {{ $post->caption }}

                </p>
            </div>
        </div>
    </div>
</div>
@endsection
