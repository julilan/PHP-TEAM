<?php declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <Main>
        <h1>Temperature Converter</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label for="c2f">Celcius to fahrenheit</label>
            <input type="number" id="c2f" name="c2f">


            <label for="c2k">Celcius to Kelvin</label>
            <input type="number" id="c2k" name="c2k">
            <input type="submit">

        </form>
        
<?php
//  Temperature 
//  1.Convert temperature from Celsius to Fahrenheit 
//  2.Convert temperature from Celsius to Kelvin

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $celcius2farenheit = $_POST['c2f'];
    
    $celcius2kelvin = $_POST['c2k'];

    
    if(!empty($celcius2farenheit)){
        $c2f = $celcius2farenheit * 1.8 + 32;
        echo $celcius2farenheit . '°C ' . 'to farenreit is'. ' ' . floatval($c2f) . '<br>';
        
    }
    
    if(!empty($celcius2kelvin)){
        $c2k = floatval($celcius2kelvin) + 273.15;
        echo $celcius2kelvin . '°C ' . 'to kelvin is' . ' ' .floatval($c2k);

    }
}
?>

    </Main>

</body>
</html>

