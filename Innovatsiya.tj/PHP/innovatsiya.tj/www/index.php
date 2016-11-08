<?php include ("blocks/bd.php");
if(isset($_GET['cat'])) {$cat=$_GET['cat'];}
if(!isset($cat)) {$cat=1;}

$result=mysql_query("SELECT * fROM categories WHERE id='$cat'",$db);
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
	echo "<p>Информация по запросу не может быть извлечена в таблице нет записей</p>";
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Сайт Факультета Инновации и телекоммуникации|innovatsiya.tj</title>
		<link rel="stylesheet" type="text/css" href="style/main.css"/>
		<meta name="description" content="<?php echo $myrow ["meta_d"];?>">
		<meta name="keywords" content="<?php echo $myrow ["meta_k"];?>">
</head>
<body>
	<div class="continer">
		<?php include ("blocks/header.php");?>
		
		<?php include ("blocks/nav.php");?>
		
		<?php include ("blocks/left.php");?>
		
		<div id="center">
			
		<p class="Center-title">Инновации и телекоммуникации</p>	
		<?php
		$result=mysql_query("SELECT id,text,description,date,view,mini_img FROM data WHERE cat='$cat' ORDER BY date DESC,id DESC",$db);
        if (!$result)
        {
	      echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@inno.tj.<br><b>Код ошибки</b></p>";
          exit (mysql_error());
        }

        if (mysql_num_rows($result)>0)
        {
          $myrow=mysql_fetch_array($result);
		     do
               {
	             printf ("
			         <table class='table-center'>
				         <th colspan='3' class='table-photo'>
						 <img src='%s'>
						 </th>
				         <tr>
				           <td class='views'>Просмотров:%s</td>	
					       <td colspan='2' align='right' class='views'>%s</td>		
				         </tr>
				         <tr>
				            <td colspan='2' width='22' height='40'><a href='view_post.php?id=%s'>%s</a></td>
				         </tr>
			          </table>",$myrow["mini_img"],$myrow["view"],$myrow["date"],$myrow["id"],$myrow["description"]);
	
               }
while($myrow=mysql_fetch_array($result));
		   
		  	
		  
		  
        }
        else
        {
	      echo "<p>Информация по запросу не может быть извлечена в таблице нет записей</p>";
	      exit();
        }
?>		
			
	    </div>
	  
		<?php include ("blocks/footer.php");?>
		
	</div>
</div>
</body>
</html>