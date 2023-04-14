<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Patients</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <a href="new_patient.html">Create Patient</a>
    <a href="patients.php">List Patient</a>
  </nav>
  <?php
  require "db_conn.php";
  $stmt = $conn->prepare("SELECT * FROM PATIENT");
  $stmt->execute();
  $stmt->store_result();
  if ($stmt->num_rows === 0)
    exit('No rows');
  $stmt->bind_result($idRow, $nameRow, $emailRow);
  while ($stmt->fetch()) {
    $ids[] = $idRow;
    $names[] = $nameRow;
    $emails[] = $emailRow;
  }
  ?>

  <?php for ($x = 0; $x < sizeof($ids); $x++) { ?>
    <div>
      <h3>Patient Name:
        <?php echo $names[$x]; ?>
      </h3>
      <p>
        Email:
        <?php echo $emails[$x]; ?>
      </p>
      <form action="delete_patient.php" method="POST">
        <input type="text" name="patient_id" id="patient_id" value="<?php echo $ids[$x] ?>">

        <button type="submit">
          Delete
        </button>
      </form>
    </div>
  <?php }
  ; ?>

</body>

</html>