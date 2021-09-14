<?php
session_start();
if(isset($_POST["add_to_cart"]))
{

  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["uid"], $item_array_id))
    {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id' => $_GET["uid"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][$count+1] = $item_array;
    }
    else
    {
      echo '<script> alert ("Selected meal already exists in your cart!")</script>';
      echo '<script> window.location="menu.php"</script>';
    }
  }
  else
  {
    $item_array = array(
      'item_id' => $_GET["uid"],
      'item_name' => $_POST["hidden_name"],
      'item_price' => $_POST["hidden_price"],
      'item_quantity' => $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
      if($values["item_id"] == $_GET["uid"])
      {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Removal successful")</script>';
        echo '<script>window.location="menu.php"</script>';
      }
    }
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="Meal, Food" />
  <meta name="description" content="Fresh ingredients at your doorsteps!" />
  <meta name="author" content="Evan" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> MealBuddy </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/bg-3.jpg" alt="">
    </div>
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
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
              <a href="" class="order_online">
                Order Now
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>
      <div class="row">

        <?php

        $connec = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($connec, 'mbuddy');

        // if($connec) {
        //   echo "Connection established!";
        // } else {
        //   echo "Connection failed";
        // }

        $query = " SELECT `uid`, `name`, `dscrip`, `imglink`, `price` FROM `meals` ORDER BY uid ASC ";

        $queryexec = mysqli_query($connec, $query);

        $num = mysqli_num_rows($queryexec);

        if($num > 0) {
          while($meals = mysqli_fetch_array($queryexec)){
            ?>

          <div class="col-md-4">
            <form method = "post" action= "menu.php?action=add&uid=<?php echo $meals["uid"]; ?>">
              <div class="box">
                <img src="<?php echo $meals["imglink"]; ?>" class="img-fluid" />
                <br/>
                <h2 class="text" style="font-family: 'Dancing Script', cursive; color: white; padding-left: 15px; padding-right: 15px; padding-top: 15px;"><?php echo $meals["name"]; ?></h2>
                <h4 class="text-info" style="font-size: 12px; padding-left: 15px; padding-right: 15px; text-align: justify;"><?php echo $meals["dscrip"]; ?></h4>
                <h4 class="text-success" style="text-align: center;">&#36;<?php echo $meals["price"]; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $meals["name"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $meals["price"]; ?>" />
                <center>
                  <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                </center>
              </div>
            </form>
          </div>

      <?php
          }
        }

        ?>
        </div>
        <hr />
        <h1 class="text-info" style="font-family: 'Dancing Script', cursive; text-align: center;" >Current Cart</h1>
        <hr />
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th width="40%">
                Meal Name
              </th>
              <th width="10%">
                Quantity
              </th>
              <th width="20%">
                Price
              </th>
              <th width="15%">
                Total
              </th>
              <th width="5%">
                Action
              </th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
              $total = 0;
              foreach ($_SESSION["shopping_cart"] as $keys => $values)
              {
            ?>
            <tr>
              <td>
                <?php echo $values["item_name"]; ?>
              </td>
              <td>
                <?php echo $values["item_quantity"]; ?>
              </td>
              <td>
                <?php echo $values["item_price"]; ?>
              </td>
              <td>
                <?php echo number_format((int)$values["item_quantity"] * (float)$values["item_price"], 2); ?>
              </td>
              <td>
                <a href="menu.php?action=delete&uid=<?php echo $values["item_id"]; ?>"> <span class="text-danger">Remove</span></a>
              </td>
            </tr>
            <?php
              $total = $total + ((int)$values["item_quantity"] * (float)$values["item_price"]);
              }
            ?>
            <tr>
              <td colspan="3" align="right">
                Total
              </td>
              <td aligh="right">
                $ <?php echo number_format($total, 2); ?>
              </td>
            </tr>
            <?php
            }
            ?>
          </table>
          <center>
            <a href="orderconfirmation.php">
              <input type="submit" name="confirm_cart" style="margin-top:5px;" class="btn btn-success" value="Confirm Order"/>
            </a>
          </center>
        </div>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
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
