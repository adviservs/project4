<?php
  echo "Hello world";

  // Это комментарий
  // echo "X equals $x";
  $a += 10; // Увеличение значения $x на 10
  echo "<br/>";
  echo $a;

  // Многострочный комментарий
  /* Это область
  многострочного комментария,
  которая не будет
  подвергаться интерпретации */
  echo "<br/>";
  $username = "Fried Smith";
  echo $username; // Строковые переменные
  echo "<br/>";
  $currint_user = $username;

  echo "<br/>";
  $count = 17; // Числовые переменные
  echo $count;
  echo "<br/>";
  $count2 = 17.5; // Числовые переменные с плавающей точкой
  echo $count2;

  echo "<br/>";
  $team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anna');
  echo $team[3]; // Эта команда отображает имя Chris
?>

<!-- Определение двумерного массива -->
<?php
  $oxo = array(array('x', ' ', 'o'),
  array('o', 'o', 'x'),
  array('x', 'o', ' ' ));
  echo "<br/>", "<br/>";
  echo "Это выборка из массива";
  echo "<br/>";
  echo $oxo[1][2];
  echo "<br/>";
  echo "Операторы +, -, *, /, выражение типа 6 + 2 будет равно 8";
  echo "<br/>";
  echo 6 + 2;

  echo "<br/><br/> Операторы присваивания";
  $j = 15;
  $k = 4;
  $j = $j % $k;
  echo "<br/>" . $j . "<br/>";

  
  $x += 10;
  $y -= 10;
  // Увеличение и уменьшение значения переменной на единицу
  ++$x;
  --$y;
  $y = 0;
  if (++$x == 12) echo "<br/>" . $x . "<br/>";

  if ($y-- == 0) echo "<br/>" . $y . "<br/>";

  $msgs = 5;
  echo "У вас " . $msgs . " сообщений.";

  echo "<br/>";
  $bulletin = "В данном случае, если в переменной $bulletin содержится сводка новостей,";
  $newsflash = " !!! экстренное сообщение";
  $bulletin .= $newsflash;
  echo $bulletin;
  echo "<br/>";
  $info = 'Предваряйте имена переменных символом $, как в данном примере: $variable';
  echo $info;
  echo "<br/>";
  $info2 = "На этой неделе ваш профиль просмотрело $count человек ";
  echo $info2;
  echo "<br/>";

  // $text = 'My spelling's atroshus'; // Ошибочный синтаксис
  $text = 'My spelling\'s still atroshus';
  echo $text . "<br/>";
  $text = "She wrote \n upon it, \"Return to sender\".";
  echo $text . "<br/>";
  $heading = "Дата\tИмя\tПлатеж";
  echo $heading . "<br/>";

?>
<?php
  $author = "Steve Ballmer";
  echo "Developers, Developers, developers, developers,
    developers,developers, developers, developers, developers!
    - $author.";
?>

<?php
  $author = "Bill Gates";
  $text = "Measuring programming progress by lines of code is like
    measuring aircraft building progress by weight.
    - $author.";
  echo "<br/>" . $text . "<br/>";
?>

<?php
  $author = "Brian W. Kernighan";
  echo <<<_END
  Debugging is twice as hard as writing the code in the first place.
  Therefore, if you write the code as cleverly as possible, you are,
  by definition, not smart enough to debug it.
  - $author.
  _END;
?>

<?php
  $author = "Scott Adams";
  $out = <<<_END
    Normal people believe that if it ain't broke, don't fix it.
    Engineers believe that if it ain't broke, it doesn't have enough
    features yet.
    - $author.
  _END;
  echo "<br/>" . $out;
?>

<!-- Автоматическое преобразование числа в строку -->
<?php
  $number = 12345 * 67890;
  echo "<br/>" . $number;
  echo "<br/>" . substr($number, 2, 3);
?>

<?php
  $pi = "3.1415927";
  $radius = 5;
  echo "<br/>" . $pi * ($radius * $radius);
?>

<?php
  define("ROOT_LOCATION", "/usr/local/www/");
  $directory = ROOT_LOCATION;
  echo "<br/>" . $directory;
  echo "<b/> Это строка " . __LINE__ . " в файле " . __FILE__;
  echo "<br/>";
  $b = -1;
  $b ? print "TRUE" : print "FALSE";
?>

