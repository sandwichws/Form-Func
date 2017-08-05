<?php


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
isset($_POST['answer']) ? $arr = $_POST['answer'] : '';
  echo filelist($str);

 ?>
