<html>
<body>

<?php

$nameErr = $emailErr =  "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    $emailErr = $emailErr=$emailErr1= "";
$pattern= "/^[a-zA-Z0-9]*gmail.com$/";{
      $emailErr = "Invalid email format";
    }
  }
}
?>

</body>
\</html>