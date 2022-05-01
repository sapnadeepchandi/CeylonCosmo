<?php
session_start();
$con = mysqli_connect("localhost","root","","productDb");



if (isset($_POST['submit'])) {

  $first_name = $_POST['firstname'];

  $last_name = $_POST['lastname'];

  $email = $_POST['email'];

  $phone = $_POST['phone'];

  $address = $_POST['address'];

  $distric = $_POST['distric'];

  $sql = "INSERT INTO `deliver`(`firstname`, `lastname`, `email`, `phone`,`address`, `distric`) VALUES ('$first_name','$last_name','$email','$phone','$address','$distric')";

  $query_run = mysqli_query($con, $sql);

  if($sql_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: home.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: home.php");
    }
}




?>

<!DOCTYPE html>

<html>

<body>

<h2>Cash on Delivery</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Phone:<br>

    <input type="text" name="phone">

    <br>

    Address:<br>

    <input type="text" name="address">

    <br>


    Distric:<br>

    <input type="radio" name="distric" value="Colombo-1-15">Colombo 1-15

    <input type="radio" name="distric" value="Other">Other

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>



</body>

</html>