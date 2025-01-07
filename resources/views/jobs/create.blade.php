<x-layout>
    <x-slot name="title">Create Job</x-slot>
<h1>Create new job</h1>
<form action="/jobs" method="POST">
    @csrf
    <div class="block">
        <div class="block mb-2">
            <input type="text" name="title" id="" placeholder="title" value="{{old('title')}}">
            @error('title')
            <div class="text-red-500 mt-2 text-small">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="block mb-2">
            <input type="text" name="description" id="" placeholder="description" value="{{old('description')}}">
            @error('description')
            <div class="text-red-500 mt-2 text-small">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit">Submit 1</button>
    </div>
</form>
</x-layout>
