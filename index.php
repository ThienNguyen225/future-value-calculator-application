<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng Future Value Calculator</title>
</head>
<style>
    .display{
        height:210px; width:350px;
        margin:0;
        padding:10px;
        border:2px #dd33dd solid;
    }
    .display input{
        padding:5px; margin:5px
    }
    h2{
        margin-left: 15%;
        color: blue;
    }
    input[name=numberYear]{
        margin-left: 22px;
    }
    input[value=submit]{
        color: red;
        width: 30%;
        margin-left: 35%;
    }
    form{
        margin-left: 40%;
    }
</style>
<body>
<form method="post">
    <div class="display">
        <h2>Future Value Calculator</h2>
        <div>Investment Amount: <input type="text" name="investment" size="30"></div>
        <div>Yearly Interest Rate: <input type="text" name="rate" size="30"></div>
        <div>Number of Years: <input type="text" name="numberYear" size="30"></div>
        <input type="submit" value="submit">
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $amountOfMoney = $_POST["investment"];
        $interestRate = $_POST["rate"];
        $year = $_POST["numberYear"];
        for ($i = 0; $i < $year; $i++) {
            $amountOfMoney += $amountOfMoney * ($interestRate / 100);
        }
        echo "Your future amount is:$$amountOfMoney";
    }
    ?>
</form>
</body>
</html>
