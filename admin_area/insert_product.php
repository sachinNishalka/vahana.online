<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
 
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brands=$_POST['product_brands'];
    $manufactured_year=$_POST['manufactured_year'];
    $vehical_condition=$_POST['vehical_condition'];
    $product_price=$_POST['product_price'];
    $contact_number=$_POST['contact_number'];
    $address=$_POST['address'];
    $product_status='true';

        //accessing images

        $product_image1=$_FILES['product_image1']['name']; 
        $product_image2=$_FILES['product_image2']['name']; 
        $product_image3=$_FILES['product_image3']['name']; 
        $product_image4=$_FILES['product_image4']['name']; 
        $product_image5=$_FILES['product_image5']['name']; 

       //accessing image tmp name

       $temp_image1=$_FILES['product_image1']['tmp_name']; 
       $temp_image2=$_FILES['product_image2']['tmp_name']; 
       $temp_image3=$_FILES['product_image3']['tmp_name']; 
       $temp_image4=$_FILES['product_image4']['tmp_name']; 
       $temp_image5=$_FILES['product_image5']['tmp_name'];
    
       //checking empty condition

       if($product_title=='' or $description=='' or  $product_keywords=='' or $product_category==''
       or $product_brands=='' or  $manufactured_year=='' or $vehical_condition=='' or  $product_price==''
       or $contact_number=='' or  $address=='' or $product_image1=='' or $product_image2=='' or $product_image3==''
       or $product_image4=='' or $product_image5==''){
        echo "<script>alert('please fill the all available fields')</script>";
        exit();
       }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        move_uploaded_file($temp_image4,"./product_images/$product_image4");
        move_uploaded_file($temp_image5,"./product_images/$product_image5");

        //insert query

        $insert_products="insert into `products` (product_title,product_description,product_keywords,
        category_id,brand_id,manufactured_year,vehical_condition,product_image1,product_image2,product_image3,
        product_image4,product_image5,product_price,contact_number,address,date,status)values('$product_title',
        '$description','$product_keywords','$product_category','$product_brands','$manufactured_year',
        '$vehical_condition','$product_image1','$product_image2','$product_image3','$product_image4','$product_image5',
        '$product_price','$contact_number','$address',NOW(),'$product_status')";

        $result_query=mysqli_query($con,$insert_products);
        if($result_query){
            echo "<script>alert('successfully inserted the products')</script>";
        }
       }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post vehical ad-admin dashbord</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

<!-- ayana link -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">


</head>
<body class="bg-secondary">
    <div class="container mt-3">
    <h1 class="text-center p-3 text-secondary">Insert Vehical details</h1>
        <h2 class="text-center ">Insert Vehical details</h2>




