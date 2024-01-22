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
