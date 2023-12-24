@props(['label', 'type' => 'text' , 'name'])

<div class="mb-6">
    <label for="{{ $label }}"
           class="block mb-2 uppercase font-bold text-xs text-red-500">
        {{ $label }}
    </label>

    <input type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           required
           value="{{ old($name) }}"
           placeholder="Write your {{ $label }}.."
           class=" border text-sm text-gray-300 border-red-400 p-2 w-full rounded-lg bg-gray-800">

    <x-form.form-error :name="$name"/>
</div>
