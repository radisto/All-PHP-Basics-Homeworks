<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <style>
        form {
            border: 1px solid lightgrey;
            display: inline-block;
            padding: 3px;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="amount">Enter Amount </label>
    <input type="text" name="amount" id="amount"><br/>
    <input type="radio" name="currency" value="usd" id="usd" checked="checked">
    <label for="usd">USD</label>
    <input type="radio" name="currency" value="eur" id="eur">
    <label for="eur">EUR</label>
    <input type="radio" name="currency" value="bgn" id="bgn">
    <label for="bgn">BGN</label><br/>
    <label for="compound">Compound Interest Amount </label>
    <input type="text" name="compound" id="compound"><br/>
    <select name="period">
        <option value="halfYear">6 Months</option>
        <option value="oneYear">1 Year</option>
        <option value="twoYears">2 Years</option>
        <option value="fiveYears">5 Years</option>
    </select>
    <input type="submit" name="submit" value="Calculate">
    <span id="output"></span>
</form>
<?php
    if (isset($_POST['submit'])) {
        $amount = $_POST['amount'];
        $interest = 1 + (double)$_POST['compound'] / 12 / 100;
        switch ($_POST['period']) {
            case 'halfYear':
                $period = 6;
                break;
            case 'oneYear':
                $period = 12;
                break;
            case 'twoYears':
                $period = 24;
                break;
            case 'fiveYears':
                $period = 60;
                break;
        }
        for ($i = 0; $i < $period; $i++) {
            $amount *= $interest;
        }
        $amount = sprintf('%0.2f', $amount);
        $output = ($_POST['currency'] == 'usd' ? '$' : ($_POST['currency'] == 'eur' ? '&euro;' : '&pound;')) . ' ' . (string)$amount;
    }
?>
<script>
    var data = <?php echo json_encode($output); ?>;
    document.getElementById('output').innerHTML=data;
</script>
</body>
</html>