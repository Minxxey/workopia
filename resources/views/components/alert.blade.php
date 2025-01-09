@props(
['type',
'message',
'timeOut' => 5000
]
)

@if(session()->has($type))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, {{$timeOut}})" x-show="show"
         class="p-4 mb-4 text-sm text-white rounded {{$type === 'success' ? 'bg-green-500' : 'bg-red-500'}}">
        {{$message}}
    </div>
@endif
