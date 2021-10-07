<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-5">
        <!--  Category -->
        <x-dropdown>
            <x-slot name="triggerName">
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : "Category" }}
            </x-slot>

            <x-dropdown-item href="/posts" :active="request()->routeIs('home')">All Categories</x-dropdown-item>
            @foreach($categories as $category)
                <x-dropdown-item href="/categories/{{ $category->slug }}"
                                 :active="isset($currentCategory) && $currentCategory->is($category)">{{ ucwords($category->name) }}</x-dropdown-item>
            @endforeach
        </x-dropdown>
        <!-- Other Filters -->
    {{--        <x-dropdown>--}}
    {{--            <x-slot name="triggerName">Other Filters</x-slot>--}}

    {{--            <x-dropdown-item href="#">Account settings</x-dropdown-item>--}}
    {{--        </x-dropdown>--}}
    <!-- Search -->
        <div class="relative flex lg:inline-flex items-center justify-center">
            <form method="GET" action="/posts">
                <input type="search" name="search" placeholder="Find something..." value="{{ request('search') ?? '' }}"
                       class="rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-semibold text-gray-700 focus:ring-blue-500 focus:border-blue-500 block w-full sm:text-sm outline-none">
            </form>
        </div>
    </div>
</header>