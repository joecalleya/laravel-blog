{{-- here we can inject with x-app-layout insytead of @extends('app-layout')
@section('content') --}}

{{-- @extends('app-layout')
@section('content') --}}
<x-app-layout>
    @if ($posts-> count())
        <h1 class="m-10 text-3xl font-semibold ">
            Latest Posts By {{ $authorName }}
        </h1>
        <ul class="mt-10 space-y-10">
            @foreach ($posts as $post)
                <li>
                    <div class="space-y-5 prose text-justify max-w-none">
                        <h2 class="not-prose"><a class="hover:text-indigo-700 transition-colors duration-100" href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
                        <div>{{$post->excerpt}}</div>
                        {{-- this will add the code asnd pass parms --}}
                        <x-post-meta :post="$post"/>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</x-app-layout>

{{-- @endsection --}}
