<?php

/* chạy session*/
  if (session_id() === '') session_start();
  echo "Session đang chạy"."<br>";
  /* đếm số lần truy cập*/
  if( isset( $_SESSION['counter'] ) )
    {
        // Đếm mỗi lần truy cập
        $_SESSION['counter'] += 1;
    }
    else
    {
        // Lần đầu truy cập
        $_SESSION['counter'] = 1;
    }
    echo " số lần truy cập =". $_SESSION['counter']."<br>";
    /* hủy */
    unset($_SESSION['counter']);
    echo "đã hủy";
    /* hủy toàn bộ */
    session_destroy();
?>