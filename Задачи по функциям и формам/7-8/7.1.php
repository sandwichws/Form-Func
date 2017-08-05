<?php

function censura($a, $b){
$prg = preg_split("//", $a, -1, PREG_SPLIT_NO_EMPTY);
$num = "\r\nF48A1FA07400BC2EEBCE7170610E8083";
$del = [];

foreach ($prg as $key => $value) {
if($value == " "){  array_push($del, $value); }

  foreach ($b as $key2 => $value2) {
   if($value2 == $value){
      return "Комментарий не корректен!";
   }
  }
}

if($prg == NULL || $del == $prg){
return "Вы не ввели комментарий!"; }



$f=fopen('comm.txt','a');
fwrite($f, "$num");
fwrite($f, $a);
fclose($f);
return "Комментарий добавлен!";
}

$ban = ["suka", "bljad", "putin"];
isset($_POST['comment']) ? $fls = $_POST['comment'] : '';
echo censura($fls, $ban);

?>
