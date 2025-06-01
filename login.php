<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg,rgb(235, 116, 116), #9face6);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      
    }

    .container {
      background-color:rgb(242, 160, 216);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
      background-image: url(GOJO.png);
      
      
    }

    .container h2 {
      text-align: center;
      margin-bottom: 24px;
      color: #333;
      color:white;
      font-size:30px;
    }

    .form-group {
      margin-bottom: 20px;
      
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      color: #555;
      color:white;
    }

    .form-group input {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .form-group input:focus {
      border-color: #6a82fb;
      outline: none;
    }

    .btn {
      width: 100%;
      padding: 12px;
      background-color: #6a82fb;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
     
    }

    .btn:hover {
      background-color: #5f75e0;
    }

    .link {
      text-align: center;
      margin-top: 16px;
      color:white;
    }

    .link a {
      color:rgb(6, 46, 245);
      text-decoration: none;
      font-size: 18px;
    }

    .link a:hover {
      text-decoration: underline;
    }

    .error-message {
      color: red;
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
   
    <h2>Sign In</h2>
    <h4 class="error-message">
      <?php
        session_start();
        if (isset($_SESSION['loginMessage'])) {
            echo $_SESSION['loginMessage'];
            unset($_SESSION['loginMessage']); // Clear the message after displaying it
        }
      ?>
    </h4>
    <form action="login_check.php" method="POST" class="login_form">
      <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" id="username"placeholder="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn">Sign In</button>
      <div class="link">
        <p>Don't have an account? <a href="sign.html">Sign Up</a></p>
      </div>
    </form>
  </div>

</body>
</html>