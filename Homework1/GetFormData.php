<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <style>
        input {
            margin: 2px;
        }
    </style>
</head>
<body>
<form method="get">
    <input type="text" name="name" placeholder="Name.."><br/>
    <input type="text" name="age" placeholder="Age.."><br/>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label><br/>
    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label><br/>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if (isset($_GET['submit'])) {
        $name = $_GET['name'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        echo "My name is $name. I am $age years old. I am $gender.";
    }
?>
</body>
</html>