<!doctype html>

<html>
	<head>
		<title>Рандомные люди</title>
		<link href="images/" rel="stylesheet">
		<meta charset="utf-8">
    <style>
			body{
				background: #fefefe;
				margin: 0;
				padding: 0;
				color: #272727;
			}
			img{
				margin: 0;
				padding: 0;
				max-width: 250px;
				max-height: 270px;
				vertical-align: middle;
				border: none;
			}

			.main{
        display: flex;
				display: webkit-box;
				display: webkit-flex;
				display: -ms-flexbox;
				max-height: 3500px;
				max-width: 1000px;
				margin: 1px auto;
				flex-direction: row;
				justify-content:center;
				align-items:flex-start;
				flex-wrap: wrap;
				align-content: flex-start;
			}
			.bl{
				padding: 5px 12px;
				border:1px solid #ddd;
				background: #fffde1;
				border-radius: 3px;
				margin: 10px;
				width: 260px;

			}
		</style>
</head>

<body>
  6. Создать страницу, на которой можно загрузить несколько фотографий в
  галерею. Все загруженные фото
  должны помещаться в папку gallery и выводиться на странице в виде таблицы.

<form action="6.1.php" method="post" enctype="multipart/form-data">
<p>Изображения:
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="submit" value="Отправить" />
</p>

<div class="main">
    <?php
      $getTxt = file_get_contents('./files.txt');
      $taken = preg_split('/ /', $getTxt, -1, PREG_SPLIT_NO_EMPTY);
      //var_dump($taken[0]);
      foreach ($taken as $key => $value) : ?>
        <div class="bl fl1"><img src="gallery/<?php echo $value;?>"></div>
    <?php endforeach ?>
</div>

</form>

</body>
</html>
