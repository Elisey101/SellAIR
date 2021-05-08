/*
1) Опишите функцию, которая принимает необходимые для её корректного
исполнения аргументы
2) Функция должна получить строку из 10 англ.слов
3) Функция должна получить аргумент с одним англ.символом
который нужно заменить в полученной ранее строке с агл.словами
4) Функция должна получить аршумент с оодним англ.символом на которой
необходимо заменить указанный во втором аргументе символ
5) Внутри функции, необходимо заменить все символы, которые соответствуют
символу из второго аргумента на символы из третьего аргумента
6) Три раза выполнить данну. функцию с разными данными
*/

<html>
<head>
<meta charset="UTF-8" />
<title>Функции в PHP</title>
</head>

<body style="background-color:#343434; color:white;">
<?php
# function.php


// Ждем зрителей
// Наберитесь терпения и чая))



// Темы урока:
/*
1) Что такое функции ?
Функция в программировании - это некий наименованный участок кода, который
можно вызывать в разлиных местах программы многократно. Это удобно тем, что
мы всего один раз описываем кусок кода, а потом - многократно его вызываем,
обращаясь всего лишь к одному имени функции.

В случае, если нам понадобится внести изменения в код функции - мы произведем
изменения в теле функции.

2) Пользовательские функции в программировании
2.1) Пользовательские функции - описываются программистами
2.2) Пользовательские функции имеют:
2.2.1) Имя функции (каждое новое словое в имени функции должно
начинаться с большой буквы), правила такие же как с наименованием
переменной в PHP.
2.2.2) Функция имеет аргументы (об этом позже)
2.2.3) Фнукиця имеет тело (тело функции - это кусок кода, который
будет исполняться всякий раз, когда мы вызываем функцию)

3) Подробнее об аргументах функции
Аргументы функции позволяют передать разные данные для исполнения
тела функции с применением этих данных. Это позволяет исполнять
функцию каждый раз по разному исходя из того, какие данные были отправленны
в аргументы функции.

Важно знать про аргументы:
1) Аргументы - не обязательный элемент.
2) Количество аргументов - не ограничено
3) Аргументы - это обычные переменные
4) Внутри тела функции - перечисленные в круглых скобках аргументы
доступны как обычные переменные.
5) Аргументы бывают трех типов:
5.1) Аргументы по значению
5.2) Аргументы работающие по ссылке
Аргументы работающие по ссылке позволяют отразить какие либо
изменения значения переменной внутри тела функции на переменной,
из которой мы получили значения аргумента работабщего по ссылке.

Аргументы по ссылке - обязательно переменная.

5.3) Аргумениты с значением по умолчанию
5.3.1) Аргумент по умолчанию - можно не отправлять при вызове
функции
5.3.2) Аргумент с значением по умолчанию не может находиться
перед аргументом работабщим по значению или по ссылке (иначе говоря,
сначала аргументы с обязательным заполнением, а потом необязательные)

4) Области видимости переменных
Тело любой функции - это локальная область видимости
переменных. Глобальной областью видимости называют область
вне тела функций. Все переменные, созданные внутри глобальной области
не будут доступны в теле любой функции на прямую.

Все переменные, созданные внутри локальной области видимости (в теле
какой либо функции) будут видны и доступны только внутри этой самой
локальной области (только внутри тела той функции, в которой и была
создана переменная).

5) Возврат значения из функции
6) Конструкции continue и break в программировании
7) Добиваем foreach
(элементы по ссылке,
ассоциативные элементы,
работа с многомерными массивами)
2) Парктика с обычными циклами (работа с перебором строки)
3) Возможно начнем функции
*/


$var = 123;

function sum2Number($num1, $num2, &$res){
echo $res;
$res = $num1 + $num2;
}

sum2Number(255,355, $var);

echo $var;


function setArrayUserInfo($userLogin, $userPassword, $userCountry, &$result){
$result = [
'login' => $userLogin,
'password' => $userPassword,
'country' => $userCountry,
];
}

setArrayUserInfo('dunadan', 'ZXCb10_10113L', 'Kazakhstan', $userInfo1);
setArrayUserInfo('lexy', 'PZK_L0v3', 'USA', $userInfo2);

var_dump($userInfo1);
var_dump($userInfo2);

function makeMeCoffee($col, $size, $type = 'americano'){
echo "<br/> Take a ".$col." ".$size." hot ".$type;
}

makeMeCoffee(2, 'big', 'expresso');
makeMeCoffee(10, 'slim');

/*
1) Опишите функцию, которая принимает необходимые для её корректного
исполнения аргументы
2) Функция должна получить строку из 10 англ.слов
3) Функция должна получить аргумент с одним англ.символом
который нужно заменить в полученной ранее строке с агл.словами
4) Функция должна получить аршумент с оодним англ.символом на которой
необходимо заменить указанный во втором аргументе символ
5) Внутри функции, необходимо заменить все символы, которые соответствуют
символу из второго аргумента на символы из третьего аргумента
6) Три раза выполнить данну. функцию с разными данными
*/





// Домашнее задание:

