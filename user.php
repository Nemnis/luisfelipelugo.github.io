<?php
    $nick = $_COOKIE['User'];
    $email = "";


    include "./db/dbConnect.php";
            
    $sql = "SELECT * FROM users WHERE nick='".$nick."'";
    $r = $conn->query($sql);       

    if($r->num_rows > 0) {
        $user = $r->fetch_assoc();
        
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $nick = $user['nick'];
        $email = $user['email'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php include './web/views/common/head.php' ?>
	<link rel="stylesheet" href="./web/styles/user.css">
</head>
<body>
<!-- Nav -->
<?php include './web/views/common/nav.php'; ?>
<!-- Title -->
<div class="title_main title_seginf p1-rl">
<pre>
__________                _____ __ __          
\______   \_______  _____/ ____\__|  |   ____  
 |     ___/\_  __ \/  _ \   __\|  |  | _/ __ \ 
 |    |     |  | \(  <_> )  |  |  |  |_\  ___/ 
 |____|     |__|   \____/|__|  |__|____/\___  >
                                            \/ 
</pre>
</div>
<!-- /Title -->
<section class="user_info_wrap">
    <div class="container-line">
        <div class="info_wrap">
            <p class="space-mono-regular"><span>User</span> <span><?php echo $nick; ?></span></p>
            <p class="space-mono-regular"><span>Email</span> <span><?php echo $email; ?></span></p>
        </div>
    </div>
</section>
<?php include './web/views/common/underconstruction.php' ?>
</body>
