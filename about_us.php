<<<<<<< HEAD

<?php
session_start();
?>
<!DOCTYPE html>

=======
<!DOCTYPE html>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
	<link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
=======
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
    <script src="https://kit.fontawesome.com/d5af73a83e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage.css">
    
    <title>About Us</title>
 


</head>
<body>

<<<<<<< HEAD
<nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="text-white  btn-dark btn-sl">Vah</span><span class="btn-sl btn-light"><b>ana</b></span></a>
=======
<h1 class="text-center p-3 text-white">Insert Vehical details</h1>

<nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><span class="text-white  btn-dark btn-sl">VA</span><span class="btn-sl btn-light"><b>HANA</b></span></a>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navround ms-auto mb-2 mb-lg-0 bg-dark">
				<div class="btn ">
              <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" href="./index.php">Home</a>
=======
                <a class="nav-link" href="home.php">Home</a>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" href="display_all.php">Vehicle Store</a>
              </li> 
				</div>
				<div class="btn">
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
=======
              <a class="nav-link" href="display_all.php">vehical store</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="#services">Spare Parts</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="./admin_area/index.php">Post an Advertisement</a>
              </li>
				</div>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="about_us.php">About us</a>
              </li> 
				</div>
<<<<<<< HEAD
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
				
=======
				<div class="btn ">
              <li class="nav-item ">
				  
                <a class="nav-link btn btn-warning " style="scale:0.9" href="#contact"><i class="bi bi-person-circle"></i> Profile</a>
              </li>  
				</div>
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
            </ul>
          </div>
        </div>
      </nav>





<<<<<<< HEAD
<section id="about">
=======

>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc


    <div class="description">
        <h1>ABOUT US</h1>
        <div class="container">
            <p>We are undergraduates of NSBM Green University following a software engineering degree, this is our group project which were assigned to us. NSBM Green University Town is the first ever green university in South Asia and sets an example for the whole South Asia by paving the way for environmental sustainability. The university is open for both national and international student community and it has turned a new chapter in Sri Lankan higher education.
                </p><a href="https://www.nsbm.ac.lk/"><img src="assets/OIP.jpg" width="200px" height="200px"></a>
        </div>

    </div>
<<<<<<< HEAD
	</section>
=======
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
    <div class="container-fluid">
        <div class="header">
            <h1>OUR TEAM</h1>
        </div>
      <div class="row">
        <div class="teams">
            <img  src="assets/me.jpg" alt="">
            <div class="name">Asiri Hansaja</div>
            <div class="posit">Developer<br>UI/UX Designer</div>
            <div class="lead">Undergraduates(BSc (Hons) Software Engineering - (Plymouth University - United Kingdom))
            </div>
            <div class="social-links">
                <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href="https://instagram.com/asir.ii_?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="www.linkedin.com/in/asiri-hansaja-0b91ba245"><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
        </div>
        <div class="teams">
            <img src="assets/sudil.jpg" alt="">
            <div class="name">Sudil Thennakoon</div>
            <div class="posit">Developer<br>UI/UX Designer</div>
            <div class="lead">Undergraduates(BSc (Hons) Software Engineering - (Plymouth University - United Kingdom))
            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/sudil.thennakoon?mibextid=LQQJ4d"><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href="https://instagram.com/sudil_vidmal?igshid=OGQ2MjdiOTE="><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="https://www.linkedin.com/in/punsarith-vidmal-494659245"><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
        </div>
        <div class="teams">
            <img src="assets/ayana.jpg" alt="">
            <div class="name">Ayana Sagara</div>
            <div class="posit">Developer<br>UI/UX Designer</div>
            <div class="lead">Undergraduates(BSc (Hons) Software Engineering - (Plymouth University - United Kingdom))
            </div>
            <div class="social-links">
                <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href="https://instagram.com/ayan.__.a?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="https://www.linkedin.com/in/ayana-sagara-279300223"><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
        </div>
        <div class="teams">
            <img src="assets/thinal2.jpg" alt="">
            <div class="name">Thinal</div>
            <div class="posit">Developer<br>Researcher</div>
            <div class="lead">Undergraduates(BSc (Hons) Software Engineering - (Plymouth University - United Kingdom))
            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=100075256714352&mibextid=ZbWKwL"><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href="https://instagram.com/thinal_dilz?igshid=Yzg5MTU1MDY"><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="https://www.linkedin.com/in/thinal-dilmith-337860196"><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
        </div>
        <div class="teams">
            <img class="img-fluid" src="assets/geevinda.jpg" alt="">
            <div class="name">Geevinda</div>
            <div class="posit">Developer<br>UI/UX Designer</div>
            <div class="lead">Undergraduates(BSc (Hons) Software Engineering - (Plymouth University - United Kingdom))
            </div>
            <div class="social-links">
                <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
        </div>
        <div class="teams">
            <img class="img-fluid" src="assets/naduni.png" alt="">
            <div class="name">Naduni Karunathilaka</div>
            <div class="posit">Developer<br>Researcher</div>
            <div class="lead">Undergraduates(BSc (Hons) Software Engineering - (Plymouth University - United Kingdom))
            </div>
            <div class="social-links">
                <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href="https://www.linkedin.com/in/naduni-karunathilaka-090312260"><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
        </div>
        <div class="teams">
            <img class="img-fluid" src="assets/naduni.png" alt="">
            <div class="name">Dinithi</div>
            <div class="posit">Developer<br>Researcher</div>
            <div class="lead">Undergraduates(BSc (Hons) Software Engineering - (Plymouth University - United Kingdom))
            </div>
            <div class="social-links">
                <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-linkedin fa-xl"></i></a>
            </div>
        </div>
        </div>
        
      </div>  
    </div>
    <section class="contact">
        <div class="content">
            <h2><b>Contact Us</b></h2>
        </div>
        <div class="contain">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-phone mr-3"></i></div>
                    <div class="text">
                        <h3>Telephone</h3>
                        <p>0719442006</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-brands fa-facebook fa-xl"></i></div>
                    <div class="text">
                        <a href=""><h3>Facebook</h3></a>
                        <p>Vahana.autos</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-brands fa-instagram fa-xl"></i></div>
                    <div class="text">
                       <a href=""><h3>Instagram</h3></a>
                        <p>Vahana.autos</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope mr-3"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Vahana.autos@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
	 <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
=======
>>>>>>> a2356ede0d13bfba58f44a706e4d1fa836bcd5fc
    <?php
 include("./includes/footer.php");
 ?>
</body>
</html>