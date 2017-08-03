<!doctype html>

<html>
	<head>
		<title>Задание 1</title>
		<style type="text/css">
     .wd { width: 600px;height: 180px;}
    </style>
  <head>
   <body>
   <p>1. Создать форму с двумя элементами textarea. При отправке формы
		 скрипт должен выдавать только те слова, которые есть и в первом и во
		 втором поле ввода. Реализацию это логики необходимо поместить в функцию
		 getCommonWords($a, $b), которая будет возвращать массив с общими словами.</p>

<form action="1.1.php" method="post">
<p>Введите любой текст:</p><textarea type="text" name="answer" class="wd"></textarea>

<p>Введите любой текст:</p><textarea type="text" name="answer2" class="wd"></textarea>
		 <p><input type="submit" /></p>
</form>

</body>
<html>
