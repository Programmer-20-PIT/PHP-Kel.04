<h1>variable & tipe data</h1>
<?php
$variable = "ini adalah variable";
echo "$variable";
echo "<br>";

// int
$int = 30;
$int += 5;
echo "$int"."<br>";

//bolean
$bolean = 40;
if ($bolean < 70){
    echo "benar";

}
else {
    echo "salah";
}
echo "<br>";
//aray
$aray = [1,2,3,4,5];{
    echo $aray[0];
    echo $aray[4];
}
echo "<br>";
foreach ($aray as $saya){
    echo($saya);
}
echo "<br>";

//tipe data
$var = "123";
var_dump($var);
echo"<br>";

//float
$float =12.3;
$float *=2;
echo "$float"
?>
<h1>casting</h1>
<?php
//casting
echo "<br>";
$number ="123.45";
$akanMenjadiFloat = intval($number);
var_dump($akanMenjadiFloat);

//integer
echo "<br>";
$integrel = 123.45;

$inter = floatval($integrel);
var_dump($inter);

//aray
echo "<br>";
$aray = [123.45];
$ray = (object)$aray;
var_dump($ray);
?>
<h1>function</h1>
<?php
    //return
function ayu($a = 20, $b = 40){
    return $a + $b;
}
echo "<br>";

//parameter string
function haju($nama){
}
echo "hello, ".  $nama;
echo "<br>";   

//menghitung faktori
 echo"<br>";
 function tinggi($x){
    if ($x == 2) {
        return 2;
    }
    return $x * tinggi($x-1);
}
echo tinggi(9);

?>
