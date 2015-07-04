<?php
session_start();
##
include("includes/dbconn.php");


if(isset($_POST['submit'])){
	
	$username=$_POST['username'];
	
	$password=$_POST['password'];
	
	$query="SELECT user_username,user_password FROM tbl_user 
			WHERE user_username='$username' 
			AND user_password='$password' 
			AND user_status='A'";
	
	$data=mysql_query($query);

	$rows=mysql_num_rows($data);

	print_r($rows);
	
	echo $username;
	echo $password;
	
	echo " ";

	
	if($rows>0){
		echo "  password";
		
		##setting cookies
		
		$expire=60*5;
		
		if(isset($_POST['remember_me'])){
			
			##setting cookies
			setcookie('username',$username,time()+$expire);
			setcookie('password',$password,time()+$expire);
			setcookie('remember_me',$_POST['remember_me'],time()+$expire);
			
			}
		else{
			##setting cookies
			setcookie('username',$username,time()-$expire);
			setcookie('password',$password,time()-$expire);
			setcookie('remember_me',$_POST['remember_me'],time()-$expire);
			
			}
		
		
		##setting session
		
		$_SESSION['username']=$username;
		
		header("location:home.php");
		
		}
	else{
		
		echo "Invalid username or  password";
		}
	
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurant</title>

    <?php include "includes/css.php"; ?>

</head>

<body>
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Resturant Kathmandu Login</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="index.php" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="username" type="userName" value="<?php echo  isset($_COOKIE['username'])?$_COOKIE['username']:'';?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="<?php echo  isset($_COOKIE['password'])?$_COOKIE['password']:'';?>" >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" <?php echo  isset($_COOKIE['remember_me'])?"checked='checked'":'';?>>Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success btn-block submit" type="submit" name="submit" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/css.php"; ?>

</body>

</html>
