<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        div {
            background: skyblue;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            width: 100px;
        }
        ul {
            list-style-type: circle;
            text-decoration: underline;
            padding-left: 20px;
        }
        hr {
            border-color: black;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="cat">Categories:</label>
    <input type="text" name="cat" id="cat"/><br/>
    <label for="tag">Tags:</label>
    <input type="text" name="tag" id="tag"/><br/>
    <label for="mon">Months:</label>
    <input type="text" name="mon" id="mon"/><br/>
    <input type="submit" name="submit" value="Generate"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $arr[] = explode(', ', $_POST['cat']);
    $arr[] = explode(', ', $_POST['tag']);
    $arr[] = explode(', ', $_POST['mon']);
    for ($i = 0; $i < 3; $i++) {
        echo '<div>';
        echo '<h3>';
        switch ($i) {
            case 0:
                echo 'Categories';
                break;
            case 1:
                echo 'Tags';
                break;
            case 2:
                echo 'Months';
                break;
        }
        echo '</h3>';
        echo '<hr/>';
        echo '<ul>';
        for ($j = 0; $j < count($arr[$i]); $j++) {
            echo '<li>';
            echo $arr[$i][$j];
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
?>
</body>
</html>