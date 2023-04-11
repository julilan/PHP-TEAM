<?php

declare(strict_types=1);

/* Speed 
    1.Convert kilometers per hour to meters per second
    2.Convert kilometers per hour to knots
 */ 

$kph = 0;
$result =  '';

// Conversion factor for kph to m/s
$m_per_sec = $kph * 0.277778;

// Conversion factor for kph to knots
$knots = $kph * 0.539957;

// Checking if form has been submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // If not empty, go ahead with conversion
    if (!empty($_POST["kph"])) {
        $kph = $_POST["kph"];
    
        if (isset($_POST["m_per_sec"])) {
            $m_per_sec = $kph * 0.277778;
            $result = $kph . " kilometers per hour equals " . round($m_per_sec,2) . " meters per second.";
        }
        elseif (isset($_POST["knots"])) {
            $knots = $kph * 0.539957;
            $result = $kph . " kilometers per hour equals " . round($knots,2) . " knots.";
        }
    } else {
        $result = "Please enter a value for kilometers per hour.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Converter</title>
</head>
<body>
    <h1>Speed Converter</h1>
    <form action="speed.php" method="post">
        <p><label for="kph">Kilometers per hour (km/h):</label>
        <input type="number" name="kph" id="kph"></p>
        <input type="submit" name="m_per_sec" value="Convert to m/s">
        <input type="submit" name="knots" value="Convert to knots">
    </form>
    <p><?= $result ?></p>
</body>
</html>
