<?php
/**
 * Created by PhpStorm.
 * User: liuyang
 * Date: 2016/10/22
 * Time: 18:16
 */

require substr(dirname(__FILE__), 0, -10) . 'common\connection.db.php';
require substr(dirname(__FILE__), 0, -10) . 'common\Constant.php';

$result = array();

$result['username'] = $_POST["username"];
$result['password'] = md5($_POST["password"]);

$result['status'] = is_username_exist($result['username']);
if ($result['status'] != Constant::$_CORRECT) {
    echo json_encode($result);
    exit;
}

$result['status'] = check_username_password($result);
if ($result['status'] != Constant::$_CORRECT) {
    echo json_encode($result);
    exit;
}

echo json_encode($result);
exit;


//----------------------------------------------------------
//----------------------------------------------------------


function is_username_exist($username)
{
    if (isExist($username))
        return Constant::$_CORRECT;
    else
        return Constant::$_USERNAME_NOT_FOUND_ERROR;
}

function check_username_password($result)
{
    if (attemptLogin($result['username'], $result['password'])) {
        return Constant::$_CORRECT;
    } else {
        return Constant::$_PASSWORD_INCORRECT_ERROR;
    }
}