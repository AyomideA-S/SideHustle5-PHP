<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electicity Bills</title>
</head>

<body>
    <h1>A PHP program to calculate electricity bills.</h1>
    <form action="electricBill.php" method="post">
        New units: <input type="text" name="units">
        <input type="submit">
    </form>

    <?php
        $units = $_POST["units"];
        echo "Units: $units";

        if ($units <= 50) {
            $charge = 3.50;
        } elseif ($units <= 150) {
            $charge = 4.00;
        } elseif ($units <= 250) {
            $charge = 5.20;
        } else {
            $charge = 6.50;
        }

        $price = $units * $charge;
    ?>
    <br/>
    <?php echo ("Charge: NGN $charge/unit"); ?><br/>
    <?php echo ("Price: NGN $price"); ?>
</body>
</html>