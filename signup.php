<?php
//connection to SQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gradecalculator";

$conn = new mysqli($servername, $username, $password, $dbname);

// Connection verification
if ($conn->connect_error) {
  die("Connection to the server failed: " . $conn->connect_error);
}

// retrieve form data
$name = $_POST['name'];
$student_id = $_POST['student_id'];
$password = $_POST['password'];

// crypting password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);


// check if user is already registered
$sql = "SELECT * FROM signup WHERE student_id = '$student_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // show alert page
  echo "<html>
          <head>
            <title>Already registered</title>
            <style>
              body {
                background-color: black;
              }
              h1 {
                color: green;
                text-align: center;
                margin-top: 20%;
              }
            </style>
          </head>
          <body>
            <h1>You are already registered. Wait 5 seconds to be redirected to the signup page.</h1>
          </body>
        </html>";
  
  // address to signup page
  header("refresh:5;url=signup.html");
  exit();
}

// store user data into database
$sql = "INSERT INTO signup (name, student_id, password)
VALUES ('$name', '$student_id', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
  // show confirmation page
  echo "<html>
          <head>
            <title>Registration successful</title>
            <style>
              body {
                background-color: black;
              }
              h1 {
                color: green;
                text-align: center;
                margin-top: 20%;
              }
            </style>
          </head>
          <body>
            <h1>Signed up! Wait 5 seconds to be redirected to the login page.</h1>
          </body>
        </html>";
  
  // addresso to login page
  header("refresh:5;url=login.html");
} else {
  // show error page
  echo "<html>
          <head>
            <title>Error</title>
            <style>
              body {
                background-color: black;
              }
              h1 {
                color: green;
                text-align: center;
                margin-top: 20%;
              }
            </style>
          </head>
          <body>
            <h1>Something went wrong! Sorry.</h1>
            <p>Error details: " . $conn->error . "</p>
          </body>
        </html>";
}

$conn->close();
?>
