<?php
$sinhvien = array(
    1 => array("masv" => "SV01","hoten" => "Nguyễn Văn A","tuoi"=>20, "nganh" =>"CNTT", "lop"=>[1,3,4]),
    2 => array("masv" => "SV02","hoten" => "Nguyễn Văn B","tuoi"=>20, "nganh" =>"CNTT", "lop"=>[2,3,4]),
    3 => array("masv" => "SV03","hoten" => "Nguyễn Văn C","tuoi"=>20, "nganh" =>"CNTT", "lop"=>[3,4,5]),
    4 => array("masv" => "SV04","hoten" => "Nguyễn Văn D","tuoi"=>20, "nganh" =>"CNTT", "lop"=>[1,3,5]),
    5 => array("masv" => "SV05","hoten" => "Nguyễn Văn E","tuoi"=>20, "nganh" =>"CNTT", "lop"=>[2,3,5])
 );
 $lophoc = array(
    1=>array('malh'=>"T01",'tenlop'=>'tin01','monhoc'=>'tin','sinhvien'=>[1,4]),
    2=>array('malh'=>"T02",'tenlop'=>'tin02','monhoc'=>'tin','sinhvien'=>[2,5]),
    3=>array('malh'=>"T03",'tenlop'=>'tin03','monhoc'=>'tin','sinhvien'=>[1,2,3,4,5]),
    4=>array('malh'=>"T04",'tenlop'=>'tin04','monhoc'=>'tin','sinhvien'=>[1,2,3]),
    5=>array('malh'=>"T05",'tenlop'=>'tin05','monhoc'=>'tin','sinhvien'=>[3,4,5])
 );
session_start();
for($i=1;$i<=5;$i++)
{
    $_SESSION['sinhvien'][$i]['masv']=$sinhvien[$i]['masv'];
    $_SESSION['sinhvien'][$i]['hoten']=$sinhvien[$i]['hoten'];
    $_SESSION['sinhvien'][$i]['tuoi']=$sinhvien[$i]['tuoi'];
    $_SESSION['sinhvien'][$i]['nganh']=$sinhvien[$i]['nganh'];
    
    for($j=0;$j<count($sinhvien[$i]['lop']);$j++)
    $_SESSION['sinhvien'][$i]['lop'][$j]=$sinhvien[$i]['lop'][$j];

}
for($i=1;$i<=5;$i++)
{
    $_SESSION['lophoc'][$i]['malh']=$lophoc[$i]['malh'];
    $_SESSION['lophoc'][$i]['tenlop']=$lophoc[$i]['tenlop'];
    $_SESSION['lophoc'][$i]['monhoc']=$lophoc[$i]['monhoc'];
    
    for($j=0;$j<count($lophoc[$i]['sinhvien']);$j++)
    $_SESSION['lophoc'][$i]['sinhvien'][$j]=$lophoc[$i]['sinhvien'][$j];

}
?>
