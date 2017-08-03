
<?php

$arr = $_POST['answer'];

function revWord($a){

  $revStr = preg_split("//", $a, -1, PREG_SPLIT_NO_EMPTY);

  $revStr = array_reverse($revStr);
  $result = "";
  foreach ($revStr as $key => $value) {
    $result .= $value;
  }

  return $result;

}
echo revWord($arr);

?>
