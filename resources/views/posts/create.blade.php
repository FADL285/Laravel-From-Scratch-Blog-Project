<x-layout.app>
    <h1 class="text-center mb-4 mt-14 text-4xl font-semibold">Publish New Post</h1>
    <x-layout.panel class="max-w-sm mx-auto px-6 py-8">
        <form method="POST" action="{{ route('posts.create') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="title"
                >
                    Title
                </label>

                <input class="border border-gray-300 rounded-md p-2 w-full"
                       type="text"
                       name="title"
                       id="title"
                       value="{{ old('title') }}"
                       required
                >

                <x-error-message name="title"/>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="slug"
                >
                    Slug
                </label>

                <input class="border border-gray-300 rounded-md p-2 w-full"
                       type="text"
                       name="slug"
                       id="slug"
                       value="{{ old('slug') }}"
                       required
                >

                <x-error-message name="slug"/>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="thumbnail"
                >
                    Thumbnail
                </label>

                <input class="border border-gray-300 rounded-md p-2 w-full"
                       type="file"
                       name="thumbnail"
                       id="thumbnail"
                       required
                >

                <x-error-message name="thumbnail"/>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="excerpt"
                >
                    Excerpt
                </label>

                <textarea class="border border-gray-300 rounded-md p-2 w-full"
                          name="excerpt"
                          id="excerpt"
                          required
                >{{ old('excerpt') }}</textarea>

                <x-error-message name="excerpt"/>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="body"
                >
                    Body
                </label>

                <textarea class="border border-gray-300 rounded-md p-2 w-full"
                          name="body"
                          id="body"
                          required
                >{{ old('body') }}</textarea>

                <x-error-message name="body"/>
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="category_id"
                >
                    Category
                </label>

                <select name="category_id" id="category_id"
                        class="bg-white border border-gray-300 focus:outline-none font-semibold hover:bg-gray-50 p-1 px-2 py-2 rounded-md shadow-sm text-gray-700 text-sm">
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-error-message name="category_id"/>
            </div>

            <x-submit-button>Publish</x-submit-button>
        </form>
    </x-layout.panel>
</x-layout.app>
