<?php
$conn = new mysqli('localhost', 'root', 'root', 'gdlwebcamp');

if($conn->connect_error) {
  echo $error -> $conn->connect_error;
}

// else {
//   echo "coneccion exitosa";
// }
//
// echo "<pre>";
//   echo var_dump($conn->ping());
// echo "</pre>";

?>
