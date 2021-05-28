<?php
 include_once './dongvat.php';
   class Cat extends Dongvat implements featureCat{
    public function construct(){
        $this->foot = 4;
        $this->hand = 0;
        $this->gender = random_int(0,1) ? "nam":"nu";
        $this->reproduction="đẻ con";
    }
    public function voice(){
        echo "meo meo";
    }
    public function move(){
        echo "di chuyền bằng 4 chân";
    }
    public function getHand(){
        echo "Không có tay";
    }
    public function sinhsan(){
        echo $this->reproduction;
    }
    public function Cattt(){
        echo "Mèo là động vật bắt chuột";
    } 
    
    public function isPet(){
        echo "Đây là thú cưng";
    }
   }
 interface featureCat 
 {
     
     function Cattt();
     function isPet();
 }

?>