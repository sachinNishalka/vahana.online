<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vahana</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><span class="text-white  btn-dark btn-sl">VA</span><span class="btn-sl btn-light"><b>HANA</b></span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navround ms-auto mb-2 mb-lg-0 bg-dark">
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
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
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="./admin_area/index.php">Post an Advertisement</a>
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About us</a>
              </li> 
				</div>
				<div class="btn ">
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
         
         
         
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/audi2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Dream Car</h5>
                              <p>let's find your dream car with us.</p>
                              <p><a href="display_all.php" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/car-future.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Get in touch with the Future</h5>
                              <p>under the development</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/bidding.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>For Your Price</h5>
                              <p>let's buy your vehicle for your price</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    
      <!-- services section Starts -->
      
			  
              <section id="services" >
				   <div class="container section-padding">
            <h1><center>SERVICES</center></h1>
            <div class="img">
              <div class="img-cap">
				 <div class="img-margin1">
            <a href=""><img  src="img/car.jpg"></a> 
				  </div>
            <a href=""><h3> Vehicles</h3></a> 
				   
              </div>
                <div class="img-cap">
					<div class="img-margin2">
              <a href=""><img  src="img/sparepart.jpg" ></a>  
					</div>
              <a href=""><h3>Spare Parts</h3></a> 
                </div>
                <div class="img-cap">
					<div class="img-margin3">
              <a href=""><img  src="img/OIP.jpg"></a> 
					</div>
              <a href=""><h3>Bidding</h3></a> 
                </div>
                <div class="img-cap">
				<div class="img-margin4">
                    <a href=""><img  src="img/forum.jpg"></a>  
					</div>
                    <a href=""><h3>Forums</h3></a> 
					
                </div>
                      
            </div>
				  </div>
        </section>
      <!-- services section Ends -->

      <!-- portfolio strats -->
      <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Description</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="#" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Vehicle Store</h3>
                            <p class="lead">pending</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="#" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Spare Parts Store</h3>
                            <p class="lead">pending</p>
                            <button class="btn bg-warning text-dark">learn More</button>
                        </div>
                    </div>
                </div>
				
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="#" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Bidding</h3>
                            <p class="lead">pending</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- portfolio ends -->
      
      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Leave a message</h2>
                        <p>.......</p>
                    </div>
                </div>
            </div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<form action="#" class="bg-light p-4 m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Full Name" required="" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
								</div>
							</div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section>
      <!-- contact ends -->
      <!--footter-->
 <!-- include footer -->
 <?php
 include("./includes/footer.php");
 ?>
</div>








    
    
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>




<!--for getting the form download the code from download button-->