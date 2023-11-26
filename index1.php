<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
//khai bao lien ket

$arr=array (
"apple","banana","oranger","tnt","chocolate"
);
for ($i=0 ; $i < 5 ; $i++ ) { 
  # code...
  echo $arr[$i];
  echo "<br>";
}
//cach 2
foreach($arr as $b){
  echo $b;
  echo "<br>";
}
echo "<br>";
echo "<br>";
foreach ($arr as $stt => $giatri) {
  # code...
  echo $stt;
  echo " ";
  echo $giatri;
}
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";echo "<br>";
echo "<br>";

//bai1
echo "<br>";echo "<br>";
$sucvat = array (
  "rat","tiger","fish","mouth","ant","fish","dog","cat"

);
if (in_array ("rat",$sucvat)) {
  # code...
  echo "co chuot";
}else{echo "ko";}
//bai 2
echo "<br>";
echo "<br>";
echo "<br>";echo "<br>";

if (in_array ("dog",$sucvat)){
$sucvat [] = "birth";
$sucvat [] = "spider";
}
foreach($sucvat as $b){
  echo "<br>";
 echo $b;
  
}
if (in_array ("cat",$sucvat)){
  $sucvat [7] = "elephent";
}
echo "<br>";
echo "<br>";
echo "<br>";
foreach($sucvat as $b){
  echo "<br>";
  echo $b;
}
echo "<br>";
echo "<br>";

//a = 1 ? true : false;

if(in_array ("fish",$sucvat)){
foreach($sucva)
}
//bai 3
//nếu là mèo thì sửa thành voi
//nếu có cá thì xóa
//
?>
</body>
</html>