<?php
session_start();
$con = mysqli_connect("localhost","root","","productDb");



if (isset($_POST['submit'])) {

  $name = $_POST['name'];

  $code = $_POST['code'];

  if (isset($_POST['uploadfile'])) {

    $image = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "image/".$image;   
  }

  $price = $_POST['price'];
  $sql = "INSERT INTO `producttb`(`name`, `code`, `image`, `price`) VALUES ('$name','$code','$image','$price')";

  $query_run = mysqli_query($con, $sql);

  if($sql_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: add_product.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: add_product.php");
    }
}




?>

<!DOCTYPE html>

<html>

<body>

<h2>Add Product</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Product:</legend>

    Product Name:<br>

    <input type="text" name="name">

    <br>

    Product code:<br>

    <input type="text" name="code">

    <br>

    Product image:<br>


    <div id="wrapper">

<! specify the encoding type of the form using the 

        enctype attribute >

<form method="POST" action="" enctype="multipart/form-data">        

    <input type="file" name="choosefile" value="" />
    

    <div>

        <button type="submit" name="uploadfile">

        UPLOAD

        </button>
    

    <br>

    Product Price:<br>

    <input type="text" name="price">

    <br>
    <br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>



</body>

</html>