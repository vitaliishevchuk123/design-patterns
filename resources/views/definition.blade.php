@extends('layout')
@section('content')
    <div class="mt-6">
        <div
            class="col-span-2 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
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

                <h2 class="mb-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        DRY
                    </span>
                </h2>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    DRY - Don't repeat yourself(Не повторюйся)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Наприклад, більшість програм матимуть форму для реєстрації користувачів, яка буде викликати контролер і повертати значуще подання залежно від успіху чи невдачі. Якщо також є мобільний додаток, він, ймовірно, матиме кінцеву точку API, призначену для реєстрації користувачів, яка повертатиме JSON. Досить часто також є команда artisan для створення користувачів(Сідери, Фабрики), особливо на ранній стадії розробки.
                </p>
                <img class="mt-4 h-auto max-w-full" src="{{ asset('images/dry/user-controllers.png') }}" alt="user controllers"/>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Це дублювання коду може здатися досить нешкідливим, але все ж, якщо логіка зростає, наприклад, якщо ви хочете надіслати сповіщення електронною поштою новозареєстрованому користувачеві, вам доведеться не забути надіслати його з обох контролерів. Отже, якщо ми хочемо зберегти наш код СУХИМ, нам потрібно перемістити його кудись в інше місце.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Загальною відповіддю на цю проблему є те, що ви знайдете в будь-якій темі форуму: «використовуйте клас обслуговування та викликайте його з вашого контролера». Добре, але як мені структурувати свій клас обслуговування? Чи створювати мені UserService для реалізації всієї логіки щодо користувачів, яку я буду вводити скрізь, де це потрібно? Або щось інше?
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Спочатку може виникнути спокуса створити окремий клас і згрупувати весь код, який стосується конкретної моделі. Щось на зразок цього :
                </p>
                <img class="mt-4 h-auto max-w-full" src="{{ asset('images/dry/user-service.png') }}" alt="user service"/>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Це виглядає досить задовільно: ми можемо викликати або використовувати методи створення/видалення з будь-якого контролера, а потім обробити результат будь-яким способом. Отже, у чому проблема цього підходу? Проблема в тому, що ми рідко маємо справу з окремими моделями окремо.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Скажімо, коли користувач створює обліковий запис, разом із ним створюється новий блог. Якщо ми дотримуємося нашого поточного підходу, ми повинні створити клас BlogService, який буде впроваджено як залежність від нашого класу UserService:
                </p>
                <img class="mt-4 h-auto max-w-full" src="{{ asset('images/dry/user-service-with-blog.png') }}" alt="user service with blog"/>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Легко передбачити, що коли наші додатки зростуть, ми матимемо десятки класів обслуговування, деякі з них мають 5 або 6 інших класів обслуговування як залежність, що закінчиться тим безладним кодом спагетті, якого ми хочемо уникнути за всяку ціну.
                </p>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Представляємо клас єдиної дії
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Отже, що, якщо замість того, щоб мати один єдиний сервіс клас з кількома методами, ми вирішимо розділити його на кілька класів?
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Отже, що, якщо замість того, щоб мати один єдиний сервіс клас з кількома методами, ми вирішимо розділити його на кілька класів?
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    По-перше, давайте відмовимося від терміна сервіс клас, який є надто загальним і розпливчастим, і назвемо наші нові класи діями(action класи), і визначимо, що вони собою являють і що вони можуть робити.
                </p>
                <ul class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxe list-disc list-inside">
                    <li>Клас дій повинен мати назву, яка сама собою зрозуміла, що він робить, наприклад: CreateOrder, ConfirmCheckout, DeleteProduct, AddProductToCart тощо…</li>
                    <li>Він повинен мати лише один публічний метод як API. В ідеалі це має бути завжди те саме ім’я методу, наприклад handle() або execute(). Це зручно, якщо нам потрібно реалізувати якийсь шаблон адаптера для наших дій.</li>
                    <li>Він має бути агностиком запиту/відповіді. Він не працює з класом Request і не надсилає відповідь. Цю відповідальність несе контролер.</li>
                    <li>Він може мати інші дії як залежність.</li>
                    <li>Він повинен забезпечувати дотримання бізнес-правил, створюючи виняткову ситуацію, якщо щось заважає їй виконати та/або повернути очікуване значення, і залишити викликаючому (або ExceptionHandler laravel) відповідальність за те, як відобразити/відреагувати на виняток.</li>
                </ul>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Створення нашого action класу CreateUser
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Тепер давайте візьмемо наш попередній приклад і переробимо його за допомогою одного класу дій, який ми назвемо CreateUser.
                </p>
                <img class="mt-4 h-auto max-w-full" src="{{ asset('images/dry/create-user-action.png') }}" alt="create user action"/>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Ви, мабуть, запитаєтеся, чому метод створює виняток, якщо електронний лист уже зайнято. Чи не слід подбати про це шляхом перевірки запиту? Звичайно, так. Однак доцільно застосувати бізнес-правила всередині самого класу дій. Це робить логіку більш очевидною для сприйняття, а налагодження простіше.
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Ось нова версія наших контролерів, які використовують наші класи дій:
                </p>
                <img class="mt-4 h-auto max-w-full" src="{{ asset('images/dry/controllers-using-actions.png') }}" alt="controllers using actions"/>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Тепер будь-які зміни, які ми внесемо в процес реєстрації користувачів, відбуватимуться як у версії API, так і в веб-версії. Гарно та чисто.
                </p>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    Ще використання нашого action класу CreateUser
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Скажімо, нам потрібна дія, щоб імпортувати 1000 користувачів у нашу програму. Ми можемо написати клас дії для цього імпорту, який повторно використовуватиме клас CreateUser:
                </p>
                <img class="mt-4 h-auto max-w-full" src="{{ asset('images/dry/import-users.png') }}" alt="import users"/>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Чисто, чи не так? Ми можемо повторно використати наш код CreateUser, вставивши його в метод Collection::map(), а потім повернути колекцію, що містить усіх щойно створених користувачів. Ми могли б покращити його, повернувши нульовий об’єкт, коли електронний лист є дублікатом, або завантаживши цю інформацію в файл журналу, тощо...
                </p>
                <h2 class="mb-4 mt-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        KISS
                    </span>
                </h2>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    KISS - Keep It Simple, Stupid! (Код має бути простим)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Принцип KISS стверджує, що програмне забезпечення має бути максимально простим. Це робить код легшим для розуміння, тестування та підтримки.
                </p>
                <h2 class="mb-4 mt-4 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white">
                    <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        YAGNI
                    </span>
                </h2>
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                    YAGNI - You Ain't Gonna Need It! (Тобі це не знадобиться!)
                </h2>
                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Принцип YAGNI означає завжди впроваджувати речі тільки тоді, коли вони дійсно потрібні, і ніколи не впроваджувати речі до того, як вони знадобляться.
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
