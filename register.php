<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
</head>
<body>
  <h1>Register Student</h1>

  <form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" required><br><br>

    <label>Major:</label><br>
    <input type="text" name="major" required><br><br>

    <input type="submit" value="Register">
  </form>

  <hr>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // Sanitize input agar aman (menghindari script injection)
      $student = [
        "name"  => htmlspecialchars($_POST["name"]),
        "age"   => (int) $_POST["age"],
        "major" => htmlspecialchars($_POST["major"])
      ];

      echo "<h3>Registration Successful!</h3>";
      echo "<p><strong>Name:</strong> {$student['name']}</p>";
      echo "<p><strong>Age:</strong> {$student['age']}</p>";
      echo "<p><strong>Major:</strong> {$student['major']}</p>";
    }
  ?>
</body>
</html>