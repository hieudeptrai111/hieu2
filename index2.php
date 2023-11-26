<?php 

/*function(hàm)
- có tham số / không tham số
- hàm có return / không có return
*/
//Khai báo hàm 
function hieu(){
    echo "hieu dep trai";
}
//gọi hàm
hieu();
//Hàm có tham số
function phepcong($a, $b /* = N : gắn giá trị*/ ){
    echo $a + $b;
}
echo"<br>";
phepcong(2,3);
echo"<br>";
$menu = "2";
function bai1($a,$b){
    if($a>$b){
        echo"$a lớn hơn $b";
    }
    else{echo"$b lớn hơn $a";}
}
function bai2($a){
      echo $a % 5 == 0 ? $a . "$a chia het cho 5" : $a . " $a khong chia het cho 5";
}

    function timnghiem($a,$b){
$x;
        if ($a==0) {
            return $b==0 ? "vo so nghiem" : "vo nghiem";
        }else {
            return -$b / $a;
        }
    }
function chiahetcho3($x){
    echo $x % 3 == 0 ? " $x chia het cho 3 !" : " $x khong chia het cho 3 !";
}
echo"<br>";
chiahetcho3(timnghiem(3,6));
echo"<br>";
switch($menu){
    case"1":{
    bai1(1,2);    
        break;
    }
        case"2":{
           bai2(4);
            break;
        }
        case"3":{
            bai3();
            break;
        }
        default:{
            echo"Chọn sai , vui lòng chọn lại !";
        }
}
?>