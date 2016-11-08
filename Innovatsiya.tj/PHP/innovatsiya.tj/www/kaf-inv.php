<?php include ("blocks/bd.php");
$result=mysql_query("SELECT meta_d,meta_k,text,date,author,view FROM data WHERE id='5'",$db);
if (!$result)
{
	echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@inno.tj.<br><b>Код ошибки</b></p>";
exit (mysql_error());
}

if (mysql_num_rows($result)>0)
{
$myrow=mysql_fetch_array($result);
$new_view=$myrow["view"]+1;
$update=mysql_query ("UPDATE data SET view='$new_view' WHERE id='5'",$db);
}
else
{
	echo "<p>Информация по запросу не может быть извлечена в таблице нет записей</p>";
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Факультет инновации и телекомуникации</title>
	<link rel="stylesheet" type="text/css" href="style/main.css"/>
	<meta name="description" content="<?php echo $myrow ["meta_d"];?>">
	<meta name="keywords" content="<?php echo $myrow ["meta_k"];?>">	
</head>
<body>
	<div class="continer">
		<?php include ("blocks/header.php");?>
	    <?php include ("blocks/nav.php");?>
		<?php include ("blocks/left.php");?>
		<div id="center">
		<p class="Center-title">Инновации и телекоммуникации</p>
		 <?php
		 printf("<p class='post-add'>Автор: <b>%s</b></p> <p class='post-add'>Дата добавления: <b>%s</b></p><p class='post-add'>Просмотров: <b>%s</b><p class='post-add'>%s</p>",$myrow["author"],$myrow["date"],$myrow["view"],$myrow["text"]);
		 ?>
	    </div>
		<?php include ("blocks/footer.php");?>
	</div>
</body>
</html>