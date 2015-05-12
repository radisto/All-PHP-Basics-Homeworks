<?php

printf("%.2f",Sum(2,5));
echo '<br />';
echo '<br />';
printf("%.2f",Sum(1.567808, 0.356));
echo '<br />';
echo '<br />';
printf("%.2f",Sum(1234.5678, 333));

function Sum($firstNumber, $secondNumber) {
    return $firstNumber + $secondNumber;
}