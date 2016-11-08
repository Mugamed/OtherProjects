<?php include ("blocks/bd.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Факультет инновации и телекомуникации</title>
		<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer">
    <?php include ("blocks/header.php");?>
	    <?php include ("blocks/nav.php");?>
      		<?php include ("blocks/left.php");?>
		<div id="center">
		<p class="Center-title">Инновации и телекоммуникации</p>
         <p>
           <label id="timetable-label">Выберите специальность<br>
           <?php
           $result=mysql_query("SELECT * FROM timetable",$db);
              echo"<select  onchange='window.location.href=this.options[this.selectedIndex].value' id='timetable-select'>";
                   $myrow=mysql_fetch_array($result);
                     do
                       {
	                       printf ("<option value='timetable_view.php?id=%s'>%s</option>",$myrow["id"],$myrow["title"]);
	
                       }
                     while($myrow=mysql_fetch_array($result));
                    echo "</select>";
            ?>           
           </label>
         </p>
	</div>
  <?php include ("blocks/footer.php");?>
</div>
</body>
</html>