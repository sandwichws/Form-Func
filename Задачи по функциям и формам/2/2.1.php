
<?php

$arr = $_POST['answer'];

function top($a, $b){
  $comletedn  = "ТОП $b самых длинных слов в тексте: ";
  $str = preg_split("/[\s,.!?@+]+/", $a, -1, PREG_SPLIT_NO_EMPTY);
  $count = 0;
  $longest = [];

  foreach ($str as $key => $value) {
    $count++;
    $a = ((string)iconv_strlen($value)) . $value;
    $longest[$key] = $a;
}//считаем кол-во слов и добавляем к каждой строке в начало цифру, равную
//количеству слов для сортировки

 rsort($longest, SORT_NUMERIC); //соритрую в порядке убывания

 if($count < $b){ return "Введите минимум $b слов!"; }
// првоерка на наличе достаточного кол-ва введенных слов

foreach ($longest as $key => $value) {
$longest[$key] = trim($value, '1234567890');
}//удаление кол-ва строк из строки

for($i = 0; $i < $b; $i++){
  $comletedn .= "<br>";
  $comletedn .= $longest[$i];
}//добавляю нужное кол-во слов в главную строку
return $comletedn;
}

echo top($arr, 3);

?>
