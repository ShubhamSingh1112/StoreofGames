  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <div>
  <nav class="navbar navbar-inverse fixed-top" style="background-image: url(sogimg/theme.jpg); background-repeat: no-repeat; background-size: 100% 100%">
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
            <li><a href="homepage.php?xx=p3">Playstation Now</a></li>
            <li><a href="homepage.php?xx=p3">Playstion Plus</a></li>
          </ul>
        </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white"><b>X Box One</b><span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="homepage.php?xx=x1">All X Box One Games</a></li>
              <li><a href="homepage.php?xx=x2">Exclusives</a></li>
              <li><a href="homepage.php?xx=x3">Game Pass</a></li>
              <li><a href="homepage.php?xx=x3">X Box Live</a></li>
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

<table style="width: 100%; height: 100%; border: 4px double red">
<tr>
<td style="background-color:  #DCDCDC; vertical-align: top; font-size: 15px; font-family: sans-serif;">
<style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>
<body>

<h3>Categories</h3>

<button class="accordion" style="background-color: #3232ff"><p style="color: white">PLAYSTATION 4</p></button>
<div class="panel">
 <p><a href="homepage.php?xx=p1">All games</a></p>
 <p><a href="homepage.php?xx=p2">Exclusives</a></p>
 <p><a href="homepage.php?xx=p3">PSNOW & PS+</a></p> 
</div>

<button class="accordion" style="background-color: #00b300"><p style="color: white">X BOX ONE</p></button>
<div class="panel">
  <p><a href="homepage.php?xx=x1">All games</a></p>
  <p><a href="homepage.php?xx=x2">Exclusives</a></p>
  <p><a href="homepage.php?xx=x3">Game Pass & Xbox Live</a></p>
</div>

<button class="accordion" style="background-color: black"><p style=" display: inline; color: #86cce3">NINTENDO</p> <p style="display: inline; color: #ff3333">SWITCH</p></button>
<div class="panel">
  <p><a href="homepage.php?xx=s1">All games</a></p>
  <p><a href="homepage.php?xx=s2">Exclusives</a></p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
</body>
</td>

<td align="center" style="width: 80%; border: groove 1px black">
<?php
@$xyz=@$_REQUEST['xx'];
if(@$xyz=='p1')
{
 include("allps4.php");
}
if(@$xyz=='p2')
{
  include("ep4.php");
}
if(@$xyz=='p3')
{
	include("pscards.php");
}
if(@$xyz=='x1')
{
	include("allxbo.php");
}
if(@$xyz=='x2')
{
	include("exbo.php");
}
if(@$xyz=='x3')
{
	include("xbocards.php");
}
if(@$xyz=='s1')
{
  include("allns.php");
}
if(@$xyz=='s2')
{
  include("ens.php");
}
?>
</td>
</tr>
</table>

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
