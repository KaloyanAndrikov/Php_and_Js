<?php
$arr = [0,199=>1,2,10=>3];

for ($i = 0; $i < sizeof($arr); $i++) {
    $k = key($arr);
    $v = current($arr);
    echo "Ключ: $k, Стойност: $v\n";
    next($arr);
}
