@props([
    'tag' => '',
    'href' => '#',
])

@if($tag == 'a')
    <a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-green-500 text-white border border-gray-300 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }} href="{{ $href }}">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-green-500 text-white border border-gray-300 rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>
        {{ $slot }}
    </button>
@endif
