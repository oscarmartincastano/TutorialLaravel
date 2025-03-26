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

    <form action="{{ route('admin.posts.update', $post) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf
        
        @method('PUT')

        <div class="relative">
            {{Storage::url($post->image_path)}}
        {{-- <img class="w-full aspect-video object-cover object-center" src="https://thumbs.dreamstime.com/b/no-image-available-icon-177641087.jpg" alt="Imagen del post"> --}}
        <img class="w-full aspect-video object-cover object-center" src="{{$post->image_path ? Storage::url($post->image_path):'https://thumbs.dreamstime.com/b/no-image-available-icon-177641087.jpg'}}" alt="Imagen del post">


        <div class="absolute top-8 right-8">
            <label class="bg-white px-4 py-2 rounded-lg cursor-pointer">
                Cambiar Imagen
                <input class="hidden" type="file" name="image" accept="image/*">
            </label>
        </div>
        </div>
        <div class="card">

            <flux:input label="Titulo" name="titulo" placeholder="Escribe el titulo del Post" value="{{old('title',$post->title)}}" />

            <flux:input label="Slug" name="slug" placeholder="Escribe el slug" value="{{old('slug',$post->slug)}}" />

            <flux:select label="Categoria" name="categoria_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}":selected="$category->id ==old('category_id',$post->category_id)">{{ $category->name }}</option>
                @endforeach
            </flux:select>

            <flux:textarea label="Resumen" name="excerpt">{{old('excerpt',$post->excerpt)}}</flux:textarea>

            <flux:textarea label="Contenido" name="content" rows="16">{{old('content',$post->content)}}</flux:textarea>

            <dic class="flex space-x-2">
                <label class="flex items-center">
                    <input type="radio" name="is_published" value="0" @checked(old('is_published',$post->is_published) == 0)>
                    <sapn class="ml-2">No publicado</sapn>
                </label>

                <label class="flex items-center">
                    <input type="radio" name="is_published" value="1">
                    <sapn class="ml-2">Publicado</sapn>
                </label>
            </dic>

            <div class="flex justify-end mt-4">
                <flux:button variant="primary" type="submit">
                    Enviar
                </flux:button>
            </div>
        </div>
    </form>

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
