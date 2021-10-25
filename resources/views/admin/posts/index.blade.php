<x-layout.app>
    <x-layout.settings heading="Manage Posts">
        <x-layout.panel class="max-w-6xl mx-auto px-6 py-8">

            <a href="{{ route('posts.create') }}"
               class="flex justify-center mb-1 pb-1 text-2xl text-blue-500 text-center underline">New Post</a>

            <table class="min-w-full divide-y divide-gray-200 text-center">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">
                        Thumbnail
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">
                        Title
                    </th>
                    <th colspan="2" scope="col"
                        class="px-6 py-3 text-sm font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            <img class="mx-auto h-16 w-16 p-1"
                                 src="{{ asset('storage/' . $post->thumbnail) }}"
                                 alt="{{ $post->title }}">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center justify-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <a href="/posts/{{ $post->slug }}">
                                        {{ $post->title }}
                                    </a>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('posts.edit', $post->slug) }}"
                               class="text-blue-500 hover:text-blue-600">Edit</a>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <form method="POST" action="{{ route('posts.destroy', $post->slug) }}" x-data="{}"
                                  @click.prevent="confirm('Are you sure?')?$el.submit():''">
                                @csrf
                                @method('DELETE')

                                <button class="text-xs text-gray-500">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </x-layout.panel>
    </x-layout.settings>
</x-layout.app>
