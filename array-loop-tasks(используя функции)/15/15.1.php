
<?php

function counter($ar){
  if($ar == NULL){ return "вы не ввели числа!"; }
$chars = preg_split("/,/", $ar);
$count = 0;
foreach ($chars as $key => $value) {
   $count++;
  }
  return $count;
}

isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
echo counter($str);

?>
