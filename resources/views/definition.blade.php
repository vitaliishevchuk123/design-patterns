@extends('layout')
@section('content')
    <div class="mt-6">
        <div
            class="col-span-2 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>

                <h2 class="mb-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    Основні принципи
                    <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        ООП
                    </span>
                </h2>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Інкапсуляція (Encapsulation)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Інкапсуляція — це принцип ООП, який полягає в приховуванні деталей реалізації об'єктів від «зовнішнього світу». Цей принцип стверджує, що вся важлива інформація міститься всередині об’єкта, а назовні доступна тільки вибрана інформація. Реалізація та стан кожного об’єкта приватно зберігаються всередині визначеного класу. Інші об'єкти не мають доступу до цього класу або повноважень вносити зміни. Вони ладні взаємодіяти лише з певною кількістю відкритих функцій або методів. Подібне приховування даних гарантує безпеку програми та контроль над зміною стану об’єкта, знижує ризик помилок та робить програму більш зрозумілою.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Інкапсуляція досягається за допомогою модифікаторів доступу, таких як public, protected і private. Ці модифікатори контролюють, як інші класи можуть отримати доступ до властивостей і методів класу.
                </p>
                <x-code code="
class User {
   private $name;
   protected $email;
   public $password;

   public function __construct($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
   }

   public function getName() {
      return $this->name;
   }
}

$user = new User('John Doe', 'john@example.com', 'password123');

echo $user->name; // Error: Cannot access private property User::$name
echo $user->email; // Error: Cannot access protected property User::$email
echo $user->password; // Outputs: password123
echo $user->getName(); // Outputs: John Doe
                "
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    У наведеному вище прикладі клас User визначає три властивості: $name, $email і $password. Властивість $name оголошена як приватна, що означає, що до неї можна отримати доступ лише в межах класу User. Властивість $email оголошена як захищена, що означає, що до неї можна отримати доступ у класі User та його підкласах. Властивість $password оголошена як публічна, що означає, що до неї можна отримати доступ за межами класу User.
                </p>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Наслідування (Inheritance)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Наслідування — це принцип, який дозволяє створювати нові класи на основі наявних (батьківських класів), з можливістю перевизначення або доповнення їх властивостей та методів. Програми можуть містити тисячі рядків коду, який часто складно підтримувати. Ще одна проблема, з якою часто стикаються девеловпери, полягає в тому, що у програмах є схожі об'єкти. Вони можуть мати спільний код або логіку, але вони не зовсім однакові. Якби щоразу доводилося створювати абсолютно новий об’єкт для кожного об’єкта, який використовується в програмі, це призвело б до збільшення та ускладнювання коду. Щоб запобігти цьому, використовуються принцип наслідування. З його допомогою розробник може використати логіку батьківського класу у дочірньому. Це спрощує розробку та зменшує кількість дублювального коду.
                </p>
                <x-code code="
class Controller {
    public function handleRequest(Request $request) {
        // implementation details for handling request
    }

    public function sendResponse(Response $response) {
        // implementation details for sending response
    }
}

class UserController extends Controller {
    public function showProfile($userId) {
        // implementation details for showing user profile
    }

    public function editProfile($userId) {
        // implementation details for editing user profile
    }
}
                "
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Наприклад, скажімо, у нас є батьківський клас під назвою Controller, який надає деякі функції, спільні для всіх контролерів у нашій програмі Laravel, наприклад обробку запитів і відповідей. Потім ми можемо створити дочірній клас під назвою UserController, який успадковує клас Controller і надає власну функціональність для пов’язаних із користувачем запитів.
                </p>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Поліморфізм (Polymorphism)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Поліморфізм — це принцип, який в певному сенсі доповнює наслідування. Тобто об'єкти різних класів можуть виконувати дії з однаковою назвою, використовуючи різний код. Наприклад, метод «показати інформацію» може відображати різні дані про об'єкти типу «автомобіль», «літак» або «корабель». Окрім того, поліморфізм допомагає створювати більш гнучкі та модульні програми, й в цілому спрощує процес розробки, оскільки можна створювати загальні методи та функції, які можуть використовуватися для різних типів об'єктів.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Поліморфізм досягається через інтерфейси та успадкування. Інтерфейс визначає набір методів, які повинен реалізувати клас, тоді як успадкування дозволяє дочірнім класам замінювати або розширювати функціональні можливості свого батьківського класу.
                </p>
                <x-code code="
interface Notification
{
    public function send($message);
}

class EmailNotification implements Notification
{
    public function send($message)
    {
        // implementation details for sending email notification
    }
}

class SmsNotification implements Notification
{
    public function send($message)
    {
        // implementation details for sending SMS notification
    }
}
                "
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Наприклад, скажімо, у нас є інтерфейс під назвою Notification, який визначає метод send(). Потім ми можемо створити різні конкретні класи, які реалізують цей інтерфейс і нададуть власні деталі реалізації для методу send(). Потім ми можемо використовувати ці класи як взаємозамінні в нашому коді, якщо вони реалізують інтерфейс сповіщень.
                </p>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Абстракція (Abstraction)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Абстракція допомагає зосередитися на головних аспектах системи та ігнорувати менш важливі деталі, які не впливають на головні функції. Це дозволяє створювати більш зрозумілі програми. Абстракцію можна розглядати як розширення до інкапсуляції. Знову ж таки, візьмемо програми, що містять тисячі рядків коду. Завдяки принципу абстракції кожен об’єкт відкриває лише певний механізм для використання. Таким чином, код всередині значною мірою стає нерелевантним для інших об’єктів. Наприклад, у програмі для зберігання інформації про кіно можна створити клас «Фільм», який надає доступ тільки до найбільш важливих деталей про ту чи іншу стрічку, скажімо, до назви, року випуску та жанру, приховуючи менш важливі деталі, як от кадри чи технічні параметри.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Абстракція досягається через інтерфейси та абстрактні класи. Вони використовуються для визначення набору методів, які має реалізувати клас, без уточнення того, як вони мають бути реалізовані.
                </p>
                <x-code code="
interface PaymentGateway
{
   public function processPayment($amount);
}

class StripeGateway implements PaymentGateway
{
   public function processPayment($amount)
   {
      // Code to process payment through Stripe
   }
}

class PaypalGateway implements PaymentGateway
{
   public function processPayment($amount)
   {
      // Code to process payment through PayPal
   }
}
                "
                />
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    У наведеному вище прикладі інтерфейс PaymentGateway визначає набір методів, які має реалізувати клас, не вказуючи, як вони мають бути реалізовані. Класи StripeGateway і PaypalGateway реалізують інтерфейс PaymentGateway і визначають власну реалізацію методу processPayment.
                </p>
                <x-hr/>

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
    public function helloWorld()
    {
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
class A
{
    public function helloWorld()
    {
        echo 'Hello, World!';
    }
}

class B
{
    protected $a;

    public function __construct()
    {
        $this->a = new A();  // створює об'єкт іншого класу у конструкторі
    }

    public function sayHello()
    {
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
    public function helloWorld()
    {
        echo 'Hello, World!';
    }
}

class B
{
    protected $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function sayHello()
    {
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
