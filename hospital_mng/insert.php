<?php
require_once 'db_conn.php';

function create_patient(string $name, string $email_id)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO PATIENT VALUES (?, ?, ?)");
    $uni_id = uniqid();
    $stmt->bind_param("sss", $uni_id, $name, $email_id);
    $stmt->execute();
    $stmt->close();
}


function delete_patient(string $patient_id)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM PATIENT WHERE Id=?");
    $stmt->bind_param("s", $patient_id);
    $stmt->execute();
    $stmt->close();
}

function create_appointment(string $patient_id, string $description)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO PATIENT_APPOINTMENT VALUES (?, ?, ?)");
    $uni_id = uniqid();
    $stmt->bind_param("sss", $uni_id, $patient_id, $description);
    $stmt->execute();
    $stmt->close();
}

function get_patients()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM PATIENT");
    $stmt->execute();
    $stmt->close();
}

?>