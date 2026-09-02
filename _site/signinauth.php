<?php
    if(isset($_POST['btnSignIn'])) {
        $txtEmail = $_POST['email'];
        // TODO: change md5 for somethin better :)
        $txtPass = md5($_POST['pass']);
        $txtUser = $_POST['nick'];
        $txtPrivs = "none";

        include "./db/dbConnect.php";
        
        $sql = "INSERT INTO users (nick, email, pass, privs) VALUES ('".$txtUser."','".$txtEmail."','".$txtPass."','".$txtPrivs."');";
        
        if($r = $conn->query($sql)) {            
            
            echo '<script>console.log(R: '.$r.')</script>';
            
            if (!isset($_SESSION)) {
                session_start();
            } 

            $_SESSION["user"] = $txtUser;
            setcookie("User", $txtUser);

            header("Location: ./welcome.php");
            exit();
        }

        header("Location: ./login.php");

    }
?>