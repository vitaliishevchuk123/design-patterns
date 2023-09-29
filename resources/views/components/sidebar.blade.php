<div>
    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
        </svg>
    </div>

    <h2 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white">Fundamental</h2>

    <ol class="mt-4 max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
        <li>
            <a href="{{ route('patterns', 'property-container') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Property container</span> Контейнер властивостей
            </a>
        </li>
        <li>
            <a href="{{ route('patterns', 'delegation-pattern') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Delegation pattern</span> Шаблон делегування
            </a>
        </li>
        <li>
            <a href="{{ route('patterns', 'event-channel') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Event channel</span> Канал подій
            </a>
        </li>
        <li>
            <a href="{{ route('patterns', 'interface') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Interface</span> Інтерфейс
            </a>
        </li>
    </ol>

    <h2 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white">Creational</h2>

    <ol class="mt-4 max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
        <li>
            <a href="{{ route('patterns', 'abstract-factory') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Abstract factory</span> Абстрактна фабрика
            </a>
        </li>
        <li>
            <a href="{{ route('patterns', 'factory-method') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Factory method</span> Фабричний метод
            </a>
        </li>
        <li>
            <a href="{{ route('patterns', 'singleton') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Singleton</span> Одинак
            </a>
        </li>
        <li>
            <a href="{{ route('patterns', 'builder') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Builder</span> Будівельник
            </a>
        </li>
        <li>
            <a href="{{ route('patterns', 'lazy-initialization') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Lazy initialization</span> Лінива ініціалізація
            </a>
        </li>
    </ol>

    <h2 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white">Behavioral</h2>

    <ol class="mt-4 max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
        <li>
            <a href="{{ route('patterns', 'strategy') }}">
                <span class="font-semibold text-gray-900 dark:text-white">Strategy</span> Стратегія
            </a>
        </li>
    </ol>
</div>
