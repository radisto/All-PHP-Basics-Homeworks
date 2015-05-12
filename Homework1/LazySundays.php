<?php

echo date("jS F, Y", strtotime("first Sunday of this month"));
echo '<br />';
echo date("jS F, Y", strtotime("second Sunday of this month"));
echo '<br />';
echo date("jS F, Y", strtotime("third Sunday of this month"));
echo '<br />';
echo date("jS F, Y", strtotime("fourth Sunday of this month"));
echo '<br />';
$day = substr(strftime("%d/%m/%y", strtotime("fifth Sunday of this month")), 0, 2);
if ((int)$day >= 29) { // Ако има пета неделя в месеца, то тя ще е 29, 30 и 31.
    echo date("jS F, Y", strtotime("fifth Sunday of this month"));
}