<?php
    require '../php/dbConnect.php';

    if(isset($_POST['username']) && isset($_POST['password']) )
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $username = stripslashes($username);
        $password = md5(stripslashes($password));
        $username = mysqli_real_escape_string($link, $username);
        $password = mysqli_real_escape_string($link, $password);
        $sql="SELECT * FROM admin WHERE username='$username' and password='$password'";
        $result=mysqli_query($link, $sql);

        $count=mysqli_num_rows($result);

        if($count==1){
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("location: index.php");
        }
        else if($count==0){
            echo 'Klaidingi duomenys';
        }
    }
    else {
        echo 'Užpildikite formos laukus';
    }

?>
