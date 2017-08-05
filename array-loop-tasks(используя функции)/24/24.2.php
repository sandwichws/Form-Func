<?php

function cout($nums, $ct){
  if($nums == NULL || $ct == NULL){ return "Вы не ввели нужыне параметры!"; }

  $chars = preg_split('//', $nums, 0, PREG_SPLIT_NO_EMPTY);
  $result = 0;
  foreach ($chars as $value) {
  if($ct == $value){
    $result ++; }
  }
 }

isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
isset($_POST['counter']) ? $cout = $_POST['counter'] : '';
echo cout($arr, $cout);
?>
