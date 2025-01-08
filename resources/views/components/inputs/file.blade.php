@props([
    'id',
    'name',
    'label' => null
])

<div class="mb-4">
    @if($label)
        <label class="block text-gray-700 @error($label) border-red-500 @enderror" for="{{$id}}"
        >{{$label}}</label
        >
    @endif
    <input
        id="{{$id}}"
        type="file"
        name="{{$name}}"
        class="w-full px-4 py-2 border rounded focus:outline-none"
    />
    @error($name)
    <p class="text-red-500 text-sm mt-1">{{$message}}</p>
    @enderror
</div>
