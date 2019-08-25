<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h1{
    text-align: center;
    
}
#forma
    {background-color: coral;
        
  border: 4px solid black; 
  
  margin: auto;
  width: 50%;
  
  padding: 10px;
  
    
    }
    
    
    </style>
</head>
<body>

<h1>Jednostavan kalkulator<h1>

<div id="forma">


<form action="kalkulator.php" method="GET">

<input type="number" name="broj1" placeholder="Unesi broj"><br>
<input type="number" name="broj2" placeholder="Unesi broj"><br>
<select name="operacija">
  <option value="sabiranje">SABERI</option>
  <option value="oduzimanje">ODUZMI</option>
  <option value="dijeljenje">PODIJELI</option>
  <option value="mnozenje">POMNOZI</option>
</select><br>
<input type="submit" value="IZRACUNAJ"><br>
<input type="reset" value="RESET">


</form>
</div>

<?php
error_reporting(0);   

$broj1 = $_GET['broj1'];
$broj2 = $_GET['broj2'];
$operacija = $_GET['operacija'];




if($operacija == "sabiranje" && is_numeric($broj1) && is_numeric($broj2)){
    echo "Rezultat je: \n", $broj1 + $broj2;
}
elseif($operacija == "oduzimanje" && is_numeric($broj1) && is_numeric($broj2)){
    echo "Rezultat je: \n", $broj1 - $broj2;
}
elseif($operacija == "dijeljenje" && is_numeric($broj1) && is_numeric($broj2)){
    echo "Rezultat je: \n", $broj1 / $broj2;
}
elseif($operacija == "mnozenje" && is_numeric($broj1) && is_numeric($broj2)){
    echo "Rezultat je: \n", $broj1 * $broj2;
}


if($broj2 == 0 && $operacija == "dijeljenje"){
    echo "**Dijeljenje sa nulom je nemoguce**";
}





?>


    
</body>
</html>
