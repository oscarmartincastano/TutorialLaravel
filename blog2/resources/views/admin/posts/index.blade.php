<x-layouts.app>

    <div  class="mb-8 flex justify-between items-center">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item :href="route('dashboard')">
                Dashboard
            </flux:breadcrumbs.item>
            <flux:breadcrumbs.item>
                Posts
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

        <a href="{{route('admin.posts.create')}}" class="btn btn-blue text-xs">
            Nuevo
        </a>
    </div>

    <div class="relative overflow-x-auto mb-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3" width="10px">
                       Edit
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       {{ $post->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-6">
                            <a href="{{route('admin.posts.edit',$post)}}" class="btn btn-blue text-xs">
                                Edit
                            </a>
                            <form class="delete-form" action="{{route('admin.posts.destroy',$post)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-red text-xs">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
</x-layouts.app>