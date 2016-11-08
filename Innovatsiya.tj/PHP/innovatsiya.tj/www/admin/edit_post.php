<?php 
include ("lock.php");
include ("blocks/bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Страница редактирование новостей</title>
<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer"> 
  <?php include("blocks/header.php");?>  
  <?php include ("blocks/left.php"); ?>  
<div id="center">  
<p class="Center-title">Страница редактирование новостей</p>   
<?php 
if (!isset($id))

{
$result = mysql_query("SELECT id,description FROM data");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("<p id='edit-post' ><a href='edit_post.php?id=%s' class='edit-post'>%s</a></p>",$myrow["id"],$myrow["description"]);
}

while ($myrow = mysql_fetch_array($result));

}
else
{
$result = mysql_query("SELECT * FROM data WHERE id=$id");     
$myrow = mysql_fetch_array($result);


$result2 = mysql_query("SELECT id,title FROM categories");     
$myrow2 = mysql_fetch_array($result2);

echo "<form name='form1'' method='post'' action='update_post.php'>
<label>Выберите категорию</label>
<p><SELECT name='cat'>";

                     do
                       {
	                       printf ("<option value='%s'>%s</option>",$myrow2["id"],$myrow2["title"]);
	
                       }
                     while($myrow2=mysql_fetch_array($result2));
                  
               
                  
 /*do
    {   
      if($myrow['cat']==$myrow2['id'])
      {
         printf ("<option value='%s' selected>%s</option>",$myrow2["id"],$myrow2["title"]);
      }  
      else{
        printf ("<option value='%s'>%s</option>",$myrow2["id"],$myrow2["title"]);
      }
	     
    }  
while($myrow=mysql_fetch_array($result));*/
echo "</SELECT></p>"; 

print <<<HERE
         <p>
           <label>Введите называние новости<br>
             <input value="$myrow[description]" type="text" name="title" id="title">
             </label>
         </p>
         <p>
           <label>Введите краткое описпние новости (meta_d)<br>
           <input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d">
           </label>
         </p>
         <p>
           <label>Введите ключевые слова новости (meta_d)<br>
           <input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
           </label>
         </p>
         <p>
           <label>Введите дату добавление новости<br>
           <input value="$myrow[date]" name="date" type="text" id="date" value="2007-01-27">
           </label>
         </p>
         <p>
           <label>Введите краткое описание новости<br>
           <textarea name="description" id="description" cols="40" rows="5">$myrow[description]</textarea>
           </label>
         </p>
         <p>
           <label>Введите полный текст новости с тегами<br>
           <textarea name="text" id="text" cols="40" rows="20">$myrow[text]</textarea>
           </label>
         </p>
         <p>
           <label>Введите автор новости<br>
           <input value="$myrow[author]" type="text" name="author" id="author">
           </label>
         </p>
         <p>
           <label>Введите где лежит миниатюра<br>
           <input value="$myrow[mini_img]" type="text" name="img" id="img">
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
