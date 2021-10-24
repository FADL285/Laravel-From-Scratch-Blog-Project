<div x-data="{ open: false }" @click.away="open = false" class="relative inline-block text-left my-2">
    <div>
        {{--     trigger   --}}
        <button @click="open = !open" type="button"
                {{ $attributes(['class' => 'inline-flex justify-center w-full rounded-md px-4 bg-white  text-gray-700  focus:outline-none max-w-xs']) }}
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
