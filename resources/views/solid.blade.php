@extends('layout')
@section('content')
    <div class="mt-6">
        <div
            class="col-span-2 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
            <div>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Навіщо потрібен SOLID
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    SOLID — це набір принципів об’єктно-орієнтованого програмування, які представив Роберт Мартін (дядько Боб) у 1995 році.
                </p>
                <div class="mt-4 bg-gradient-to-r from-slate-600">
                    <img class="h-56" src="{{ asset('images/patterns/solid.png') }}"/>
                </div>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Їхня ідея в тому, що треба уникати залежностей між компонентами коду. Якщо є велика кількість залежностей, такий код важко підтримувати (спагеті-код).
                </p>

                <x-hr/>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Принцип єдиного обов’язку (Single Responsibility Principle)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Кожен клас повинен виконувати лише один обов’язок. Це не означає, що в нього має бути тільки один метод. Це означає, що всі методи класу мають бути сфокусовані на виконання одного спільного завдання. Якщо є методи, які не відповідають меті існування класу, їх треба винести за його межі.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Наприклад, замість того, щоб мати єдиний клас, який обробляє автентифікацію та авторизацію користувачів, було б краще мати окремі класи для автентифікації та авторизації.
                </p>
                <x-code code="
class User
{
    public function register($data)
    {
        // Register user logic
    }

    public function login($data)
    {
        // Login logic
    }
}

// Better implementation with SRP
class UserRegistration
{
    public function register($data)
    {
        // Register user logic
    }
}

class UserLogin
{
    public function login($data)
    {
        // Login logic
    }
}
"
                />

                <x-hr/>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Принцип відкритості/закритості (Open/Close Principle)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Класи мають бути відкриті до розширення, але закриті для змін. Якщо є клас, функціонал якого передбачає чимало розгалужень або багато послідовних кроків, і є великий потенціал, що їх кількість буде збільшуватись, то потрібно спроєктувати клас таким чином, щоб нові розгалуження або кроки не призводили до його модифікації.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Напевно, кожен з нас бачив нескінченні ланцюжки if then else або switch. Щойно додається чергова умова, ми пишемо черговий if then else, змінюючи при цьому сам клас. Або клас виконує процес з багатьма послідовними кроками — і кожен новий крок призводить до його зміни. А це порушує Open/Close Principle.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Цей принцип можна застосувати за допомогою інтерфейсів і абстрактних класів. Визначивши інтерфейс для конкретного завдання, можна створити кілька реалізацій цього завдання, кожна зі своєю унікальною функціональністю.
                </p>
                <x-code code="
class PaymentMethod
{
    public function processPayment($amount)
    {
        // Payment processing logic
    }
}

// Better implementation with OCP
interface PaymentMethodInterface
{
    public function processPayment($amount);
}

class CreditCardPayment implements PaymentMethodInterface
{
    public function processPayment($amount)
    {
        // Credit card payment processing logic
    }
}

class BankTransferPayment implements PaymentMethodInterface
{
    public function processPayment($amount)
    {
        // Bank transfer payment processing logic
    }
}
"
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Інший приклад з дотриманням Open/Closed Principle
                </p>
                <x-code code="
interface Logger
{
    public function log(string $message);
}


class FileLogger implements Logger
{
    public function log(string $message)
    {
        // Log to a file
    }
}


class DatabaseLogger implements Logger
{
    public function log(string $message)
    {
        // Log to a database
    }
}


class UserController
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function index()
    {
        $this->logger->log('Accessing user index');
        // ...
    }
}
"
                />

                <x-hr/>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Принцип підстановки Лісков (Liskov Substitution Principle)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Якщо об’єкт базового класу замінити об’єктом його похідного класу, то програма має продовжувати працювати коректно.
                </p>
                <x-code code="
class Animal
{
    public function makeSound()
    {
        return 'Animal sound';
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        return 'Bark';
    }
}

// Example of LSP violation
class Cat extends Animal
{
    public function climb()
    {
        return 'Climbing';
    }
}

// Better implementation with LSP
interface AnimalSoundInterface
{
    public function makeSound();
}

class Animal implements AnimalSoundInterface
{
    public function makeSound() {
        return 'Animal sound';
    }
}

class Dog implements AnimalSoundInterface
{
    public function makeSound()
    {
        return 'Bark';
    }
}

class Cat
{
    public function climb()
    {
        return 'Climbing';
    }
}
                "
                />

                <x-hr/>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Принцип розділення інтерфейсу (Interface Segregation Principle)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Краще, коли є багато спеціалізованих інтерфейсів, ніж один загальний. Маючи один загальний інтерфейс, є ризик потрапити в ситуацію, коли похідний клас логічно не зможе успадкувати якийсь метод.
                </p>
                <x-code code="
interface UserRepositoryInterface
{
    public function getUsers();

    public function getUser($id);

    public function createUser($data);

    public function updateUser($id, $data);

    public function deleteUser($id);
}

// Better implementation with ISP
interface ReadUserRepositoryInterface
{
    public function getUsers();

    public function getUser($id);
}

interface WriteUserRepositoryInterface
{
    public function createUser($data);

    public function updateUser($id, $data);

    public function deleteUser($id);
}
                "
                />

                <x-hr/>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Принцип інверсії залежностей (Dependency Inversion Principle)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    DIP стверджує, що модулі високого рівня не повинні залежати від модулів низького рівня, але обидва мають залежати від абстракцій. Іншими словами: класи мають залежати від абстракцій, а не від конкретних деталей. Цей принцип допомагає зменшити зв’язок між модулями та полегшує підтримку та масштабування коду.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Цей принцип можна застосувати за допомогою ін’єкції залежностей. Визначаючи залежності як абстракції, а не конкретні реалізації, можна змінити реалізацію залежності, не впливаючи на код, який залежить від неї.
                </p>
                <x-code code="
class UserController
{
    public function showProfile($id)
    {
        $userRepository = new UserRepository;
        $user = $userRepository->getUser($id);

        return view('user.profile', ['user' => $user]);
    }
}

// Better implementation with DIP
class UserController
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function showProfile($id)
    {
        $user = $this->userRepository->getUser($id);

        return view('user.profile', ['user' => $user]);
    }
}
                "
                />
        </div>
    </div>
@endsection
