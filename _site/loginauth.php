<?php
    if(isset($_POST['btnLogin'])) {

        // TODO: change md5 for somethin better :)
        $txtPass = md5($_POST["pass"]);
        $txtUser = $_POST["user"];

        include "./db/dbConnect.php";
        
        $sql = "SELECT * FROM users WHERE nick='".$txtUser."' AND pass='".$txtPass."'";
        $r = $conn->query($sql);       

        if($r->num_rows > 0) {
            $user = $r->fetch_assoc();
            
            if (!isset($_SESSION)) {
                session_start();
            }
            
            $_SESSION["user"] = $user['nick'];
            setcookie("User", $user['nick']);
            header("Location: ./temario.php");
            exit();
        }

        header("Location: ./login.php");

    }
?>