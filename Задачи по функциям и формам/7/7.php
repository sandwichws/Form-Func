<!doctype html>

<html>
	<head>
		<title>Гостевая книга</title>
		<link href="images/" rel="stylesheet">
		<meta charset="utf-8">
    <style type="text/css">
     .wd {
			 margin-left: 10%;
       width: 600px;
       height: 130px;
       max-width: 600px;
       max-height: 160px;
     }

    </style>
   </head>

<body>
7. Создать гостевую книгу, где любой человек может оставить комментарий
в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.

<div class="main">
 <?php

  $getTxt = file_get_contents('./comm.txt');
  $prg = preg_split("/F48A1FA07400BC2EEBCE7170610E8083/", $getTxt);
  $ct = count($prg);
  if($prg != NULL):?>
    <?php
      for($i = 1; $i < $ct; $i++):?>
    <form>
     </p><textarea type="text" disabled class="wd"><?php  echo $prg[$i];  ?>
       </textarea>
    </form>
    <?php endfor ?>
<?php endif ?>

</div>

<form action="7.1.php" method="post">
<p>Введите комментарий:
</p><textarea type="text" name="comment" class="wd"></textarea>
<input type="submit" value="Отправить" />
</p>
</form>

</body>
</html>
