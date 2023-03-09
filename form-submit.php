<?php
  $servername = "localhost";
  $username = "database_username";
  $password = "database_password";
  $dbname = "database_name";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $contactNumber = $_POST["contactNumber"];
  $order = $_POST["order"];

  $sql = "INSERT INTO orders (name, surname, contact_number, order_details)
          VALUES ('$name', '$surname', '$contactNumber', '$order')";

  if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
