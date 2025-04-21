<?php
$a = readline(prompt: "Введите месяц(1-12): ");
switch ($a) {
    case 1:
        echo "Январь 31 день";
        break;
    case 2:
        echo "Февраль 28 дней (високосный год 29 дней)";
        break;
    case 3:
        echo "Март 31 день";
        break;
    case 4:
        echo "Апрель 30 дней";
        break;
    case 5:
        echo "Май 31 день";
        break;
    case 6:
        echo "Июнь 30 дней";
        break;
    case 7:
        echo "Июль 31 день";
        break;
    case 8:
        echo "Август 31 день";
        break;
    case 9:
        echo "Сентябрь 30 дней";
        break;
    case 10:
        echo "Октябрь 31 день";
        break;
    case 11:
        echo "Ноябрь 30 дней";
        break;
    case 12:
        echo "Декабрь 31 день";
        break;
    default:
        echo "Такого месяца не существует! Пожалуйста, введите число от 1 до 12.";
        break;
}
