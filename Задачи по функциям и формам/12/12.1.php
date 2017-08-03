
<?php

$arr = $_POST['answer'];


function revWord($a){
  $result = '';
  $revStr = explode(".", $a);

  $revStr = array_reverse($revStr);

foreach ($revStr as $key => $value) {
  if($value == " "){ array_splice($revStr, $key); }else{
      $result .= "$value. ";
  }

}
$result = substr($result,0,-1);
  return $result;

}
echo revWord($arr);

?>
