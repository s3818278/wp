<!DOCTYPE html>
<html lang="en">

<head>
  <title>AQCine</title>
  <?php
  session_start();
  include 'tools.php';
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="font/flaticon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">

</head>
<style>
  .error {
    color: red;
  }
</style>
<?php

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialChars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if( empty($_POST["username"])){
      $nameErr = "Name is required";
  }elseif(!preg_match("/^[a-zA-Z ]*$/",$name=test_input($_POST["username"]))){
      $nameValue= $_POST["username"];
      $nameErr="only letters and space allowed";
  }else{
      $color1= "green";
      $nameValue= $_POST["username"];

  }
  if( empty($_POST["email"])){
    $emailErr = "Email is required";
}elseif(!filter_var($email = test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)){
    $emailValue= $_POST["email"];
    $emailErr="Invalid email format";
}else{
    $color2= "green";
    $emailValue= $_POST["email"];

}
if( empty($_POST["mobile"])){
  $mobileErr = "Mobile is required";
}elseif(!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/",$mobile=test_input($_POST["mobile"]))){
  $mobileValue= $_POST["mobile"];
  $mobileErr="Australian mobile only.";
}else{
  $color3= "green";
  $mobileValue= $_POST["mobile"];

}
if( empty($_POST["creditcard"])){
  $creditcardErr = "Creditcard is required";
}elseif(!preg_match("/^[0-9]{14,19}$/",$creditcard=test_input($_POST["creditcard"]))){
  $creditValue= $_POST["creditcard"];
  $creditErr="invalid creditcard.";
}else{
  $color4= "green";
  $creditValue= $_POST["creditcard"];

}

$STAvalue= $_POST["STA"];
$STPvalue= $_POST["STP"];
$STCvalue= $_POST["STC"];
$FCAvalue= $_POST["FCA"];
$FCPvalue= $_POST["FCP"];
$FCCvalue= $_POST["FCC"];
$STA = 0;
$STP = 0;
$STC = 0;
$FCA = 0;
$FCP = 0;
$FCC = 0;
function totalPrice($number,$string){
  if(!empty($number)){
    $string = $number;
  }
}
totalPrice($STAvalue,$STA);
totalPrice($STPvalue,$STP);
totalPrice($STCvalue,$STC);
totalPrice($FCAvalue,$FCA);
totalPrice($FCPvalue,$FCP);
totalPrice($FCCvalue,$FCC);

$valueArray = array('STA', 'STP', 'STC', 'FCA', 'FCP', 'FCC');
foreach($valueArray as $value){
  if(!empty($_POST[$value])){
    $priceErr = "";
    $color5 = "green";
  }elseif($color5 != "green"){
    $priceErr = "specific number of people needed to be clarified";
  }
}
if(!empty($_POST['movieName'])){
  $color6="green";
  $movieErr ="";
}else{
  $movieErr = "choose your movie first";
}

    if($color1 =="green" && $color2 =="green" && $color3 =="green" && $color4 =="green" && $color5 =="green" && $color6="green"){
      $_SESSION = $_POST;
      header('location: receipt.php');
      


} 
} 

