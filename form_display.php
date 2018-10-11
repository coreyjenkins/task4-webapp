<!DOCTYPE html>
<head>
  <title>Task 4 Web App</title>
</head>
<html>
<body>

<h1>Task 4</h1>
<h2>Test Form Display</h2>
Name: <?php echo $_POST["firstName"] . " " . $_POST["lastName"]; ?><br>
Gender: <?php echo $_POST["gender]; ?><br>
Email Address: <?php echo $_POST["email"]; ?>
Phone Number: <?php echo $_POST["pNumber"]; ?>
</body>
</html>
