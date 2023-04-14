<?php

require "insert.php";

$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
create_patient($user_name, $user_email);

?>