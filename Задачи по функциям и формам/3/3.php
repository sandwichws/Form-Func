<!doctype html>

<html>
	<head>
		<title>Задание 3</title>
  <head>
   <body>
   <p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых
		 превыщает N символов. Значение N задавать через форму.
		 Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

<form enctype="multipart/form-data" action="3.1.php" method="POST">
	 <p> Введите длинну слова, необходимую для удаления из текста:
	  <input type="number" name="answer"/></p>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />

</form>

</body>
<html>
