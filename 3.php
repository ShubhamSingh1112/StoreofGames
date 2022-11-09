<?php 
@$connect = mysqli_connect("localhost", "root", "", "test");
$res = $connect->query("SELECT * FROM tb1_product WHERE id = ".$_GET['product_id']);
$row = mysqli_fetch_assoc($res);
?>

<?php
@$comment = $_POST['comment'];
if ($_POST)
    {
    $handle = fopen("comments.txt", "a");
    fwrite($handle, $comment . "<br/>");
    fclose($handle);
    }

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" type="text/javascript"></script>
  <div>
  <nav class="navbar navbar-inverse fixed-top" style="background-image: url(sogimg/theme.jpg); background-repeat: no-repeat; background-size: 100%">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="sogimg/sog.png" width="40px" height="40px" style=" border-radius: 25px">
  <a class="navbar-brand" href="SOG.php" style="color: crimson"><b>Store of Games</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
  <li class="active"><a href="#" style="color: white"><b>Home</b></a></li>
                <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white"><b>PS4</b><span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="homepage.php?xx=p1">All PS4 Games</a></li>
            <li><a href="homepage.php?xx=p2">Exclusives</a></li>
            <li><a href="homepage.php?xx=p3">Playstation Now & PS+</a></li>
          </ul>
        </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white"><b>X Box One</b><span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="homepage.php?xx=x1">All X Box One Games</a></li>
              <li><a href="homepage.php?xx=x2">Exclusives</a></li>
              <li><a href="homepage.php?xx=x3">X Box Live & Game Pass</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white"><b>Nintendo Switch</b><span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="homepage.php?xx=s1">All Nintendo Switch Games</a></li>
              <li><a href="homepage.php?xx=s2">Exclusives</a></li>
            </ul>
          </li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php" style="color: white; margin-top: -5px"><span><?php
session_start();
$a=opendir("useracc/$_SESSION[t1]/images");
while($y=readdir($a))
{
  if($y!=="." &&$y!=="..")
  {
  echo "<img src=useracc/$_SESSION[t1]/images/$y width='30px' height='30px'>";
  }
}
?></span><b>&nbsp;<?php
echo $_SESSION['t1'];
?></b></a></li>
<li><a href="logout.php" style="color: white"><b>logout</b></a></li>
      <li><a href="#" style="color: white"><span class="glyphicon glyphicon-shopping-cart"><b>Cart</b></span></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>


<div class="container">
  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
    <div style="border:1px solid #333; background-color: #f1f1f1; border-radius: 5px">
      <img src="http://localhost/php/<?php echo $row["image"]; ?>" class="img-responsive" style="width: 300px; height: 300px"><br>
      <h4 class="text-info"><?php echo $row["name"]; ?></h4><br>
      <h4 class="text-danger">₹<?php echo $row["price"]; ?></h4><br>
      <p class="text-info"><?php echo $row["details"]; ?></p><br>
      <input type="text" name="quantity" class="form-control" value="1">
      <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" >
      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
      <input type="hidden" name="hidden_details" value="<?php echo $row["details"]; ?>" >
      <input type="submit" name="add_to_cart" style="margin-top: 5px" class="btn btn-success" value="Add to Cart">
    </div>
  </form>
</div>

<br>
<div style="background-color: #d9cbd7">
<form method="post">
  <h3>Post your comments here</h3>
<table>
<tr><td><b>Email Id:</b></td><td><b><?php
echo $_SESSION['t1'];
?></b></td></tr>
<tr><td><b>Comment:</b></td><td><textarea name="comment"></textarea></td></tr>
<tr><td><input type="submit" name="submit" value="Post"></td></tr>
</table>
</form>
</div>

<?php include "comments.txt"; ?>

<body>      
 <footer class="container-fluid text-center" style="background-color: gray; border-top: 1px thin black">
    <form action="homepage.php?xx=p1">
    <div class="w3-container">
      <h3>Get the best offers first!</h3>
      <p>Join our newsletter.</p>
      <label>E-mail</label>
      <input type="text" placeholder="Your Email address">
      <input type="submit" name="Subscribe" value="Subscribe" class="btn btn-danger" onclick="showAlert()">
    </div>
    <script>
      function showAlert()
      {
        alert ("You have Subscribed our Newsletter")
      }
    </script>
  </form>

    <p><i><b>Payment method</b></i></p>
    <p><img src="sogimg\V.png" style="height: 30px">&nbsp;
    <img src="sogimg\mc.png" style="height: 30px">&nbsp;
    <img src="sogimg\m.png" style="height: 30px">
    <img src="sogimg\ae.png" style="height: 50px">
    <img src="sogimg\R.png" style="height: 30px">&nbsp;
    <img src="sogimg\PP.png" style="height: 30px"></p>
  </div>
  <div class="col-sm-5">
    <h4>More from us</h4>
        <p><a href="#" style="color: white">About us</a></p>
        <p><a href="#" style="color: white">We're hiring</a></p>
        <p><a href="#" style="color: white">Support</a></p>
        <p><a href="#" style="color: white">Shipment</a></p>
        <p><a href="#" style="color: white">Payment</a></p>
        <p><a href="#" style="color: white">Gift card</a></p>
        <p><a href="#" style="color: white">Return Policy</a></p>
        <p><a href="#" style="color: white">Help</a></p>
      </div>

      <div class="col-sm-5">
        <p><i class="fa fa-map-marker"></i><b>Store Of Games</b></p>
        <p><i class="fa fa-phone"></i><b>1234567890</b></p>
        <p><i class="fa fa-envelope"></i><b>Sog@mail.com</b></p>
        <h4>Find Us On</h4>
    <p><a href="http://www.facebook.in"><img src="sogimg\facebook.png" style="height: 30px"></a>&nbsp;
    <a href="http://www.instagram.com"><img src="sogimg\instagram.png" style="height: 30px"></a>&nbsp;
    <a href="http://www.linkedin.com/"><img src="sogimg\linkedin.png" style="height: 30px"></a>&nbsp;
    <a href="http://www.snapchat.com/"><img src="sogimg\snapchat.png" style="height: 50px"></a>&nbsp;
    <a href="http://twitter.com/"><img src="sogimg\twitter.png" style="height: 30px"></a>&nbsp;
    <a href="http://www.youtube.com/"><img src="sogimg\youtube.png" style="height: 30px"></a></p>
      </div>
      <p><i>&copy;Shubham Singh 2022</i></p>
</footer>
</body>
