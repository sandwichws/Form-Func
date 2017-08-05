
<?php

function counter($first, $sec){
if($first == NULL || $sec == NULL){ return "вы не ввели диапазон!"; }
$f = (int)$first;
$s = (int)$sec;
$result = "";
$dif = $s - $f;

while($f <= $s){
  if(($f % 2) == 0){
    $result .= $f;
    $result .= "<br>";
  }
  $f++;
}

  return $result;
}
isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
isset($_POST['do']) ? $arr2 = $_POST['do'] : '';


echo counter($arr, $arr2);

?>
