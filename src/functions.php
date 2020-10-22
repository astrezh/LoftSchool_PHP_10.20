<?php
/**
Задание #1

    Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
    Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
**/
        
    function task1(array $strings, bool $return = true)
{
    if ($return) {
        echo implode($strings);
    }
	else {
		foreach ($strings as $str) {
		echo "<p>$str</p>";
	}
	}
}    
        
        
        
/**
Задание #2

    Функция должна принимать переменное число аргументов.
    Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
    Остальные аргументы это целые и/или вещественные числа.
**/
        
   function task2(string $action, ...$args){

	if ($action == '+') {

		$result = 0;

		foreach ($args as $arg) {

			$result += $arg;
		}

		echo $result;

	}elseif ($action == '-') {

		$result = $args[0];

		for ($i = 1; $i <= sizeof($args); $i++) {

			$result -= $args[$i];
		}

		echo $result;


	}elseif ($action == '*') {

		$result = $args[0];

		foreach ($args as $arg) {

			$result *= $arg;
		}

		echo $result;

	}elseif ($action == '/') {
		$result = array_shift($args);
		  foreach ($args as $n => $arg) {
			if ($arg == 0){
				echo 'Деление на 0 невозможно';	
			}
			
			$result /= $arg;
		}
		echo $result;
	}
	}

task2 ('/', 1, 3, 2);     
                
        
/**
Задание #3 (Использование рекурсии не обязательно)

    Функция должна принимать два параметра – целые числа.
    Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию. (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть выполнена с использованием тега <table>
    В остальных случаях выдавать корректную ошибку.
 */
function task3($a, $b)
{
    if (!is_int($a)) {
        trigger_error('A is not integer');
        return false;
    }
    if (!is_int($b)) {
        trigger_error('B is not integer');
        return false;
    }

    if ($a < 0 || $b < 0) {
        trigger_error('Argumentsmust be positive');
        return false;
    }

    $result = '<table>';
    for ($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}
task3(2, 2);
