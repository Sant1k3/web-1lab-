<?php

$link= mysqli_connect("localhost","root","root");
if($link){
    echo "Соеденение с сервером установлено", "<br>";
}
else{
    echo "Нет соеденения с сервером","<br>";
}

$db = "MySiteDB";
$query = "CREATE DATABASE $db";
$create_db = mysqli_query($link, $query);
if($create_db){
    echo "База данных $db успешно создана";
}
else{
    echo "База данных не создана";
}
?>