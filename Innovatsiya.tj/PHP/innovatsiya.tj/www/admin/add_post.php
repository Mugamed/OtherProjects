<?php 
include ("blocks/bd.php");
if (isset($_POST['description']))       
{
$title = $_POST['description']; 

if ($description == '') 
{
unset($description);
}  

}

/*Если сущестывует в глобальном массиве $_POST['descreption'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную.*/
if (isset($_POST['meta_d']))      {$meta_d = $_POST['meta_d']; if ($meta_d == '') {unset($meta_d);}}
if (isset($_POST['meta_k']))      {$meta_k = $_POST['meta_k']; if ($meta_k == '') {unset($meta_k);}}
if (isset($_POST['date']))        {$date = $_POST['date']; if ($date == '') {unset($date);}}
if (isset($_POST['description'])) {$description = $_POST['description']; if ($description == '') {unset($description);}}
if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
if (isset($_POST['author']))      {$author = $_POST['author']; if ($author == '') {unset($author);}}
if (isset($_POST['img']))      {$img = $_POST['img']; if ($img == '') {unset($img);}}
if (isset($_POST['cat']))      {$cat = $_POST['cat']; if ($cat == '') {unset($cat);}}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style/main.css"/>
<title>Обработчик</title>

</head>
<body>
<div class="continer"> 
  <?php include("blocks/header.php");?>  
  <?php include ("blocks/left.php"); ?>  
<div id="center">
<?php
if (isset($meta_d) && isset($meta_k) && isset($date) && isset($description) && isset($text) && isset($author) && isset($img) && isset($cat))
{
/*Здесь пишем что можно занести информацию в базу*/
$result = mysql_query ("INSERT INTO data (meta_d,meta_k,date,description,text,author,mini_img,cat) VALUES ('$meta_d','$meta_k','$date','$description','$text','$author','$img',$cat)");

if ($result == 'true') {echo "<p id='info'>Ваша новости успешно добавлен!</p>";}
else {echo "<p id='info'>Ваша новости не добавлен!</p>";}


}		 
else 

{
echo "<p id='info'>Вы ввели не всю информацию,по этому новости в базу не может быть добавлен.</p>";
}		 
?>
</div>
<?php  include ("blocks/footer.php");?>  
<div>
</body>
</html>
