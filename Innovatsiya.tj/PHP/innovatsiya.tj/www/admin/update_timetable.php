﻿<?php 
include ("blocks/bd.php");
if (isset($_POST['title']))       
{
$title = $_POST['title']; 

if ($title == '') 
{
unset($title);
}  

}

/*Если сущестывует в глобальном массиве $_POST['descreption'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.*/
if (isset($_POST['title'])) {$title = $_POST['title']; if ($title == '') {unset($title);}}
if (isset($_POST['text'])) {$text = $_POST['text']; if ($text == '') {unset($text);}}
if (isset($_POST['id'])) {$id = $_POST['id'];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Обработчик</title>
<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer"> 
  <?php include("blocks/header.php");?>  
  <?php include ("blocks/left.php"); ?>  
<div id="center">
<?php 
if (isset($title)&& isset($text))
{
/* Здесь пишем что можно обновить информацию в базу*/
$result = mysql_query ("UPDATE timetable SET title='$title',text='$text' WHERE id='$id'");

     if ($result == 'true') {echo "<p id='info'>Ваша новости успешно обнавлен!</p>";}
     else {echo "<p id='info'>Ваша новости не обнавлен!</p>";}
}		 
else 
{
echo "<p id='info'>Вы ввели не всю информацию,по этому новости в базу не может быть обнавлен.</p>";
}	 
?>
</div>
<?php include ("blocks/footer.php");?>  
</div>
</body>
</html>