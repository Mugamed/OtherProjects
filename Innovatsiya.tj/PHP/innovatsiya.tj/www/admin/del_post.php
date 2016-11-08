<?php 
include ("lock.php");
include ("blocks/bd.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Страница удаления новости</title>
<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer"> 
  <?php include("blocks/header.php");?>  
  <?php include ("blocks/left.php"); ?>  
<div id="center">
  <p class="Center-title">Страница удаление новостей,выберите новости для удаления</p>   
          <form action="drop_post.php" method="post">
<?php 

$result = mysql_query("SELECT description,id FROM data");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("<p><input name='id' type='radio' value='%s'><label> %s</label></p>",$myrow["id"],$myrow["description"]);
}

while ($myrow = mysql_fetch_array($result));
?>

<p> <input name="submit" type="submit" value="Удалит новости!!!" id="submit"></p>

</form>
</div>
<?php  include ("blocks/footer.php");?>  
</div>
</table>
</body>
</html>
