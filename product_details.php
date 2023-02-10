<!--connect file-->
<?php 
include('includes/connect.php');
include('functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- ayana link -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="./css/style.css">  
    <!--asiri links--> 
    <link href="shop.css" rel="stylesheet">
    <link href="content.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white "></nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white "></nav>

<!--nav bar-->
<nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="text-white  btn-dark btn-sl">Vah</span><span class="btn-sl btn-light"><b>ana</b></span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navround ms-auto mb-2 mb-lg-0 bg-dark">
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Home</a>
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="display_all.php">Vehicle Store</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="">Spare Parts</a>
              </li> 
				</div>
				<?php 
				if(!isset($_SESSION['username'])){
					echo "<div class='btn '>
              <li class='nav-item'>
                <a class='nav-link' href='./users_area/user_login.php'>Post an Advertisement</a>
              </li>
				</div>";
				}else { echo "<div class='btn '>
              <li class='nav-item'>
                <a class='nav-link' href='./admin_area/index.php'>Post an Advertisement</a>
              </li>
				</div>";}
				?>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About us</a>
              </li> 
				</div>
        <?php
         if(!isset($_SESSION['username'])){
          echo 
          "<div class='btn'>
          <li class='nav-item'>
            <a class='nav-link btn btn-warning' style='scale:0.9' href='./users_area/user_login.php'><i class='bi bi-person-circle'></i> Log In</a>
          </li>  
    </div>";
         }else{echo 
          "<div class='btn'>
          <li class='nav-item'>
            <a class='nav-link btn btn-warning' style='scale:0.9' href='./session/logout.php'><i class='bi bi-person-circle'></i>Log Out</a>
          </li>  
    </div>";}
         
         ?>
				
            </ul>
          </div>
        </div>
</nav>

<?php


view_details();

?>

    <!-- Related Products -->


    <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h2 class="font-weight-bold">Related Products</h2>
      <hr class="mx-auto">
      <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="img/audi2.jpg" alt="">
      
        <h5 class="p-name">Audi</h5>
        <h4 class="p-price">Rs.1,920,000</h4>
        <div class="d-grid gap-2 d-md-block">
          <button type="button" class="btn btn-warning">Add to Wishlist</button>
          <button class="btn btn-primary" type="button">Buy now</button>
        </div>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="img/audi2.jpg" alt="">
      
        <h5 class="p-name">Audi</h5>
        <h4 class="p-price">Rs.1,920,000</h4>
        <div class="d-grid gap-2 d-md-block">
          <button type="button" class="btn btn-warning">Add to Wishlist</button>
          <button class="btn btn-primary" type="button">Buy now</button>
        </div>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="img/audi2.jpg" alt="">
      
        <h5 class="p-name">Audi</h5>
        <h4 class="p-price">Rs.1,920,000</h4>
        <div class="d-grid gap-2 d-md-block">
          <button type="button" class="btn btn-warning">Add to Wishlist</button>
          <button class="btn btn-primary" type="button">Buy now</button>
        </div>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-12">
        <img class="img-fluid mb-3" src="img/audi2.jpg" alt="">
      
        <h5 class="p-name">Audi</h5>
        <h4 class="p-price">Rs.1,920,000</h4>
        <div class="d-grid gap-2 d-md-block">
          <button type="button" class="btn btn-warning">Add to Wishlist</button>
          <button class="btn btn-primary" type="button">Buy now</button>
        </div>
      </div> 
     </div>   
    </section>
    

    <!-- include footer -->
<?php
 include("./includes/footer.php");
 ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>  
<script>
   var MainImg = document.getElementById("MainImg");
          var SmallImg = document.getElementsByClassName("small-img");

          SmallImg[0].onclick = function(){
            MainImg.src = SmallImg[0].src;
          }
          SmallImg[1].onclick = function(){
            MainImg.src = SmallImg[1].src;
          }
          SmallImg[2].onclick = function(){
            MainImg.src = SmallImg[2].src;
          }
          SmallImg[3].onclick = function(){
            MainImg.src = SmallImg[3].src;
          }
</script>   
</body>
</html>