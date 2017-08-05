
<?php

function counter($ch, $cR){
if($ch == NULL || $cR == NULL){ return "вы не ввели значения!"; }
$chars = preg_split("/,/", $ch);
$chR = preg_split("/,/", $cR);
foreach ($chars as $key => $value) {
   foreach ($chR as $key2 => $value2) {
     if($value2 == $value && $value2 != " "){ return "Есть!";}
   }
  }
  return "Нету!";
}

isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
isset($_POST['secAns']) ? $arr2 = $_POST['secAns'] : '';

echo counter($str, $str2);

?>
