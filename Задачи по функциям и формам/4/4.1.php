<?php
  $str = $_POST['answer'];

  function filelist($path){
    if($path == NULL){ return "Вы не ввели директрию!";}

     @$file = scandir($path);

    if($file == false){
      return "Вы не верно ввели директрию!";
    }

    $fileList = 'Список файлов в заданной директории: ';
    foreach ($file as $key => $value) {
      $fileList .= "<br>";
      $fileList .= $value;

    }
     return $fileList;
  }

  echo filelist($str);

 ?>
