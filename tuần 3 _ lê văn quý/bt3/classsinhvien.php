<?php
class sinhvienn{
    
   public  function dangky($tt,$malop)
    {
     $l=1;
        while  (isset($_SESSION['lophoc'][$l]['malh']))
        {
            if ($_SESSION['lophoc'][$l]['malh']==$malop)
            {
                $t=0;
                while (isset($_SESSION['sinhvien'][$tt]['lop'][$t]))
                {
                    if ($_SESSION['lophoc'][$_SESSION['sinhvien'][$tt]['lop'][$t]]['malh']==$malop)
                        {
                            echo"<a>lớp học đã đăng ký yêu cầu nhập lại</a>";
                            exit();

                        }
                    $t++;
                }
                $_SESSION['sinhvien'][$tt]['lop'][$t]=$l;
                $ll=1;
                while  (isset($_SESSION['lophoc'][$l]['sinhvien'][$ll]))
                $ll++;
                $_SESSION['lophoc'][$l]['sinhvien'][$ll]=$tt;
                echo "đã đăng ký";
            exit();
            }
         $l++;
        }
     echo "<a> nhập mã lớp học sai</a>";
    } 
    public function capnhat($ttt,$ten,$tuoi,$nganh)
    {
        if($ten!=null) $_SESSION['sinhvien'][$ttt]['hoten']=$ten;
        if($tuoi!=null) $_SESSION['sinhvien'][$ttt]['tuoi']=$tuoi;
        if($nganh!=null) $_SESSION['sinhvien'][$ttt]['nganh']=$nganh;
        echo "đã thay đổi thông tin";

    }
}
?>