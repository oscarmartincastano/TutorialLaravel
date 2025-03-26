<x-app-layout>
    <h1>Formulario para editar el post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores: </h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf

        @method('PUT')
        <label>Titulo
            <input type="text" name="title" value="{{old('title', $post->title)}}">
        </label>
        <br>
        <br>
        <label>Slug
            <input type="text" name="slug" value="{{old('slug', $post->slug)}}">
        </label>
        <label>Categoria
            <input type="text" name="categoria" value="{{old('categoria', $post->categoria)}}">
        </label>
        <br>
        <br>
        <label>Contenido
            <textarea name="content" cols="30" rows="10">{{old('content',$post->content)}}</textarea>
        </label>

        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</x-app-layout>
