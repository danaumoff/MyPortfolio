<?php

function connectDB()
{
    // установка часового пояса
    date_default_timezone_set('Europe/Moscow');

    // настройки БД
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'portfolio';

    // подключение к БД и установка кодировки UTF-8
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");
    mysqli_query($link, "SET CHARACTER SET 'utf8'");
    mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci'");
    return $link;
}

function getProjects(){
    $query_select = "SELECT id, title, date FROM projects";
    $query_sql = mysqli_query(connectDB(), $query_select);
    for ($data = []; $row = mysqli_fetch_assoc($query_sql); $data[] = $row) ;
    return $data;
}

function getProject($id){
    $query_select = "SELECT * FROM projects WHERE id = " . mysqli_real_escape_string(connectDB(), $id);
    $query_sql = mysqli_query(connectDB(), $query_select);
    for ($data = []; $row = mysqli_fetch_assoc($query_sql); $data[] = $row) ;
    return $data[0];
}