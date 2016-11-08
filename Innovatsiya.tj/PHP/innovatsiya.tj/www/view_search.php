<?php include ("blocks/bd.php");
if (isset($_POST['submit_s']))
{
	$submit_s=$_POST['submit_s'];
}


if (isset($_POST['search']))
{
	$search=$_POST['search'];
}


if (isset($submit_s))
{
	if(empty($search) or strlen($search)<4 )
	{
		exit("<p align='center'>Поисковый запрос не введен, либо он менее 4-х символов</p>");
	}
	
	$search=trim($search); /*чтобы убрать лишные пробелы*/
	$search=stripcslashes($search); /*чтобы убрать лишные слешы*/
	$search=htmlspecialchars($search);/*чтобы защитится от взлома*/
}
else
{
	exit("<p align='center'>Вы обратились к файлу без необходимых параметров</p>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<title><?php echo "Заметки по запросу - $search";?></title>
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
		$result=mysql_query("SELECT id,text,description,date,view,mini_img FROM data WHERE MATCH(text) AGAINST('$search') ",$db);
        if (!$result)
        {
	      echo "<p align='center'>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@inno.tj.<br><b>Код ошибки</b></p>";
          exit (mysql_error());
        }

        if (mysql_num_rows($result)>0)
        {
          $myrow=mysql_fetch_array($result);
		     do
               {
	             printf ("<div class='Center-table'>
			         <table class='table-center'>
				         <th colspan='3' class='table-photo'>
						 <img src='%s'>
						 </th>
				         <tr>
				           <td class='views'>Просмотров:%s</td>	
					       <td colspan='2' align='right' class='views'>%s</td>		
				         </tr>
				         <tr>
				            <td colspan='2' width='22'><a href='view_post.php?id=%s'>%s</a></td>
				         </tr>
			          </table></div>",$myrow["mini_img"],$myrow["view"],$myrow["date"],$myrow["id"],$myrow["description"]);
	
               }
while($myrow=mysql_fetch_array($result));
		   
		  	
		  
		  
        }
        else
        {
	      echo "<p align='center'>Информация по вашему запросу на сайте не найдено</p>";
	      exit();
        }
?>		
			
	    </div>
	  
		<?php include ("blocks/footer.php");?>
		
	</div>
</body>
</html>