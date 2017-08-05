
<?php

function revWord($a){
  $result = '';
  $revStr = preg_split("/[ ]+/",  $a);

  $revStr = array_reverse($revStr);
//var_dump($revStr);



foreach ($revStr as $key => $value) {
  if($value == " "){ array_splice($revStr, $key); }else{
      $result .= "$value ";
  }

}
$result = substr($result,0,-1);
  return $result;

}
isset($_POST['answer']) ? $arr = $_POST['answer'] : '';

echo revWord($arr);

?>
