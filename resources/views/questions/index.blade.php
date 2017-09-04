@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(Auth::check())
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="media-left">
                                <a href="">
                                    <img src="{{ $question->user->avatar }}" width="50" alt="{{ $question->user->name }}">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="/questions/{{ $question->id }}">
                                        {{ $question->title }}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="{{ url('login') }}">您还未登录，请先登录</a>
                        </h4>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
