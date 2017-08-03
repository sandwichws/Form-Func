
<?php
$arr = array();
$arr = $_POST['answer'];
$arr2 = $_POST['secAns'];
$str = preg_split("/,/", $arr);
$str2 = preg_split("/,/", $arr2);

function counter($chars = array(), $chR = array()){

foreach ($chars as $key => $value) {
   foreach ($chR as $key2 => $value2) {
     if($value2 == $value && $value2 != " "){ return "Есть!";}
   }
  }
  return "Нету!";
}
echo counter($str, $str2);

?>
