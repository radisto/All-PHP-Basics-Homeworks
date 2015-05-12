<?php

Dump("hello");
echo '<br />';
echo '<br />';
Dump(15);
echo '<br />';
echo '<br />';
Dump(1.234);
echo '<br />';
echo '<br />';
Dump(array(1,2,3));
echo '<br />';
echo '<br />';
Dump((object)[2,34]);

function Dump($n) {
    if (is_numeric($n)) {
        var_dump($n);
    }
    else {
        echo gettype($n);
    }
}