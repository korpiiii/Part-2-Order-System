<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order System</title>
</head>
<body>
    <h1>Welcome to my kainan!</h1>
    <ul>
        <li>Adobo - 30 PHP</li>
        <li>Sinigang - 40 PHP</li>
        <li>Menudo - 50 PHP</li>
    </ul>
    <form action="orderSystem.php" method="post">
        <label for="order">Choose your order:</label>
        <select name="order">
            <option value="Adobo">Adobo</option>
            <option value="Sinigang">Sinigang</option>
            <option value="Menudo">Menudo</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity"><br><br>
        <label for="cash">Cash:</label>
        <input type="text" name="cash"><br><br>
        <input type="submit" value="Submit">
    </div>
</body>
</html>

<?php
    //pricelist
    $Adobo = 30;
    $Sinigang = 40;
    $Menudo = 50;
    if (empty($_POST["quantity"]) || empty($_POST["cash"])) {
    } else {
        //Invalidation if ever they typed a string
        if (is_numeric($_POST["quantity"]) && is_numeric($_POST["cash"])) {
            if ($_POST["order"] == "Adobo") {
                $_POST["order"] = $Adobo;
            } elseif ($_POST["order"] == "Sinigang") {
                $_POST["order"] = $Sinigang;
            } elseif ($_POST["order"] == "Menudo") {
                $_POST["order"] = $Menudo;
            }
            $order = $_POST["order"];
            $quantity = ($_POST["quantity"]);
            $cash = ($_POST["cash"]);
            $total_cost = $order * $quantity;
            $change = $cash - $total_cost;
            if ($quantity <= 0) {
                echo"<br>Invalid";
            } elseif ($total_cost <= $cash) {
                echo"<strong><br> The total cost is {$total_cost} <br>";
                echo"Your change is {$change}<br><br></strong>";
                echo"Thanks for the order!";
            } else {
                echo "<strong><br>Insufficient Balance</strong>  ";
            }
        } else {
            echo "<br>Invalid Input";
        }
    }
?>