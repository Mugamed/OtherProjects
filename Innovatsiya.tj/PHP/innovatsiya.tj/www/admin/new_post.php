<?php include ("lock.php");  ?>
<?php include ("blocks/bd.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Страница добавление новостей</title>
<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer"> 
  <?php include("blocks/header.php");?>  
  <?php include ("blocks/left.php"); ?>  
<div id="center">
      <p class="Center-title">Страница добавление новостей</p>
       <form name="form1" method="post" action="add_post.php">
         <p>
           <label>Введите называние новости<br>
             <input type="text" name="title" id="title">
             </label>
         </p>
         <p>
           <label>Введите краткое описпние новости (meta_d)<br>
           <input type="text" name="meta_d" id="meta_d">
           </label>
         </p>
         <p>
           <label>Введите ключевые слова для новости (meta_k)<br>
           <input type="text" name="meta_k" id="meta_k">
           </label>
         </p>
         <p>
           <label>Введите дату добавление новости<br>
           <input name="date" type="text" id="date" value="<?php $date = date("Y-m-d"); echo $date;?>">
           </label>
         </p>
         <p>
           <label>Введите краткое описание урока<br>
           <textarea name="description" id="description" cols="40" rows="5"></textarea>
           </label>
         </p>
         <p>
           <label>Введите полный текст урока с тегами<br>
           <textarea name="text" id="text" cols="40" rows="20"></textarea>
           </label>
         </p>
         <p>
           <label>Введите автор новости<br>
           <input type="text" name="author" id="author">
           </label>
         </p>
          <p>
           <label>Введите где лежит миниатура <br>
           <input type="text" name="img" id="author">
           </label>
         </p>
          <p>
           <label>Выберите категории<br>
           <select name="cat">
           <?php
           $result=mysql_query("SELECT id,title FROM categories",$db);
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
	                       printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["title"]);
	
                       }
                     while($myrow=mysql_fetch_array($result));
                  
               
               }
               else
               {
               	echo "<p>Информация по запросу не может быть извлечена в таблице нет записеёю</p>";
               exit();
               }               
           ?>           
           </select>  
          
           </label>
         </p>
          <p>
           <label>
           <input type="submit" name="submit" id="submit" value="Занести новости в базу" class="button">
           </label>
         </p>
       </form>
 </div>
<?php include ("blocks/footer.php"); ?>  
</div>
</body>
</html>
