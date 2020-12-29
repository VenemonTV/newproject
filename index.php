<?php
    require_once("inc/config.php");
    require_once("inc/check.php");
    
    if($logged == true){
        header("Location: dashboard.php");
        exit;
    }
    
    $page = "Home";
    require_once("inc/header.php");
?>
        <br>
        <br>
        <h2 align="center">Welcome To World2Build</h2>
        <div align="center">
            <img align="center" style="" src="/img/index.png">
        </div>
        <div align="center">
            <a align="center" href="login.php" class="waves-effect waves-light btn blue">Login</a>
            <a align="center" href="register.php" class="waves-effect waves-light btn blue">Register</a>
        </div>
<?php
    require_once("inc/footer.php");
?>