<!--nav bar-->
<nav class="navbar navbar-expand-lg  navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="text-white  btn-dark btn-sl">VA</span><span class="btn-sl btn-light"><b>HANA</b></span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 bg-dark">
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="../home.php">Home</a>
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="../display_all.php">vehical store</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="#">Spare Parts</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Post an Advertisement</a>
              </li>
				</div>
				<div class="btn ">
              <li class="nav-item">
                <a class="nav-link" href="../about_us.php">About us</a>
              </li> 
				</div>
				<div class="btn ">
              <li class="nav-item ">
				  
                <a class="nav-link btn btn-warning " style="scale:0.9" href="#contact"><i class="bi bi-person-circle"></i> Profile</a>
              </li>  
				</div>
            </ul>
          </div>
        </div>
      </nav>







        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">

        <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">product title</label>
                <input type="text" name="product_title"
                 id="product_title" class="form-control"
                 placeholder="Enter product title" autocomplete="off"
                 required="required">
            </div>

        <!--description-->

        <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label mt-2">product description</label>
                <input type="text" name="description"
                 id="description" class="form-control"
                 placeholder="Enter product description" autocomplete="off"
                 required="required">
            </div>

        <!--keywords-->

        <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label mt-2">product keywords</label>
                <input type="text" name="product_keywords"
                 id="product_keywords" class="form-control"
                 placeholder="Enter product keywords" autocomplete="off"
                 required="required">
            </div>
        
        <!--categories-->

        <div class="form-outline mb-4 w-50  m-auto">
            <select name="product_category" id="" 
                class="form-select mt-4">
                <option value="">select the categoty</option>
                <?php
                  $select_query="select * from `categories`";
                  $result_query=mysqli_query($con,$select_query);
                  while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $categoty_id=$row['category_id'];
                    echo "<option value='$categoty_id'>$category_title</option>";
                  }

                ?>
            
                
            </select>
        </div>  

         <!--brands-->

        <div class="form-outline mb-4 w-50 m-auto">
         <select name="product_brands" id="" 
               class="form-select mt-4">
               <option value="">select the brand</option>
               <?php
                  $select_query="select * from `brands`";
                  $result_query=mysqli_query($con,$select_query);
                  while($row=mysqli_fetch_assoc($result_query)){
                    $brand_title=$row['brand_title'];
                    $brand_id=$row['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                  }

                ?>
            </select>
        </div>

         <!--manufacture year-->

         <div class="form-outline mb-4 w-50 m-auto">
                <label for="manufactured_year" class="form-label mt-2">Manufactured year</label>
                <input type="text" name="manufactured_year"
                 id="manufactured_year" class="form-control"
                 placeholder="Enter manufactured year" autocomplete="off"
                 required="required">
            </div>

             <!--vehical condition -->

         <div class="form-outline mb-4 w-50 m-auto">
                <label for="vehical_condition" class="form-label mt-2">vehical condition</label>
                <input type="text" name="vehical_condition"
                 id="vehical_condition" class="form-control"
                 placeholder="Enter vehical condition" autocomplete="off"
                 required="required">
            </div>
        
            

       <!--image 1-->

       <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label mt-2">product image 1</label>
                <input type="file" name="product_image1"
                 id="product_image1" class="form-control"
                 required="required">
            </div>

        <!--image 2-->

       <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label mt-2">product image 2</label>
                <input type="file" name="product_image2"
                 id="product_image2" class="form-control"
                 required="required">
            </div>

        <!--image 3-->

       <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label mt-2">product image 3</label>
                <input type="file" name="product_image3"
                 id="product_image3" class="form-control"
                 required="required">
            </div>

        <!--image 4-->

       <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image4" class="form-label mt-2">product image 4</label>
                <input type="file" name="product_image4"
                 id="product_image4" class="form-control"
                 required="required">
            </div>

        <!--image 5-->

       <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image5" class="form-label mt-2">product image 5</label>
                <input type="file" name="product_image5"
                 id="product_image5" class="form-control"
                 required="required">
            </div>
        

        <!--price-->

        <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label mt-2">product price</label>
                <input type="text" name="product_price"
                 id="product_price" class="form-control"
                 placeholder="Enter product price" autocomplete="off"
                 required="required">
            </div>

            <!--text area


            <div class="form-group mb-4 w-50 m-auto">
                <label for="text_area">product text</label>
                <textarea name="text_area"  class="form-control" id="text_area" autocomplete="off" rows="3"></textarea>
            </div>-->

            <!--contact number-->

        <div class="form-outline mb-4 w-50 m-auto">
                <label for="contact_number" class="form-label mt-2">contact number</label>
                <input type="text" name="contact_number"
                 id="contact_number" class="form-control"
                 placeholder="Enter the contact number" autocomplete="off"
                 required="required">
            </div>

        <!--address-->

        <div class="form-outline mb-4 w-50 m-auto">
                <label for="address" class="form-label mt-2">Address</label>
                <input type="text" name="address"
                 id="address" class="form-control"
                 placeholder="Enter the address" autocomplete="off"
                 required="required">
            </div>

        <!--submit button-->

        <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mt-3 mb-5 px-3" value="insert products">
            </div>



        </form>

    </div>
   <!--footter-->
 <!-- include footer -->
 <?php
 include("../includes/footer.php");
 ?>
</div> 
</body>
</html>