<?php
  // function longdate($timestamp)
  // {
  //   return date("l F jS Y", $timestamp);
  // }
  // echo "<br/>";
  // echo longdate(time());
  // echo "<br/>"; 
  // echo longdate(time() - 17 * 24 * 60 * 60);
?>

<?php
  $temp = "Дата: ";
  echo "<br/>";
  echo longdate($temp, time());

  function longdate($text, $timestamp)
  {
    return $text . date("l F jS Y", $timestamp);
  }
?>

<?php
  function test()
  {
    static $count = 0;
    echo $count;
    $count++;
  }
  echo "<br/>";
  echo test();
  echo "<br/>";
  echo test();
?>

<?php
  echo "<br/> &lt и &gt <br>";
?>

<?php
  echo "a: [" . (20 > 9) . "]<br>";
  echo "b: [" . (5 == 6) . "]<br>";
  echo "c: [" . (1 == 0) . "]<br>";
  echo "d: [" . (1 == 1) . "]<br>";
?>
<?php // test2.php
  echo "<br>";
  echo "a: [" . TRUE . "]<br>";
  echo "b: [" . FALSE . "]<br>";
?>

<!-- Литералы и переменные -->
<?php
  $myname = "Brian";
  $myage = 37;
  echo "<br>";
  echo "a: " . 73 . "<br>"; // Числовой литерал
  echo "b: " . "Hello" . "<br>"; // Строковый литерал
  echo "c: " . FALSE . "<br>"; // Литерал константы
  echo "d: " . $myname . "<br>"; // Строковая переменная
  echo "e: " . $myage . "<br>"; // Числовая переменная
?>

<!-- Выражение и инструкция -->
<?php
  $day_number = 360;
  $days_to_new_year = 366 - $day_number; // Выражение
  if ($days_to_new_year < 30)
  {
    echo "Скоро Новый год! <br>"; // Инструкция
  }
?>

<!-- Три эквивалентных выражения -->
<?php
  $expression1 = 1 + 2 + 3 - 4 + 5;
  $expression2 = 2 - 4 + 5 + 3 + 1;
  $expression3 = 5 + 2 - 4 + 1 + 3;
  echo $expression1 . "<br>";
  echo $expression2 . "<br>";
  echo $expression3 . "<br>";
?>

<!-- Три выражения, которые также являются эквивалентными -->
<?php
  $expression1 = 1 * 2 * 3 / 4 * 5;
  $expression2 = 2 / 4 * 5 * 3 * 1;
  $expression3 = 5 * 2 / 4 * 1 * 3;
  echo $expression1 . "<br>";
  echo $expression2 . "<br>";
  echo $expression3 . "<br>";
?>

<!-- Три выражения, которые также являются эквивалентными -->
<?php
  $expression1 = 1 + 2 * 3 - 4 * 5;
  $expression2 = 2 - 4 * 5 * 3 + 1;
  $expression3 = 5 + 2 - 4 + 1 * 3;
  echo $expression1 . "<br>";
  echo $expression2 . "<br>";
  echo $expression3 . "<br>";
?>

<?php
  $month = "Март";
  if ($month == "Март") echo "Весна наступила <br>";
?>

<!-- Операторы равенства и тождественности -->
<?php
  $a = "1000";
  $b = "+1000";
  if ($a == $b) echo "1 <br>";
  if ($a === $b) echo "2 <br>";
?>

<!-- Операторы неравенства и нетождественности -->
<?php
  $a = "1000";
  $b = "+1000";
  if ($a != $b) echo "1 <br>";
  if ($a !== $b) echo "2 <br>";
?>

<!-- Четыре оператора сравнения -->
<?php
  $a = 3; $b = 2;
  if ($a > $b) echo "$a больше $b<br>";
  if ($a < $b) echo "$a меньше $b<br>";
  if ($a >= $b) echo "$a больше или равно $b<br>";
  if ($a <= $b) echo "$a меньше или равно $b<br>";
?>

<!-- Использование логических операторов -->
<?php
$a = 0; $b = 0;
echo ($a AND $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a . "<br>";
?>

<!-- Использование оператора ? -->
<?php
  echo $fuel <= 1 ? "Требуется дозаправка" : "Топлива еще достаточно";
?>

<!-- Присваивание условного результата оператора ? переменной -->
<?php
  $enough = $fuel <= 1 ? FALSE : TRUE;
?>