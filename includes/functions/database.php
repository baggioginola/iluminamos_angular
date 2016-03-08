<?php
/**
 * Created by PhpStorm.
 * User: mario.cuevas
 * Date: 3/4/2016
 * Time: 9:12 AM
 */

function db_connect($server = DB_SERVER,$username = DB_USER, $password = DB_PASSWORD, $database = DATABASE)
{
    global $db_link;

    if(empty($db_link)){
        $db_link = new mysqli($server, $username, $password, $database);

        if(!$db_link) {
            echo json_encode("No se pudo conectar");
        }
        else {
            db_query('USE ' . $database);
        }
    }
    return $db_link;
}

function db_query($db_query)
{
    global $db_link;

    if(empty($db_link)) {
       return null;
    }
    else {
        $result = mysqli_query($db_link,$db_query);
        if(!$result) {
            $db_link->close();
            $db_link = 0;
        }
    }
    return $result;
}

function db_fetch_array($result)
{
    $result = mysqli_fetch_array($result, MYSQLI_BOTH);
    return $result;
}

function db_fetch_row($result)
{
    $result = mysqli_fetch_row($result);
    return $result;
}

function db_fetch_assoc($result)
{
    $result = mysqli_fetch_assoc($result);
    return $result;
}

function db_num_result($num_rows) {
    if($num_rows > 0)
        return true;
    else
        return false;
}