<?php

// include("../vendor/autoload.php");

// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;
// use Helpers\HTTP;

include("../autoload_helper.php");

use classes\Libs\Database\MySQL;
use classes\Libs\Database\UsersTable;
use classes\Helpers\HTTP;

$data = [
    "name" => $_POST['name'] ?? 'Unknow',
    "email" => $_POST['email'] ?? 'Unknow',
    "phone" => $_POST['phone'] ?? 'Unknow',
    "address" => $_POST['address'] ?? 'Unknow',
    "password" => md5($_POST['password']),
    "role_id" => 1
];

$table = new UsersTable(new MySQL);

if ($table) {
    $table->insert($data);
    HTTP::redirect("/index.php", "registered=true");
} else {
    HTTP::redirect("/register.php", "error=true");
}



