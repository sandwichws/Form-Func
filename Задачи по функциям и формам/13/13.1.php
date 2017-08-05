
<?php

function revWord($a){
  $pr = preg_split("/[,. ]+/", $a);
  $result = "";
  $sorted = [];
  $newAr = [];

foreach ($pr as $key => $value) {
  $add = true;
  foreach ($sorted as $key2 => $value2) {
    if($value == $value2){
     $add = false; break;}
  }
  if($add == true){
    $sorted[] = $value;}

} //оставляю только уникальные слова в тексте и добавляю в массив $sorted

foreach ($sorted as $key => $value) {
  $count = 0;
 foreach ($pr as $key2 => $value2) {
    if($value == $value2){ $count++; }
} //считаю количество слов, которые есть в массиве sorted

$newAr[] = "$count $value"; //добавляю в новый массив кол-во совпадений и само
//слово одной строкой
}

rsort($newAr, SORT_NUMERIC); //соритрую по колву-совпадений($count)

foreach ($newAr as $key => $value) {
   $value = preg_split("/ /", $value);
   $result .= "$value[1] - $value[0] <br>";

}//меняю местами слово и цифру в строке, добавляю символ "-" и перенос строки
//добавляю результат в итогогвую переменную

return $result;
}
isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
echo revWord($arr);

?>
