@extends('layout', ['title' => $user->name])

@section('styles')
@stop

@section('content')
    <header>
        <span class="avatar"><img src="{{ $user->image }}" alt="user avatar" /></span>
        <h1>{{ $user->name }}</h1>
        <hr>
        @foreach($user->comments as $comment)
            <p>{{ nl2br($comment->comment) }}</p>
        @endforeach
    </header>
@stop

@section('scripts')
@stop
