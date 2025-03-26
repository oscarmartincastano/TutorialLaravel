<x-mail::message>
    # Correo por aprobar

    <x-mail::panel>
    Se ha creado un nuevo post que necesita ser revisado
    </x-mail::panel>

    <x-mail::button :url="route('posts.show', $post)" color="error">
        Click aquí para Aprobar
    </x-mail::button>
</x-mail::message>
