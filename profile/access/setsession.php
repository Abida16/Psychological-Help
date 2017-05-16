<?php
session_start();

    $_SESSION["state"] = "ok";
    $_SESSION["fname"] = $_GET['fname'];
    $_SESSION["lname"] = $_GET['lname'];
    $_SESSION["email"] = $_GET['email'];
    $_SESSION["admin"] = $_GET['admin'];

/*$success="Succesfully logged in";
$arr = array('flag' => 1, 'fname' =>$_GET['fname'], 'lname' => $_GET['lname'], 'admin' => $_GET['admin'],'msg' =>$success);
$json = json_encode($arr);

echo $json;*/
echo "success";

?>