/*
1) Опишите функцию которая будет выводить на экран надпись "hello World"
2) Запустите описанную ранее функцию 4 раза
3) Опишите несколько функций и продемонстрируйте работу с несколькими
типами аргументов (аргументы по значению, по ссылке и с значением по
умолчанию)
*/

?>
</body>
</html>

<?php
 $array = [1,2,3,4,5,13,51245,512,'lol','kek','cheburek','vsem','neznat ','chto ','delat '];
foreach($array as $text){
    if($text == 'neznat ' || $text == 'chto ' || $text == 'delat '){
        echo $text;
    }
}
//Валентин объясни пожалуйста правильную запись массива и foreach(с условиями). Я на прошло уроке не совсем понял

// Темы урока:
/*
1) Что такое функции ?
Функция в программировании - это некий наименованный участок кода, который
можно вызывать в разлиных местах программы многократно. Это удобно тем, что
мы всего один раз описываем кусок кода, а потом - многократно его вызываем,
обращаясь всего лишь к одному имени функции.

В случае, если нам понадобится внести изменения в код функции - мы произведем
изменения в теле функции.

2) Пользовательские функции в программировании
2.1) Пользовательские функции - описываются программистами
2.2) Пользовательские функции имеют:
2.2.1) Имя функции (каждое новое словое в имени функции должно
начинаться с большой буквы), правила такие же как с наименованием
переменной в PHP.
2.2.2) Функция имеет аргументы (об этом позже)
2.2.3) Фнукиця имеет тело (тело функции - это кусок кода, который
будет исполняться всякий раз, когда мы вызываем функцию)

3) Подробнее об аргументах функции
Аргументы функции позволяют передать разные данные для исполнения
тела функции с применением этих данных. Это позволяет исполнять
функцию каждый раз по разному исходя из того, какие данные были отправленны
в аргументы функции.

Важно знать про аргументы:
1) Аргументы - не обязательный элемент.
2) Количество аргументов - не ограничено
3) Аргументы - это обычные переменные
4) Внутри тела функции - перечисленные в круглых скобках аргументы
доступны как обычные переменные.
5) Аргументы бывают трех типов:
5.1) Аргументы по значению
5.2) Аргументы работающие по ссылке
Аргументы работающие по ссылке позволяют отразить какие либо
изменения значения переменной внутри тела функции на переменной,
из которой мы получили значения аргумента работабщего по ссылке.

Аргументы по ссылке - обязательно переменная.

5.3) Аргумениты с значением по умолчанию
5.3.1) Аргумент по умолчанию - можно не отправлять при вызове
функции
5.3.2) Аргумент с значением по умолчанию не может находиться
перед аргументом работабщим по значению или по ссылке (иначе говоря,
сначала аргументы с обязательным заполнением, а потом необязательные)

4) Области видимости переменных
Тело любой функции - это локальная область видимости
переменных. Глобальной областью видимости называют область
вне тела функций. Все переменные, созданные внутри глобальной области
не будут доступны в теле любой функции на прямую.

Все переменные, созданные внутри локальной области видимости (в теле
какой либо функции) будут видны и доступны только внутри этой самой
локальной области (только внутри тела той функции, в которой и была
создана переменная).

5) Возврат значения из функции
6) Конструкции continue и break в программировании
7) Добиваем foreach
(элементы по ссылке,
ассоциативные элементы,
работа с многомерными массивами)
2) Парктика с обычными циклами (работа с перебором строки)
3) Возможно начнем функции
*/
/*
1) Опишите функцию, которая принимает необходимые для её корректного
исполнения аргументы
2) Функция должна получить строку из 10 англ.слов
3) Функция должна получить аргумент с одним англ.символом
который нужно заменить в полученной ранее строке с агл.словами
4) Функция должна получить аршумент с оодним англ.символом на которой
необходимо заменить указанный во втором аргументе символ
5) Внутри функции, необходимо заменить все символы, которые соответствуют
символу из второго аргумента на символы из третьего аргумента
6) Три раза выполнить данну. функцию с разными данными
*/

<html>
<head>
<meta charset="UTF-8" />
<title>Функции в PHP</title>
</head>

<body style="background-color:#343434; color:white;">
<?php
# function.php


// Ждем зрителей
// Наберитесь терпения и чая))



