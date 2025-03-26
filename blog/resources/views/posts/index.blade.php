<x-app-layout>
    <h1 class="text-2xl">Aquí se mostraran todos los posts</h1>

    <a href="{{route('posts.store')}}">Crear Post</a>

    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{route('posts.show', $post)}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    {{$posts->links()}}
</x-app-layout>