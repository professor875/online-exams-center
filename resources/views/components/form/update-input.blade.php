@props(['label', 'type' => 'text' , 'name', 'value' => 'null'])

<div class="mb-6">
    <label for="{{ $label }}"
           class="block mb-2 uppercase font-bold text-xs text-red-500">
        {{ $label }}
    </label>

    <input type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           required
           value="{{ $value }}"
           placeholder="Write your {{ $label }}.."
           class=" border text-sm text-gray-300 min-w-44 border-red-400 p-2 w-full rounded-lg bg-gray-800">

    <x-form.form-error :name="$name"/>
</div>
