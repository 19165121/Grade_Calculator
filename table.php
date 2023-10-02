<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gradecalculator";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Prendi i dati dal form HTML
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['h'];
$i = $_POST['i'];
$l = $_POST['l'];
$m = $_POST['m'];
$n = $_POST['n'];
$o = $_POST['o'];
$p = $_POST['p'];
$q = $_POST['q'];
$r = $_POST['r'];

// Salva i dati nel database
$sql = "INSERT INTO table (COMP7001_credits, COMP7001_marks, COMP7002_credits, COMP7002_marks, TECH7005_credits, TECH7005_marks, DALT7002_credits, DALT7002_marks, DALT7011_credits, DALT7011_marks, SOFT7003_credits, SOFT7003_marks, TECH7004_credits, TECH7004_marks, TECH7009_credits, TECH7009_marks) 
VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$l', '$m', '$n', '$o', '$p', '$q', '$r')";

if (mysqli_query($conn, $sql)) {
  echo "Dati inseriti correttamente nel database";
} else {
  echo "Errore nell'inserimento dei dati: " . mysqli_error($conn);
}

// Chiudi la connessione al database
mysqli_close($conn);
?>