<?php
  function array_combine_($array_keys, $array_values)  /* trộn 2 mạng lại vs nhau */
  {
      print_r(array_combine($array_keys, $array_values));
  }
  function array_count_values_( $array ) /*Đếm số lần xuất hiện của các phần tử giống nhau trong mảng $array và trả về một mảng kết quả.*/
  {
      print_r(array_count_values ( $array ));
  }
  function array_push_($array, $add_value1, $add_value2)/* Thêm vào cuối mảng $array một hoặc nhiều phần tử với các giá trị tương ứng biến $add_value truyền vào.*/
  {
     array_push($array, $add_value1, $add_value2);
     print_r($array);
  }
  function array_pop_(&$array) /*Xóa trong mảng $array phần tử cuối cùng và trả về phần tử đã xóa*/
  {
      print_r(array_pop($array));
  }
  function array_shift_(&$array) /* Xóa phần tử đầu tiên ra khỏi mảng $array và trả về phần tử vừa xóa đó.*/
  {
      print_r(array_shift($array));
  }
  function  array_unshift_(&$array, $value1, $value2) /*Thêm các giá trị $value1, $value2, … vào đầu mảng $array.*/
  {
      array_unshift($array, $value1, $value2);
      print_r($array);
  }
  function in_array_($needle, $haystackarray) /* Kiểm tra giá trị $needle có nằm trong mảng $haystackarray không. trả về true nếu có và flase nếu không có.*/
  {
    var_dump(in_array($needle, $haystackarray));
  }
  function array_key_exists_($key, $searcharray) /*Kiểm tra key $key có tồn tại trong mảng $searcharray không, trả về true nếu có và false nếu không có.*/
  {
    var_dump(array_key_exists($key, $searcharray));
  }
  $a=[1,2,3,4,5,1]; $b=['a','b','c','d','e','f']; 
  $c=array(
        'aa' => 'nguyenaa',
        'bb' => 'nguyenbb'
  );

  array_combine_($a,$b);
  echo "<br>";
  array_count_values_($a);
  echo "<br>";
  array_push_($a,"7","8");
  echo "<br>";
  array_pop_($a);
  echo "<br>";
  array_shift_($a);
  echo "<br>";
  array_unshift_($a,'0','10');
  echo "<br>";
  in_array_('6',$a);
  echo "<br>";
  array_key_exists_('aa',$c);

?>