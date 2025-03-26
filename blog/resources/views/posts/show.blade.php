<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <a href="{{route('posts.index')}}">Volver</a>

    <a href="{{route('posts.store')}}">Crear Post</a>
    
    <h1>Titulo: {{$post->title}}</h1> 
    <p><b>Categoria:</b> {{$post->categoria}}</p>
    <p>{{$post->content}}</p>

    <a href="/{{route('posts.update',$post->id)}}">Editar</a>

    <form action="{{route('posts.destroy',$post->id)}}" method="POST">

        @csrf

        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>