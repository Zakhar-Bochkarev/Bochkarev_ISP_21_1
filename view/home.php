<HTML>
    <HEAD>
        <?php
            echo "<link rel='stylesheet' href=main.css>";
        ?>
    </HEAD>
    <BODY>
    <?php
    echo " <div class='container'>"; // Исправлено: 'conteiner' на 'container'
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>3/1</div>";
    echo " </div>";
    echo " <div class='main styleone'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__one'>Дана сторона квадрата a. Найти квадрат его периметра P = 4·a.</h1>";
    $a = 4;
    $P = 4 * $a; // периметр
    $P_squared = $P * $P; // квадрат периметра
    echo " </div>";
    echo " <div class='tusk'>";
    echo " <div class='one'>$a</div>";
    echo " <div class='two'>$P_squared</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>3/2</div>";
    echo " </div>";
    echo " <div class='main styletwo'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__two'>Дано расстояние L в сантиметрах. Используя операцию деления нацело, найти количество полных метров в нем (1 метр = 100 см)</h1>";
    echo " </div>";
    $L = 500; // расстояние в сантиметрах
    $meters = (int)($L / 100); // количество полных метров
    echo " <div class='tusk'>";
    echo " <div class='one'>$L</div>";
    echo " <div class='two'>$meters</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>4/1</div>";
    echo " </div>";
    echo " <div class='main stylethree'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__three'>Дано целое число A. Проверить истинность высказывания: «Число A является положительным и двузначным».</h1>";
    echo " </div>";
    $A = 2; 
    // Проверяем, является ли число положительным и двузначным
    if ($A > 0 && $A < 100 && $A >= 10) {
        echo " <div class='tusk'>";
        echo "<div class='two'> Число $A является положительным и двузначным.</div>";
    } else {
        echo " <div class='tusk'>";
         echo "<div class='two'> Число $A не является положительным и двузначным.</div>";
}
    echo " <div class='one__three'>$A</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>4/2</div>";
    echo " </div>";
    echo " <div class='main stylefour'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__four'>Дано целое число. Если оно является положительным и четным, то прибавить к нему 1; в противном случае не изменять его. Вывести полученное число.</h1>";
    echo " </div>";
    
    $number = 12; 
    if ($number > 0 && $number % 2 == 0) {
        $number = $number + 1; // Прибавляем 1, если число положительное и четное
    }
    echo " <div class='tusk'>";
    echo " <div class='one'>$number</div>";
    echo " <div class='two'>$number</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>4/3</div>";
    echo " </div>";
    echo " <div class='main stylefive'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__four'>Вычислить значение функции y=f(x) при произвольных значениях x.</h1>";
    echo "<img src='img/tusk.png' style='margin-top:3%'></img>";
    echo " </div>";
    
    $x = 5.52;
    $a = 2.1;
    $b = 6.7;
 
    if ($x < -2) {
        $result = $x ** 3 + 2 * $a; 
    } else if ($x >= -2 && $x <= 5) {
        $cos_value = cos($b * $x);
        if ($cos_value <= 0) {
            $result = "Ошибка: корень из отрицательного числа"; 
        } else {
            $result = log(abs($cos_value)); 
        }
    } else if ($x > 5) {
        $result = $x ** 2 * 2.7 ** $x; 
    }
    echo " <div class='tusk'>";
    echo " <div class='one'>$a, $b, $x</div>";
    echo " <div class='two'>$result</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>4/4</div>";
    echo " </div>";
    echo " <div class='main styleone'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text'>Вычислить значение функции y=f(x) при произвольных значениях x. Варианты заданий в таблице 2. Для вычисления значения функции использовать оператор switch.</h1>";
    echo "<img src='img/tusk_two.png' style='margin-top:3%'></img>";
    echo " </div>";
    
    $x = 9;
    $a = 2.1;
    $b = 6.7;

    switch (true) {
        case ($x < -2):
            $res = $x ** 3 + 2 * $a; 
            break;
    
        case ($x >= -2 && $x <= 5):
            $cos_value = cos($b * $x);
            if ($cos_value <= 0) {
                $res = "Ошибка: логарифм отрицательного числа"; 
            } else {
                $res = log(abs($cos_value)); 
            }
            break;
    
        case ($x > 5):
            $res = $x ** 2 * 2.7 ** $x; 
            break;
        
        default:
            $res = "Не определено"; 
    }
    echo " <div class='tusk'>";
    echo " <div class='one'>$a, $b, $x</div>";
    echo " <div class='two'>$res</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>5/1</div>";
    echo " </div>";
    echo " <div class='main styleseven'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__two'>Даны десять вещественных чисел. Найти произведение всех четных чисел.</h1>";
    echo " </div>";
    

    $numbers = [2.5, 3.0, 4.7, 5.0, 6.6, 7.2, 8.8, 9.1, 10.4, 11.0];
    $num = '2.5, 3.0, 4.7, 5.0, 6.6, 7.2, 8.8, 9.1, 10.4, 11.0'; //Для вывода

    $product = 1;
    $foundEven = false; // Переменная для отслеживания, найдены ли четные числа
    
    // Перебор каждого числа в массиве
    foreach ($numbers as $number) {
        // Проверка, является ли число четным
        if ($number % 2 == 0) {
            $product = $product * $number; // Умножаем на текущее четное число
            $foundEven = true; // Устанавливаем флаг о том, что четные числа найдены
        }
    }
    
    // Проверяем, были ли найдены четные числа и выводим результат
    if ($foundEven) {
        echo " <div class='two'>$product</div>";
    } else {
        echo " <div class='two'>Четные числа не найдены</div>";
    }
    
    echo " <div class='tusk'>";
    echo " <div class='one'>$num</div>";
    echo " <div class='two'>$product</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";


    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>5/2</div>";
    echo " </div>";
    echo " <div class='main styletwo'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__two'>Даны два целых числа A и B (A < B). Найти сумму всех целых чисел от A до B включительно.</h1>";
    echo " </div>";
    
    $a = 10;
    $b = 500;

    // Проверка условия A < B
    if ($a >= $b) {
        echo " <div class='two'>False</div>";
        exit; // Выход из программы при ошибке
    }

    // Вычисляем сумму всех целых чисел от A до B
    $sum = 0;

    for ($i = $a; $i <= $b; $i++) {
        $sum = $sum + $i; // Если i = A, то i = A + 1 и так далее, до B
    }

    echo " <div class='tusk'>";
    echo " <div class='one'>$a, $b</div>";
    echo " <div class='two'>$sum</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";


    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>5/1</div>";
    echo " </div>";
    echo " <div class='main styleseven'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__two'>Даны десять вещественных чисел. Найти произведение всех четных чисел.</h1>";
    echo " </div>";
    

    $numbers = [2.5, 3.0, 4.7, 5.0, 6.6, 7.2, 8.8, 9.1, 10.4, 11.0];
    $num = '2.5, 3.0, 4.7, 5.0, 6.6, 7.2, 8.8, 9.1, 10.4, 11.0'; //Для вывода

    $product = 1;
    $foundEven = false; // Переменная для отслеживания, найдены ли четные числа
    
    // Перебор каждого числа в массиве
    foreach ($numbers as $number) {
        // Проверка, является ли число четным
        if ($number % 2 == 0) {
            $product = $product * $number; // Умножаем на текущее четное число
            $foundEven = true; // Устанавливаем флаг о том, что четные числа найдены
        }
    }
    
    // Проверяем, были ли найдены четные числа и выводим результат
    if ($foundEven) {
        echo " <div class='two'>$product</div>";
    } else {
        echo " <div class='two'>Четные числа не найдены</div>";
    }
    
    echo " <div class='tusk'>";
    echo " <div class='one'>$num</div>";
    echo " <div class='two'>$product</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";


    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>6/1</div>";
    echo " </div>";
    echo " <div class='main styleone'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__one'>Дано  целое  число  N    (> 0).  Сформировать   и  вывести  целочисленный массив размера N, содержащий N первых положительных нечетных чисел: 1, 3, 5, . . . .</h1>";
    echo " </div>";

    $N = 2;

    $oddNumbers = [];
    
    for ($i = 0; $i < $N; $i++) {
        $oddNumbers[$i] = 2 * $i + 1; // 1, 3, 5, ...
    }

    
    echo " <div class='tusk'>";
    echo " <div class='one'>$N</div>";
    echo "<div class='two'>Нечётные числа: " . implode(", ", $oddNumbers) . "</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>6/2</div>";
    echo " </div>";
    echo " <div class='main stylefive'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__five'>Даны два массива A и B одинакового размера N. Сформировать новый массив  C  того же размера, каждый элемент  которого равен  максимальному из элементов массивов A и B с тем же индексом.</h1>";
    echo " </div>";

    $Amas = [2, 1, 3, 4, 5];
    $Bmas = [5, 2, 4, 9, 0];

    $Nmas = count($Amas);

    $Cmas = [];

    for ($i = 0; $i < $Nmas; $i++) {
        $Cmas[$i] = max($Amas[$i], $Bmas[$i]); // Получаем максимальное значение
    }


    
    echo " <div class='tusk'>";
    echo "<div class='one'>Массив A: " . implode(", ", $Amas,) .
     " Массив В: " . implode(", ", $Bmas,) ."</div>";
    echo "<div class='two'>Максимаоьное значение: " . implode(", ", $Cmas) . "</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";


?>

    </BODY>
</HTML>