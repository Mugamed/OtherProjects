<footer>
			<div>
				<p class="developer">Дизайн и Разработка<br><span class="developer-name">Эргашев Мухаммадали.</span></p>
			</div>
			<div>
				<p class="footer-info">© 2016 innovatsiya.tj. Все права защищены. </p>
			</div>
			<div id="status">
				<p id="status-title">Статистика</p>
<p style="font-size:13pt;">				
<br><?php $youip=$_SERVER ["REMOTE_ADDR"]; echo("Ваш(а) IP-адрес:&nbsp&nbsp$youip")?>
			        <br><?php $date_today=date("d.m.Y");$time=date("H:i:s");echo ("Текущее время: &nbsp&nbsp$time<br>Текущее дата:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$date_today.");?>
</p>
			</div>
			<form action="view_search.php" method="post" name="form_s" class="form-s">
        	                <div class="form-title">Поиск</div>
	                        <p class="form-desc">Поисковой запрос должен быть не менее 4-х символов.</p>
	                      <p>
                                 <input name="search" type="text"  maxlength="40" placeholder="Введите запрос для поиска" id="input-search"><br><input name="submit_s" type="submit" value="Искать" class="form-but">
        	              </p> 
                        </form>
		</footer>