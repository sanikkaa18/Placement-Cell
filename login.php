<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the username and password
  if (empty($username)) {
    $error = "Username is required";
  } else if (empty($password)) {
    $error = "Password is required";
  } else if ($username !== "tycs36" || $password !== "tycs36") {
    $error = "Invalid username or password";
  }

  if (!isset($error)) {
    // Redirect to the admin page
    header("Location: admin.php");
    exit();
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  
</head>
<style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-form {
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 400px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: none;
      background-color: #f2f2f2;
      font-size: 16px;
      color: #333;
      outline: none;
    }

    .login-form input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease;
    }

    .login-form input[type="submit"]:hover {
      background-color: #43A047;
    }

    .login-form h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #555;
      font-weight: normal;
    }

    .login-form label {
      display: block;
      margin-bottom: 10px;
      font-size: 16px;
      color: #555;
    }

    .login-form input[type="text"]:focus,
    .login-form input[type="password"]:focus {
      background-color: #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.2);
    }

    .login-form input[type="text"]::placeholder,
    .login-form input[type="password"]::placeholder {
      color: #999;
    }
  </style>
<body>
  <div class="login-container">
    <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <h2>Admin Login</h2>
      <?php if (isset($error)) { ?>
        <div class="error"><?php echo $error; ?></div>
      <?php } ?>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>
      
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
