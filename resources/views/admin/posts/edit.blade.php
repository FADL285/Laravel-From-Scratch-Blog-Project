<x-layout.app>
    <x-layout.settings :heading="'Edit Post: ' . $post->title">
        <x-layout.panel class="max-w-lg mx-auto px-6 py-8">
            <form method="POST" action="{{ route('posts.update', $post->slug) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <x-form.input name="title" :value="old('title', $post->title)" placeholder="post title" required/>
                <x-form.input name="slug" :value="old('slug', $post->slug)" required/>
                <div class="flex mt-6">
                    <div class="flex-1">
                        <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                    </div>

                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
                </div>
                <x-form.textarea name="excerpt" required>{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
                <x-form.textarea name="body" required>{{ old('body', $post->body) }}</x-form.textarea>

                <div class="mb-6">
                    <x-form.label name="category_id" label="category" />
                    <select name="category_id" id="category_id" required
                            class="bg-white border border-gray-300 focus:outline-none font-semibold hover:bg-gray-50 p-1 px-2 py-2 rounded-md shadow-sm text-gray-700 text-sm">
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) === $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id"/>
                </div>

                <x-form.submit-btn-sm>Update</x-form.submit-btn-sm>
            </form>
        </x-layout.panel>
    </x-layout.settings>
</x-layout.app>
