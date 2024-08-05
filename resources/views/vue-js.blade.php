@extends('layout')
@section('content')
    <div class="mt-6">
        <div
            class="col-span-2 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
            <div>
                <h2 class="mb-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    Основи
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        Vue
                    </span>
                </h2>

                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img src="{{ asset('images/vue/ref-reactive.png') }}"/>
                </div>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Приклад
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Добавлення в корзину.
                </p>
                <div class="d-flex">
                    <div class="mt-4 bg-gradient-to-r from-slate-600">
                        <img width="600" src="{{ asset('images/vue/ex-1.png') }}"/>
                    </div>
                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Нехай ми маємо кнопку добавлення в корзину.
                    </p>
                </div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <b>
                        На чистому JS
                    </b>
                </p>
                <div class="d-flex">
                    <div class="mt-4 bg-gradient-to-r from-slate-600">
                        <img width="400" src="{{ asset('images/vue/ex-1-js-1.png') }}"/>
                    </div>
                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Створюємо константу і присвоюємо false, пише "добавити в корзину"
                    </p>
                    <div class="m-4 bg-gradient-to-r from-slate-600">
                        <img width="400" src="{{ asset('images/vue/ex-1-js-2.png') }}"/>
                    </div>
                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Константі присвоюємо true, пише "видалити з корзини"
                    </p>
                </div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <b>
                        На Vue
                    </b>
                </p>
                <div class="d-flex">
                    <div class="mt-4 bg-gradient-to-r from-slate-600">
                        <img width="400" src="{{ asset('images/vue/ex-1-vue-1.png') }}"/>
                    </div>
                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Створюємо реактивну зміну і присвоюємо true
                    </p>
                    <div class="m-4 bg-gradient-to-r from-slate-600">
                        <img width="400" src="{{ asset('images/vue/ex-1-vue-2.png') }}"/>
                    </div>
                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Змінюємо реактивну змінну через .value =
                    </p>
                </div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <b>
                        Через .value бо під капотом проксі обʼєкт
                    </b>
                </p>
                <div class="d-flex">
                    <div class="mt-4 bg-gradient-to-r from-slate-600">
                        <img width="900" src="{{ asset('images/vue/proxy-1.png') }}"/>
                    </div>
                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Приклад проксі
                    </p>
                </div>
                <div class="d-flex">
                    <div class="mt-4 bg-gradient-to-r from-slate-600">
                        <img src="{{ asset('images/vue/proxy-2.png') }}"/>
                    </div>
                    <p class="m-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Спрощений код під капотом ref(). Є сетер і гетер поля value
                    </p>
                </div>
                <x-hr/>

                <h2 class="mb-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    <span
                        class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        DOM
                    </span>
                    Дерево JS
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <b>
                        На чистому JS
                    </b>
                </p>
                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img src="{{ asset('images/vue/dom.png') }}"/>
                </div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <b>
                        На чистому Vue називається віртуальне дом дерево.
                    </b>
                </p>
                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img src="{{ asset('images/vue/virtual-dom.png') }}"/>
                </div>
                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img src="{{ asset('images/vue/v-dom-2.png') }}"/>
                </div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    <b>
                        Директиви
                    </b>
                </p>
                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img src="{{ asset('images/vue/v-on.png') }}"/>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .d-flex {
            display: flex;
        }
    </style>
@endpush
