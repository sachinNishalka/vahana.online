<?php
// include connect file
include("./includes/connect.php");

//getting products

//  function getproducts(){
//     global $con;

//     //condition to check isset or not

//     if(!isset($_GET['category'])){
//     if(!isset($_GET['brand'])){
    

//     $select_query="select * from `products` order by date limit 0,1";
//     $result_query=mysqli_query($con,$select_query);
//     //$row=mysqli_fetch_assoc($result_query);
//     //echo $row['product_title'];
//     while($row=mysqli_fetch_assoc($result_query)){
//       $product_id=$row['product_id'];
//       $product_title=$row['product_title'];
//       $vehical_condition=$row['vehical_condition'];
//       $product_image1=$row['product_image1'];
//       $product_price=$row['product_price'];
//       $category_id=$row['category_id'];
//       $brand_id=$row['brand_id'];
//       $date=$row['date'];
//       echo "<div class='col-md-4 mb-2'>
//       <div class='card' >
//         <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
//         <div class='card-body'>
//           <h5 class='card-title'>$product_title</h5>
//           <p class='card-text'>$vehical_condition</p>
//           <p class='product_price'>Rs-$product_price/=</p>
//           <p class='card-date'>post date - $date</p>
//           <a href='#' class='btn btn-warning'>Add to Wishlist</a>
//           <a href='#' class='btn btn-primary'>View more</a>
//           <p class='card-date'>$date</p>
//         </div>
//       </div>
//     </div>";
// }

// }
// }
// }

//getting all products

function get_all_products(){
 
    global $con;

    //condition to check isset or not

    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    

    $select_query="select * from `products` order by date ";
    $result_query=mysqli_query($con,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $vehical_condition=$row['vehical_condition'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      $date=$row['date'];
      echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3 ' src='./admin_area/product_images/$product_image1' alt='$product_title'>
    
      <h5 class='card-title'>$product_title</h5>
      <h4 class='product_price'>Rs.$product_price</h4>
      <h6 class='date'>$date</h6>
      
      <div class='d-grid gap-2 d-md-block'>
        <button type='button' class='btn btn-warning'>Add to Wishlist</button>
        <a href='product_details.php?product_id=$product_id'><button class='btn btn-primary'  type='button'>view more</button></a>
      </div>
    </div>";
}

}
}


}
//getting unique catgories

function get_unique_categories(){
    global $con;

    //condition to check isset or not

    if(isset($_GET['category'])){
    $category_id=$_GET['category'];
    

    $select_query="select * from `products` where category_id=$category_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='px-3 text-denger'>NO items in this category</h2>";
    }
 
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $vehical_condition=$row['vehical_condition'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      $date=$row['date'];
      echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3 ' src='./admin_area/product_images/$product_image1' alt='$product_title'>
    
      <h5 class='card-title'>$product_title</h5>
      <h4 class='product_price'>Rs.$product_price</h4>
      <h6 class='date'>$date</h6>
      
      <div class='d-grid gap-2 d-md-block'>
        <button type='button' class='btn btn-warning'>Add to Wishlist</button>
        <a href='product_details.php?product_id=$product_id'><button class='btn btn-primary'  type='button'>view more</button></a>
      </div>
    </div>";
}

}
}

//getting unique brands

