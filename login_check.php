<?php 

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "loginpage";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql="SELECT * FROM signin WHERE username='".$name."' AND password='".$pass."'  ";
    
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);


    if($row["usertype"]=="host")
    {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="host";
        header("location:hosthome.php");
    }

    elseif($row["usertype"]=="user")
    {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="user";
        header("location:userhome.php");
    }

    else{
        $message= "username or password do not match";
        $_SESSION['loginMessage']=$message;
        header("location:login.php");
    }
}
?>