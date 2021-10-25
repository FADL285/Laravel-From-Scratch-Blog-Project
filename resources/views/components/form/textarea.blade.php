@props(['name' ,'label' => null])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{ $name }}"
    >
        {{ ucwords($label ?: $name) }}
    </label>

    <textarea class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring w-full"
              name="{{ $name }}"
              id="{{ $name }}"
              {{ $attributes }}
    >{{ $slot ?: old('excerpt') }}</textarea>

    <x-form.error name="excerpt"/>
</div>
