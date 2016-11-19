<?php
require '../../config.php';
mysql_connect(HOST,USER,PASWWORD)
or die("<p>ошибка подключения к бд: ".mysql_error()."</p>");
echo "<p>Все ок, подключились к бд</p>";

mysql_select_db(DATABASE)
or die("<p>Ошибка при выборе БД ".DATABASE."</p>".mysql_error()."</p>");
echo "<p>Выбрана бд--> ". DATABASE."</p>";