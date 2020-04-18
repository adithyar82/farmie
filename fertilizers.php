<?php
$rainfall = $_POST['rainfall'];
$shade = $_POST['shade'];
$organic_carbon = $_POST['organic_carbon'];
$phosphorus = $_POST['phosphorus'];
$potassium = $_POST['potassium'];
$shade = $_POST['shade'];
$age = $_POST['age'];
$block_name = $_POST['block_name'];
$total_area = $_POST['total_area'];
$pH_value = $_POST['pH_value'];
$LR_pH_value = $_POST['LR_pH_value'];
$rainfall_count = $_POST['rainfall_count'];
$season_count = $_POST['season_count'];
$yield_type = $_POST['yield_type'];
$number_of_bags = $_POST['number_of_bags'];
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
  </header>
  <!-- ##### Header Area End ##### -->

  <!-- ##### Hero Area Start ##### -->
  <div class="col-12">
    <div class="contact-content mb-100">
      <!-- Section Heading -->
      <div class="section-heading">
        <!-- <p>Contact now</p> -->
        <h2 style="margin-left: 30px"><span>Fertilizer Details</span></h2>
        <img style="margin-left: 30px" src="img/core-img/decor.png" alt="">
      </div>
      <!-- Contact Form Area -->
      <div class="contact-form-area">
        <form method = "POST" action = "index_1.php">
          <div class="row" style = "margin-left: 10%" >
            <div class="col-lg-4">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Phosphorus (P)" disabled>
            </div>
            <div class="col-lg-4">
            <select name = "phosphorus_1" id="phosphorus_1">
                <option value="DAP" style = "font-size: 20px; color: black;" ><b>DAP (Di Ammonium Phosphate)</b></option>
                <option value="SSP" style = "font-size: 20px;" ><b>SSP (Single Super Phosphate)</option>
                <option value="RP-20" style = "font-size: 20px;"><b>RP (Rock Phosphate) 20</option>
                <option value="RP-30" style = "font-size: 20px;"><b>RP (Rock Phosphate) 30</option>
                <option value="MAP" style = "font-size: 20px;" ><b>MAP (Mono Ammonium Phosphate)</b></option>
                <option value="16" style = "font-size: 20px;"><b>16:16:16 (16 All)</option>
                <option value="17" style = "font-size: 20px;"><b>17:17:17 (17 All)</option>
                <option value="19" style = "font-size: 20px;"><b>19:19:19 (19 All)</option>
                <option value="arabica" style = "font-size: 20px;" ><b>Rarely Used:</b></option>
                <option value="TSP" style = "font-size: 20px;" ><b>TSP (Triple Super Phosphate)</b></option>
                <!-- <option value="arabica" style = "font-size: 20px;" ><b>20:20:00:13</b></option> -->
                <option value="26" style = "font-size: 20px;" ><b>10:26:26</b></option>
                <option value="14" style = "font-size: 20px;" ><b>14:28:14</b></option>
                <option value="28" style = "font-size: 20px;" ><b>28:28:00</b></option>
                <option value="12" style = "font-size: 20px;" ><b>12:32:16</b></option>
                <option value="35" style = "font-size: 20px;" ><b>14:35:14</b></option>
            </select>
            </div><br>
          </br>
          <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "<?php echo $rainfall ?>" hidden>
            </div>
            <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name = "name" value = "<?php echo $shade ?>" hidden>
            </div>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="name" style = "font-size: 20px;"  placeholder="name" value = "<?php echo $rainfall ?>" hidden>
            </div><br>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="name" style = "font-size: 20px;"  placeholder="name" value = "<?php echo $shade ?>" hidden>
            </div><br>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="organic_carbon" style = "font-size: 20px;"  placeholder="name" value = "<?php echo $organic_carbon ?>" hidden>
            </div><br>
           
            
          <div class="col-lg-4">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="organic_carbon" value = "<?php echo $organic_carbon ?>" hidden>
            </div>
            <div class="col-lg-4">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="phosphorus" value = "<?php echo $phosphorus ?>" hidden>
            </div>
          </br>
          <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="potassium" value = "<?php echo $potassium ?>" hidden>
            </div>
            <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="age" value = "<?php echo $age ?>" hidden>
            </div>
          </br>
          <div class="col-lg-4">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Nitrogen (N)" disabled>
            </div>
            <div class="col-lg-4">
            <select name = "nitrogen_1" id="nitrogen_1">
                <option value="Urea" style = "font-size: 20px;" ><b>Urea</b></option>
                <option value="Ammonium Sulphate" style = "font-size: 20px;" ><b>Ammonium Sulphate</option>
                <option value="Ammonium Chloride" style = "font-size: 20px;"><b>Ammonium Chloride</option>
                <!-- <option value="robusta" style = "font-size: 20px;"><b>RP (Rock Phosphate) 30</option>
                <option value="robusta" style = "font-size: 20px;"><b>16:16:16 (16 All)</option>
                <option value="robusta" style = "font-size: 20px;"><b>17:17:17 (17 All)</option>
                <option value="robusta" style = "font-size: 20px;"><b>19:19:19 (19 All)</option> -->
            </select>
            </div><br>
            <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="block_name" value = "<?php echo $block_name ?>" hidden>
            </div>
            <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="total_area" value = "<?php echo $total_area ?>" hidden>
            </div>
          </br>
          
            <div class="col-lg-4">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" value = "<?php echo $pH_value ?>" hidden>
            </div>
            <div class="col-lg-4">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="LR_pH_value" value = "<?php echo $LR_pH_value ?>" hidden>
            </div>
          </br>
          <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="rainfall_count" value = "<?php echo $rainfall_count ?>" hidden>
            </div>
            <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="season_count" value = "<?php echo $season_count ?>" hidden>
            </div>
          </br>
          <div class="col-lg-4">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="name" value = "Potassium (K)" disabled>
            </div>
            <div class="col-lg-4">
            <select name = "potassium_1" id="potassium_1">
                <option value="MOP" style = "font-size: 20px;"><b>MOP (Muriate of Potassium)</b></option>
                <!-- <option value="robusta" style = "font-size: 20px;" ><b>SSP (Single Super Phosphate)</option>
                <option value="robusta" style = "font-size: 20px;"><b>RP (Rock Phosphate) 20</option>
                <option value="robusta" style = "font-size: 20px;"><b>RP (Rock Phosphate) 30</option>
                <option value="robusta" style = "font-size: 20px;"><b>16:16:16 (16 All)</option>
                <option value="robusta" style = "font-size: 20px;"><b>17:17:17 (17 All)</option>
                <option value="robusta" style = "font-size: 20px;"><b>19:19:19 (19 All)</option> -->
            </select>
            </div><br>
            </div><br>
            <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="yield_type" value = "<?php echo $yield_type ?>" hidden>
            </div>
            <div class="col-lg-2">
              <input type="text" style = "background-color: #77b122; color: white; font-size: 20px;" size=10; class="form-control" name="number_of_bags" value = "<?php echo $number_of_bags ?>" hidden>
            </div>
          </br>
          <input class="btn famie-btn" type = "submit" name="submit" style="margin-left:30%;" value ="submit"></a>
          <input class="btn famie-btn" type = "submit" name="submit" style="margin-left:30%;" value ="next"></a>
        </form>
      </div>
    </div>
  </div>
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
  <!-- Popper js -->
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