@extends('app-layout')
@section('content')
    <div class="mt-10 space-y-5 prose max-w-none ">
        <h1 class="not-prose">Post {{$post->title}}</h1>
        <div class="text-sm"> posted {{$post->date->diffForHumans()}} by  {{$post->author}}</div>
        <div class=""> {{$post->contents}}</div>
    </div>

@endsection
