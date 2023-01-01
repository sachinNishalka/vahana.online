<?php include("../includes/connect.php");

?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registeration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   <div class="container-fluid my-3">
    <h2 class="text-center">New User Registeration</h2>

    <div class="row d-flex align-items-center justify-content-center">
       <div class="col-lg-12 col-xl-6">
        <form action="" method="post">
            <!-- username -->
          <div class="form-outline mb-4">
            <label for="user_username" class="form-label">Username</label>
            <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
          </div>
          <!-- email-->
          <div class="form-outline mb-4">
            <label for="user_email" class="form-label">Email</label>
            <input type="email" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" name="user_email"/>
          </div>
          <!-- password-->
          <div class="form-outline mb-4">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" name="user_password"/>
          </div>
         <!-- confirm password-->
         <div class="form-outline mb-4">
            <label for="user_confirm_password" class="form-label">Confirm Password</label>
            <input type="password" id="user_confirm_password" class="form-control" placeholder="Confirm your password" autocomplete="off" name="user_confirm_password"/>
          </div>
           <!-- contact-->

         <div class="form-outline mb-4">
            <label for="user_contact" class="form-label">Contact</label>
            <input type="text" id="user_contact" class="form-control" placeholder="Mobile Number"  autocomplete="off" name="user_contact"/>
          </div>
        <div class="mt-4 pt-2">
            <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?<a href="user_login.php" class="text-danger">Login</a></p>
        
        </div>

        </form>
       </div>
    </div>

   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

<!-- php code to connect data written on registeration page to the database (mystore)-->
<?php
if(isset($_POST['user_register'])){
$user_username=$_POST['user_username'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
$hash_password=password_hash($user_password,PASSWORD_DEFAULT);
$user_confirm_password=$_POST['user_confirm_password'];
$user_contact=$_POST['user_contact'];

//select query 
$select_query="Select *from `users` where username='$user_username' or user_email='$user_email'";
$result=mysqli_query($con,$select_query);
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
    echo"<script>alert('Username or Email Already Exist')</script>";
}elseif($user_password!=$user_confirm_password){
    echo"<script>alert('Passwords do not match')</script>";
}



else{


//insert_query
$insert_query="insert into `users` (username,user_email,user_password,user_mobile) values('$user_username','$user_email','$hash_password','$user_contact')";
$sql_execute=mysqli_query($con,$insert_query);
if($sql_execute){
    echo"<script>alert('Data inserted successfully')</script>";
}else{
    die(mysqli_error($con));
}
}

}

?>