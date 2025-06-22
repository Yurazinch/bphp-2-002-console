<?php 
$arg = fgets(STDIN); // Получаем строку из двух элементов;

$arg_string = explode(";", $arg); // Разбиваем строку на массив из двух строк;

$args = []; // Массив для типизированных элементов;

foreach($arg_string as $el) {
    if(is_numeric($el)) {
        if (strpos($el, '.') !== false) { // Проверяем на точку
            $args[] = (float)$el;// Преобразуем в float 
        } else {
            $args[] = (int)$el; // Преобразуем в int
        }
    } elseif (strpos($el, ',') !== false) { // Проверяем на запятую
        $elr = str_replace(',', '.', $el); // Меняем на точку
        $args[] = (float)$elr;// Преобразуем в float 
    } else { 
        $args[] = $el; // Оставляем как строку
    }
}

print_r($args);

switch (true) {
    case is_string($args[0]):
        fwrite(STDERR, "Введите, пожалуйста, первое число" . PHP_EOL);
        break;
    case is_string($args[1]):
        fwrite(STDERR, "Введите, пожалуйста, второе число" . PHP_EOL);
        break;
    case $args[1] === 0;
        fwrite(STDERR, "Делить на 0 нельзя!" . PHP_EOL);
        break;
    default: 
    $result = $args[0] / $args[1];
    fwrite(STDOUT, $result . PHP_EOL);
    fwrite(STDOUT, "Done" . PHP_EOL);
}

?>