?>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Up</button>
  <script>XREADY = false; window.onload = function () { window.App.deferredLoad() }</script>
  <script>
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function () { scrollFunction() };
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <div class="icon">
  </div>
  </button>
  </nav>
  <nav class="navbar navbar-expand-md   bg-light sticky-top">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse-target">
      <i class="fa fa-caret-square-o-down" style="font-size:36px"></i>
    </button>
    <div class="collapse navbar-collapse" id="collapse-target">
      <a class="navbar-brand"><img style="height: 55px;" src="./AQ/AQ logo.jpg"></a>
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link scroll" href="https://s3818278.github.io/wp/a3/index.html#about-us-section">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="https://s3818278.github.io/wp/a3/index.html#price-section">Price Section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="https://s3818278.github.io/wp/a3/index.html#now-showing-section">Now
            showing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scroll" href="https://s3818278.github.io/wp/a3/index.html#synopsis-area-section">Synopsis
            Area</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link scroll" href="https://s3818278.github.io/wp/a3/index.html#booking-area-section">Booking
            Area</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <div id="about-us-section" class="about-us ">
    <div class="container bg1">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-10 ">
          <div class="section-tittle bgplus">
            <h1 style="font-family:trebuchet ms;">About us</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6 ">
        <div class="single-do text-center mb-30">
          <div class="do-caption">
            <h3 style="font-family:verdana;">Improvement</h3>
            <p>After 3 months of extensive improvements and renovations, we have upgraded our
              facilities in order to provide customers with best movies experiences.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6  ">
        <div class="single-do text-center mb-30">
          <div class="do-caption">
            <h3 style="font-family:verdana;">New seats</h3>
            <p>There are new seats: standard seats and reclinable first class seats</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 ">
        <div class="do-caption bgplus">
          <h3 style="font-family:verdana;">Sound upgraded</h3>
          <p>The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound. See
            <a href="https://www.dolby.com/us/en/cinema">Dolby</a> for more information.</p>
        </div>
      </div>

    </div>
  </div>
  <div class="bg3"></div>
  <div class="container " id="About-us">
    <div class="row d-flex align-items-end justify-content-center text-center bg1">
      <div class="col-lg-12 col-md-12 ">
        <div class="standard-seats-cap bg2">
          <h4 style="font-family:verdana;">Images of our new seats</h4>
          <p>Design-led aesthetics, supreme comfort and ultimate luxury</p>
        </div>
      </div>
      <div class="container-fluid ">
        <div class="row bg3">
          <div class="col-sm-12">
            <div id="slide" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 300px; margin: auto;">
                          <img class="card-img-top" src="./AQ/Standard Adult.jpg" alt="">
                          <div class="card-body">
                            <h5>Standard Adult</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 300px;">
                          <img class="card-img-top" src="./AQ/Standard Concession.jpg" alt="">
                          <div class="card-body">
                            <h5>Standard Concession</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 300px;">
                          <img class="card-img-top" src="./AQ/Standard Child.jpg" alt="">
                          <div class="card-body">
                            <h5>Standard Child</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 300px;margin: auto;">
                          <img class="card-img-top" src="./AQ/First Class Adult.jpg" alt="">
                          <div class="card-body r">
                            <h5>First Class Adult</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 300px;">
                          <img class="card-img-top" src="./AQ/First Class Concession.jpg" alt="">
                          <div class="card-body">
                            <h5>First Class Conssesion</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-12">
                        <div class="card" style="width: 300px;">
                          <img class="card-img-top" src="./AQ/First Class Child.jpg" alt="">
                          <div class="card-body">
                            <h5>First Class Child</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <a href="https://github.com/s3818278/wp" class="carousel-control-prev" data-slide="prev">
                  <span class="carousel-control-prev-icon pink"></span>
                </a>
                <a href="https://github.com/s3818278/wp" class="carousel-control-next" data-slide="next">
                  <span class="carousel-control-next-icon pink"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="nowshowing-area" id="now-showing-section">
    <div class="container bg3 justify-content-between" style="background-position: 5cm;">
      <div class="row d-flex justify-content-center bg1">
        <div class="col-lg-10 ">
          <div class="section-tittle ">
            <h1 style="font-family:trebuchet ms">Now Showing</h1>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-start">
        <div class="col-lg-6">
          <table class="border border-dark">
            <tbody>
              <tr>
                <td rowspan="2">
                  <div id="table-card " class="card">
                    <img src="./AQ/King's Man.jpg" alt="Avatar" style="height: 8cm;">
                  </div>
                </td>
                <td class="border-top border-right border-bottom border-dark ">
                  <h4>The King's Man</h4>
                  <h5>(PG-13)</h5>
                  <br>
                  <ul><button type="button" class="btn btn-primary">9:00</button></ul>
                  <ul><button type="button" class="btn btn-primary">13:00</button></ul>
                  <ul><button type="button" class="btn btn-primary">14:30</button></ul>
                  <ul><button type="button" class="btn btn-primary">18:00</button></ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-lg-6">
          <table class="border border-dark">
            <tbody>
              <tr>
                <td rowspan="2">
                  <div id="table-card " class="card">
                    <img src="./AQ/Bloodshot.jpg" alt="Avatar" style="height: 8cm;">
                  </div>
                </td>
                <td class="border-top border-right border-bottom border-dark ">
                  <h4>Bloodshot</h4>
                  <h5>(R)</h5>
                  <br>
                  <br>
                  <ul><button type="button" class="btn btn-primary">14:45</button></ul>
                  <ul><button type="button" class="btn btn-primary">18:30</button></ul>
                  <ul><button type="button" class="btn btn-primary">19:00</button></ul>
                  <ul><button type="button" class="btn btn-primary">20:00</button></ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <br>
      <div class="row d-flex justify-content-start">
        <div class="col-lg-6">
          <table class="border border-dark">
            <tbody>
              <tr>
                <td rowspan="2">
                  <div id="table-card " class="card">
                    <img src="./AQ/Black Widow.jpg" alt="Avatar" style="height: 8cm;">
                  </div>
                </td>
                <td class="border-top border-right border-bottom border-dark ">
                  <h4>Black Widow</h4>
                  <h5>(PG-13)</h5>
                  <br>
                  <br>
                  <ul><button type="button" class="btn btn-primary">15:30</button></ul>
                  <ul><button type="button" class="btn btn-primary">17:00</button></ul>
                  <ul><button type="button" class="btn btn-primary">18:00</button></ul>
                  <ul><button type="button" class="btn btn-primary">21:00</button></ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-lg-6">
          <table class="border border-dark">
            <tbody>
              <tr>
                <td rowspan="2">
                  <div id="table-card " class="card">
                    <img src="./AQ/Monster Hunter.jpg" alt="Avatar" style="height: 8cm;">
                  </div>
                </td>
                <td class="border-top border-right border-bottom border-dark ">
                  <h4>Monster Hunter</h4>
                  <h5>(PG)</h5>
                  <br>
                  <br>
                  <ul><button type="button" class="btn btn-primary">12:45</button></ul>
                  <ul><button type="button" class="btn btn-primary">14:40</button></ul>
                  <ul><button type="button" class="btn btn-primary">18:00</button></ul>
                  <ul><button type="button" class="btn btn-primary">18:30</button></ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


  </div>
  </div>
  </div>
  <div id="price-section" class="price-section-area">
    <div class="container bg3">
      <div class="row d-flex  justify-content-center  bg2">
        <div class="col-lg-10">
          <div class="section-tittle bgplus">
            <h1 style="font-family:trebuchet ms">Price Section</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex">
      <table class="table table-bordered ">
        <tbody>
          <tr class="table-bordered">
            <td class="table_cell1 border-dark">
              <h5>Seat Type</h5>
              <h5></h5>
            </td>
            <td class="table_cell2 border-dark">
              <h5>Seat Code</h5>
            </td>
            <td class="table_cell3 border-dark">
              <h5>All day Monday and Wednesday AND 12pm on Weekdays</h5>
            </td>
            <td class="table_cell4 border-dark">
              <h5>All other times</h5>
            </td>
          </tr>
          <tr class="table-bordered">
            <td class="table_cell1_data border-dark">Standard Adult</td>
            <td class="table_cell1_data border-dark">STA</td>
            <td class="table_cell1_data border-dark">12.00</td>
            <td class="table_cell1_data border-dark">19.80</td>
          </tr>
          <tr class="table-bordered">
            <td class="table_cell1_data border-dark">Standard Concession</td>
            <td class="table_cell1_data border-dark">STP</td>
            <td class="table_cell1_data border-dark">11.50</td>
            <td class="table_cell1_data border-dark">
              17.50</td>
          </tr>
          <tr class="table-bordered">
            <td class="table_cell1_data border-dark">Standard Child </td>
            <td class="table_cell1_data border-dark">STC</td>
            <td class="table_cell1_data border-dark">14.00</td>
            <td class="table_cell1_data border-dark">
              15.30</td>
          </tr>
          <tr class="table-bordered">
            <td class="table_cell1_data border-dark">First Class Adult</td>
            <td class="table_cell1_data border-dark">
              FCA</td>
            <td class="table_cell1_data border-dark">24.00</td>
            <td class="table_cell1_data border-dark">
              30.00</td>
          </tr>
          <tr class="table-bordered">
            <td class="table_cell1_data border-dark">First Class Concession</td>
            <td class="table_cell1_data border-dark">
              FCP</td>
            <td class="table_cell1_data border-dark">22.50</td>
            <td class="table_cell1_data border-dark">
              27.00</td>
          </tr>
          <tr class="table-bordered">
            <td class="table_cell1_data border-dark">First Class Child</td>
            <td class="table_cell1_data border-dark"> FCA</td>
            <td class="table_cell1_data border-dark">21.00</td>
            <td class="table_cell1_data border-dark">24.00</td>
          </tr>
        </tbody>
      </table>
      <div class="row bgplus">
        <span style="margin-left: 14cm;">
          <h5 class="text-center border rounded border-dark bg-warning">Book at 12pm on weekdays for discount
        </span></h5></span>
      </div>
    </div>
    <div id="synopsis-area-section" class="synopsis-area">
      <div class="container bg3">
        <div class="row d-flex  justify-content-center  bg2">
          <div class="col-lg-10 ">
            <div class="section-tittle  bgplus">
              <h1 style="font-family:trebuchet ms;">Synopsis Area</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 offset-md-1">
          <h3>The King's Man</h3>
        </div>
        <div class="col-md-5 offset-md-1">
          <h3>R-Rated</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4  ">
          <h4>Plot Description
          </h4>
          <p>
            As a collection of history's worst tyrants and criminal masterminds gather to plot a war to wipe out
            millions, one man and his protégé must race against time to stop them.
          </p>
          <p>
            — 20th Century Studios
          </p>
        </div>
        <div class="col-md-4 offset-md-1 bg4 align-items-start">
          <iframe width="600" height="350" src="https://www.youtube.com/embed/0pbLPOrTSsI" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="row">
          <div class="col-md-5">
            <h3 class="text-start">Make a booking:
              <form name="date" class="text-start">
                <select id="mySelect">
                  <option id="1">Monday</option>
                  <option>Tuesday</option>
                  <option>Wednesday</option>
                  <option>Thursday</option>
                  <option>Friday</option>
                  <option>Saturday</option>
                  <option>Sunday</option>
                </select>
              </form>
            </h3>
          </div>
          <div class="col-md-7 align-items-end">
            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
              <button onclick="discountedPrice1()" class="btn  btn-secondary border rounded" target="_blank"
                id="demo1">9:00</button>
              <button type="button" class="btn btn-secondary border rounded" onclick="discountedPrice2()"
                id="demo2">13:00</button>
              <button type="button" class="btn btn-secondary border rounded" onclick="discountedPrice3()"
                id="demo3">14:00</button>
              <button type="button" class="btn  btn-secondary border rounded" onclick="discountedPrice4()"
                id="demo4">18:00</button>
            </div>
          </div>
        </div>
        <div id="booking-area-section" class="booking-area-section ">
          <div class="container bg3">
            <div class="row d-flex  justify-content-center  bg1">
              <div class="col-lg-10">
                <div class="section-tittle">
                  <h1>Booking Area</h1>
                  <br>
                </div>

              </div>
            </div>
          </div>
          <h1><span style="text-align: center; margin-left: 5cm; font-weight: 400;"
              id="movieName"><?php echo $_POST['movieName'];?></span><span style="text-align: center; font-weight: 400;"
              id="today"></span></h1>
          <span class="error"
            style="color:<?php echo $color6?>; font-size:20px; margin-left:5cm">*<?php echo $movieErr;?></span>

          <div class="row">
            <div class="col-2 offset-1">
              <h3>Standard</h3>
              <form class="form-horizontal" role="form" enctype="multipart/form-data" id="form2" name="inputForm"
                novalidate method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="well">
                  <div class="form-group">
                    <label class="col-xs-3 control-label"><strong>Adult</strong>&nbsp;</label>
                    <div class="col-xs-2">
                      <select class="form-control" id="seats-STA" onchange="totalPrice()" name="STA"
                        value="<?php echo $STAvalue?>">
                        <option onchange="totalPrice()" value=''>--Please Select--</option>
                        <option onchange="totalPrice()" value="1"
                          <?php if($STAvalue=="1"){echo "selected=\"selected\"";} ?>>1</option>
                        <option onchange="totalPrice()" value="2"
                          <?php if($STAvalue=="2"){echo "selected=\"selected\"";} ?>>2</option>
                        <option onchange="totalPrice()" value="3"
                          <?php if($STAvalue=="3"){echo "selected=\"selected\"";} ?>>3</option>
                        <option onchange="totalPrice()" value="4"
                          <?php if($STAvalue=="4"){echo "selected=\"selected\"";} ?>>4</option>
                        <option onchange="totalPrice()" value="5"
                          <?php if($STAvalue=="5"){echo "selected=\"selected\"";} ?>>5</option>
                        <option onchange="totalPrice()" value="6"
                          <?php if($STAvalue=="6"){echo "selected=\"selected\"";} ?>>6</option>
                        <option onchange="totalPrice()" value="7"
                          <?php if($STAvalue=="7"){echo "selected=\"selected\"";} ?>>7</option>
                        <option onchange="totalPrice()" value="8"
                          <?php if($STAvalue=="8"){echo "selected=\"selected\"";} ?>>8</option>
                        <option onchange="totalPrice()" value="9"
                          <?php if($STAvalue=="9"){echo "selected=\"selected\"";} ?>>9</option>
                        <option onchange="totalPrice()" value="10"
                          <?php if($STAvalue=="10"){echo "selected=\"selected\"";} ?>>10</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-3 control-label"><strong>Concession</strong>&nbsp;</label>
                    <div class="col-xs-2">
                      <select class="form-control" id="seats-STP" onchange="totalPrice()" name="STP"
                        value="<?php echo $STPvalue?>">
                        <option onchange="totalPrice()" value=''>--Please Select--</option>
                        <option onchange="totalPrice()" value="1"
                          <?php if($STPvalue=="1"){echo "selected=\"selected\"";} ?>>1</option>
                        <option onchange="totalPrice()" value="2"
                          <?php if($STPvalue=="2"){echo "selected=\"selected\"";} ?>>2</option>
                        <option onchange="totalPrice()" value="3"
                          <?php if($STPvalue=="3"){echo "selected=\"selected\"";} ?>>3</option>
                        <option onchange="totalPrice()" value="4"
                          <?php if($STPvalue=="4"){echo "selected=\"selected\"";} ?>>4</option>
                        <option onchange="totalPrice()" value="5"
                          <?php if($STPvalue=="5"){echo "selected=\"selected\"";} ?>>5</option>
                        <option onchange="totalPrice()" value="6"
                          <?php if($STPvalue=="6"){echo "selected=\"selected\"";} ?>>6</option>
                        <option onchange="totalPrice()" value="7"
                          <?php if($STPvalue=="7"){echo "selected=\"selected\"";} ?>>7</option>
                        <option onchange="totalPrice()" value="8"
                          <?php if($STPvalue=="8"){echo "selected=\"selected\"";} ?>>8</option>
                        <option onchange="totalPrice()" value="9"
                          <?php if($STPvalue=="9"){echo "selected=\"selected\"";} ?>>9</option>
                        <option onchange="totalPrice()" value="10"
                          <?php if($STPvalue=="10"){echo "selected=\"selected\"";} ?>>10</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-3 control-label"><strong>Child</strong>&nbsp;</label>
                    <div class="col-xs-2">
                      <select class="form-control" id="seats-STC" onchange="totalPrice()" name="STC"
                        value="<?php echo $STCvalue?>">
                        <option onchange="totalPrice()" value=''>--Please Select--</option>
                        <option onchange="totalPrice()" value="1"
                          <?php if($STCvalue=="1"){echo "selected=\"selected\"";} ?>>1</option>
                        <option onchange="totalPrice()" value="2"
                          <?php if($STCvalue=="2"){echo "selected=\"selected\"";} ?>>2</option>
                        <option onchange="totalPrice()" value="3"
                          <?php if($STCvalue=="3"){echo "selected=\"selected\"";} ?>>3</option>
                        <option onchange="totalPrice()" value="4"
                          <?php if($STCvalue=="4"){echo "selected=\"selected\"";} ?>>4</option>
                        <option onchange="totalPrice()" value="5"
                          <?php if($STCvalue=="5"){echo "selected=\"selected\"";} ?>>5</option>
                        <option onchange="totalPrice()" value="6"
                          <?php if($STCvalue=="6"){echo "selected=\"selected\"";} ?>>6</option>
                        <option onchange="totalPrice()" value="7"
                          <?php if($STCvalue=="7"){echo "selected=\"selected\"";} ?>>7</option>
                        <option onchange="totalPrice()" value="8"
                          <?php if($STCvalue=="8"){echo "selected=\"selected\"";} ?>>8</option>
                        <option onchange="totalPrice()" value="9"
                          <?php if($STCvalue=="9"){echo "selected=\"selected\"";} ?>>9</option>
                        <option onchange="totalPrice()" value="10"
                          <?php if($STCvalue=="10"){echo "selected=\"selected\"";} ?>>10</option>
                      </select>
                    </div>
                  </div>
                </div>

            </div>
            <div class="col-2">
              <h3>First class</h3>

              <div class="well">
                <div class="form-group">
                  <label class="col-xs-3 control-label"><strong>Adult</strong>&nbsp;</label>
                  <div class="col-xs-2">
                    <select class="form-control" id="seats-FCA" onchange="totalPrice()" name="FCA"
                      value="<?php echo $FCAvalue?>">
                      <option onchange="totalPrice()" value=''>--Please Select--</option>
                      <option onchange="totalPrice()" value="1"
                        <?php if($FCAvalue=="1"){echo "selected=\"selected\"";} ?>>1</option>
                      <option onchange="totalPrice()" value="2"
                        <?php if($FCAvalue=="2"){echo "selected=\"selected\"";} ?>>2</option>
                      <option onchange="totalPrice()" value="3"
                        <?php if($FCAvalue=="3"){echo "selected=\"selected\"";} ?>>3</option>
                      <option onchange="totalPrice()" value="4"
                        <?php if($FCAvalue=="4"){echo "selected=\"selected\"";} ?>>4</option>
                      <option onchange="totalPrice()" value="5"
                        <?php if($FCAvalue=="5"){echo "selected=\"selected\"";} ?>>5</option>
                      <option onchange="totalPrice()" value="6"
                        <?php if($FCAvalue=="6"){echo "selected=\"selected\"";} ?>>6</option>
                      <option onchange="totalPrice()" value="7"
                        <?php if($FCAvalue=="7"){echo "selected=\"selected\"";} ?>>7</option>
                      <option onchange="totalPrice()" value="8"
                        <?php if($FCAvalue=="8"){echo "selected=\"selected\"";} ?>>8</option>
                      <option onchange="totalPrice()" value="9"
                        <?php if($FCAvalue=="9"){echo "selected=\"selected\"";} ?>>9</option>
                      <option onchange="totalPrice()" value="10"
                        <?php if($FCAvalue=="10"){echo "selected=\"selected\"";} ?>>10</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-3 control-label"><strong>Concession</strong>&nbsp;</label>
                  <div class="col-xs-2">
                    <select class="form-control" id="seats-FCP" onchange="totalPrice()" name="FCP"
                      value="<?php echo $FCPvalue?>">
                      <option onchange="totalPrice()" value=''>--Please Select--</option>
                      <option onchange="totalPrice()" value="1"
                        <?php if($FCPvalue=="1"){echo "selected=\"selected\"";} ?>>1</option>
                      <option onchange="totalPrice()" value="2"
                        <?php if($FCPvalue=="2"){echo "selected=\"selected\"";} ?>>2</option>
                      <option onchange="totalPrice()" value="3"
                        <?php if($FCPvalue=="3"){echo "selected=\"selected\"";} ?>>3</option>
                      <option onchange="totalPrice()" value="4"
                        <?php if($FCPvalue=="4"){echo "selected=\"selected\"";} ?>>4</option>
                      <option onchange="totalPrice()" value="5"
                        <?php if($FCPvalue=="5"){echo "selected=\"selected\"";} ?>>5</option>
                      <option onchange="totalPrice()" value="6"
                        <?php if($FCPvalue=="6"){echo "selected=\"selected\"";} ?>>6</option>
                      <option onchange="totalPrice()" value="7"
                        <?php if($FCPvalue=="7"){echo "selected=\"selected\"";} ?>>7</option>
                      <option onchange="totalPrice()" value="8"
                        <?php if($FCPvalue=="8"){echo "selected=\"selected\"";} ?>>8</option>
                      <option onchange="totalPrice()" value="9"
                        <?php if($FCPvalue=="9"){echo "selected=\"selected\"";} ?>>9</option>
                      <option onchange="totalPrice()" value="10"
                        <?php if($FCPvalue=="10"){echo "selected=\"selected\"";} ?>>10</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-3 control-label"><strong>Child</strong>&nbsp;</label>
                  <div class="col-xs-2">
                    <select class="form-control" id="seats-FCC" onchange="totalPrice()" name="FCC"
                      value="<?php echo $FCCvalue?>">
                      <option onchange="totalPrice()" value=''>--Please Select--</option>
                      <option onchange="totalPrice()" value="1"
                        <?php if($FCCvalue=="1"){echo "selected=\"selected\"";} ?>>1</option>
                      <option onchange="totalPrice()" value="2"
                        <?php if($FCCvalue=="2"){echo "selected=\"selected\"";} ?>>2</option>
                      <option onchange="totalPrice()" value="3"
                        <?php if($FCCvalue=="3"){echo "selected=\"selected\"";} ?>>3</option>
                      <option onchange="totalPrice()" value="4"
                        <?php if($FCCvalue=="4"){echo "selected=\"selected\"";} ?>>4</option>
                      <option onchange="totalPrice()" value="5"
                        <?php if($FCCvalue=="5"){echo "selected=\"selected\"";} ?>>5</option>
                      <option onchange="totalPrice()" value="6"
                        <?php if($FCCvalue=="6"){echo "selected=\"selected\"";} ?>>6</option>
                      <option onchange="totalPrice()" value="7"
                        <?php if($FCCvalue=="7"){echo "selected=\"selected\"";} ?>>7</option>
                      <option onchange="totalPrice()" value="8"
                        <?php if($FCCvalue=="8"){echo "selected=\"selected\"";} ?>>8</option>
                      <option onchange="totalPrice()" value="9"
                        <?php if($FCCvalue=="9"){echo "selected=\"selected\"";} ?>>9</option>
                      <option onchange="totalPrice()" value="10"
                        <?php if($FCCvalue=="10"){echo "selected=\"selected\"";} ?>>10</option>
                    </select>
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="username"><strong>Price</strong></label>
                    <h3 class="border" id="totalPrice" name="totalprice" value=""><?php if(empty($_POST["price"])){
                                echo "$0.00";
                              }else{
                                echo $_POST["price"];
                              }
                              ?></h3>
                    <span class="error"
                      style="color:<?php echo $color5?>; font-size:15px;">*<?php echo $priceErr;?></span>
                    <input type="hidden" name="price"
                      value="<?php echo $STA*19.8 + $STC*17.5 + $STP*15.3 + $FCA*30 + $FCP*27 + $FCC*24?>"
                      id="slider_input" />
                    <input type="hidden" name="movieName" value="" id="MOVIE" />



                  </div>
                </div>
              </div>

            </div>



            <div class="col-lg-5 offset-1 align-item-start justify-content-start">


              <div class="form-control">
                <label for="username">Name</label>
                <input type="text" placeholder="Enter your name" id="username" name="username"
                  value='<?php echo $nameValue?>' />
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
                <span class="error" style="color:<?php echo $color1?>">*<?php echo $nameErr;?></span>
              </div>
              <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="Ex: abc@def.com" id="email" name="email"
                  value="<?php echo $emailValue?>" />
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
                <span class="error" style="color:<?php echo $color2?>">*<?php echo $emailErr;?></span>
                <div class="form-control">
                  <label for="username">Mobile</label>
                  <input type="tel" placeholder="Enter mobile number" id="mobile" name="mobile"
                    value="<?php echo $mobileValue?>" />
                  <i class="fa fa-check-circle"></i>
                  <i class="fa fa-exclamation-circle"></i>
                  <small>Error message</small>
                  <span class="error" style="color:<?php echo $color3?>">*<?php echo $mobileErr;?></span>
                </div>
                <div class="form-control">
                  <label for="username">Credit card</label>
                  <input type="text" placeholder="Enter credit card" id="creditcard" name="creditcard"
                    value="<?php echo $creditValue?>" />
                  <i class="fa fa-check-circle"></i>
                  <i class="fa fa-exclamation-circle"></i>
                  <small>Error message</small>
                  <span class="error" style="color:<?php echo $color4?>">*<?php echo $creditcardErr;?></span>
                </div>
                <input type="date" name="dateTo" value="<?php echo date('Y-m-d'); ?>" />

                <br>
                <br>
                <button type="submit" value="submit" name="submit" onclick="submitForms()"
                  class="btn btn-lg">Order</button>
                </form>
              </div>

            </div>
          </div>

          <script src="script.js">

          </script>
          <footer>
            <div class="footer-main" style="background-image: url(img/footer_bg.png);">
              <div class="footer-area footer-padding">
                <div class="container device-width">
                  <div class="row d-flex justiy-content-between">
                    <div class="col-lg-4 col-md-4 col-sm-7">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                          <div class="footer-logo">
                            <img src="./AQ/AQ logo.jpg" alt="">
                          </div>
                          <div class="footer-tittle">
                            <div class="footer-pera">
                              <p class="info1">
                                1/1 Truong Chinh, Tan Phu District
                                <br>
                                Ho Chi Minh, Vietnam
                              </p>
                              <p class="info2">AQCine@gmail.com</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-7">
                      <div class="single footer-caption mb-50">
                        <div class="footer-tittle">
                          <br>
                          <br>
                          <h4>Contact </h4>
                          <p>Full name: Hoang Anh Quan</p>
                          <p>Contact email: s3818278@rmit.edu.vn</p>
                          <p>Phone number: 0935439152</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row d-flex align-items-center">
                    <div class="col-xl-12">
                      <div class="footer-link text-center">
                        <p>Link to my Github reposity: <a href="https://github.com/s3818278/wp">Github
                            repository</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
</body>

<?php 

preShow($_POST); 
php2js($_POST,'pricesArrayJS');
echo $STAvalue;

?>
<h3> My code </h3>
<?php printMyCode()?>

<form>
  <input type='submit' name='session-reset' value='Reset the session'>
</form>