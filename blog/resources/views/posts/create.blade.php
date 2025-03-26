<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>

    {{-- @if ($errors->any())
    <div>
        <h2>Errores: </h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label>Titulo
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        @error('title')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <br>
        <label>Slug
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <br>
        <label>Categoria
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <br>
        <label>Contenido
            <textarea name="content" cols="30" rows="10">{{old('content')}}</textarea>
        </label>

        @error('content')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <br>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>