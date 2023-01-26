<?php
$broad = $_SESSION['broad'];

$draw = true;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($broad[$i][$j] == '') {
            $draw = false;
        }
    }
}

if ($draw) {
    $_SESSION['win'] = 2;
}


for ($i = 0; $i < 3; $i++) {
    if (
        ($broad[$i][0] == 'x' and $broad[$i][1] == 'x' and $broad[$i][2] == 'x')
        or
        ($broad[$i][0] == 'o' and $broad[$i][1] == 'o' and $broad[$i][2] == 'o')
        or ($broad[0][$i] == 'x' and $broad[1][$i] == 'x' and $broad[2][$i] == 'x')
        or ($broad[0][$i] == 'o' and $broad[1][$i] == 'o' and $broad[2][$i] == 'o')
        or
        ($broad[0][0] == 'x' and $broad[1][1] == 'x' and $broad[2][2] == 'x') or ($broad[0][0] == 'o' and $broad[1][1] == 'o' and $broad[2][2] == 'o') or ($broad[0][2] == 'x' and $broad[1][1] == 'x' and $broad[2][0] == 'x') or ($broad[0][2] == 'o' and $broad[1][1] == 'o' and $broad[2][0] == 'o')
    ) {
        $_SESSION['win'] = 1;
        break;
    }
} ?>
