

<?php
session_start();
error_reporting(0);
$host="localhost";
$user="root";
$password="";
$db="loginpage";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM signin";

$result=mysqli_query($data,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logout Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: rgb(245, 208, 243);
      
    }

    header {
      background-color: #333;
      color: white;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .profile {
      display: flex;
      align-items: center;
    }

    .profile img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .profile-info {
      font-size: 22px;
    }

    nav {
      display: flex;
      justify-content: space-around;
      background-color: orange;
      padding: 12px 0;
      flex-wrap: wrap;
      width: 71%;
    
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      font-size: 20px;
    }

    nav a:hover {
      background-color: #666;
      border-radius: 5px;
    }

    .container {
      max-width: 900px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      height:430px;
      background-color:rgba(10, 59, 60, 0.1);
    }

    h2 {
      margin-bottom: 10px;
      color: #333;
      font-size:40px;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 20px;
      margin: 30px 0;
    }

    .feature-item {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 8px;
      font-size: 18px;
      box-shadow: 1px 1px 5px rgba(0,0,0,0.05);
    }

    .btn-group {
      margin-top: 35px;
      justify-content: space-evenly;
      
      

    }

    .btn {
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      margin: 10px;
      cursor: pointer;
    }

    .logout-btn {
      background-color: #e74c3c;
      color: white;
      font-size:30px;
    }

    .logout-btn:hover {
      background-color: #c0392b;
    }

    .login-btn {
      background-color: #2ecc71;
      color: white;
      font-size:30px;
      margin-top:20px;
     
    }

    .login-btn:hover {
      background-color: #27ae60;
    }

    .info {
      margin-top: 20px;
      font-size: 14px;
      color: #555;
    }

    @media (max-width: 600px) {
      header, nav {
        flex-direction: column;
        align-items: center;
      }

      .profile-info {
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <!-- Header with profile and mobile -->
  <header>
    <divA class="profile">
      <img src="rohhit.jpg" alt="Profile Picture">
      <div class="profile-info">
     
        <strong>Rohit Ojha</strong><br>
        📞 +9939200998
      </div>
    </div>
    <nav>
    <a href="hosthome.php">🏠 Home</a>
    <a href="setting.html">⚙️ Settings</a>
    <a href="#">🕓 History</a>
    <a href="#">🌐 App Language</a>
    <a href="#">👤 Account Center</a>
    <a href="#">⬇️ Download</a>
  </nav>
  </header>

  <!-- Navigation bar -->
 

  <!-- Main container -->
  <div class="container">
    <h2>Are you sure you want to logout?</h2>

    <div class="features">
      <div class="feature-item">🔧 Manage Settings</div>
      <div class="feature-item">🌐 Choose Language</div>
      <div class="feature-item">📥 Downloads</div>
      <div class="feature-item">👥 Account Info</div>
      <div class="feature-item">🔧 Manage Settings</div>
      
    </div>

    <div class="btn-group">
    <a href="login.php"><button class="logout-btn">Logout</button></a>

    </div>

    <div class="info">
      <p>You can always log in again with your credentials. Logging out will end your current session.</p>
    </div>
  </div>

</body>
</html>
