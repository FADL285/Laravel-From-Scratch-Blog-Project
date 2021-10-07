<div x-data="{ open: false }" @click.away="open = false" class="relative inline-block text-left my-2">
    <div>
        {{--     trigger   --}}
        <button @click="open = !open" type="button"
                class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-semibold text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500 max-w-xs"
                id="category-button" aria-expanded="true" aria-haspopup="true">
            <span class="overflow-ellipsis whitespace-nowrap overflow-hidden">
                {{ $triggerName }}
            </span>

            <x-icon name="down-arrow" />
        </button>
    </div>

    {{--  links  --}}
    <div x-show="open" style="display: none;"
         class="origin-top-left absolute z-50 left-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
         role="menu" aria-orientation="vertical" aria-labelledby="category-button" tabindex="-1">
        <div class="py-1 max-h-80 overflow-y-auto" role="none">
            {{ $slot }}
        </div>
    </div>
</div>
