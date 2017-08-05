<?php



  function filelist($path, $wtfind){
    $fileList = 'Список совпадений в заданной директории: ';
    $isd = is_dir($path);

  if($isd == false){ return "Вы не верно ввели директрию!";}else{
    $file = scandir($path);
  }

    foreach ($file as $key => $value) {
      $result = strpos($value, $wtfind);
      if ($result === false) {  } else {
      $fileList .= $value;
  }
    }
    return $fileList;
}
isset($_POST['answer']) ? $str = $_POST['answer'] : '';
isset($_POST['answer2']) ? $str2 = $_POST['answer2'] : '';
  echo filelist($str, $str2);

 ?>
