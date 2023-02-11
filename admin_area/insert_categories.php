<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
  $category_title=$_POST['cat_title'];
  //select the data
  $select_query ="select * from `categories` where category_title='$category_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script> alert('this category is present inside the data base')</script>";
  }else{
  
  $insert_query="insert into `categories` (category_title) values ('$category_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script>alert('category has been inserted successfully') </script>";
  }
}
}
?>


<h2 class="text-center p-3">Insert categories</h2>

<form action="" method="post" class="mb-2">
<div class="input-group w=90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid 
    fa-receipt"></i></span>
 
  <input type="text" class="form-control" name="cat_title" placeholder="insert category"
   aria-label="username" aria-describedby="basic-addon1">
</div>


<div class="input-group w=10 mb-2 m-auto">
 
  <input type="submit" class="bg-info border-0 p-2" name="insert_cat" value="insert categories" 
   aria-label="insert categories" aria-describedby="basic-addon1" calss="bg-info"> 
 
</div>

</form>