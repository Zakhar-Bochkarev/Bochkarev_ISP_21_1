<HTML>
    <HEAD>
        <TITLE>Лабораторная работа</TITLE>
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
        echo "<header class='maintxt'>Лабораторная работа 2</header>";

        echo "<div class='tusk_name'> Дана сторона квадрата a. Найти квадрат его периметра P = 4·a.", "</div>";
        $a = 1000;
        echo "<div class='tusk'> Данная сторона квадрата = $a</div>";
        $P = 4 * $a; // периметр
        $P_squared = $P * $P; // квадрат периметра
        echo "<div class='tusk'>Квадрат периметра cо стороной $a = $P_squared</div>";

        echo "<div class='tusk_next_name'>Дано расстояние L в сантиметрах. Используя операцию деления нацело, найти количество полных метров в нем (1 метр = 100 см)</div>";
        echo "<div class='tusk_next'>Расстояние L в сантиметрах = 200</div>";
        $L = 5000; // расстояние в сантиметрах
        $meters = (int)($L / 100); // количество полных метров
        echo "<div class='tusk_next'>Расстояние $L см равно $meters метрам</div>";
        echo "<div class='autor'>Выполнил Бочкарев Захар</div>"
        ?>
    </BODY>
</HTML>