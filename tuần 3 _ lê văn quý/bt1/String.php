<?php
    function explode_ ($delimiter,$string)
    {
          
        print_r(explode($delimiter,$string));
    }
    function implode_ ($separator, $array)
    {
        echo implode($separator, $array);
    }
    function strlen_($string)
    {
        echo strlen($string);
    }
    function str_repeat_($string, $lan)
    {
        echo str_repeat($string, $lan);
    }
    function str_replace_($chuoinguon, $thaythe, $string)
    {
        echo  str_replace($chuoinguon, $thaythe, $string);
    }
    function md5_($string)
    {
        echo md5($string);
    }
    function sha1_($string)
    {
        echo sha1($string);
    }
    function substr_($string,$start,$length)
    {
        echo substr($string,$start,$length);
    }
    function strpos_($string,$chuoicantin)
    {
        echo strpos($string,$chuoicantin);
    }
   

    
        $chuoi='chao mung den voi php'; $chuoi1=['chao','mung','den'];
        explode_('h',$chuoi); 
        echo "<br>";
        implode_('.',$chuoi1);
        echo "<br>";
        strlen_($chuoi);
        echo "<br>";
        str_repeat_($chuoi,4);
        echo "<br>";
        str_replace_('c','C',$chuoi);
        echo "<br>";
        md5_($chuoi);
        echo "<br>";
        sha1_($chuoi);
        echo "<br>";
        substr_($chuoi,1,5);
        echo "<br>";
        strpos_($chuoi,"mung");

?>