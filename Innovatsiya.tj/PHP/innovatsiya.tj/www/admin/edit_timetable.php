<?php 
include ("lock.php"); 
include ("blocks/bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Страница редактирование левого блока</title>
<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer"> 
  <?php include("blocks/header.php");?>  
  <?php include ("blocks/left.php"); ?>  
<div id="center">  
<p class="Center-title">Страница редактирование расписаний</p>   
<?php
if (!isset($id))

{
          echo"<label id='timetable-label'>Выберите специальность<br>";
      
           $result=mysql_query("SELECT id,title FROM timetable",$db);
              echo"<select  onchange='window.location.href=this.options[this.selectedIndex].value' id='timetable-select'>";
                   $myrow=mysql_fetch_array($result);
                     do
                       {
	                       printf ("<option value='edit_timetable.php?id=%s'>%s</option>",$myrow["id"],$myrow["title"]);
	
                       }
                     while($myrow=mysql_fetch_array($result));
                    echo "</select>";
           echo"</label>";
}
else
{
$result= mysql_query("SELECT * FROM timetable WHERE id=$id");     
$myrow = mysql_fetch_array($result);

print <<<HERE
      <form name="form1" method="post" action="update_timetable.php">
         <p>
           <label>Введите шрифт курса<br>
             <input value="$myrow[title]" type="text" name="title" id="title">
           </label>
         </p>
         <p>
           <label>Введите расписание<br>
           <textarea name="text" id="text" cols="40" rows="20">$myrow[text]</textarea>
           </label>
         </p>
		 <input name="id" type="hidden" value="$myrow[id]">
         <p>
           <label>
           <input type="submit" name="submit" id="submit" value="Занести изменение" class="button">
           </label>
         </p>
</form>
HERE;
}
?>

</div>
<?php include ("blocks/footer.php");?>  
</div>
</body>
</html>
