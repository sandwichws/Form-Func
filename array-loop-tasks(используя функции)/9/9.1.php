
<?php

$arr = $_POST['answer'];
$sraka = $_POST['do'];


function counter($first, $sec){
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

echo counter($arr, $sraka);

?>
