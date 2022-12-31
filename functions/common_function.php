<?php
// include connect file
include('./includes/connect.php');

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
      echo "<div class='col-md-4 mb-2'>
      <div class='card' >
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$vehical_condition</p>
          <p class='product_price'>Rs-$product_price/=</p>
          <p class='card-date'>post date - $date</p>
          <a href='#' class='btn btn-warning'>Add to Wishlist</a>
          <a href='#' class='btn btn-primary'>View more</a>
          
        </div>
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
      echo "<div class='col-md-4 mb-2'>
      <div class='card' >
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$vehical_condition</p>
          <p class='product_price'>Rs-$product_price/=</p>
          <p class='card-date'>Post Date - $date</p>
          <a href='#' class='btn btn-warning'>Add to Wishlist</a>
          <a href='#' class='btn btn-primary'>View more</a>
          <p class='card-date'>$date</p>
        </div>
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
      echo "<div class='col-md-4 mb-2'>
      <div class='card' >
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$vehical_condition</p>
          <p class='product_price'>Rs-$product_price/=</p>
          <p class='card-date'>post date - $date</p>
          <a href='#' class='btn btn-warning'>Add to Wishlist</a>
          <a href='#' class='btn btn-primary'>View more</a>
          <p class='card-date'>$date</p>
        </div>
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
  echo " <li class='nav-item '>
  <a href='index.php?brand= $brand_id' class='nav-link text-light'><h6>$brand_title</h6></a>      
</li>";
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
  echo " <li class='nav-item '>
  <a href='index.php?category= $category_id' class='nav-link text-light'><h6>$category_title</h6></a>      
</li>";
}
 }

 //searching products function

 function search_products(){
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
      echo "<div class='col-md-4 mb-2'>
      <div class='card' >
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$vehical_condition</p>
          <p class='product_price'>Rs-$product_price/=</p>
          <p class='card-date'>post date - $date</p>
          <a href='#' class='btn btn-warning'>Add to Wishlist</a>
          <a href='#' class='btn btn-primary'>View more</a>
          <p class='card-date'>$date</p>
        </div>
      </div>
    </div>";
}

}
}

 }
?>