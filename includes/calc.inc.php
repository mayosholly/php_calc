<?php

declare(strict_types=1);
include 'autoloader.inc.php';
// include('../classes/calculator.class.php');

$oper = $_POST['operator'];
$num_1 = $_POST['number_1'];
$num_2 = $_POST['number_2'];

$calc_obj = new Calculator($oper, (int) $num_1, (int) $num_2);

try {
    echo $calc_obj->calculator();
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}
