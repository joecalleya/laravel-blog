{{-- here we can inject with x-app-layout insytead of @extends('app-layout')
@section('content') --}}

{{-- @extends('app-layout')
@section('content') --}}
<x-app-layout>
    @if ($posts-> count())
        <h1 class="m-10 text-3xl font-semibold ">
            Latest Posts By {{ $authorName }}
        </h1>
        {{-- this will render the post items component with the parameters --}}
        <x-post-items :posts="$posts"/>
    @endif
</x-app-layout>

{{-- @endsection --}}
