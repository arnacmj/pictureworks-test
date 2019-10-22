@extends('layout', ['title' => $user->name])

@section('styles')
@stop

@section('content')
    <header>
        <span class="avatar"><img src="{{ $user->image }}" alt="" /></span>
        <h1>{{ $user->name }}</h1>
        <p>{{ nl2br($user->comments) }}</p>
    </header>
@stop

@section('scripts')
@stop
