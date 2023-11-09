
<x-app-layout>

{{-- @extends('app-layout')
@section('content') --}}
    <div class="mt-10 space-y-5 prose max-w-none ">
        <h1 class="not-prose">Post {{$post->title}}</h1>
        {{-- this will add the code asnd pass parms --}}
        <x-post-meta :post="$post"/>
        <div class=""> {{$post->contents}}</div>
    </div>
</x-app-layout>

{{-- @endsection --}}
