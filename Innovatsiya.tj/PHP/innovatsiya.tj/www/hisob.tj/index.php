<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Сомонаи ҳисоб!</title>
</head>
<body style="font-family:sans-serif;">
<div style="max-width:1333px;min-width:1333px;height:auto;">
	
<div style="width:1333px;height:200px; background-image: url(../hisob.tj/img/header.jpg);background-size:1333px 200px;background-repeat: no-repeat;"></div>	

<div style="width:250px;max-width:250px;height:800px;background-color:#eee;float:left;margin-top:10px;">
	<div style="width:250px;max-width:250px;height:400px">
		<div style="width:250px;max-width:250px;height:30px;background-color:#007ACC; text-align:center;padding-top:10px; color:#fff; font-size:14pt;">Навид</div>
	</div>
	<div style="width:250px;max-width:250px;height:250px">
		<div style="width:250px;max-width:250px;height:30px;background-color:#FF4900; text-align:center;padding-top:10px; color:#fff; font-size:14pt;">Маводҳои нав</div>
	</div>
</div>

<div style="width:813px;min-width:813px;height:800px;background-color:#eee;float:left; margin-left:10px;margin-top:10px;">
<p>
<form action="index.php" method="post" style="border:1px solid #eee; width:340px;height:260px; margin-top:10px;">
<select name="select" style="width:750px;padding:10px; margin-top:10px; margin-left:30px;font-size:14pt;color:#666;" type="text">
<option value="0">Интихоб кунед</option>
<option value="1">Ваҷаб</option>
<option value="2">Ду пешлик</option>
<option value="3">Ду паслик</option>
<option value="4">Визед(визид, вудад)</option>
<option value="5">Чорангишт (карап цавор ангихт)</option>
<option value="6">Чорангишти фарох (фарох цавор ангихт)</option>
<option value="7">Қадам (вийов)</option>
<option value="8">Газ (араш)</option>
<option value="9">Гилим-газ</option>
<option value="10">Цулди газак (ним-чуб-газ)</option>
<option value="11">Сулади газак (чуб газ)</option>
<option value="12">Култаде газак</option>
<option value="13">Қулоч(қилоч)</option>
<option value="14">Қулочи Бухоро</option>
<option value="15">Қулочи Дарвоз</option>
<option value="16">Чилик (лик)</option>
<option value="17">Ду лик</option>
<option value="18">Се лик </option>
<option value="19">Чор лик</option>
<option value="20">Мушт </option>
<option value="21">Овозрас Қаротегину Дарвоз</option>
<option value="22">Чақрим(азон, чени овоз)</option>
<option value="23">Олчин(аршин)</option>
<option value="24">Пай </option>
<option value="25">Фарсанг Юнони Қадим</option>
<option value="26">Фарсанг</option>
<option value="27">Буджин(линга)</option>
<option value="28">Қопи Кӯлоб (линга)</option>
<option value="29">Қопи Балҷувон (линга)</option>
<option value="30">Вилог (улог)</option>
<option value="31">Газ</option>
<option value="32">Саврай </option>
<option value="33">Ғидора</option>
<option value="34">Қап</option>
<option value="35">Кафч (кофч)</option>
<option value="36">Ман </option>
<option value="37">Мисқол</option>
<option value="38">Мисколи Бухоро</option>
<option value="39">Мут</option>
<option value="40">Пимона(паймона)</option>
<option value="41">Пимона Язғулом</option>
<option value="42">Пор</option>
<option value="43">Пуд </option>
<option value="44">Санг </option>
<option value="45">Сир(сер)</option>
<option value="46">Соғу </option>
<option value="47">Табақ</option>
<option value="48">Табақча </option>
<option value="49">Тоқӣ</option>
<option value="50">Тафсин </option>
<option value="51">Чоряк </option>
<option value="52">Буджин(линга)</option>
<option value="53">Қопи Кӯлоб (линга)</option>
<option value="54">Қопи Балҷувон (линга)</option>
<option value="55">Вилог (улог)</option>
<option value="56">Дарза</option>
<option value="57">Ман</option>
<option value="58">Таноб</option>
<option value="59">Як рӯза дарав</option>
<option value="60">Як рӯза ҷуфт</option>
</select>
<input style="width:725px;min-width:725px;padding:10px; margin-top:20px; margin-left:30px;font-size:14pt;color:#666;" type="text" name="a" 
placeholder="Ҷо барои дохилкуни"/>

