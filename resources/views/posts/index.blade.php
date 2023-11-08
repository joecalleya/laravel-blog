<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
</head>
<body>
    <h1>
        Joes Blog
    </h1>
    @if ($posts-> count())

    <ul>

            @foreach ($posts as $post)
                <li>
                    <div>

                        <h2><a href="/posts/{{$post->slug}}">{{$post->slug}}</a></h2>
                        <div>{{$post->excerpt}}</div>
                        <div> posted {{$post->date->diffForHumans()}} by  {{$post->author}}</div>
                    </div>

                    </div>
                </li>
            @endforeach
    </ul>
    @endif

</body>
</html>
