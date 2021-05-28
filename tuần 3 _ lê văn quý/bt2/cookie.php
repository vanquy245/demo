<?php
/*  thiết lập*/
 setcookie("name", "Nguyễn Văn A", time() + 10000, "/");
 echo "Set Cookies";
 /* đọc cookie */
 if(isset($_COOKIE["name"]))
        echo $_COOKIE["name"];
else   
        echo "không có tên";

/* xóa cookie */
setcookie("name", "Nguyễn Văn A", time() - 1000, "/");
 ?>
