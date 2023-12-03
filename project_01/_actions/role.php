<?php

include("../autoload_helper.php");

use _classes\Libs\Database\MySQL;
use _classes\Libs\Database\UsersTable;
use _classes\Helpers\HTTP;
use _classes\Helpers\Auth;

$auth = Auth::check();

$table = new UsersTable(new MySQL());

$id = $_GET['id'];
$role = $_GET['role'];

$table->changeRole($id, $role);

HTTP::redirect("/admin.php");