<?php
$select=htmlspecialchars($_POST['select']);
$a=$_POST['a'];
$b=$_POST['b'];
switch($select){
	case 1: $ab=$a*21.5."см";
	break;
        case 2: $ab=$a*18.5."см";
	break;
	case 3: $ab=$a*16.5."см";
	break;
	case 4: $ab=$a*21.5."см";
	break;
	case 5: $ab=$a*8.5."см";
	break;
	case 6: $ab=$a*15.5."см";
	break;
	case 7: $ab=$a*77.5."см";
	break;
	case 8: $ab=$a*49.8."см";
	break;
	case 9: $ab=$a*272.5."см";
	break;
	case 10: $ab=$a*55.5."см";
	break;
	case 11: $ab=$a*83+"см";
	break;
	case 12: $ab=$a*1+"м";
	break;
	case 13: $ab=$a*177.5."см";
	break;
	case 14: $ab=$a*142+"см";
	break;
	case 15: $ab=$a*170;
	break;
	case 16: $ab=$a*2.5."см";
	break;
	case 17: $ab=$a*9.5."см";
	break;
	case 18: $ab=$a*11.5."см";
	break;
	case 19: $ab=$a*13.5."см";
	break;
	case 20: $ab=$a*13.5;
	break;
	case 21: $ab=$a*7+"км";
	break;
	case 22: $ab=$a*1.25."км";
	break;
	case 23: $ab=$a*47.5."см";
	break;
	case 24: $ab=$a*25.5."см";
	break;
	case 25: $ab=$a*5549+"м";
	break;
	case 26: $ab=$a*6.5."кг";
	break;
	case 27: $ab=$a*24.57."кг";
	break;
	case 28: $ab=$a*131+"кг";
	break;
	case 29: $ab=$a*104.832."кг";
	break;
	case 30: $ab=$a*96+"кг";
	break;
	case 31: $ab=$a*317.5."см<sup>3</sup>";
	break;
	case 32: $ab=$a*1787.5."см<sup>3</sup>";
	break;
	case 33: $ab=$a*0.75."кг";
	break;
	case 34: $ab=$a*250+"см";
	break;
	case 35: $ab=$a*24+"см";
	break;
	case 36: $ab=$a*62+"см";
	break;
	case 37: $ab=$a*4.235;
	break;
	case 38: $ab=$a*4.9."г";
	break;
	case 39: $ab=$a*0.5."кг";
	break;
	case 40: $ab=$a*24+"кг";
	break;
	case 41: $ab=$a*50+"кг";
	break;
	case 42: $ab=$a*14+"кг гандум";
	break;
	case 43: $ab=$a*16+"кг";
	break;
	case 44: $ab=$a*125+"кг";
	break;
	case 45: $ab=$a*12+"кг";
	break;
	case 46: $ab=$a*8+"кг";
	break;
	case 47: $ab=$a*4.9."кг";
	break;
	case 48: $ab=$a*0.75."кг";
	break;
	case 49: $ab=$a*2.5."кг";
	break;
	case 50: $ab=$a*2+"кг";
	break;
	case 51: $ab=$a*5+"кг";
	break;
	case 52: $ab=$a*24.57."кг";
	break;
	case 53: $ab=$a*131+"кг";
	break;
	case 54: $ab=$a*104.832."кг";
	break;
	case 55: $ab=$a*96+"кг";
	break;
	case 56: $ab=$a*0.05."га";
	break;
	case 57: $ab=$a*0.75."га";
	break;
	case 58: $ab=$a*2700+"м<sup>2</sup>";
	break;
	case 59: $ab=$a*0.25."га";
	break;
	case 60: $ab=$a*0.25."га";
	break;

} ?>
<p style="max-width:729px;min-width:729px;height:25px;padding:10px; margin-top:20px; margin-left:30px; font-size:14pt; color:#666; border:1px solid #AAAAAA;background-color:#fff;"  name="b" >
<?php echo $ab; ?></p>
<input type="submit" value='Ҳисоб кун' name="add" style="width:750px;background-color:#007ACC; border:0px;;padding:10px;color:#fff;font-size:14pt;font-family:sans-serif; margin-top:20px; margin-left:30px;"/>
</form>
</p>

</div>

<div style="width:250px;min-width:250px;height:800px;background-color:#eee;float:left; margin-left:10px;margin-top:10px;margin-bottom:10px;">
	
	<div style="width:250px;max-width:250px;height:400px">
		<div style="width:250px;max-width:250px;height:30px;background-color:#68217A; text-align:center;padding-top:10px; color:#fff; font-size:14pt;">Эълон аз Google</div>
	</div>
	<div style="width:250px;max-width:250px;height:250px">
		<div style="width:250px;max-width:250px;height:30px;background-color:#208E24; text-align:center;padding-top:10px; color:#fff; font-size:14pt;">Сомонаҳои дигари мо</div>
	</div>
	
</div>


</div>
</body>
<footer style="width:1333px;height:200px; background-color:#007ACC; clear:both;">
	
	<div style="color:#fff; position:relative; top:20px; left:20px; font-size:14pt; width:600px;">
		<p>Сохтан ва ороиш<br>Эргашев М.М</p>
		<p style="position:relative; top:80px;font-size:13pt;">HISOB.TJ | © 2016 Ҳаммаи ҳуқуқҳо муаллифи маҳфузанд.</p>
	</div>
</footer>
<html>