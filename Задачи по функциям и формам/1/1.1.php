
<?php

function getCommonWords($a, $b){
if(is_string($a) == true && is_string($b) == true){

$listR = "Одинаковые слова:  ";
$str = preg_split("/[\s,.!?@#+ ]+/", $a, -1, PREG_SPLIT_NO_EMPTY);
$str2 = preg_split("/[\s,.!?@#+ ]+/", $b, -1, PREG_SPLIT_NO_EMPTY);
$newAr = [];

 foreach ($str as $key => $value) {
   foreach ($str2 as $key2 => $value2) {
     if($value == $value2){
        array_push($newAr, $value);
        break;
        }
   }
 }//все совпавшие слова добавляю в отдельный массив

 foreach ($newAr as $key => $value) {
   foreach ($newAr as $key2 => $value2) {
       if($key != $key2 && $value == $value2){
          $newAr[$key] = NULL;
       }else{
         $listR .= "$value, "; break;
       }
   }
}//удаляю все совпадения из массива, и если нет совпадений - добавляю
//в основную строку
 $listR = substr($listR,0,-2); //удаление последней запятой и пробела
 $listR .= "."; //добавление точки
}else{ return "Вводить можно только слова!";}
return $listR;
}
isset($_POST['answer']) ? $arr = $_POST['answer'] : "";
isset($_POST['answer2']) ? $arr2 = $_POST['answer2'] : "";

echo getCommonWords($arr, $arr2);

?>
