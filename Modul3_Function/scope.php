<?php 

$GLOBALS['varGlobal'] = 18; //variable Global

function testVar(){
  $varLokal =1 ; //variabel lokal
  echo  "<p> test varibel didalam function.<p>";
  //mengakses variabel Global didalam function
  echo "Variabel global : ".$GLOBALS['varGlobal'];
  echo "<br>";
  echo "Variabel lokal : $varLokal";
  echo "<br>";
}

testVar();
echo "<p> test variable didalam function.<p>";
echo "Variabel global :$varGlobal";
echo "<br>";
//mengakses variabel lokal didalam function
echo "Variabel lokal : $varLokal";
  echo "<br>";





?>