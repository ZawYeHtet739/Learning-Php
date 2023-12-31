<?php

// include("../vendor/autoload.php");

// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;
// use Helpers\HTTP;

include("../autoload_helper.php");

use _classes\Libs\Database\MySQL;
use _classes\Libs\Database\UsersTable;
use _classes\Helpers\HTTP;

session_start();

$email = $_POST["email"];
$password = md5($_POST["password"]);

$table = new UsersTable(new MySQL);

$user = $table->findByEmailAndPassword($email, $password);

if ($user) {
    if ($table->suspended($user->id)) {
        HTTP::redirect("/index.php", "suspended=1");
    }

    $_SESSION['user'] = $user;
    HTTP::redirect("/profile.php");

} else {
    HTTP::redirect("/index.php", "incorrect=1");
}