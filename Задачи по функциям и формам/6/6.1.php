<?php
$fls = $_FILES['pictures'];
$uploaddir = './gallery/';

for($i = 0; $i < 3; $i++){
  if($fls['name'][$i] != NULL){
$uploadfile = $uploaddir.basename($fls['name'][$i]);
copy($fls['tmp_name'][$i], $uploadfile);

if (copy($fls['tmp_name'][$i], $uploadfile))
{
echo "<h3>Файл успешно загружен на сервер</h3>";
}
else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }

$f=fopen('files.txt','a');
fwrite($f, $fls['name'][$i]);
fwrite($f, " ");
fclose($f);

}
}




?>
