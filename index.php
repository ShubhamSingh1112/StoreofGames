  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-inverse" style="background-image: url(sogimg/theme.jpg); background-repeat: no-repeat; background-size: 100% 100%">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="sogimg/sog.png" width="40px" height="40px" style="margin-top: 5px; border-radius: 25px 25px 25px 25px">
  <a class="navbar-brand" href="SOG.php" style="color: red"><b>Store of Games</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="color: white"><span class="glyphicon glyphicon-home">Home</span></a></li>
          <li class="dropdown" style="background-color: blue">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">PS4<span class="caret"></span></a>
            <ul class="dropdown-menu" style="background-color: #DCDCDC">
            <li><a href="#" >All PS4 Games</a></li>
            <li><a href="#">Exclusives</a></li>
            <li><a href="#">Playstation Now</a></li>
            <li><a href="#">Playstion Plus</a></li>
          </ul>
        </li>
          <li class="dropdown" style="background-color: green">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white">X Box One<span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: #DCDCDC">
              <li><a href="#">All X Box One Games</a></li>
              <li><a href="#">Exclusives</a></li>
              <li><a href="#">Game Pass</a></li>
              <li><a href="#">X Box Live</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white; background-color: black">Nintendo Switch<span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: #DCDCDC">
              <li><a href="#">All Nintendo Switch Games</a></li>
              <li><a href="#">Exclusives</a></li>
            </ul>
          </li>
          </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php" style="color: white"><span class="glyphicon glyphicon-user" ></span>Sign Up</a></li>
      <li><a href="login.php" style="color: white"><span class="glyphicon glyphicon-user"></span>Sign In</a></li>
      <li><a href="#" style="color: white"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
      </ul>
    </div>
  </div>
  </nav>

<div class="container-fluid"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ul class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ul>

    <div class="carousel-inner">
      <div class="item active">
        <img src="sogimg\gow.jpg" style="width:100%">
        <div class="carousel-caption">
        <h1><a href="PS4/1.html" style="color: white; text-decoration-color: white">God of War</a></h1>
      </div>
      </div>

      <div class="item">
        <img src="sogimg\Fc5.jpg" style="width:100%">
        <div class="carousel-caption">
        <h1><a href="PC/1.html" style="color: white; text-decoration-color: white">Farcry 5</a></h1>
      </div>
      </div>
      
       <div class="item">
        <img src="sogimg\DBFZ1.png" style="width:100%">
        <div class="carousel-caption">
        <h1><a href="PC/1.html" style="color: white; text-decoration-color: white">Dragon Ball Fighter Z</a></h1>
      </div>
      </div>
      
      <div class="item">
        <img src="sogimg\smps4.jpg" style="width:100%">
        <div class="carousel-caption">
        <h1><a href="PC/1.html" style="color: white; text-decoration-color: white">Spider-Man PS4</a></h1>
      </div>
      </div>
    
      <div class="item">
        <img src="sogimg\MHW1.jpg" style="width:100%">
        <div class="carousel-caption">
        <h1><a href="PC/1.html" style="color: white; text-decoration-color: white">Monster Hunter World</a></h1>
      </div>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<br>
  <body>
    <div align="right">
<div style=" width: 60%; height: 15%">
  <iframe src="ad.php" style="width: 100%; height: 100%"></iframe>
</div>
</div>
<br> 
  <div class="container-fluid bg-3 text-center" style="border: 1px groove #D3D3D3">
    <center>

<div class='container-fluid'>
  <div class='row'>
  <div class='col-sm-4'>
    <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
<h3>Deal of the Day</h3>
<h3></h3>
<?php
$a=date("l");
echo $a;
?>
<div><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;
<span id="txt"></span>  
<script>  
window.onload=function()
{
  getTime();
  }
function getTime()
{  
var a=new Date();  
var h=a.getHours();  
var m=a.getMinutes();  
var s=a.getSeconds();  
document.getElementById('txt').innerHTML=h+":"+m+":"+s;  
setTimeout(function(){getTime()},1000);  
}  
</script>
<img src="sogimg/psx.jpg" style="width: 100%; height: 377.5px"> 
</div>
<h1></h1>
</div>
</div>
</div>
<?php
$a=date("l");
if($a=="Monday")
{
  echo "<div class='container-fluid'>
  <div class='row'>
  <p></p>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/pubg.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'>PUBG</a></p>
      <h6 align='center' class='card-text'>₹999</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  <p></p>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/pubg.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'>PUBG</a></p>
      <h6 align='center' class='card-text'>₹999</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  </div>
  </div> ";
}
else if($a=="Tuesday")
{
  echo "<div class='container-fluid'>
  <div class='row'>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/pubg.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'>PUBG</a></p>
      <h6 align='center' class='card-text'>₹999</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  </div>
  </div>";
}
else if($a=="Wednesday")
{
  echo "<div class='container-fluid'>
  <div class='row'>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/pubg.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'>PUBG</a></p>
      <h6 align='center' class='card-text'>₹999</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  </div>
  </div>";
}
else if($a=="Thursday")
{
  echo "<div class='container-fluid'>
  <div class='row'>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/pubg.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'>PUBG</a></p>
      <h6 align='center' class='card-text'>₹999</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  </div>
  </div>";
}
else if($a=="Friday")
{
  echo "<div class='container-fluid'>
  <div class='row'>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/pubg.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'>PUBG</a></p>
      <h6 align='center' class='card-text'>₹999</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  </div>
  </div>";
}
else if($a=="Saturday")
{
  echo "<div class='container-fluid'>
  <div class='row'>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/aco.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'></a></p>
      <h6 align='center' class='card-text'>₹3,299</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  </div>
  </div>";
}
else
{
  echo "<div class='container-fluid'>
  <div class='col-sm-4'>
  <div class='card' style='border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'>
      <div class='card-block'>
        <img src='sogimg/aco.jpg' style='width: 100%'>
        <p align='center' class='card-title'><a href='gf.php'>Assassins Creed Origins</a></p>
      <h6 align='center' class='card-text'>₹3,499</h6>
      <button class='btn btn-info'><a href='' style='color: white'>Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
  </div>";
}
?>
</div>
</div>
<p></p>
</center>
</div>
<br>

