<?php

declare(strict_types=1);
// include 'classes/calculator.class.php'
include('includes/autoloader.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="includes/calc.inc.php" method="post">
        <p> My Calculator </p>
        <input type="number" name="number_1">
        <select name="operator">
            <option value="add">Addition </option>
            <option value="substract">Substraction </option>
            <option value="multiply">Multiply </option>
            <option value="divide">Divide </option>
        </select>
        <input type="number" name="number_2">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>

</html>