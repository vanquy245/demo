<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chinhsua.css">
    <link rel="stylesheet" href="hienthi.php">
</head>
<body>
<?php
session_start();
?>

<form action = "<?php $_PHP_SELF ?> " method = "POST">
         <button type="text" name="hienthisv">
               Danh sách sinh viên
         </button>
         <button name="hienthilh">
               Danh sách lớp học
         </button>
         <br>
         <div class="t3">
         <br> <b>nhập thông tin đăng ký lớp học</b> <br> <br>
            <input placeholder="&emsp;Nhập mã sinh viên" name="masv"> 
            <input placeholder='Nhập lớp học đăng ký' name='lop'>
            <br> <br>
                  <button name="dangkyhoc">
                        Đăng ký lớp học
                  </button>
         </div>
         <div class="t4">
         <br> <br> <b> nhập thông tin cần chỉnh sửa<b> </br>
         <input placeholder="&emsp;Nhập mã sinh viên" name="masv1"> 
         <input placeholder="&emsp;Nhập tên sinh viên" name="ten">
         <input placeholder="&emsp;Nhập tuổi" name="tuoi">
         <input placeholder="&emsp;Nhập ngành" name="nganh">
         <br>
               <button name="capnhat">
                     thay đổi thông tin
               </button>
         </div>
   </form>



   <?php
   include_once "./classsinhvien.php";
   function  kiemtra($masv)
   {
      $i=1;
    while (isset($_SESSION['sinhvien'][$i]['masv']))
      {
         if (($_SESSION['sinhvien'][$i]['masv'])==$masv)  return $i;
         $i++;
      }
      return 0;
   }
   ?>

   <?php
  
   if (isset($_POST['hienthisv']))
   {
      echo "<h1>Danh sách sinh viên</h1>"; 
      echo "<table border='1'>" ;
      echo "<tr>";
      echo "<th>Mã Sinh viên</th>";
      echo "<th>Họ tên</th>";
      echo "<th>Tuổi</th>";
      echo  "<th>Ngành</th>";
      echo  "<th>Danh sách lớp</th>";
      echo  "</tr>";
     $i=1;
     while (isset($_SESSION['sinhvien'][$i]['masv']) && ($_SESSION['sinhvien'][$i]['masv'] != null))
          {
             
             echo "<tr>";
             echo "<td> ".$_SESSION['sinhvien'][$i]['masv']."</td>";
             echo "<td> ".$_SESSION['sinhvien'][$i]['hoten']."</td>";
             echo "<td> ".$_SESSION['sinhvien'][$i]['tuoi']."</td>";
             echo "<td> ".$_SESSION['sinhvien'][$i]['nganh']."</td>";
             echo "<td> ";
             $j=0;
             while (isset($_SESSION['sinhvien'][$i]['lop'][$j]) && ($_SESSION['sinhvien'][$i]['lop'][$j] != null))
             {
             echo $_SESSION['lophoc'][$_SESSION['sinhvien'][$i]['lop'][$j]]['tenlop'].";";
             $j++;
             }
             echo "</td>";
             echo "</tr>";
             $i=$i+1;
 
          }
       
 
     echo "</table>";
   }
   

   if (isset($_POST['hienthilh']))
      {
         echo "<h1>Danh sách lớp học</h1>";
         echo "<table border='1'>";
         echo "<tr>";
         echo "<th>Mã lớp học</th>";
         echo "<th>Tên lớp học</th>";
         echo "<th>Môn học</th>";
         echo "<th>Danh sách sinh viên</th>";
              
          echo"</tr>";
            $i=1;
            while (isset($_SESSION['lophoc'][$i]['malh']) && ($_SESSION['lophoc'][$i]['malh'] != null))
                {
                   echo "<tr>";
                   echo "<td> ".$_SESSION['lophoc'][$i]['malh']."</td>";
                   echo "<td> ".$_SESSION['lophoc'][$i]['tenlop']."</td>";
                   echo "<td> ".$_SESSION['lophoc'][$i]['monhoc']."</td>";
                   echo "<td> ";
                   $j=0;
                   while (isset($_SESSION['lophoc'][$i]['sinhvien'][$j]) && ($_SESSION['lophoc'][$i]['sinhvien'][$j] != null))
                   {
                   echo $_SESSION['sinhvien'][$_SESSION['lophoc'][$i]['sinhvien'][$j]]['hoten'].";";
                   $j++;
                   }
                   echo "</td>";
                   echo "</tr>";
                   $i++;
                }
          
          echo "</table>";
      }
   
      $sinhvien=new sinhvienn();
      if(isset($_POST['dangkyhoc']) && (kiemtra($_POST['masv'])>0))
      {
         $sinhvien->dangky(kiemtra($_POST['masv']),$_POST['lop']); 
      }
      if(isset($_POST['dangkyhoc']) && (kiemtra($_POST['masv'])==0))
         echo "<a>Mã sinh viên sai</a>";

      if(isset($_POST['capnhat']))
        {
           if (kiemtra($_POST['masv1'])>0) $sinhvien->capnhat(kiemtra($_POST['masv1']),$_POST['ten'],$_POST['tuoi'],$_POST['nganh']);
           else
           echo "<a>Mã sinh viên sai</a>";
        }
      
   ?>

   

   </body>
</html>