<div>
  <body>
<br> 
  <div class="container-fluid bg-3 text-center" style="border: 1px groove #D3D3D3">
  <button style=" background-color: #3232ff; border-radius: 5px 5px 5px 5px"><h3><a href="homepage.php" style="text-decoration: none; color: white">PLAYSTATION 4 GAMES</a></h3></button>
  <br> 
  <div class="container-fluid">
  <div class="row">
    <p></p>
  <div class="col-sm-3">
  <div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
      <div class="card-block">
        <img src="sogimg\dbfz.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="">Dragon Ball Fighter Z</a></p>
      <h6 align="center" class="card-text">₹4,299</h6>
      <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
  <div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
    <div class="card-block">
      <img src="sogimg\mhw.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="">Monster Hunter World</a></p>
    <h6 align="center" class="card-text">₹3,999</h6>
    <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
      <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
<div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
       <div class="cars-block">
        <img src="sogimg\GOW5.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="PS4/3.php">God of War</a></p>
        <h6 align="center" class="card-text">₹3,999</h6>
        <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
<div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
       <div class="cars-block">
        <img src="sogimg\fc5.png" style="width: 100%">
        <p align="center" class="card-title"><a href="PS4/3.php">Far Cry 5</a></p>
        <h6 align="center" class="card-text">₹3,999</h6>
        <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
</div>
</div>
<br>
</div>
</body>
</div>

<br>

<div>
  <body>
<br> 
  <div class="container-fluid bg-3 text-center" style="border: 1px groove #D3D3D3">
  <button style=" background-color: #00b300; border-radius: 5px 5px 5px 5px"><h3><a href="XB1.php" style="text-decoration: none; color: white">X BOX ONE GAMES</a></h3></button>
  <br>
  <div class="container-fluid">
  <div class="row">
    <p></p>
  <div class="col-sm-3">
  <div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
      <div class="card-block">
        <img src="sogimg\xdbfz.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="">Dragon Ball Fighter Z</a></p>
      <h6 align="center" class="card-text">₹4,299</h6>
      <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
  <div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
    <div class="card-block">
      <img src="sogimg\xmhw.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="">Monster Hunter World</a></p>
    <h6 align="center" class="card-text">₹3,999</h6>
    <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
      <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
<div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
       <div class="cars-block">
        <img src="sogimg\setx.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="PS4/3.php">Sea Of Thieves</a></p>
        <h6 align="center" class="card-text">₹3,999</h6>
        <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
<div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
       <div class="cars-block">
        <img src="sogimg\xf18.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="PS4/3.php">FIFA 18</a></p>
        <h6 align="center" class="card-text">₹2,999</h6>
        <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
</div>
</div>
<br>
</div>
</body>
</div>

<br>

 <div>
  <body>
    <br>
  <div class="container-fluid bg-3 text-center" style="border: 1px groove #D3D3D3">
  <button style=" background-color: black; border-radius: 5px 5px 5px 5px"><h3><a href="XB1.php" style="text-decoration: none; color: #86cce3">NINTENDO</a><a href="XB1.php" style="text-decoration: none; color: #ff3333"> SWITCH</a><a href="XB1.php" style="text-decoration: none; color: white"> GAMES</a></h3></button>
  <br> 
  <div class="container-fluid">
  <div class="row">
    <p></p>
  <div class="col-sm-3">
  <div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
      <div class="card-block">
        <img src="sogimg\KSA.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="#">Kirby Star Allies</a></p>
      <h6 align="center" class="card-text">₹3,999</h6>
      <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
  <div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
    <div class="card-block">
      <img src="sogimg\SMO.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="">Super Mario Odyssey</a></p>
    <h6 align="center" class="card-text">₹3,299</h6>
    <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
      <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
<div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
       <div class="cars-block">
        <img src="sogimg\dbx2.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="PS4/3.php">Dragon Ball Xenoverse 2</a></p>
        <h6 align="center" class="card-text">₹3,599</h6>
        <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
<p></p>
  <div class="col-sm-3">
<div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
       <div class="cars-block">
        <img src="sogimg\doom.jpg" style="width: 100%">
        <p align="center" class="card-title"><a href="PS4/3.php">Doom</a></p>
        <h6 align="center" class="card-text">₹3,499</h6>
        <button class='btn btn-info'><a href="" style="color: white">Details</a></button>
        <p></p>
      </div>
    </div>
  </div>
</div>
</div>
<br>
</div>
</div>
<br><br>
</body>
</div>

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
      <p><i>&copy;Shubham Singh 2018</i></p>
</footer>
</body>