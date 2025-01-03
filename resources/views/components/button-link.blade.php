@props([
    'url' => '/',
    'icon' => null,
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'block' => false,
    ])
<a
    href="{{$url}}"
    class="px-4 py-2 rounded hover_shadow-md {{$bgClass}} {{$hoverClass}} {{$textClass}} {{request()->is($url) ? 'text-yellow-500 font-bold' : ''}} {{$block ? 'block' : ''}}"
>
    @if($icon)
        <i class="fa fa-{{$icon}}"></i>
    @endif
    {{$slot}}
</a>
