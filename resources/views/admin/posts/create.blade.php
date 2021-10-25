<x-layout.app>
    <x-layout.settings heading="Publish New Post">
        <x-layout.panel class="max-w-lg mx-auto px-6 py-8">
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" placeholder="post title" required/>
                <x-form.input name="slug" required/>
                <x-form.input type="file" name="thumbnail" required/>
                <x-form.textarea name="excerpt" required/>
                <x-form.textarea name="body" required/>

                <div class="mb-6">
                    <x-form.label name="category_id" label="category" />
                    <select name="category_id" id="category_id" required
                            class="bg-white border border-gray-300 focus:outline-none font-semibold hover:bg-gray-50 p-1 px-2 py-2 rounded-md shadow-sm text-gray-700 text-sm">
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id"/>
                </div>

                <x-form.submit-btn-sm>Publish</x-form.submit-btn-sm>
            </form>
        </x-layout.panel>
    </x-layout.settings>
</x-layout.app>
