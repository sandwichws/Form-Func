
<?php

function counter($chars = array(), $letrs = array()){
$result = 0;
foreach ($letrs as $key => $value) {
  if($value != "0" && $value != "," && $value != " " && (int)$value == 0){
    return "Вводить можно только числа, пробелы и запятые!"; }
}//проверка на валидность введенніх данных

foreach ($chars as $key => $value) {
      $result = $result + pow((int)$value, 2);
  }//суммирование чисел

  return $result;
}

isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
$str = preg_split("/,/", $arr);
$letr = preg_split('//', $arr,  -1, PREG_SPLIT_NO_EMPTY);

echo counter($str, $letr);


?>
