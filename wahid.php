<?php

echo "<h2> variabel dan tipe data </h2>";
echo"<hr>";
// 1
$aku = "wahidun";
echo $aku;
echo"<br>";
var_dump($aku);
echo"<br>";
// 2
$angka = 10;
$angka += 5;
echo $angka;
echo"<br>";
// 3
$smart = true;
var_dump($smart);
echo"<br>";
// 4
$hitung = array(1,2,3,4,5);
echo $hitung[0];
echo "<br>";
echo $hitung[4];
echo"<br>";
// 5
$var = 100;
var_dump($var);
echo"<br>";
// 6
$float = 1.2345;
$float *= 2;
echo $float;
echo"  <br>";
// 7
$var = "123";
var_dump ($var);
echo"<br>";
//+++++++++++++++++++++++++++++++++++++++++


echo"<h2> casting </h2>";
echo"<hr>";
// 1
$string = "123.45";
$string = (int)$string;
var_dump ($string);
echo "<br>";
// 2.
$in = 123;
$in = (float )$in;
var_dump($in);
echo "<br>";
// 3.
$merk = array("lenovo", "samsung", "sony");
$merk = (object)$merk;
var_dump($merk);
print "<br>";
//+++++++++++++++++++++++++++++++++++



echo"<h3> function</h3>";
echo"<hr>";
// 1.
function plus(int $a, $b){
    return $a + $b;
}
echo plus(20,10);
echo  "<br>";

// 2.
function sapa( $word){
    echo "Hello $word ";
}
echo sapa("wahid");
echo "<br>";
// 3.
function faktor ($a){
    if($a == 0 || $a == 1 ){
        return 1;
    }else{
        return ($a * faktor($a - 1));
    }
}
echo faktor(5); 
echo"<br>";
// 4
function getMax(int $a, int $b){

    if($a > $b){
        return $a;
    }else 
        return $b ;}

echo getMax (5,40);
echo "<br>";
// 5
function bagi($a, $b){
    if($a == 0 ||  $b == 0){
        return "ini pembagian nol";
    }else 
      return $a / $b;
}
echo bagi(10,0);
echo " <br>";
//++++++++++++++++++++++++++++++++++++++++++



echo "<h3>Class and Object</h3>";
echo"<hr>";
//1.----
class person {
    public $name;
    public $age;
}
$person1 = new person();
$person1->name = "wahidun";
echo $person1->name;

echo"<br>";

// 2.buat class Car dengan method startEngine() 
//yang menampilkan "Engine Started " saat dipanggil
class Car {

    function startEngine(){
        echo"Engine Started";
    }
}
$person2 = new Car();
$person2->startEngine();
echo"<br>";
// 3.
class Rectangle{
    public $width;
    public $height;

    function calculateArea($width, $height){
        $this->width = $width ;
        $this->height = $height;
        return $width *  $height;
    }
}
echo "<br>";

// 4.
$Rectangle1 = new Rectangle();
echo $Rectangle1->calculateArea(20,300);
echo"<br>";

// 5. buat class Employe dengan method getSalary
//tulis kode u menmapilkan object employee
class Employee{

    function getSalary($gaji){
        echo "gajinya adalah $gaji";
    }
}
 $ob1 = new Employee();
 $ob1->getSalary(200000000);
 echo"<br>";


echo"<h3> construct and destruct</h3>";
echo"<hr>";
// 1.
class con {
    function __construct(string $name, int $age){
       echo"namamu adalah $name umurmu $age";
    }
}
$Student2 = new con("wahid",19);
echo "<br>";    

// 2.
class Book{

   function __construct($title, $author){
       echo "judul buku $title pengarang $author";
   }
}
$Book1 = new Book("komik","harry");
echo"<br>";

// 3.
class DatabaseConnecion{

   function __destruct(){
       echo "koneksi ke database ditutup";
   }
}
$data1 = new DatabaseConnecion();
echo"<br>";
// 4.
class cons{
   public $par;
   function __construct($par){
        $this->par = $par;
   }
   function __destruct(){
       echo"the thing is {$this->par}";
   }
}
$cons2 = new cons("sacrifice");


echo"<h3> visibility</h3>";
class Student {
    private $name;

    public function getName() {
        return $this->name;
        
    }
    protected function setName($name){
        echo"halo $name";
        
    }
    
    public function getSetName($name){
        return $this->setName ($name);
    }
    
}

$Student1 = new Student();
$Student1->getSetName("user");
echo"<br>";





?>