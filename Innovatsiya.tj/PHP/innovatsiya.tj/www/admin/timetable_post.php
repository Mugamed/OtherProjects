<?php include ("lock.php");  ?>
<?php include ("blocks/bd.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Страница добавление расписаний</title>
<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
<div class="continer"> 
  <?php include("blocks/header.php");?>  
  <?php include ("blocks/left.php"); ?>  
<div id="center">
      <p class="Center-title">Страница добавление расписаний</p>
       <form name="form1" method="post" action="timetable_add.php">
         <p>
           <label>Введите шрифт курса (например: 3к 1-40.01.02-02р)<br>
             <input type="text" name="title" id="title">
             </label>
         </p>
         <p>
           <label>Введите расписание<br>
           <textarea name="text" id="text" cols="40" rows="20"></textarea>
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
