<x-dropdown>
    <x-slot name="triggerName">
        {{ isset($currentCategory) ? ucwords($currentCategory->name) : "Category" }}
    </x-slot>

    <x-dropdown-item
        href="{{ route('home') }}{{ request()->has('search') && !empty(request('search')) ? '?search='.request('search') : '' }}"
        :active="request()->routeIs('home') && !request()->has('category')">
        All Categories
    </x-dropdown-item>
    @foreach($categories as $category)
        <x-dropdown-item
            href="{{ route('home') }}?category={{ $category->slug }}{{ request()->has('search') && !empty(request('search'))  ? '&search='.request('search') : '' }}"
            :active="isset($currentCategory) && $currentCategory->is($category)">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
