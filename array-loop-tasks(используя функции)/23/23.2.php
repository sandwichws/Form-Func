
<?php

function cout($nums){
  if($nums == NULL){ return "Вы не ввели число!";}
  $chars = preg_split('//', (int)$nums, -1, PREG_SPLIT_NO_EMPTY);
  $result = 0;
  foreach ($chars as $key => $value) {
  $result = $result + $value; }

  foreach ($chars as $key => $value) {
  $result = $result + $value; }
 return $result;
}

isset($_POST['answer']) ? $arr = $_POST['answer'] : '';


echo cout($arr);
?>
