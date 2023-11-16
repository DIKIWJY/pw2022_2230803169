<?php 
$x = 19;
echo "x = $x </br>";

//menggunakan statement IF-ELSE
if($x %2 == 0){
  echo "$x adalah bilangan genap";
}else{
  echo "$x adalah bilangan ganjil";
}

echo "</br></br>";

//menggunakan statement IF-ELSEIF-ELSE
$tahun = "2018";

if ($tahun == "2015") {
  echo "Sekarnag tahun 2015";
}else if ($tahun == "2016") {
  echo "Sekarang tahu 2016";
}else if ($tahun == "2017") {
  echo "Sekarag tahun 2017";
}else if ($tahun == "2018"){
  echo "Sekarang tahun 2018";
}
?>