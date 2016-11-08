<?php 
include ("blocks/bd.php");
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
if (isset($id))
{
$result = mysql_query ("DELETE FROM data WHERE id='$id'");

if ($result == 'true') {echo "<p id='info'>Ваша новости успешно удален!</p>";}
else {echo "<p id='info'>Ваша новости не удален!</p>";}


}		 
else 

{
echo "<p id='info'>Вы запустили данный файл без параметров id и поэтому, удалить новости невозможно (скорее всего Вы не выбрали радиокнопку на предыдущем шаге).</p>";
}
?>
</div>      
<?php  include ("blocks/footer.php"); ?> 
</div> 
</body>
</html>
