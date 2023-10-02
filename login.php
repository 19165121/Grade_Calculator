<?php

// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gradecalculator";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Controllo della connessione
if (!$conn) {
  die("Connection to the database failed: " . mysqli_connect_error());
}

// Recupero le credenziali inserite dall'utente
$student_id = $_POST['student-id'];
$password = $_POST['password'];

// Eseguo la query per verificare le credenziali nel database
$sql = "SELECT * FROM signup WHERE student_id = '$student_id'";
$result = mysqli_query($conn, $sql);

// Controllo se l'utente esiste nel database
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  if (password_verify($password, $row['password'])) {
    // Credenziali corrette, consento l'accesso alla pagina "table.html"

    // Aggiungo il record nella tabella "login"
    $sql = "INSERT INTO login (student_id) VALUES ('$student_id')";
    if (mysqli_query($conn, $sql)) {
      header('Location: table.html');
      exit;
    } else {
      echo "Error while accessing the site";
    }

  } else {
    // Password errata, mostro un avviso di errore
    echo "Credentials are incorrect";
  }
} else {
  // L'utente non esiste nel database, mostro un avviso di errore
  echo "Credentials are incorrect";
}

// Chiudo la connessione al database
mysqli_close($conn);

?>