// Темы урока:
/*
1) Что такое функции ?
Функция в программировании - это некий наименованный участок кода, который
можно вызывать в разлиных местах программы многократно. Это удобно тем, что
мы всего один раз описываем кусок кода, а потом - многократно его вызываем,
обращаясь всего лишь к одному имени функции.

В случае, если нам понадобится внести изменения в код функции - мы произведем
изменения в теле функции.

2) Пользовательские функции в программировании
2.1) Пользовательские функции - описываются программистами
2.2) Пользовательские функции имеют:
2.2.1) Имя функции (каждое новое словое в имени функции должно
начинаться с большой буквы), правила такие же как с наименованием
переменной в PHP.
2.2.2) Функция имеет аргументы (об этом позже)
2.2.3) Фнукиця имеет тело (тело функции - это кусок кода, который
будет исполняться всякий раз, когда мы вызываем функцию)

3) Подробнее об аргументах функции
Аргументы функции позволяют передать разные данные для исполнения
тела функции с применением этих данных. Это позволяет исполнять
функцию каждый раз по разному исходя из того, какие данные были отправленны
в аргументы функции.

Важно знать про аргументы:
1) Аргументы - не обязательный элемент.
2) Количество аргументов - не ограничено
3) Аргументы - это обычные переменные
4) Внутри тела функции - перечисленные в круглых скобках аргументы
доступны как обычные переменные.
5) Аргументы бывают трех типов:
5.1) Аргументы по значению
5.2) Аргументы работающие по ссылке
Аргументы работающие по ссылке позволяют отразить какие либо
изменения значения переменной внутри тела функции на переменной,
из которой мы получили значения аргумента работабщего по ссылке.

Аргументы по ссылке - обязательно переменная.

5.3) Аргумениты с значением по умолчанию
5.3.1) Аргумент по умолчанию - можно не отправлять при вызове
функции
5.3.2) Аргумент с значением по умолчанию не может находиться
перед аргументом работабщим по значению или по ссылке (иначе говоря,
сначала аргументы с обязательным заполнением, а потом необязательные)

4) Области видимости переменных
Тело любой функции - это локальная область видимости
переменных. Глобальной областью видимости называют область
вне тела функций. Все переменные, созданные внутри глобальной области
не будут доступны в теле любой функции на прямую.

Все переменные, созданные внутри локальной области видимости (в теле
какой либо функции) будут видны и доступны только внутри этой самой
локальной области (только внутри тела той функции, в которой и была
создана переменная).

5) Возврат значения из функции
6) Конструкции continue и break в программировании
7) Добиваем foreach
(элементы по ссылке,
ассоциативные элементы,
работа с многомерными массивами)
2) Парктика с обычными циклами (работа с перебором строки)
3) Возможно начнем функции
*/


$var = 123;

function sum2Number($num1, $num2, &$res){
echo $res;
$res = $num1 + $num2;
}

sum2Number(255,355, $var);

echo $var;


function setArrayUserInfo($userLogin, $userPassword, $userCountry, &$result){
$result = [
'login' => $userLogin,
'password' => $userPassword,
'country' => $userCountry,
];
}

setArrayUserInfo('dunadan', 'ZXCb10_10113L', 'Kazakhstan', $userInfo1);
setArrayUserInfo('lexy', 'PZK_L0v3', 'USA', $userInfo2);

var_dump($userInfo1);
var_dump($userInfo2);

function makeMeCoffee($col, $size, $type = 'americano'){
echo "<br/> Take a ".$col." ".$size." hot ".$type;
}

makeMeCoffee(2, 'big', 'expresso');
makeMeCoffee(10, 'slim');

/*
1) Опишите функцию, которая принимает необходимые для её корректного
исполнения аргументы
2) Функция должна получить строку из 10 англ.слов
3) Функция должна получить аргумент с одним англ.символом
который нужно заменить в полученной ранее строке с агл.словами
4) Функция должна получить аршумент с оодним англ.символом на которой
необходимо заменить указанный во втором аргументе символ
5) Внутри функции, необходимо заменить все символы, которые соответствуют
символу из второго аргумента на символы из третьего аргумента
6) Три раза выполнить данну. функцию с разными данными
*/





// Домашнее задание:

/*
1) Опишите функцию которая будет выводить на экран надпись "hello World"
2) Запустите описанную ранее функцию 4 раза
3) Опишите несколько функций и продемонстрируйте работу с несколькими
типами аргументов (аргументы по значению, по ссылке и с значением по
умолчанию)
*/

?>
</body>
</html>


function setUserInfo($userLogin, $userPassword, $userCountry = 'Unknown', $userCity = 'Unknown'){
echo 'User Login: '.$userLogin.', <br/>'
.'User Password: '.$userPassword.', <br/>'.
'User Country: '.$userCountry.', <br/>'.
'User live in City: '.$userCity."<br/><br/>";
}

setUserInfo("dunadan", 'ZXcV1239', 'Kazakhstan', 'Almaty');
setUserInfo("adasd", 'asdasdasd123123');




function nameName(){
$b = 12;
}

function nameName1(){
echo $b;
}



function sum($number1, $number2){
echo $number1 + $number2;
}

sum(2, 4);
sum(4, 4);
sum(12, 16);
sum(412, 12);
sum(2, 43);
sum(34, 74);




// Домашнее задание:

/*
1) Опишите функцию которая будет

выводить на экран надпись "hello World"
2) Запустите описанную ранее функцию 4 раза
3) Опишите несколько функций и продемонстрируйте работу с несколькими
типами аргументов (аргументы по значению, по ссылке и с значением по
умолчанию)
*/

?>

$instruction = 'riba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_text
riba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_text
riba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_textriba_text';
function developDonWorry(){
        echo ($instruction);
}
developDonWorry();

function payEntranceSystem($mail,$card,$amount){
    echo 'Text: '.$mail,'card: '.$card,';  Amount: '.$amount, ';';

}
payEntranceSystem('Hi, i want to pay my utilites','kaspiGold','2000';
foreach (payEntranceSystem as $text){
    $text ==
}




?>