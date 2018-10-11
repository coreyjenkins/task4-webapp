<!DOCTYPE html>
<head>
  <title>Task 4 Web App</title>
</head>
<html>
<body>

<h1>Task 4</h1>
<h2>Test Form Display</h2>
Name: <?php echo $_GET["firstName"] . " " . $_GET["lastName"]; ?><br>
Gender: <?php echo $_GET["gender"]; ?><br>
Email Address: <?php echo $_GET["email"]; ?>
Phone Number: <?php echo $_GET["pNumber"]; ?>
</body>
</html>
