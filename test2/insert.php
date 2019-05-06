<?php
$name = $_POST['Name'];
$author = $_POST['Author'];
$price = $_POST['Price'];
$phoneCode = $_POST['PhoneCode'];
$phone = $_POST['Phone'];
if (!empty($name) || !empty($author) || !empty($price) || !empty($phoneCode) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "sell_data";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {

     $INSERT = "INSERT Into sell (name, author, price, phoneCode, phone) values(?, ?, ?, ?, ?)";
     //Prepare statement

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssiii", $name, $author, $price, $phoneCode, $phone);
      $stmt->execute();
      echo "New record inserted sucessfully";
     }
     $stmt->close();
     $conn->close();
} else {
 echo "All field are required";
 die();
}
?>
