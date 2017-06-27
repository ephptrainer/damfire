<?php 
include("config.php");

if(isset($_SESSION['userid'])){
    header("location:inbox.php");
}

$message = "";
//print_r($_GET);
if(isset($_GET['username']) && $_GET['username'] != ""){
    $username   = $_GET['username'];
    $email      = $_GET['email'];
    $password   = $_GET['password'];
    $conf_pass  = $_GET['confirm-password'];

    if($password == $conf_pass){

        $password = sha1(md5($password));

        $query = "INSERT INTO USER(name,email,password) values ('$username','$email','$password')";
       // echo $query;
        if(mysqli_query($conn, $query)){
            $message = "You are succefully registred. Login to Continue";
        }else{
            echo mysqli_error($conn);
        }

    }
}

if(isset($_POST['username']) && $_POST['username'] != ""){

    $username = $_POST['username'];
    $password = sha1(md5($_POST['password']));
    $query = "SELECT * from user where email = '$username' and password = '$password'";
    echo $query;
    $run = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($run);
    
    if(count($result) > 0){
        
        $_SESSION['userid']     = $result['id'];
        $_SESSION['useremail']  = $result['email'];
        header("location:inbox.php");

    }else{
        echo "User and password do not match";
    }



}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <div><?php echo $message; ?></div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" method="post" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Email as Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="script.js"></script>

</body>
</html>