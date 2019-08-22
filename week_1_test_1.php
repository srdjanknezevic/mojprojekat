<!DOCTYPE html>
<html>
<body>

<h1>PHP vjezba</h1>

<?php
echo "Hello World!<br>";

$str1="Moramo vjezbati!";
$str2="PHP!<br>";
echo $str1 . " " . $str2;

$x = 5;
$y = 4;
echo $x + $y. "<br>";

$a = 11;
if($a > 10){
    echo "broje je veci od 10";
} else if($a = 10){
    echo "broje je jednak 10";
} else {
    echo "broje je manji od 10";
}







$b = 100;
$c = 100;


if($b != $c){
    echo "b nije jednako c<br>";
    
} else if($b === $c) {
    echo "<br>";
    echo "b je jednako c i isti su tip podatka";
}





$d = 1;
$e = "1";
 
if($d == $e){
    echo "<br>";
    echo "d jednako e";
}
if($d === $e){
    echo "<br>";
    echo "d identicno e";


} else{ 
    echo "<br>";
    echo "d nije identicno e";

}









?>

</body>
</html>