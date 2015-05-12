<?php

nonRepeat(12345);
echo ("<br />");
echo ("<br />");
nonRepeat(145);
echo ("<br />");
echo ("<br />");
nonRepeat(15);
echo ("<br />");
echo ("<br />");
nonRepeat(247);

function nonRepeat($number) {
    $n = (string)$number;
    $boolean = true;
    $arr = [];
    if (strlen($n) > 2) {
        for ($i = 1; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                for ($k = 0; $k < 10; $k++) {
                    if ($i != $j && $i != $k && $j != $k) {
                        if ((int)($i . $j . $k) <= $number) {
                            $arr[] = (int)($i . $j . $k);
                            $boolean = false;
                        }
                    }
                }
            }
        }
    }
    if ($boolean) {
        echo 'no';
    }
    else {
        asort($arr);
        $output = join(', ', $arr);
        echo $output;
    }
}