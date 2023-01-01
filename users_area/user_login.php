<?php include('../includes/connect.php');
 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	  <link rel="stylesheet" href="loginbox.css">
  </head>
  <body>
   <div class="container-fluid123 my-3">
	   <label for="" class="close-btn fas fa-times"></label>
    <h2 class="text-center">Login</h2>
<br>
	   
    <div class="row d-flex align-items-center justify-content-center">
       <div class="col-lg-12 col-xl-6">
        <form action="" method="post">
            <!-- username -->
          <div class="form-outline mb-4">
            <label for="user_username" class="form-label">Username</label>
            <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
          </div>
          
          <!-- password-->
          <div class="form-outline mb-4">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
          </div>
        
          <div class="logbutton mt-4 pt-2">
			 
            <input type="submit" value="Login" class="bg-info py-2 px-3 border-0 " name="user_login">
			  
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?<a href="user_registeration.php" class="text-danger">Register</a></p>
        	
        </div>

        </form>
       </div>
    </div>
</div>
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
<!--checking username and password -->
<?php
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
   
    
    $select_query="Select * from `users` where 
    username='$user_username'";
    
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    
    
    if($row_count>0){
        if(password_verify($user_password,$row_data['user_password'])){
            
            echo "<script>alert('Login Successful')</script>";
            $_SESSION['username']=$user_username;
            //redirect
            header("refresh:0.1;url=../display_all.php");
        }else{
            echo "<script>alert('Invalid Password')</script>";
            session_destroy();
            
        }
    }else{
        echo "<script>alert('Invalid Username')</script>";
        session_destroy();
    }
}



?>