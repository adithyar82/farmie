<?php
include('connect_db.php');
if(isset($_POST['submit'])=='submit'){
    $rainfall = $_POST['rainfall'];
$shade = $_POST['shade'];
$organic_carbon = $_POST['organic_carbon'];
$phosphorus = $_POST['phosphorus'];
$phosphorus_1 = $_POST['phosphorus_1'];
$nitrogen = $_POST['nitrogen'];
$nitrogen_1 = $_POST['nitrogen_1'];
$potassium = $_POST['potassium'];
$potassium_1 = $_POST['potassium_1'];
$shade = $_POST['shade'];
$age = $_POST['age'];
$block_name = $_POST['block_name'];
$total_area = $_POST['total_area'];
$pH_value = $_POST['pH_value'];
$LR_pH_value = $_POST['LR_pH_value'];
$block_type = $_POST['block_type'];
$rainfall_count = $_POST['rainfall_count'];
// $season_count = $_POST['season_count'];
$yield_type = $_POST['yield_type'];
$yield_type_1 = $_POST['yield_type_1'];
$number_of_bags = $_POST['number_of_bags'];
// echo $age;
// echo $yield_type;
// echo $yield_type_1;
// echo $rainfall;
// echo $shade;
// echo $yield_type;
// echo $number_of_bags;
// echo $season_count;
$season_count = 3;
if($age>=5){
if($yield_type == "Parchment"){
   $initial_value = $number_of_bags * 50 * 0.8;
}
else if($yield_type == "Cherry"){
   $initial_value = $number_of_bags * 50 * 0.5;
}

$initial_value_1 = $initial_value/100;
$standard_value_1 = 10 * $initial_value_1;
$standard_value_2 = 7 * $initial_value_1;
$standard_value_3 = 10 * $initial_value_1;

}
else if($age == 1 && $block_type = "arabica"){
    $base_value_1 = 20;
    $base_value_2 = 10;
    $base_value_3 = 20;
}
else if($age == 2 && $block_type = "arabica"){
    $base_value_1 = 20;
    $base_value_2 = 10;
    $base_value_3 = 20;
}else if($age == 3 && $block_type = "arabica"){
    $base_value_1 = 25;
    $base_value_2 = 15;
    $base_value_3 = 25;
}else if($age == 4 && $block_type = "arabica"){
    $base_value_1 = 25;
    $base_value_2 = 15;
    $base_value_3 = 25;
}else if($age == 1 && $block_type = "robusta"){
    $base_value_1 = 38;
    $base_value_2 = 28;
    $base_value_3 = 28;
}else if($age == 2 && $block_type = "robusta"){
    $base_value_1 = 38;
    $base_value_2 = 28;
    $base_value_3 = 38;
}else if($age == 3 && $block_type = "robusta"){
    $base_value_1 = 38;
    $base_value_2 = 28;
    $base_value_3 = 38;
}
else if($age == 4 && $block_type = "robusta"){
    $base_value_1 = 40;
    $base_value_2 = 30;
    $base_value_3 = 40;
}
if($initial_value<=1000){
    $base_value_1 = $standard_value_1 + 20;
    $base_value_2 = $standard_value_2 + 20;
    $base_value_3 = $standard_value_3 + 20;
    // echo round($base_value_1);
    // echo ":";
    // echo round($base_value_2);
    // echo ":";
    // echo round($base_value_3);
    // echo "<br>";
}
else if($initial_value>1000){
    $base_value_1 = $standard_value_1 + 30;
    $base_value_2 = $standard_value_2 + 30;
    $base_value_3 = $standard_value_3 + 30;
    // echo round($base_value_1);
    // echo ":";
    // echo round($base_value_2);
    // echo ":";
    // echo round($base_value_3);
    // echo "<br>";
}
//nutrients values fetched
//nitrogen
if (($organic_carbon <= 1.0) && ($organic_carbon>0.7)){
    $nitrogen_base_value = $base_value_1 + ($base_value_1 * 0.1);
}
else if(($organic_carbon <= 0.7) && ($organic_carbon >=0)){
    $nitrogen_base_value = $base_value_1 + ($base_value_1 * 0.2);
}
else if(($organic_carbon <= 2.5) && ($organic_carbon >=1)){
    $nitrogen_base_value = $base_value_1;
}
else{
    $nitrogen_base_value = $base_value_1;
}
// echo $nitrogen_base_value;
//phosphorus
if (($phosphorus <= 9.0) && ($phosphorus>6.3)){
    $phosphorus_base_value = $base_value_2 + ($base_value_2 * 0.1);
}
else if(($phosphorus <=6.3) && ($phosphorus >=0)){
    $phosphorus_base_value = $base_value_2 + ($base_value_2 * 0.2);
}
else if(($phosphorus <=22.0) && ($phosphorus >=9.0)){
    $phosphorus_base_value = $base_value_2;
}
else if(($phosphorus <=26.6) && ($phosphorus >22.0)){
    $phosphorus_base_value = $base_value_2 - ($base_value_2 * 0.1);
}
else if(($phosphorus <=35.2) && ($phosphorus >26.6)){
    $phosphorus_base_value = $base_value_2 - ($base_value_2 * 0.2);
}
else{
    $phosphorus_base_value = $base_value_2 - ($base_value_2 * 0.2);
}
// echo $phosphorus_base_value;
// potassium
if (($potassium <= 125.0) && ($potassium>87.5)){
    $potassium_base_value = $base_value_3 + ($base_value_3 * 0.1);
}
else if(($potassium <=87.5) && ($potassium >=0)){
    $potassium_base_value = $base_value_3 + ($base_value_3 * 0.2);
}
else if(($phosphorus <=250.0) && ($phosphorus >=125.0)){
    $potassium_base_value = $base_value_3;
}
else if(($phosphorus <=325.0) && ($phosphorus >250.0)){
    $potassium_base_value = $base_value_3 - ($base_value_3 * 0.1);
}
else if(($phosphorus <=400.0) && ($phosphorus >325.0)){
    $potassium_base_value = $base_value_3 - ($base_value_3 * 0.2);
}
else{
    $potassium_base_value = $base_value_3 - ($base_value_3 * 0.2);
}
// echo $potassium_base_value;
// echo round($nitrogen_base_value);
// echo ":";
// echo round($phosphorus_base_value);
// echo ":";
// echo round($potassium_base_value);
// echo "<br>";

if($shade == "low"){
    $nitrogen_base_value_1 = $nitrogen_base_value + ($nitrogen_base_value * 0.1);
    $phosphorus_base_value_1 = $phosphorus_base_value + ($phosphorus_base_value * 0.1);
    $potassium_base_value_1 = $potassium_base_value + ($potassium_base_value * 0.1);
    $nitrogen_average_value_1 = $nitrogen_base_value_1 / $season_count;
    $phosphorus_average_value_1 = $phosphorus_base_value_1 / $season_count;
    $potassium_average_value_1 = $potassium_base_value_1 / $season_count;
    
    // echo round($nitrogen_base_value_1);
    // echo ":";
    // echo round($phosphorus_base_value_1);
    // echo ":";
    // echo round($potassium_base_value_1);
    // echo "<br>";
    // echo "<p> Required Nutrients /kg/acre/splits :</p>";
    // echo round($nitrogen_average_value_1);
    // echo ":";
    // echo round($phosphorus_average_value_1);
    // echo ":";
    // echo round($potassium_average_value_1);
    // echo "<br>";
}
else if($shade == "medium"){
    $nitrogen_base_value_1 = $nitrogen_base_value;
    $phosphorus_base_value_1 = $phosphorus_base_value;
    $potassium_base_value_1 = $potassium_base_value;
    $nitrogen_average_value_1 = $nitrogen_base_value_1 / $season_count;
    $phosphorus_average_value_1 = $phosphorus_base_value_1 / $season_count;
    $potassium_average_value_1 = $potassium_base_value_1 / $season_count;
    
    // echo round($nitrogen_base_value_1);
    // echo ":";
    // echo round($phosphorus_base_value_1);
    // echo ":";
    // echo round($potassium_base_value_1);
    // echo "<br>";
    // echo "<p> Required Nutrients /kg/acre/splits :</p>";
    // echo round($nitrogen_average_value_1);
    // echo ":";
    // echo round($phosphorus_phosphorus_value_1);
    // echo ":";
    // echo round($potassium_average_value_1);
    // echo "<br>";
}
else if($shade = "high"){
    $nitrogen_base_value_1 = $nitrogen_base_value - ($nitrogen_base_value * 0.1);
    $phosphorus_base_value_1 = $phosphorus_base_value - ($phosphorus_base_value * 0.1);
    $potassium_base_value_1 = $potassium_base_value - ($potassium_base_value * 0.1);
    $nitrogen_average_value_1 = $nitrogen_base_value_1 / $season_count;
    $phosphorus_average_value_1 = $phosphorus_base_value_1 / $season_count;
    $potassium_average_value_1 = $potassium_base_value_1 / $season_count;
    
    // echo round($nitrogen_base_value_1);
    // echo ":";
    // echo round($phosphorus_base_value_1);
    // echo ":";
    // echo round($potassium_base_value_1);
    // echo "<br>";
    // echo "<p> Required Nutrients /kg/acre/splits :</p>";
    // echo round($nitrogen_average_value_1);
    // echo ":";
    // echo round($phosphorus_average_value_1);
    // echo ":";
    // echo round($potassium_average_value_1);
    // echo "<br>";
}
if($phosphorus_1 == "DAP"){
    $a = 18;
    $b = 46;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "SSP"){
    $a = 0;
    $b = 16;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "RP-20"){
    $a = 0;
    $b = 20;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "RP-30"){
    $a = 0;
    $b = 30;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "MAP"){
    $a = 18;
    $b = 46;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "16"){
    $a = 16;
    $b = 16;
    $c = 16;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "17"){
    $a = 17;
    $b = 17;
    $c = 17;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "19"){
    $a = 19;
    $b = 19;
    $c = 19;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "TSP"){
    $a = 0;
    $b = 42.5;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "26"){
    $a = 10;
    $b = 26;
    $c = 26;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "14"){
    $a = 14;
    $b = 28;
    $c = 14;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "28"){
    $a = 28;
    $b = 28;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "12"){
    $a = 12;
    $b = 32;
    $c = 16;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "35"){
    $a = 14;
    $b = 35;
    $c = 14;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
if($nitrogen_1 == "Urea"){
    $d = 46;
    $nitrogen_calculated_value = $nitrogen_average_value_1 - $nitrogen_exceed_value;
    $nitrogen_final_value = (100/$d) * $nitrogen_calculated_value;
}
else if($nitrogen_1 == "Ammonium Sulphate"){
    $d = 21;
    $nitrogen_calculated_value = $nitrogen_average_value_1 - $nitrogen_exceed_value;
    $nitrogen_final_value = (100/$d) * $nitrogen_calculated_value;
}
else if($nitrogen_1 == "Ammonium Chloride"){
    $d = 25;
    $nitrogen_calculated_value = $nitrogen_average_value_1 - $nitrogen_exceed_value;
    $nitrogen_final_value = (100/$d) * $nitrogen_calculated_value;
}
if($potassium_1 == "MOP"){
    $potassium_calculated_value = $potassium_average_value_1 - $potassium_exceed_value;
    $potassium_final_value = (100/60) * $potassium_calculated_value;
}
// echo round($phosphorus_final_value);
// echo "<br>";
// echo round($nitrogen_final_value);
// echo "<br>";
// echo round($potassium_final_value);

// echo $sql;
// if($result->num_rows>=0){
//     echo '
//     <script>
//     alert("Registered Successfully");
//     window.location = "index.php";
//     </script>';
// }

}
if($pH_value<4.5){
    $lime = 2.0;
}
else if(($pH_value<5.0) && ($pH_value>=4.6)){
    $lime = 1.5;
}
else if(($pH_value<5.5) && ($pH_value>=5.1)){
    $lime = 1.0;
}
else if(($pH_value<6.0) && ($pH_value>=5.6)){
    $lime = 0.5;
}
else if($pH_value>6.0){
    $lime = "Nill";
}

$sql = "INSERT INTO calculations(id, nitrogen_base_value, phosphorus_base_value, potassium_base_value, nitrogen_average_value_1, phosphorus_average_value_1, potassium_average_value_1, nitrogen_final_value,phosphorus_final_value, potassium_final_value, lime, block_name, block_area) VALUES (Null, '$nitrogen_base_value', '$phosphorus_base_value', '$potassium_base_value','$nitrogen_average_value_1','$phosphorus_average_value_1','$potassium_average_value_1','$nitrogen_final_value','$phosphorus_final_value','$potassium_final_value','$lime','$block_name','$total_area');";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Famie - Farm Services &amp; Organic Food Store Template | Home</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <div class="top-header-meta">
                <p>Welcome to <span>Kaapi Nutrition</span>, we hope you will enjoy FARMING DISEASES and have good experience</p>
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 223 9000</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="farming-practice.html">Farming Practice</a></li>
                      <li><a href="shop.html">Shop</a>
                        <ul class="dropdown">
                          <li><a href="farming_diseases.php">FARMING DISEASES</a></li>
                          <li><a href="shop.html">Shop</a></li>
                        </ul>
                      </li>
                      <li><a href="news.html">News</a>
                        <ul class="dropdown">
                          <li><a href="news.html">News</a></li>
                          <li><a href="news-details.html">News Details</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.php">Contact</a></li>
                    </ul>
                  </li>
                  <li><a href="farming_diseases.php">Our Product</a></li>
                  <li><a href="farming-practice.html">Farming Practice</a></li>
                  <li><a href="news.html">News</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
                <!-- Search Icon -->
                <div id="searchIcon">
                  <i class="icon_search" aria-hidden="true"></i>
                </div>
                <!-- Cart Icon -->
                <div id="cartIcon">
                  <a href="#">
                    <i class="icon_cart_alt" aria-hidden="true"></i>
                    <span class="cart-quantity">2</span>
                  </a>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <button onclick="window.print()" size=10; class="form-control">Print Report</button>
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Hero Area Start ##### -->
  
      <!-- Contact Form Area -->
     
      <div class="contact-form-area">
        <form method="POST" action="fertilizers.php">
          <div class="row" style = "margin-left: 10%" >
            <div class="col-lg-3">
              <input name = "block_name" type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Block Name" disabled>
            </div>
            <div class="col-lg-3">
              <input name = "block_name" type="text" class="form-control" style = "font-size: 20px;" value = "<?php echo $block_name?>">
            </div><br>
          </br>
            <div class="col-lg-3">
              <!-- <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size = 10; class="form-control" name="name" value = "Total Area" disabled> -->
            </div>
            <div class="col-lg-3">
              <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
            </div>
            <div class="col-lg-3">
              <input name = "blocK_name" type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Block Area" disabled>
            </div>
            <div class="col-lg-3">
              <input type="text" class="form-control" name = "blocK_name" style = "font-size: 20px;" value = "<?php echo $total_area?>">
            </div><br>
          </br>
            <div class="col-lg-3">
              <!-- <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size = 10; class="form-control" name="name" value = "Total Area" disabled> -->
            </div>
            <div class="col-lg-3">
              <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
            </div>
            <div class="col-lg-3">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="age" value = "Total Nutrients" disabled>
            </div>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="age" style = "font-size: 20px;"  value = "<?php echo round($nitrogen_base_value)?> : <?php echo round($phosphorus_base_value)?> : <?php echo round($potassium_base_value)?>">
            </div><br>
          </br>
            <div class="col-lg-3">
              <!-- <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size = 10; class="form-control" name="name" value = "Total Area" disabled> -->
            </div>
            <div class="col-lg-3">
              <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
            </div>
            
            <br>
            
            
            
       
  <br>
  <?php
  $sql_1 = "SELECT * FROM calculations;";
  $result_1 = $conn->query($sql_1);
  if($result_1->num_rows>0){
      while($row=$result_1->fetch_assoc()){
          $id = $row['id'];
          $nitrogen_final_value = $row['nitrogen_final_value'];
          $phosphorus_final_value = $row['phosphorus_final_value'];
          $potassium_final_value = $row['potassium_final_value'];
      }
  }
  for($j=1; $j<=$id; $j++){

  for($i=1; $i<=$season_count; $i++){
      echo'<div class="contact-form-area">
      <form method="POST" action="fertilizers.php">
        <div class="row" >';
        if($i == 1){
            echo'
            
            <div class="col-lg-3">
            <input name = "block_name" type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Block Number : '.$j.'" disabled>
          </div>
          <div class="col-lg-3">
           
          </div><br>
        </br>
          <div class="col-lg-3">
            
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>
            <div class="col-lg-3">
            <input name = "block_name" type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Summer" disabled>
          </div>
          <div class="col-lg-3">
           
          </div><br>
        </br>
          <div class="col-lg-3">
            
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>';
        }
        else if ($i==2){
            echo'
            <div class="col-lg-3">
            <input name = "block_name" type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Pre Blossom" disabled>
          </div>
          <div class="col-lg-3">
           
          </div><br>
        </br>
          <div class="col-lg-3">
            
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>';
        }
        else if ($i==3){
            echo'
            <div class="col-lg-3">
            <input name = "block_name" type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Post Blossom" disabled>
          </div>
          <div class="col-lg-3">
           
          </div><br>
        </br>
          <div class="col-lg-3">
            
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>';
        }
        echo'
          <div class="col-lg-3">
            <input name = "block_name" type="text" style = "background-color: white; color: black; font-size: 20px;" size=10; class="form-control" name="name" value = "Nitrogen" disabled>
          </div>
          <div class="col-lg-3">
            <input name = "block_name" type="text" class="form-control" style = "font-size: 20px;" value = "'.round($nitrogen_final_value,2).'">
          </div><br>
        </br>
          <div class="col-lg-3">
            <!-- <input type="text" style = "background-color: white; color: black; font-size: 20px;" size = 10; class="form-control" name="name" value = "Total Area" disabled> -->
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>
          <div class="col-lg-3">
            <input name = "blocK_name" type="text" style = "background-color: white; color: black; font-size: 20px;" size=10; class="form-control" name="name" value = "Phosphorus" disabled>
          </div>
          <div class="col-lg-3">
            <input type="text" class="form-control" name = "blocK_name" style = "font-size: 20px;" value = "'.round($phosphorus_final_value,2).'">
          </div><br>
        </br>
        <div class="col-lg-3">
            <!-- <input type="text" style = "background-color: white; color: black; font-size: 20px;" size = 10; class="form-control" name="name" value = "Total Area" disabled> -->
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>
          <div class="col-lg-3">
            <input name = "blocK_name" type="text" style = "background-color: white; color: black; font-size: 20px; font-size: 20px;" size=10; class="form-control" name="name" value = "Potassium" disabled>
          </div>
          <div class="col-lg-3">
            <input type="text" class="form-control" name = "blocK_name" style = "font-size: 20px;" value = "'.round($potassium_final_value,2).'">
          </div><br>
        </br>
        
        <div class="col-lg-3">
            <!-- <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size = 10; class="form-control" name="name" value = "Total Area" disabled> -->
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>
          <div class="col-lg-3">
            <input name = "blocK_name" type="text" style = "background-color: white; color: black; font-size: 20px;" size=10; class="form-control" name="name" value = "Lime" disabled>
          </div>
          <div class="col-lg-3">
            <input type="text" class="form-control" name = "blocK_name" style = "font-size: 20px;" value = "'.round($lime,2).'">
          </div><br>
        </br>
          
          <div class="col-lg-3">
            <!-- <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size = 10; class="form-control" name="name" value = "Total Area" disabled> -->
          </div>
          <div class="col-lg-3">
            <!-- <input type="email" class="form-control" name="email" placeholder="Total Area"> -->
          </div>
          
      ';
  }
}

  ?>
  
            
            <br>
            
            
            
       
  <br>
  
  
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Famie Benefits Area Start ##### -->
  <!-- <section class="famie-benefits-area section-padding-100-0 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="benefits-thumbnail mb-50">
            <img src="img/bg-img/2.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        Single Benefits Area
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="100ms">
            <img src="img/core-img/digger.png" alt="">
            <h5>Best Services</h5>
          </div>
        </div>

        Single Benefits Area
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="300ms">
            <img src="img/core-img/windmill.png" alt="">
            <h5>Farm Experiences</h5>
          </div>
        </div>

        Single Benefits Area
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="500ms">
            <img src="img/core-img/cereals.png" alt="">
            <h5>100% Natural</h5>
          </div>
        </div>

        Single Benefits Area
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="700ms">
            <img src="img/core-img/tractor.png" alt="">
            <h5>Farm Equipment</h5>
          </div>
        </div>

        Single Benefits Area
        <div class="col-12 col-sm-4 col-lg">
          <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="900ms">
            <img src="img/core-img/sunrise.png" alt="">
            <h5>Organic food</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Famie Benefits Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  
  <!-- ##### About Us Area End ##### -->

  <!-- ##### Services Area Start ##### -->

  <!-- ##### Services Area End ##### -->

  <!-- ##### FARMING DISEASES Area Start ##### -->
  
  <!-- ##### FARMING DISEASES Area End ##### -->

  <!-- ##### Newsletter Area Start ##### -->
  
  <!-- ##### Newsletter Area End ##### -->

  <!-- ##### Farming Practice Area Start ##### -->

  <!-- ##### News Area End ##### -->

  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(img/bg-img/3.jpg);">
      <div class="container">
        <div class="row">

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <a href="#" class="foo-logo d-block mb-30"><img src="img/core-img/logo2.png" alt=""></a>
              <p>Lorem ipsum dolor sit amet, consecte stare adipiscing elit. In act honcus risus atiner Pellentesque risus.</p>
              <div class="contact-info">
                <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>X65B, Mahadeshwara Block, Somwarpete, Kodagu</span></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><span>info.deercreative@gmail.com</span></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i><span>+84 223 9000</span></p>
              </div>
            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">QUICK LINK</h5>
              <!-- Footer Widget Nav -->
              <nav class="footer-widget-nav">
                <ul>
                  <li><a href="#">Purchase</a></li>
                  <li><a href="#">Policities</a></li>
                  <li><a href="#">Shipping</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Return</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Payments</a></li>
                  <li><a href="#">Partners</a></li>
                  <li><a href="#">Guide</a></li>
                  <li><a href="#">Standard</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Brands</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">RECENT NEWS</h5>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/4.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">WA’s largest farming business on the market</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/5.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Beef retail prices hit a record</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">STAY CONNECTED</h5>
              <!-- Footer Social Info -->
              <div class="footer-social-info">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <span>Facebook</span>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                  <span>Twitter</span>
                </a>
                <a href="#">
                  <i class="fa fa-pinterest" aria-hidden="true"></i>
                  <span>Pinterest</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Copywrite Area  -->
    <div class="copywrite-area">
      <div class="container">
        <div class="copywrite-text">
          <div class="row align-items-center">
            <div class="col-md-6">
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
            </div>
            <div class="col-md-6">
              <div class="footer-nav">
                <nav>
                  <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Produce</a></li>
                    <li><a href="#">Practice</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area End ##### -->

  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script src="js/jquery.min.js"></script>
  <!-- Ppper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
</body>

</html>


