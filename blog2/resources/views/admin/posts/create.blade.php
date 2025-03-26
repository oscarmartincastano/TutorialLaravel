<x-layouts.app>

    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item :href="route('dashboard')">
            Dashboard
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.posts.index')">
            Posts
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item>
            Nuevo
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="card">
        <form action="{{ route('admin.posts.store') }}" method="POST" class="space-y-4">
            @csrf

            <flux:input label="Titulo" name="titulo" placeholder="Escribe el titulo del Post" value="{{old('titulo')}}" />

            <flux:input label="Slug" name="slug" placeholder="Escribe el slug" value="{{old('slug')}}" />

            <flux:select label="Categoria" name="categoria_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </flux:select>

            <div class="flex justify-end mt-4">
                <flux:button variant="primary" type="submit">
                    Enviar
                </flux:button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            // Poner un slug correspondiente al titulo que le ponga eliminado los caracteres especiales
            document.querySelector('[name=titulo]').addEventListener('input', function (e) {
                const slug = e.target.value
                    .toLowerCase()
                    .replace(/ /g, '-')
                    .replace(/á/g, 'a')
                    .replace(/é/g, 'e')
                    .replace(/í/g, 'i')
                    .replace(/ó/g, 'o')
                    .replace(/ú/g, 'u')
                    .replace(/ñ/g, 'n')
                    .replace(/[^a-z0-9-]/g, '')

                document.querySelector('[name=slug]').value = slug
            })
        </script>
    @endpush
</x-layouts.app>
