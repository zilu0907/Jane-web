<html>
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
    echo "Database selected successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sql = "INSERT INTO users (user, pwd, email, country)
  VALUES ('$_POST[user]', '$_POST[pwd]', '$_POST[email]', '$_POST[country]')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
 ?>
 </html>