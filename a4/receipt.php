<?php
include "tools.php";
session_start();




$error = false;
$required = array('username', 'email', 'mobile', 'creditcard','dateTo');
foreach($required as $field) {
  if (empty($_SESSION[$field])) { 
    
    $error = true;
  }
}

if ($error) {
  header('location: index.php');
} 
preShow($_SESSION);

?>
<?php 
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$mobile = $_SESSION['mobile'];
$creditcard = $_SESSION['creditcard'];
$expiryday = $_SESSION['dateTo'];
$price = $_SESSION['price'];
$sta = $_SESSION['STA'];
$stp = $_SESSION['STP'];
$stc = $_SESSION['STC'];
$fca = $_SESSION['FCA'];
$fcp = $_SESSION['FCP'];
$fcc = $_SESSION['FCC'];
$movieName = $_SESSION['movieName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>tax invoice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="receipt.css">
  <link rel="stylesheet" href="font/flaticon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Tax Invoice</h1>
    </div>
    <div class="row text-start">
        <div class="col-4 offset-2">
            <h4>AQCine</h4>
            <img src="img/AQ logo.jpg" alt="">
            <p>1/1 Truong Chinh, Tan Phu District</p>
            <p>ABN Number: 00 123 456 789</p>
        </div>
    </div>
    <table class="table table-borderless">
        <tbody>
          <tr>
            <th scope="col"></th>
            <th scope="col">Customer:</th>
            <td scope="col"></td>
            <td scope="col"><?php echo $username?></td>
          </tr>
        
          <tr>
            <th scope="row"></th>
            <th>Mobile:</th>
            <td></td>
            <td><?php echo $mobile?></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <th>Movie:</th>
            <td></td>
            <td><?php echo $movieName?></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <th>Day&Time:</th>
            <td></td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row"></th>
            <th>Seat details:</th>
            <td></td>
            <td>x<?php echo $sta?> <?php echo $stp?> <?php echo $stc?> <?php echo $fca?> <?php echo $fcp ?> <?php echo $fcc?></td>
          </tr>
          <tr>
            <th scope="row"></th>
            <th>Ticket Price:</th>
            <td></td>
            <td>$<?php echo $price?> </td>
          </tr>
        </tbody>
      </table>
      <br><br><br><br>
      <div class="row text-start">
        <div class="col-4 offset-2">
            <h4>TICKET</h4>
            
        </div>
    </div>
    <br>
    
<div class="col-5 offset-1">
<table class="table table-bordered">
  <tbody>
    <tr>
      
      <td scope="col" colspan="2" >AQCine<img src="img/AQ logo.jpg" alt=""></td>
      
      
    </tr>
  </tbody>
  <tbody>
    <tr>
      
      <td colspan="2">Movie:<?php echo $movieName?></td>
     
      
      
    </tr>
    <tr>
    <td>Day:</td>
    <td>Time:</td>
    </tr>
   
    <tr>
    <td>Seat:</td>
    <td>Hall:</td>
    </tr>
    <tr>
      
      <td colspan="2">Thank you for using our service.</td>
      
    </tr>
     <tr>
      
      <td colspan="2">Happy watching!</td>
     
    </tr>
  </tbody>
</table>
</div>
        
    
</body>
</html>