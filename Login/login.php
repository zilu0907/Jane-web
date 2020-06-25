<html>
<head>
  <style>
    button {
      width: 80px;
      text-align: center;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
	<p>Login Success.</p>
</body>
<?php 
  include 'connect.php';

  if ($_POST[email]===""){
  	$_POST[email] = "None";
  }

  $sql = "use login";

  if ($conn->query($sql) === TRUE) {
    echo "Database selected successfully.<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sql = "INSERT INTO users (user, pwd, email, country)
  VALUES ('$_POST[user]', '$_POST[pwd]', '$_POST[email]', '$_POST[country]')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
 ?>
 <button><a href="login.html">Back</a></button>
 </html>