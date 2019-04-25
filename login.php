<?php
    session_start();
    $_SESSION['passwordIsOkay'] = FALSE;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/dollar2.png">

    <title>BLOG - Authentification</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Custom styles for this template -->
    <link rel='stylesheet' type='text/css' href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Login-Form-Dark.css">

</head>

    
<body>


<div style="text-align: center;">
    <div class="login-dark">
        <form action="#" method="post">
            <h2>Admin only</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="usrname" name="usrname" placeholder="ID" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
        </form>
    </div>

</div>



<?php

    if(!empty($_POST['password']) && !empty($_POST['usrname'])){
        $id = checkInput($_POST['usrname']);
        $pwd = checkInput($_POST['password']);
        

        if($pwd == "banane" && $id == 'admin'){
            $_SESSION['passwordIsOkay'] = TRUE;
            echo "<script type='text/javascript'>document.location.replace('adminpanel.php');</script>";
            exit();
        }
        else{
            echo "<script>alert('Et non!');</script>";
        }

    }


    function checkInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
?>

        




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>