<?php
require '../../connectdb.php';

$query_text = $_REQUEST['query'];
$result = mysql_query($query_text);

if(!$result) {
    die("<p>Ошибка при выполнении SQL-запроса"
        . $query_text . ": " .mysql_error() . "</p>");
}

$return_rows = false;
$upperquery_text = trim(strtoupper($query_text));
$location = strpos($upperquery_text, "CREATE");
if ($location === false ||$location > 0) {
    $location = strpos($upperquery_text, "INSERT");
    if ($location === false ||$location > 0) {
        $location = strpos($upperquery_text, "UPDATE");
        if ($location === false ||$location > 0) {
            $location = strpos($upperquery_text, "DELETE");
            if ($location === false ||$location > 0) {
                $location = strpos($upperquery_text, "DROP");
                if ($location === false ||$location > 0) {
                    // Если выполнение кода добралось до этого места,
                             // значит этот запрос не CREATE, INSERT, UPDATE, DELETE
                               // или DROP. Он должен вернуть строки.
                   $return_rows = true;
                }
            }
        }
    }
}

if ($return_rows) {
    // имеются строки для показа в качестве результата запроса
    echo "<p>Результаты вашего запроса:</p>";
    echo "<ul>";
    while ($row = mysql_fetch_row($result)) {
        echo "<li>{$row[0]}</li>";
    }
  echo "</ul>";


} else {
    // Строки отсутствуют. Вывод простого отчета о том,
    //    // работал запрос или нет.

        echo "<p>Следующий запрос был обработан успешно:</p>";
        echo "<p>{$query_text}</p>";

}



