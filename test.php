
<?php
$users =["alice", "bob"];
array_unshift($users, "tom");
print_r($users); // ["tom", "alice", "bob"]

echo "<br>";
array_shift($users);
print_r($users); // ["alice", "bob"]

