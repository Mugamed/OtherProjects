<?php 
include ("blocks/bd.php");
if (isset($_POST['description']))       
{
$descreption = $_POST['description']; 

if ($descreption == '') 
{
unset($descreption);
}  

}

/*Если сущестывует в глобальном массиве $_POST['descreption'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.*/
if (isset($_POST['meta_d']))      {$meta_d = $_POST['meta_d']; if ($meta_d == '') {unset($meta_d);}}
if (isset($_POST['meta_k']))      {$meta_k = $_POST['meta_k']; if ($meta_k == '') {unset($meta_k);}}
if (isset($_POST['date']))        {$date = $_POST['date']; if ($date == '') {unset($date);}}
if (isset($_POST['description'])) {$description = $_POST['description']; if ($description == '') {unset($description);}}
if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
if (isset($_POST['author']))      {$author = $_POST['author']; if ($author == '') {unset($author);}}
if (isset($_POST['id']))      {$id = $_POST['id'];}
if (isset($_POST['cat']))      {$cat = $_POST['cat']; if ($cat == '') {unset($cat);}}
if (isset($_POST['img']))      {$img = $_POST['img']; if ($img == '') {unset($img);}}
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
if (isset($descreption) && isset($meta_d) && isset($meta_k) && isset($date) && isset($description) && isset($text) && isset($author) && isset($cat)&& isset($img) )
{
/* Здесь пишем что можно заносить информацию в базу*/
$result = mysql_query ("UPDATE data SET description='$description', meta_d='$meta_d', meta_k='$meta_k', date='$date', description='$description', text='$text', author='$author',cat='$cat',mini_img='$img' WHERE id='$id'");

if ($result == 'true') {echo "<p>Ваша новости успешно обнавлен!</p>";}
else {echo "<p>Ваша новости не обнавлен!</p>";}


}		 
else 

{
echo "<p>Вы ввели не всю информацию,по этому новости в базу не может быть обнавлен.</p>";
}	 
?>
</div>
<?php include ("blocks/footer.php");?>  
</div>
</body>
</html>
