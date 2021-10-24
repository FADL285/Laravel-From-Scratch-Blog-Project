@props(['name', 'label' => null, 'placeholder' => null, 'type' => 'text'])

<div class="mb-4">
    <x-form.label :name="$name" :label="$label"/>
    <input
        type="{{ $type }}"
        class="block border border-grey-light w-full p-3 rounded focus:outline-none focus:ring"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        required
        placeholder="{{ ucwords($placeholder ?:$name) }}"
        {{ $attributes }}
    />
    <x-form.error :name="$name"/>
</div>
