<?php

$num = $_POST['answer'];
$uploadfile = basename($_FILES['userfile']['name']);
$origData = file_get_contents($uploadfile);

if($num == null){
    echo "Вы не ввели число! ";
}

if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Вы не выбрали файл!";
}

function removeWords($file, $data, $n){
  $newData = '';
  $str = preg_split("/[\s,!?@#+]+/", $data, -1, PREG_SPLIT_NO_EMPTY);
  foreach ($str as $key => $value) {
    if(strlen($value) > $n){
       unset($str[$key]);
    }else{
      $newData .= $value;
      $newData .= " ";
    }
  }

  $handle = fopen($file,"w+");
  fwrite($handle, $newData);
  fclose($handle);
return "Готово! Файл изменен.";
}


echo removeWords($uploadfile, $origData, $num);
?>
