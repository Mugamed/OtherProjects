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
  <p class="Center-title">Страница удаление расписние,выберите новости для удаления</p>   
          <form action="drop_timetable.php" method="post">
<?php 

$result = mysql_query("SELECT id,title FROM timetable");      
$myrow = mysql_fetch_array($result);

                echo"<select name='id' id='timetable-select'>";
                   $myrow=mysql_fetch_array($result);
                     do
                       {
	                       printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["title"]);
	
                       }
                     while($myrow=mysql_fetch_array($result));
                    echo "</select>";
?>

<p> <input name="submit" type="submit" value="Удалит новости!!!" id="submit"></p>

</form>
</div>
<?php  include ("blocks/footer.php");?>  
</div>
</table>
</body>
</html>
