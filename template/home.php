<HTML>
    <HEAD>
        <?php
            echo "<link rel='stylesheet' href=template/style.css>";
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

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>7/1</div>";
    echo " </div>";
    echo " <div class='main styleone'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__one'>Даны  целые  положительные  числа  M и  N. Сформировать целочисленную матрицу размера M × N, у которой все  элементы  I -й строки  имеют значение 10·I (I = 1, . . ., M ).</h1>";
    echo " </div>";

   
    $M = 2; // Количество строк
    $N = 1; // Количество столбцов
    
    // Создание матрицы
    $matrix = array();
    
    // Заполнение матрицы
    for ($i = 1; $i <= $M; $i++) {
        $matrix[$i - 1] = array(); // Создаем пустой массив для строки I
        for ($j = 0; $j < $N; $j++) {
            $matrix[$i - 1][$j] = 10 * $i; // Заполняем элемент матрицы
        }
    }
    
    
    echo "<div class='tusk'>";
    echo "<div class='one'>Количество строк: " . $M . " Количество столбцов: " . $N . "</div>";
    echo "<div class='two'>"; // Начало div с классом two_matrix

for ($i = 0; $i < $M; $i++) {
    for ($j = 0; $j < $N; $j++) {
        echo $matrix[$i][$j] . " "; // Вывод каждого элемента строки
    }
    echo "<br>"; 
}

echo "</div>"; 
    
    echo " </div>";
    echo " </div>";
    echo " </div>";

    echo " <div class='container'>";
    echo " <div class='left_block'>";
    echo " <div class='lab_num'>7/2</div>";
    echo " </div>";
    echo " <div class='main styletwo'>";
    echo " <div class='block_up'>";
    echo " <h1 class='Tusk_text__two'>Дана  матрица  размера  M × N.  Поменять  местами  строки,  содержащие минимальный и максимальный элементы матрицы.</h1>";
    echo " </div>";

   
        // Задаем размеры матрицы
    $M = 3; // Количество строк
    $N = 4; // Количество столбцов

    // Создание матрицы
    $matrix = [];

    // Заполнение матрицы случайными числами для примера
    for ($i = 0; $i < $M; $i++) {
        $matrix[$i] = [];
        for ($j = 0; $j < $N; $j++) {
            $matrix[$i][$j] = rand(1, 100); // Заполняем элемент матрицы случайными числами от 1 до 100
        }
    }

    // Вывод начальной матрицы
    foreach ($matrix as $row) {
        echo "<div class='one'>" . implode(", ", $row) . "</div>";
    }

    // Инициализация переменных для хранения минимального и максимального значений и их индексов
    $minValue = PHP_INT_MAX;
    $maxValue = PHP_INT_MIN;
    $minRowIndex = -1;
    $maxRowIndex = -1;

    // Поиск минимального и максимального элементов и их индексов строк
    for ($i = 0; $i < $M; $i++) {
        for ($j = 0; $j < $N; $j++) {
            if ($matrix[$i][$j] < $minValue) {
                $minValue = $matrix[$i][$j];
                $minRowIndex = $i; // Сохраняем индекс строки с минимальным элементом
            }
            if ($matrix[$i][$j] > $maxValue) {
                $maxValue = $matrix[$i][$j];
                $maxRowIndex = $i; // Сохраняем индекс строки с максимальным элементом
            }
        }
    }

    // Проверяем, что строки для замены найдены
    if ($minRowIndex != -1 && $maxRowIndex != -1) {
        // Меняем местами строки
        $temp = $matrix[$minRowIndex];
        $matrix[$minRowIndex] = $matrix[$maxRowIndex];
        $matrix[$maxRowIndex] = $temp;
    }


    
    echo "<div class='tusk'>";
    // Вывод измененной матрицы
    foreach ($matrix as $row) {
        echo "<div class='two_matrix'>" . implode(", ", $row) . "</div>";
    }
    
    echo " </div>";
    echo " </div>";
    echo " </div>";
?>

    </BODY>
</HTML>