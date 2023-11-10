<ul class="mt-10 space-y-10">
    @foreach ($posts as $post)
        {{-- this will add the code asnd pass parms --}}
        <x-post-item :post="$post"/>
    @endforeach
</ul>
