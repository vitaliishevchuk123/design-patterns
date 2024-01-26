@extends('layout')
@section('content')
    <div class="mt-6">
        <div
            class="col-span-2 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
            <div>
                <h2 class="mb-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    Group By
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        Raw
                    </span>
                </h2>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Example
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    It is used, as a rule, when you need to calculate some statistics. For example, sales statistics over the years.
                    Laravel's Eloquent query builder includes a groupByRaw method that allows you to group the results of a query using a raw SQL expression.
                    This method can be useful when you need more flexibility in specifying the grouping conditions.
                </p>
                <x-code code="
//simple groupBy

$users = DB::table('users')
    ->select(DB::raw('YEAR(created_at) as year'), DB::raw('COUNT(*) as user_count'))
    ->groupBy(DB::raw('YEAR(created_at)'))
    ->get();
                "
                />
                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img src="{{ asset('images/tips/groupByRaw-1.png') }}"/>
                    <img src="{{ asset('images/tips/groupByRaw-2.png') }}"/>
                    <img src="{{ asset('images/tips/groupByRaw-3.png') }}"/>
                </div>


                <x-hr/>

                <h2 class="mb-4 mt-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    Domain Driven Design
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                            (DDD)
                    </span>
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Modern web frameworks take one group of related concepts and split it across multiple places throughout your codebase.
                    Laravel provides a very clear structure with large variety of tools to make the development easier and faster.
                    Along with the huge community it makes Laravel a great option for most starting projects.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Building scalable applications, instead, requires a different approach.
                    Have you ever heard from a client to work on controllers or review the models folder?
                    Probably never - they ask you to work on invoicing,
                    clients management or users. These concept groups are called domains.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Let's make a practical exercise applying Domain Driven Design.
                    Our goal is to create domain logic for users that can be universally used and extended in any Laravel project.
                    Taking advantage of the framework power at the same time we meet complex business requirements.
                </p>

                <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Example with Laravel
                </h3>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Domain layer contains aggregates, value objects (VOs), data transfer objects (DTOs), domain events, entities, models, etc...
                    Since this layer is where abstractions are made, the design of interfaces are included in the domain layer

                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Created user domain includes very basic aggregate with corresponding value objects (ID, name & email),
                    the repository interface (contract) and search criteria to retrieve filtered data. In case of missing user,
                    specific user domain exception is launched.
                </p>
                <div class="mt-4 text-gray-500 dark:text-gray-400">
                    Read more:
                    <a class="text-blue-500"
                       target="_blank"
                       href="https://github.com/Orphail/laravel-ddd"
                    >Orphail Laravel DDD</a>
                </div>
                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img src="{{ asset('images/tips/ddd-list.png') }}"/>
                </div>
                <x-code code="
...
├── Domain
│   ├── User
│   └── Post
├── Application
│   ├── UserRepository
│   ├── PostRepository
│   └── ...
├── Presentation
│   ├── UserController
│   ├── PostController
│   └── ...
├── Infrastructure
│   ├── UserEloquent
│   ├── PostEloquent
│   └── ...
                "
                />
                <x-code code="
...
├── User
│   ├── Domain
│   ├── Application
│   ├── Presentation
│   └── Infrastructure
├── Company
│   ├── Domain
│   ├── Application
│   ├── Presentation
│   └── Infrastructure
...
                "
                />
                <x-hr/>


                {{--                <h2 class="mb-4 mt-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">--}}
                {{--                    Основні принципи--}}
                {{--                    <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">--}}
                {{--                        ООП--}}
                {{--                    </span>--}}
                {{--                </h2>--}}
                {{--                <h3 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">--}}
                {{--                </h3>--}}
                {{--                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
                {{--                </p>--}}
                {{--                <x-code code="--}}

                {{--                "--}}
                {{--                />--}}
                {{--                <x-hr/>--}}
            </div>
        </div>
    </div>
@endsection
