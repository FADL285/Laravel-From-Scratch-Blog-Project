@props(['name'])

<div class="mb-4">
    <label for="{{ $name }}" class="inline-flex items-center">
        <input id={{ $name }} type="checkbox" name="{{ $name }}"
               class="rounded border-gray-300 text-indigo-600 shadow-sm
               focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
        <span class="ml-2 text-sm text-gray-600">{{ $slot }}</span>
    </label>
</div>
