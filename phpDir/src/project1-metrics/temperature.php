<?php declare(strict_types=1);
?>
<?php include '../header.php' ?>
<body>
    <Main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <h1>Temperature Converter</h1>
            <div class="form-field">
           <label for="celcius">Temperature in celcius</label>
            <input type="number" id="celcius" name="celcius">
            </div>

            <!-- <div class="form-feild">
            <label for="c2k">Celcius to Kelvin</label>
            <input type="number" id="c2k" name="c2k">
            </div> -->
            <select name="convert" id="convert">
                <option value="c2f">Celcius to Farenheit</option>
                <option value="c2k">Celcius to Kelvin</option>
            </select>

            <div id="submit-wrapper">
            <input type="submit" value="Convert">
            </div>

            <p id="temperature-result">

            <?php
//  Temperature 
//  1.Convert temperature from Celsius to Fahrenheit 
//  2.Convert temperature from Celsius to Kelvin

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $celcius = $_POST['celcius'];
    
    // $celcius2kelvin = $_POST['c2k'];

    $metric = $_POST['convert'];

    
    if(!empty($celcius)){

        if($metric == 'c2f'){
            
                    $temperature = $celcius * 1.8 + 32;
                    echo $celcius . '°C ' . 'to fahrenheit is'. ' ' . floatval($temperature) . 'F' . '<br>';

        } else{
            $temperature = floatval($celcius) + 273.15;
            echo $celcius . '°C ' . 'to kelvin is' . ' ' .floatval($temperature) . 'K';
        }


        
    }
    
    // if(!empty($celcius2kelvin)){
    //     $c2k = floatval($celcius2kelvin) + 273.15;
    //     echo $celcius2kelvin . '°C ' . 'to kelvin is' . ' ' .floatval($c2k) . 'K';

    // }
}
?>
</p>

        </form>
        


    </Main>

</body>
</html>

