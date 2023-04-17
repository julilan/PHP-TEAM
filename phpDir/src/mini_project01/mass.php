<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mass Converter</title>
  <link rel="stylesheet" href="./css/style-mass.css"> 
  <link rel="stylesheet" href="./css/nav.css">
</head>
<body>
  <?php
    include './includes/nav.php';
  ?>
<form method="post">
<h1 id="mass-title">Mass Converter</h1>
  <input type="number" name="weight" placeholder="Enter weight" id="weight-input" required>
  <select name="from_unit" class="select-mass">
    <option value="kg">Kilogram (kg)</option>
    <option value="g">Gram (g)</option>
    <option value="mg">Milligram (mg)</option>
    <option value="lb">Pound (lb)</option>
  </select>
  <select name="to_unit" class="select-mass">
    <option value="kg">Kilogram (kg)</option>
    <option value="g">Gram (g)</option>
    <option value="mg">Milligram (mg)</option>
    <option value="lb">Pound (lb)</option>
  </select>
  <div id="mass-button">
  <button type="submit" name="convert">Convert</button>
  </div>

  <p id="mass-result">

<?php

if(isset($_POST['convert'])) {
  $weight = $_POST['weight'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  // Conversion factors for various weight units
  $conversion_factors = [
    'kg' => 1,
    'g' => 1000,
    'mg' => 1000000,
    'lb' => 2.20462,
    
  ];
  
  // Convert from the 'from_unit' to kilograms
  $kg = $weight / $conversion_factors[$from_unit];
  
  // Convert from kilograms to the 'to_unit'
  $result = $kg * $conversion_factors[$to_unit];
  
   echo "{$weight} {$from_unit} is equal to {$result} {$to_unit}"; 

} 
?>
 
  </p>

</form>

</body>
</html>
