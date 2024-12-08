<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agendas";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//Aqui comienza la función de guardar


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
$sql = "INSERT INTO reservas (name, email, subject,message)
VALUES ('$name', '$email', '$subject','$message')";

if ($conn->query($sql) === TRUE) {
  echo"
  <div class='alert alert-success'>
  <strong>Success!</strong>Reserva guardada exitosamente.
</div>
  ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>