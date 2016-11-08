<?php $result3=mysql_query("SELECT lider_img,lider_n,news_name,news_photo,news_description FROM leftblog",$db);
if (!$result3)
{
	echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@inno.tj.<br><b>Код ошибки</b></p>";
exit (mysql_error());
}

if (mysql_num_rows($result3)>0)
{
$myrow3=mysql_fetch_array($result3);
}
else
{
	echo "<p>Информация по запросу не может быть извлечена в таблице нет записеёю</p>";
	exit();
}
?>
<div id="left">	
 <?php printf("<div class='lider'><div class='lider-title'>Лидер семестра</div><div class='lider-photo'><img src='%s'></div><div class='lider-name'>%s</div></div>",$myrow3["lider_img"],$myrow3["lider_n"])?>            
	
		   
 <?php printf("<div class='News'><div class='News-title'>Новость Hi-Tech<sup class='sup'>NEW</sup></div><div class='News-name'>%s</div><div class='News-photo'><img src='%s' </div><div class='News-description'>%s</div></div>",$myrow3["news_name"],$myrow3["news_photo"],$myrow3["news_description"])?>	

</div>
</div>