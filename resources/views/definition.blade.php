@extends('layout')
@section('content')
    <div class="mt-6">
        <div
            class="col-span-2 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Що таке наслідування, композиція та агрегація
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Наслідування, композиція та агрегація – це способи взаємодії класів між собою. Тобто. як один клас
                    може використати методи іншого класу.
                </p>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Наслідування
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Це один із принципів ООП, який передбачає, що клас спадкоємець, матиме ті самі властивості і методи,
                    що і в базовому класі.
                </p>
                <x-code code="
class A
{
public function helloWorld() {
    echo 'Hello, World!';
}
}

class B extends A {}

$obj = new B();
$obj->helloWorld();  // Hello, World!"
                />
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Композиція
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Це асоціація, коли інший об'єкт створюється всередині класу.
                </p>
                <x-code code="
class A {
    public function helloWorld() {
        echo 'Hello, World!';
    }
}

class B {
    protected $a;

    public function __construct() {
        $this->a = new A();  // створює об'єкт іншого класу у конструкторі
    }

    public function sayHello() {
        $this->a->helloWorld();  // використовує об'єкт іншого класу
    }
}

$obj = new B();
$obj->sayHello();  // Hello, World!
"
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Тут бачимо, що у конструкторі класу B, створюється об'єкт класу A.
                    І далі використовується у методі sayHello.
                    Композиція - це насправді включення класу, всередину іншого класу з допомогою створення об'єкта
                    всередині цього класу.
                    Такий підхід має один величезний недолік - сильна пов'язаність, це означає, що для того, щоб змінити
                    клас A на A1 вам доведеться переписувати конструктор (new A1 замість A).
                    Перевага такого способу, те, що клас B керує часом життя об'єкта A.
                    Тобто. при видаленні об'єкта B буде видалено об'єкт A, який був створений всередині B.
                </p>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Агрегація
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Це асоціація, за якої використовуваний об'єкт створюється поза класом.
                </p>
                <x-code code="
class A
{
    public function helloWorld() {
        echo 'Hello, World!';
    }
}

class B
{
    protected $a;

    public function __construct($a) {
        $this->a = $a;
    }

    public function sayHello() {
        $this->a->helloWorld();  // використовує об'єкт іншого класу
    }
}

$objA = new A();  // створює об'єкт іншого класу

$objB = new B($objA);
$objB->sayHello();  // Hello, World!
"
                />

                <x-hr/>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Раннє та пізніше статичне зв'язування
                </h2>
                <x-code code="
class Transport
{
    public static $model = 'transport';

    public static function getModel() {
        return self::$model;
    }
}

class Car extends Transport{
    public static $model = 'car';
}

echo Car::getModel(); // 'transport'
"
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Слово "self", у рядку return self::$model; вказує на поточний клас, тому в результаті отримуємо
                    значення 'transport', цей механізм ще називається раннім статичним зв'язуванням.
                </p>
                <x-code code="
class Transport
{
    public static $model = 'transport';

    public static function getModel() {
        return static::$model;
  }
}

class Car extends Transport{
    public static $model = 'car';
}

echo Car::getModel(); // 'car'
"
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Якщо слово «self» замінити на «static», ми отримаємо «пізнє статичне зв'язування», тобто. зв'язок
                    буде встановлений з тим класом, який викликає цей код, в результаті отримаємо значення «car».
                </p>
                <x-hr/>


                {{--            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">--}}
                {{--            </h2>--}}
                {{--            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
                {{--            </p>--}}
                {{--            <x-code code="--}}

                {{--"--}}
                {{--            />--}}
                {{--            <x-hr/>--}}
            </div>
        </div>
    </div>
@endsection
