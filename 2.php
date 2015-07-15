<?php
/**
 * Created by PhpStorm.
 * User: YanTotal
 * Date: 15.07.15
 * Time: 6:19
 */
$server = "localhost";
$user = "";
$password = "";
$db = "";

// устанавливаем соединение
if (!mysql_connect($server, $user, $password)) {
    echo "Ошибка подключения к серверу MySQL";
    exit;
}
// выбираем базу данных:
mysql_select_db($db);
// делаем выборку
$q = mysql_query("SELECT * FROM users WHERE birthday != CURDATE() ORDER BY birthday ASC");
// выводим данные
for ($c=0; $c<mysql_num_rows($q); $c++)
{
    $f = mysql_fetch_array($q);
    print_r($f);
    echo '<hr>';
}
?>