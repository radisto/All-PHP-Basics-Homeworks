<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <style>
        table {
            margin: 5px;
            border-collapse: collapse;
        }
        td:nth-child(odd) {
            background: rgb(255, 160, 0);
        }
        td:nth-child(even) {
            text-align: right;
        }
    </style>
</head>
<body>
<?php
    Table(['Gosho', '0882-321-423', '24', 'Hadji Dimitar']);
    Table(['Pesho', '0884-888-888', '67', 'Suhata Reka']);

    function Table($arr) {
        $arr2 = array('Name', 'Phone number', 'Age', 'Address');
        echo '<table border="1">';
        for ($i = 0; $i < count($arr); $i++) {
            echo '<tr>';
            echo '<td>';
            echo $arr2[$i];
            echo '</td>';
            echo '<td>';
            echo $arr[$i];
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
?>
</body>
</html>