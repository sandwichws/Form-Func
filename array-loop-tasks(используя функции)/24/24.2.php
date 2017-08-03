<?php

$nums = $_POST['answer'];
$cout = $_POST['counter'];
$chars = preg_split('//', $nums, 0, PREG_SPLIT_NO_EMPTY);
$result = 0;
foreach ($chars as $value) {
if($cout == $value){
  $result ++;
}
}
echo $result;
?>
