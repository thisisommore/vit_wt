<?php
$total_cost = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["units_used"]) && !empty($_POST["units_used"])) {
        $units_used = $_POST["units_used"];
        $total_cost = 0;
        if ($units_used > 50) {
            $total_cost += 3.50 * 50;
            $units_used -= 50;
        } else {
            $total_cost += 3.50 * $units_used;
        }


        if ($units_used > 100) {
            $total_cost += 4 * 100;
            $units_used -= 100;
        } else {
            $total_cost += 4 * $units_used;
        }


        if ($units_used > 100) {
            $total_cost += 5.20 * 100;
            $units_used -= 100;
        } else {
            $total_cost += 5.20 * $units_used;
        }

        $total_cost += 6.50 * $units_used;
    } else {
        $total_cost = null;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="max.css">
</head>


<body>
    <div class="center container">
        <form action="" method="POST">
            <input type="text" name="units_used" placeholder="Units used">
            <button type="submit">Cal</button>
            <h2>

                <?php
                if ($total_cost) {
                    echo "Bill is " . $total_cost;
                }
                ?>
            </h2>
        </form>
    </div>

</body>

</html>