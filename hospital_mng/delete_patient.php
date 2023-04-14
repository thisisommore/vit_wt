<?php

require "insert.php";
$patient_id = $_POST["patient_id"];
delete_patient($patient_id);
?>