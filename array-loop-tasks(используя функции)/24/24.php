<!doctype html>

<html>
	<head>
		<title>Задание 24</title>
  <head>
   <body>
		 24. Вам нужно разработать программу, которая считала бы
		 количество вхождений какой­-нибуть выбранной вами цифры в
		 выбранном вами числе. Например: цифра 5 в числе 442158755745
		 встречается 4 раза.<br><br>

     РЕШЕНИЕ:<br><br>
		  создание формы:  <br><br>
			form action="24.2.php" method="post"><br>
			Введите числа: input type="number" name="answer">/p><br>
	    Искомая цифра: input type="number" name="counter">/p><br>
			input type="submit" />/p><br><br>
			нахождение совпадений:<br><br>
			"24.2.php"<br>
			$nums = $_POST['answer'];<br>
			$cout = $_POST['counter'];<br>
			$chars = preg_split('//', $nums, 0, PREG_SPLIT_NO_EMPTY);<br>
			$result = 0;<br>
			foreach ($chars as $value) {<br>
			if($cout == $value){<br>
			  $result ++;<br>
			}<br>
			}<br>
			echo $result;<br>
		 <br><br>

		ОТВЕТ: <br>

		<form action="24.2.php" method="post">
		<p>Введите числа: <input type="number" name="answer"></p>
    <p>Искомая цифра: <input type="number" name="counter"></p>
		<p><input type="submit" /></p>

		</form>

   </body>
<html>
