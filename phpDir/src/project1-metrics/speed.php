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
            $result = $kph . " km/h is equal to " . round($m_per_sec,2) . " m/s";
        }
        elseif (isset($_POST["knots"])) {
            $knots = $kph * 0.539957;
            $result = $kph . " km/h is equal to " . round($knots,2) . " knots";
        }
    } else {
        $result = "Please enter a value for kilometers per hour.";
    }
}

?>

<?php include '../header.php' ?>

<link rel="stylesheet" href="./css/style-speed.css">
<body>
    <form action="speed.php" method="post">
    <h1>Speed Converter</h1>
        <div id="kph-input-wrapper">
        <label for="kph">Kilometers per hour (km/h):
        </label>
        <input type="number" name="kph" id="kph">
        </div>
        

        <div class="button-wrapper">
        <div class="button"><input type="submit" name="m_per_sec" value="Convert to m/s"></div>

        <div class="button"><input type="submit" name="knots" value="Convert to knots"></div>
</div>

<p id="speed-result"><?= $result ?></p>

    </form>
    
</body>
</html>
