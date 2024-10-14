<HTML>
    <HEAD>
        <TITLE>Лабораторнаые работы</TITLE>
        <meta name="autor" content="Бочкарев Захар">
        <?php
            echo "<link rel='stylesheet' href=style.css>";
            echo "<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>"
        ?>
    </HEAD>
    <BODY>
        <?php
        echo "<header style='text-align:center' class='header_main'>Лабораторные работы</header>";

        echo "<main class='maintxt'>";
        echo "<div class='lab_num'>Лабораторная работа 3</div>";
        echo "<div class='tusk_name'> Дана сторона квадрата a. Найти квадрат его периметра P = 4·a.", "</div>";
        $a = 1000;
        echo "<div class='tusk'> Данная сторона квадрата = $a</div>";
        $P = 4 * $a; // периметр
        $P_squared = $P * $P; // квадрат периметра
        echo "<div class='tusk'>Квадрат периметра cо стороной $a = $P_squared</div>";
        echo "<div class='tusk_next_name'>Дано расстояние L в сантиметрах. Используя операцию деления нацело, найти количество полных метров в нем (1 метр = 100 см)</div>";
        $L = 5000; // расстояние в сантиметрах
        $meters = (int)($L / 100); // количество полных метров
        echo "<div class='tusk_next'>Расстояние $L см равно $meters метрам</div>";
                
        echo "<div class='lab_num'>Лабораторная работа 4</div>";
        echo "<div class='tusk_name'>Дано целое число A. Проверить истинность высказывания: «Число A является положительным и двузначным».</div>";


        $A = 2; 
        // Проверяем, является ли число положительным и двузначным
        if ($A > 0 && $A < 100 && $A >= 10) {
            echo "<div class='tusk_next'> Число $A является положительным и двузначным.</div>";
        } else {
             echo "<div class='tusk_next'> Число $A не является положительным и двузначным.</div>";
    }

        echo "<div class='tusk_name'>Дано целое число. Если оно является положительным и четным, то прибавить к нему 1; в противном случае не изменять его. Вывести полученное число.</div>";

            $number = 11; 
            if ($number > 0 && $number % 2 == 0) {
                $number = $number + 1; // Прибавляем 1, если число положительное и четное
            }
            echo "<div class='tusk_next'>Результат: $number</div>";

            echo "<div class='tusk_name'>Вычислить значение функции y=f(x) при произвольных значениях x.</div>";
            echo "<img src='tusk.png' style='margin-left:3%'></img>";
            $x = 5.52;
            $a = 2.1;
            $b = 6.7;

            echo "<div class='tusk'>Даны a = $a, b = $b, x = $x </div>"; 

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
            echo "<div class='tusk_next'>Результат: $result</div>";
                   
            echo "<div class='tusk_name'>Вычислить значение функции y=f(x) при произвольных значениях x. Варианты заданий в таблице 2. Для вычисления значения функции использовать оператор switch.</div>";
            echo "<img src='tusk_two.png' style='margin-left:3%'></img>";

            $x = 9;
            $a = 2.1;
            $b = 6.7;

            echo "<div class='tusk'>Даны a = $a, b = $b, x = $x </div>"; 
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
            echo "<div class='tusk_next'>Результат: $res</div>";

            echo "<footer class='autor'>Выполнил Бочкарев Захар</footer>"
        ?>
    </BODY>
</HTML>