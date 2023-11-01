<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Odczytaj dane z pliku "logzx.txt"
  $login_data = file_get_contents("logzx.txt");

  // Sprawdź, czy podane dane są obecne w pliku
  if (strpos($login_data, "E-mail: $email, Hasło: $password") !== false) {
    echo "Zalogowano pomyślnie.";
  } else {
    echo "Niepoprawny login!";
  }
}
?>