function get_unique_brands(){
    global $con;

    //condition to check isset or not

    if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
    

    $select_query="select * from `products` where brand_id=$brand_id";
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='px-3 text-denger'>NO items in this brand</h2>";
    }
 
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $vehical_condition=$row['vehical_condition'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      $date=$row['date'];
      echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3 ' src='./admin_area/product_images/$product_image1' alt='$product_title'>
    
      <h5 class='card-title'>$product_title</h5>
      <h4 class='product_price'>Rs.$product_price</h4>
      <h6 class='date'>$date</h6>
      
      <div class='d-grid gap-2 d-md-block'>
        <button type='button' class='btn btn-warning'>Add to Wishlist</button>
        <a href='product_details.php?product_id=$product_id'><button class='btn btn-primary'  type='button'>view more</button></a>
      </div>
    </div>";
}

}
}


 //desplaying brands in side nav
 function getbrands(){
    global $con;
    $select_brands="select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];
//echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo " <li class='nav-item active'>
  <a class='nav-link' href='display_all.php?brand= $brand_id'><h5>$brand_title</h5></a>
</li>     ";
}
 }

 //categories

 function getcategories(){
    global $con;
    $select_categories="select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);

while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo " <li class='nav-item active'>
  <a class='nav-link' href='display_all.php?category= $category_id'><h6>$category_title</h6></a>
</li>     ";
}
 }

 //searching products function

 function search_products(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
    $search_quary="select * from `products` where product_keywords like 
    '%$search_data_value%'";
    
    $result_query=mysqli_query($con,$search_quary);
    
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class='px-3 text-denger'>No results match, no item found in this category</h2>";
    }

    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $vehical_condition=$row['vehical_condition'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      $date=$row['date'];
      echo "<div class='product text-center col-lg-3 col-md-4 col-12'>
      <img class='img-fluid mb-3 ' src='./admin_area/product_images/$product_image1' alt='$product_title'>
    
      <h5 class='card-title'>$product_title</h5>
      <h4 class='product_price'>Rs.$product_price</h4>
      <h6 class='date'>$date</h6>
      
      <div class='d-grid gap-2 d-md-block'>
        <button type='button' class='btn btn-warning'>Add to Wishlist</button>
        <a href='product_details.php?product_id=$product_id'><button class='btn btn-primary'  type='button'>view more</button></a>
      </div>
    </div>";
}

}
}

// view details function

function view_details(){
  global $con;

    //condition to check isset or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
    $product_id=$_GET['product_id'];

    $select_query="select * from `products` where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);
    
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $vehical_condition=$row['vehical_condition'];
      $product_image1=$row['product_image1'];
      $product_image2=$row['product_image2'];
      $product_image3=$row['product_image3'];
      $product_image4=$row['product_image4'];
      $product_image5=$row['product_image5'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      $date=$row['date'];
      $contact_number=$row['contact_number'];
      $address=$row['address'];
      echo "<div class='container-fluid p-0 '>
    

      <div class='bg-light p-1'>
      <h3 class='text-center text-light'>Vehicle Store</h3>
</div>
  <section class='container sproduct my-5 pt-5'>
  <div class='row mt-5'>
  <div class='col-lg-5 col-md-12 col-12'>
     <img class='img-fluid w-100 pb-1' src='./admin_area/product_images/$product_image1' alt='$product_title' id='MainImg'>

    <div class='small-img-group'>
        <div class='small-img-col'>
            <img src='./admin_area/product_images/$product_image2' alt='' width='100%' class='small-img'>
        </div>
        <div class='small-img-col'>
            <img src='./admin_area/product_images/$product_image3' alt='' width='100%' class='small-img'>
        </div>
        <div class='small-img-col'>
            <img src='./admin_area/product_images/$product_image4' alt='' width='100%' class='small-img'>
        </div>
        <div class='small-img-col'>
            <img src='./admin_area/product_images/$product_image5' alt='' width='100%' class='small-img'>
        </div>
    </div>
  </div>
   <div class='col-lg-5 col-md-12 col-12'>
      <h6 class='pt-2 font-weight-bold'>Car/Luxury</h6>
      <h3 class='py-2 font-weight-bold card-title'>$product_title</h3>
      <h1 class='font-weight-bold product_price'>Rs. $product_price</h1>
      <button type='button' class='btn btn-warning'>Add to Wishlist</button>
      
      <h6 class='py-2 font-weight-bold card-title'>condition -$vehical_condition</h6>
      <h6 class='py-2 font-weight-bold card-title'>post date -$date</h6>
      <h6 class='py-2 font-weight-bold card-title'>contact number - $contact_number</h6>
      <h6 class='py-2 font-weight-bold card-title'>address - $address</h6>
</div>
  </section>";
}

}
}
}
}

?>