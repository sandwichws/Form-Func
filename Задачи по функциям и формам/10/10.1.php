
<?php


function revWord($a){

  $revStr = preg_split("/[,. ]+/", $a, -1, PREG_SPLIT_NO_EMPTY);
  $count = 0;
  $isUniq = false;
  $result = "Уникальные слова: ";
  $isUniq = false;

   foreach ($revStr as $key => $value) {
     $isUniq = true;
     foreach ($revStr as $key2 => $value2){
      if($key2 != $key && $value2 == $value){ $isUniq = false; break; }
   }
   if($isUniq == true){ $result .= "<br>"; $result .= $value;  $count++;}
}

$result .= "<br> Количество: $count";


  return $result;

}
isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
echo revWord($arr);

?>
