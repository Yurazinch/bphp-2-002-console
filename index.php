<?php 
$arg1 = stream_get_contents(STDIN);
$arg2 = stream_get_contents(STDIN);
if(is_int($arg1) === false) {
    fwrite(STDERR, $arg1 . PHP_EOL);
    fwrite(STDERR, "Введите, пожалуйста, число" . PHP_EOL);
} elseif(is_int($arg2) === false) {
    fwrite(STDERR, $arg2 . PHP_EOL);
    fwrite(STDERR, "Введите, пожалуйста, число" . PHP_EOL);
}elseif($arg2 === 0) {
    fwrite(STDERR, $arg2 . PHP_EOL);
    fwrite(STDERR, "Делить на 0 нельзя!" . PHP_EOL);
} else {
    $result = $arg1 / $arg2;
    fwrite(STDOUT, $result . PHP_EOL);
    fwrite(STDOUT, "Done" . PHP_EOL);
}
?>
