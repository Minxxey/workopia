<x-layout>
    <x-slot name="title">Create Job</x-slot>
<h1>Create new job</h1>
<form action="/jobs" method="POST">
    @csrf
    <input type="text" name="title" id="" placeholder="title">
    <input type="text" name="description" id="" placeholder="description">
    <button type="submit">Submit 1</button>
</form>
</x-layout>
