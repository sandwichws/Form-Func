
<?php

$arr = $_POST['answer'];
$arr2 = $_POST['answer2'];

function getCommonWords($a, $b){
$list = "Одинаковые слова: ";
$str = preg_split("/[\s,.!?@#+]+/", $a, -1, PREG_SPLIT_NO_EMPTY);
$str2 = preg_split("/[\s,.!?@#+]+/", $b, -1, PREG_SPLIT_NO_EMPTY);

 foreach ($str as $key => $value) {
   foreach ($str2 as $key2 => $value2) {
     if($value == $value2){ $list .= $value;  $list .= ", "; }
   }
 }

 $listR = substr($list,0,-2); //удаление последней запятой и пробела
 $listR .= "."; //добавление точки

return $listR;
}
echo getCommonWords($arr, $arr2);

?>
