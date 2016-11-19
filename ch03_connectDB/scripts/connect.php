<?php
require '../../config.php';
mysql_connect(HOST,USER,PASWWORD)
    or die("<p>ошибка подключения к бд: ".mysql_error()."</p>");
echo "<p>Все ок, подключились к бд</p>";

mysql_select_db(DATABASE)
    or die("<p>Ошибка при выборе БД $db</p>".mysql_error()."</p>");
echo "<p>Выбрана бд--> $db</p>";

$result= mysql_query("SHOW TABLES");
if(!$result){
    die("<p>Ошибка при выводе перечня таблиц".mysql_error()."</p>");

}
echo "<p>Ваш результат запроса</p>";
    echo "<ul>";
while ($row = mysql_fetch_row($result)){
    echo "<li>Таблица : {$row[0]}</li>";
    echo '</ul>';
}
