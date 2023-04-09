<?php
$outputData = 0;
$inputData = isset($_POST['inputData']);
$inputFormat = isset($_POST['inputFormat']);
$outputFormat = isset($_POST['outputFormat']);

switch ($inputFormat){
    case "kg":
        switch($outputFormat){
            case "kg" : $outputData = $inputData;
            break;
            case "gram" : $outputData = $inputData*1000;
            break;
            case "mg" : $outputData = $inputData*1000000;
            break;
        }
        break;
    case "gram":
        switch($outputFormat){
            case "kg" : $outputData = $inputData/1000;
            break;
            case "gram" : $outputData = $inputData;
            break;
            case "mg" : $outputData = $inputData*1000;
            break;
        }
        break;
     case "mg":
        switch($outputFormat){
            case "kg" : $outputData = $inputData/1000000;
            break;
            case "gram" : $outputData = $inputData/1000;
            break;
            case "mg" : $outputData = $inputData;
            break;
        }
        break;
        default;

}



?>

<form action="mass.php" method="post">
    <label for="inputData">Enter value</label>
    <input type="number" name="inputData">
    <label for="inputFormat">From</label>
    <select name="inputFormat" >
        <option value="kg" id="kg">Kg</option>
        <option value="gram" id="gram">Gram</option>
        <option value="mg" id="mg">Milligram</option>
    </select>
    <label for="outputFormat">To</label>
    <select name="outputFormat" >
        <option value="kg" id="kg">Kg</option>
        <option value="gram" id="gram">Gram</option>
        <option value="mg" id="mg">Milligram</option>
    </select>
    <input type="submit" name="submit" value="Convert">
</form>

<p>Result: <?= $outputData?></p>
