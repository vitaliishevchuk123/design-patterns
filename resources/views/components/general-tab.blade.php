<div class="mt-6">
    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
        @foreach($list as $item)
            <li class="w-full">
                <a href="{{ $item['active'] ? 'javascript:void(0)' : $item['link'] }}"
                   class="inline-block w-full p-4 focus:ring-4 focus:outline-none focus:ring-blue-300
                   @if($item['active']) active dark:text-white dark:bg-gray-700 @else dark:bg-gray-800 dark:hover:text-white hover:text-gray-700 dark:hover:bg-gray-700 @endif
                    @if($loop->first)rounded-l-lg @endif
                    @if($loop->last)rounded-r-lg @endif">
                    {{ $item['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
