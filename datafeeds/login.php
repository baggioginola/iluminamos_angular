<?php
/**
 * Created by PhpStorm.
 * User: mario.cuevas
 * Date: 2/22/2016
 * Time: 11:52 AM
 */

require_once '../includes/header.inc.php';

$_POST = json_decode(file_get_contents('php://input'), true);

if(empty($_POST)) {
    echo json_encode("Empty params");
    die();
}

$where = "AND e_mail = '".$_POST['email']."' ";
$sql = "SELECT e_mail,password FROM usuarios WHERE 1 = 1 ".$where." AND nivel = 0;";

$result = db_query($sql);

if(db_num_result($result->num_rows)) {
    $data = array();

    while ($row = db_fetch_array($result)) {
        $data = array('email' => $row['e_mail'], 'password' => $row['password']);
    }

    if ($data['password'] == $_POST['password']) {
        $response['success'] = true;
        $response['msg'] = 'Access';
    } else {
        $response['success'] = false;
        $response['msg'] = "You don't have access to this page";
    }
}
else {
    $response['success'] = false;
    $response['msg'] = "User doesn't exist";
}
echo json_encode($response);