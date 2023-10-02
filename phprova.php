<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gradecalculator";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
}

// Recupero l'ultimo student_id dalla tabella login
$sql_login = "SELECT student_id FROM login ORDER BY id DESC LIMIT 1";
$result_login = $conn->query($sql_login);

if ($result_login->num_rows > 0) {
  $row_login = $result_login->fetch_assoc();
  $student_id = $row_login["student_id"];
} else {
  $student_id = 'NA';
}

// Recupero i valori delle variabili POST
$a = empty($_POST['a']) ? 'NA' : $_POST['a'];
$b = empty($_POST['b']) ? 'NA' : $_POST['b'];
$c = empty($_POST['c']) ? 'NA' : $_POST['c'];
$d = empty($_POST['d']) ? 'NA' : $_POST['d'];
$e = empty($_POST['e']) ? 'NA' : $_POST['e'];
$f = empty($_POST['f']) ? 'NA' : $_POST['f'];
$g = empty($_POST['g']) ? 'NA' : $_POST['g'];
$h = empty($_POST['h']) ? 'NA' : $_POST['h'];
$i = empty($_POST['i']) ? 'NA' : $_POST['i'];
$l = empty($_POST['l']) ? 'NA' : $_POST['l'];
$m = empty($_POST['m']) ? 'NA' : $_POST['m'];
$n = empty($_POST['n']) ? 'NA' : $_POST['n'];
$o = empty($_POST['o']) ? 'NA' : $_POST['o'];
$p = empty($_POST['p']) ? 'NA' : $_POST['p'];
$q = empty($_POST['q']) ? 'NA' : $_POST['q'];
$r = empty($_POST['r']) ? 'NA' : $_POST['r'];

// Inserisco i valori nella tabella
$sql = "INSERT INTO tabler (student_id, COMP7001_credits, COMP7001_marks, COMP7002_credits, COMP7002_marks, TECH7005_credits, TECH7005_marks, DALT7002_credits, DALT7002_marks, DALT7011_credits, DALT7011_marks, SOFT7003_credits, SOFT7003_marks, TECH7004_credits, TECH7004_marks, TECH7009_credits, TECH7009_marks) 
VALUES ('$student_id', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$l', '$m', '$n', '$o', '$p', '$q', '$r')";



if ($conn->query($sql) === TRUE) {
  include('backuphp.php');
} else {
  echo "Errore nell'inserimento dei dati: " . $conn->error;
}




$conn->close();

?>
