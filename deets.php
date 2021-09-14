<?php
$connec = mysqli_connect('localhost', 'root', '');
mysqli_select_db($connec, 'mbuddy');

// if($connec) {
//   echo "Connection established!";
// } else {
//   echo "Connection failed";
// }

if (isset($_GET['uid'])) {

  $current_id = $_GET['uid'];
  $getMeal = "SELECT * FROM meals WHERE uid='$current_id' ";
  $getInstr = "SELECT * FROM instructions WHERE instrct_id='$current_id'";
  $run_meal = mysqli_query($connec, $getMeal);
  $run_instr = mysqli_query($connec, $getInstr);
  $row_meal = mysqli_fetch_array($run_meal);
  $row_instr = mysqli_fetch_array($run_instr);
  $meal_name = $row_meal['name'];
  $meal_deets = $row_meal['dscrip'];
  $meal_price = $row_meal['price'];
  $meal_image = $row_meal['imglink'];
  $meal_prep_time = $row_meal['prep_time'];
  $meal_reviews = $row_meal['reviews'];
  $meal_calories = $row_meal['calories'];
  $meal_ingredients = $row_meal['ingred'];
  $meal_positive = $row_meal['posppl'];
  $instr1 = $row_instr['instrct1'];
  $instr2 = $row_instr['instrct2'];
  $instr3 = $row_instr['instrct3'];
  $instr4 = $row_instr['instrct4'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="Evan" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Mealbuddy </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
  rel="stylesheet"  type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style.scss" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

  <body style="background-color= black;">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <span>
                MealBuddy
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  mx-auto ">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="Packages.html">Packages</a>
                </li> -->
              </ul>
              <div class="user_option">
                <!-- <a href="" class="user_link">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <a class="cart_link" href="#">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                  </svg>
                </a> -->
                <a href="" class="order_online">
                  Order Now
                </a>
              </div>
            </div>
          </nav>
        </div>
      </header>

	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?php echo $meal_image ?>" height="100%" width="100%" /></div>
						</div>

					</div>
					<div class="details col-md-6">
            <br>
						<h1 class="product-title" style="font-family: 'Dancing Script', cursive; color: #fc9003;"><?php echo $meal_name ?></h1>
            <img src="images/clock.png" alt="Timer" height="16px" width="16px">
            <?php echo $meal_prep_time ?> Minutes
            <br>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no"><?php echo $meal_reviews ?> Reviews</span>
              <br>
              <br>
						</div>
						<p class="product-description" style="text-align: justify; padding-right:25px;"><?php echo $meal_deets ?></p>
            <br>
            <p class="vote">
              <p>Calories    ~ <strong><?php echo $meal_calories ?></strong><light> Cals (est.)</light></p>
            </p>
            <br>
						<h4 class="price">&#36;<?php echo $meal_price ?></h4>
						<p class="vote"><strong><?php echo $meal_positive ?>%</strong> of buyers enjoyed this product! <strong>(<?php echo $meal_reviews ?> votes)</strong></p>
            <br>
						<!-- <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5> -->
						<!-- <h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5> -->
						<div class="action">
							<a href="#ingredient"><button type="button" class="btn btn-dark">Start Preparing</button></a>
							<!-- <button type="button" class="btn btn-light">Add to Cart</button> -->
						</div>
					</div>
				</div>
			</div>
      <br><br>
      <h2 class="product-title" style="font-family: 'Dancing Script', cursive; padding-left: 25px; color: #fc9003; letter-spacing: 5px;" id="ingredient">Ingredients</h2>
      <img src="<?php echo $meal_ingredients ?>" alt="Ingredients" style="margin: 10px 10px 10px 10px;">
      <hr>
      <h1 style="font-family: 'Dancing Script', cursive; letter-spacing: 10px; color: #fc9003; padding-left:25px;">Instructions</h1>
      <img src="<?php echo $instr1 ?>" alt="" >
      <hr>
      <img src="<?php echo $instr2 ?>" alt="" >
      <hr>
      <img src="<?php echo $instr3 ?>" alt="" >
      <hr>
      <img src="<?php echo $instr4 ?>" alt="" >
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
		</div>
	</div>
  <footer class="footer_section" style="background-color: #222831">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  221B, Baker Street
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +1 555-691252
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  contact@mealbuddy.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              MealBuddy
            </a>
            <p>
              Delivering fresh ingredients to your doorsteps, for any meal, at any time.
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            All the time!
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved (Maybe)
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

  </body>

  </html>
