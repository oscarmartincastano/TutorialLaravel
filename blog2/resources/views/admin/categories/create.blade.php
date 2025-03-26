<x-layouts.app>

    <flux:breadcrumbs class="mb-4">
        <flux:breadcrumbs.item :href="route('dashboard')">
            Dashboard
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item :href="route('admin.categories.index')">
            Categorías
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item>
            Nuevo
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <div class="card">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <flux:input label="Nombre" name="name" placeholder="Escribe el nombre de la categoría" value="{{old('name')}}" />
            <div class="flex justify-end mt-4">
                <flux:button variant="primary" type="submit">
                    Enviar
                </flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>
