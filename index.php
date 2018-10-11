<!DOCTYPE html>
<head>
  <title>Task 4 Web App</title>
</head>
<html>
<body>

<h1>Task 4</h1>
<h2>Test Form</h2>
<form action="/form_display.php">
  <label>First Name:</label>
  <input type="text" name="firstName" id="firstName"/>
  <label>Last Name:</label>
  <input type="text" name="LastName" id="lastName"/>
  <label>Gender:</label>
  <input type="radio" name="gender" id="male" value="Male" checked="true"/>
  <input type="radio" name="gender" id="female" value="Female"/>
  <input type="radio" name="gender" id="other" value="Other"/>
  <label>Email:</label>
  <input type="email" name="email" id="email" />
  <label>Phone Number:</label>
  <input type="text" name="pNumber" id="pNumber"/>
  <input type="submit" name="btnSubmit"/>
</form>  
</body>
</html>
