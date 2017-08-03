<?php
  $str = $_POST['answer'];
  $str2 = $_POST['answer2'];
  $file2 = scandir($str);

  function filelist($path, $wtfind){
    $fileList = 'Список совпадений в заданной директории: ';
    $coinsid = preg_split("//", $wtfind, -1, PREG_SPLIT_NO_EMPTY);
    $nm = iconv_strlen($wtfind);

    if($path == NULL){ return "Вы не ввели директрию!";}

     @$file = scandir($path);

    if($file == false){
      return "Вы не верно ввели директрию!";
    }
    foreach ($file as $key => $value) {
      $divide = preg_split("//", $value);
      $count = 0;

      foreach($coinsid as $key2 => $letter) {
          foreach($divide as $key3 => $letterS) {
          if($divide[$key3] == $coinsid[$key2]){
            $count++; }
          }
          if($count == $nm){
          $fileList .= "<br>";
            $fileList .= $value; }
      }
}
  return $fileList;
}
  echo filelist($str, $str2);

 ?>
