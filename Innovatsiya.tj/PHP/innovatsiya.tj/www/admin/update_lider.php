<?php 
include ("blocks/bd.php");
if (isset($_POST['lider_n']))       
{
$lider_n = $_POST['lider_n']; 

if ($lider_n == '') 
{
unset($lider_n);
}  

}

/*Если сущестывует в глобальном массиве $_POST['descreption'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.*/
if (isset($_POST['lider_n']))        {$lider_n = $_POST['lider_n']; if ($lider_n == '') {unset($lider_n);}}
if (isset($_POST['lider_img']))      {$lider_img = $_POST['lider_img']; if ($lider_img == '') {unset($lider_img);}}
if (isset($_POST['news_name']))      {$news_name = $_POST['news_name']; if ($news_name == '') {unset($news_name);}}
if (isset($_POST['news_photo']))      {$news_photo = $_POST['news_photo']; if ($news_photo == '') {unset($news_photo);}}
if (isset($_POST['news_description']))      {$news_description = $_POST['news_description']; if ($news_description == '') {unset($news_description);}}
if (isset($_POST['id']))      {$id = $_POST['id'];}
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
if (isset($lider_n) && isset($lider_img) && isset($news_name) && isset($news_photo)&& isset($news_description))
{
/* Здесь пишем что можно обновить информацию в базу*/
$result = mysql_query ("UPDATE leftblog SET lider_img='$lider_img', news_photo='$news_photo',lider_n='$lider_n',news_name='$news_name',news_description='$news_description' WHERE id='$id'");

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