<?php
$units_used = 1000;
$total_cost = 0;
if ($units_used > 50) {
    $total_cost += 3.50 * 50;
    $units_used -= 50;
} else {
    $total_cost += 3.50 * $units_used;
    echo $total_cost;
    return;
}


if ($units_used > 100) {
    $total_cost += 4 * 100;
    $units_used -= 100;
} else {
    $total_cost += 4 * $units_used;
    echo $total_cost;
    return;
}


if ($units_used > 100) {
    $total_cost += 5.20 * 100;
    $units_used -= 100;
} else {
    $total_cost += 5.20 * $units_used;
    echo $total_cost;
    return;
}

$total_cost += 6.50 * $units_used;
echo "Bill is " . $total_cost . "\n";
return;
?>