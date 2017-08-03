<!doctype html>

<html>
	<head>
		<title>Задание 23</title>
  <head>
   <body>
		 23. Вам нужно разработать программу, которая считала бы сумму
		 цифр числа введенного пользователем. Например: есть число 123,
		 то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
     По желанию можете сделать проверку на корректность введения
		 данных пользователем.<br><br>

     РЕШЕНИЕ:<br><br>
		  создание формы:  <br>
			form action="23.2.php" method="post"><br>
			Введите числа: input type="number" name="answer"><br>
			input type="submit" /><br><br>
			создание результата сложения:<br>
			$nums = $_POST['answer'];<br>
			$chars = preg_split('//', (int)$nums, -1, PREG_SPLIT_NO_EMPTY);<br>
			$result = 0;<br>
			foreach ($chars as $key => $value) {<br>
			$result = $result + $value; }<br>
			echo $result;<br>
		 <br><br>

		ОТВЕТ: <br>

		<form action="23.2.php" method="post">
		<p>Введите числа: <input type="number" name="answer"></p>
    <p><input type="submit" /></p>

		</form>

   </body>
<html>
