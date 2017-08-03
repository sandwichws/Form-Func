
<?php

$nums = $_POST['answer'];
$chars = preg_split('//', (int)$nums, -1, PREG_SPLIT_NO_EMPTY);
$result = 0;
foreach ($chars as $key => $value) {
$result = $result + $value; }
echo $result;
?>
