
<?php

$arr = $_POST['answer'];

mb_internal_encoding("UTF-8");
function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}


function revWord($a){
  $result = '';
  $revStr = explode(". ", $a);


//var_dump($revStr);
    foreach ($revStr as $key => $value) {
      $value = mb_ucfirst($value);
      $result .= "$value. ";
    }
  $result = substr($result,0,-1);
  return $result;

}
echo revWord($arr);

?>
