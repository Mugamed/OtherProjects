<?php include ("blocks/bd.php");?>
<?php if(isset($_GET['id'])) {$id=$_GET['id'];}
if(!isset($id)) {$id=1;}

$result=mysql_query("SELECT * FROM timetable WHERE id='$id'",$db);
$myrow=mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Факультет инновации и телекоммуникации</title>
		<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer">
  <?php include ("blocks/header.php");?>
  <?php include ("blocks/nav.php");?>
  <?php include ("blocks/left.php");?>
	<div id="center">
		   <p class="Center-title">Инновации и телекоммуникации</p>
                <?php
		           printf("<p class='post-add'>%s</p>",$myrow["text"]);
		        ?>
     </div>	
		<?php include ("blocks/footer.php");?>
</div>
</body>
</html>