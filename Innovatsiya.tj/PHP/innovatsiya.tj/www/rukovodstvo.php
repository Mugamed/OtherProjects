<?php include ("blocks/bd.php");?>
<?php
$result=mysql_query("SELECT title,img FROM rukovodstvo",$db);
        if (!$result)
        {
	      echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@inno.tj.<br><b>Код ошибки</b></p>";
          exit (mysql_error());
        }

        if (mysql_num_rows($result)>0)
        {
          $myrow=mysql_fetch_array($result);
		   
        }
        else
        {
	      echo "<p>Информация по запросу не может быть извлечена в таблице нет записеёю</p>";
	      exit();
        }
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
		

		<table class="table-rukov">
			<tr>
				<td><img src="<?php echo $myrow["img"];?>"></td>
				<td>Декан факультета</td>
			</tr>
			<tr>
				<td><img src="<?php echo $myrow["img"];?>"></td>
				<td>Декан факультета</td>
			</tr>
			<tr>
				<td><img src="<?php echo $myrow["img"];?>"></td>
				<td>Декан факультета</td>
			</tr>
			<tr>
				<td><img src="<?php echo $myrow["img"];?>"></td>
				<td>Декан факультета</td>
			</tr>
		</table>
		
		
	</div>	
		<?php include ("blocks/footer.php");?>
	</div>
</body>
</html>