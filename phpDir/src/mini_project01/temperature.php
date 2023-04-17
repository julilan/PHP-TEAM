<?php declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="./css/style-temperature.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>
<body>
    <?php
        include './includes/nav.php';
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h1>Temperature Converter</h1>
        <div class="form-field">
            <label for="c2f">Celcius to Fahrenheit</label>
            <input type="number" id="c2f" name="c2f">
        </div>
        <div class="form-field">
            <label for="c2k">Celcius to Kelvin</label>
            <input type="number" id="c2k" name="c2k">
        </div>
        <div id="submit-wrapper">
            <input type="submit" value="Convert">
        </div>
        <p id="temperature-result">

            <?php
//  Temperature 
//  1.Convert temperature from Celsius to Fahrenheit 
//  2.Convert temperature from Celsius to Kelvin

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $celcius2farenheit = $_POST['c2f'];
    
    $celcius2kelvin = $_POST['c2k'];

    
    if(!empty($celcius2farenheit)){
        $c2f = $celcius2farenheit * 1.8 + 32;
        echo $celcius2farenheit . '°C ' . 'to Fahrenheit is'. ' ' . floatval($c2f) . ' F' . '<br>';
        
    }
    
    if(!empty($celcius2kelvin)){
        $c2k = floatval($celcius2kelvin) + 273.15;
        echo $celcius2kelvin . '°C ' . 'to Kelvin is' . ' ' .floatval($c2k) . ' K';

    }
}
?>
        </p>
    </form>
</body>
</html>
