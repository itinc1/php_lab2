<?php
// Ввод узора из плиток
$pattern = [];
for ($i = 0; $i < 4; $i++) {
    $pattern[] = str_split(readline("Введите строку плиток(по 4 символа W или B: "));
}


$isAttractive = true;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($pattern[$i][$j] == $pattern[$i][$j + 1] &&
            $pattern[$i][$j] == $pattern[$i + 1][$j] &&
            $pattern[$i][$j] == $pattern[$i + 1][$j + 1]) {
            $isAttractive = false;
            break 2;
        }
    }
}


if ($isAttractive) {
    echo "Узор является симпатичным.";
} else {
    echo "Узор не является симпатичным.";
}
