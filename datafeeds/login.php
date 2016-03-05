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

if(!empty($result)) {
    $data = array();
    while($row = db_fetch_array($result, MYSQL_ASSOC)){
        $data = array('email' => $row['e_mail'], 'password' => $row['password']);
    }
    if($data['password'] == $_POST['password']) {
        $response['success'] = 'access';
        echo json_encode($response);
    }
    else {
        $response['error'] = 'No access allowed';
        echo json_encode($response);
    }
}
else {
    $response['error'] = "User doesn't exist";
    echo json_encode($response);
}