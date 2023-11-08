<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=hi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post {{$post->title}}</h1>
    <div> posted {{$post->date->diffForHumans()}} by  {{$post->author}}</div>
    <div> {{$post->contents}}</div>

</body>
</html>
