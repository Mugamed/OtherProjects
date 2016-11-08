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
<p class="Center-title">Страница редактирование левого блока</p>   
<?php 
$result = mysql_query("SELECT * FROM leftblog");     
$myrow = mysql_fetch_array($result);
print <<<HERE
      <form name="form1" method="post" action="update_lider.php">
         <p>
           <label>Введите где лежит миниатюра<br>
             <input value="$myrow[lider_img]" type="text" name="lider_img" id="lider_img">
           </label>
         </p>
         <p>
           <label>Введите имя лидера<br>
           <input value="$myrow[lider_n]" type="text" name="lider_n" id="lider_n">
           </label>
         </p>
         <p>
           <label>Введите называние новости<br>
           <input value="$myrow[news_name]" type="text" name="news_name" id="news_name">
           </label>
         </p>
         <p>
           <label>Введите где лежит миниатюра<br>
           <input value="$myrow[news_photo]" type="text" name="news_photo" id="news_photo">
           </label>
         </p>
         <p>
           <label>Введите текст новости<br>
           <textarea name="news_description" id="news_description" cols="40" rows="9">$myrow[news_description]</textarea>
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
?>
</div>
<?php include ("blocks/footer.php");?>  
</div>
</body>
</html>
