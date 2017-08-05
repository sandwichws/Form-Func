
<?php

function string_sort($a, $b)
{
if (strlen($a) < strlen($b)) {
  return 1; } elseif (strlen($a) == strlen($b)) {
    return 0; } else { return -1; }
}

function top($a, $b){

  $str = preg_split("/[\s,.!?@+]+/", $b, -1, PREG_SPLIT_NO_EMPTY);
  usort($str, 'string_sort');
  $completed = "ТОП $a слов в тексте: ";
  $used = ["0"];

    foreach ($str as $key => $value) {
      foreach ($used as $key2 => $value2) {
         if($value == $value2){
          break; }
          if($value2 == end($used)){
            $completed .= "<br> $value"; $used[] = $value;}
      }
    }//проверка на совпадение. если слово уже было, заносим его в массив
    //использованных слов

  return $completed;
}

 isset($_POST['answer']) ? $arr = $_POST['answer'] : "";

 echo top(3, $arr);


?>
