
<?php

function counter($first, $sec){
  if($first == NULL || $sec == NULL){ return "вы не ввели диапазон!"; }
$f = (int)$first;
$s = (int)$sec;
$result = "";
$dif = $s - $f;

while($f <= $s){
  $result .= $f;
  $result .= "<br>";
  $f++;
}

  return $result;
}
isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
$str = preg_split("/, /", $arr);
$letr = preg_split('//', $arr,  -1, PREG_SPLIT_NO_EMPTY);

echo counter($arr, $sraka);

?>
