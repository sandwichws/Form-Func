
<?php
$arr = array();
$arr = $_POST['answer'];
$str = preg_split("/,/", $arr);

function counter($chars = array()){
$count = 0;
foreach ($chars as $key => $value) {
   $count++;
  }
  return $count;
}
echo counter($str);

?>
