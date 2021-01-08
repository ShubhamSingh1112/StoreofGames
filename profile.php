<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="Bootstrap/js/jquery.js" type="text/javascript"></script>
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
            <li><a href="PS4games.html">All PS4 Games</a></li>
            <li><a href="PS4games.html">Exclusives</a></li>
            <li><a href="PS4games.html">Playstation Now & PS+</a></li>
          </ul>
        </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white"><b>X Box One</b><span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="PS4games.html">All X Box One Games</a></li>
              <li><a href="PS4games.html">Exclusives</a></li>
              <li><a href="PS4games.html">X Box Live & Game Pass</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white"><b>Nintendo Switch</b><span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="PS4games.html">All Nintendo Switch Games</a></li>
              <li><a href="games.h">Exclusives</a></li>
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

<div align="center">
<?php
echo $_SESSION['t1'];
?>
<br>
<?php
$a=opendir("useracc/$_SESSION[t1]/images");
while($y=readdir($a))
{
	if($y!=="." &&$y!=="..")
	{
	echo "<img src=useracc/$_SESSION[t1]/images/$y width='100px' height='100px' style='border-radius: 25px'>";
	}
}
?>
</div>
<br>
<table style="width: 100%; height: 65%">
<tr>
<td style="background-color: gold; vertical-align: top; font-size: 20px">
<h3>Settings</h3>
<p><a href="profile.php?xx=M" style="color: white">Mobile no.</a></p>
<p><a href="profile.php?xx=A" style="color: white">Delivery Address</a></p>
<p><a href="profile.php?xx=cp" style="color: white">Change password</a></p>
</td>

<td align="center" style="width: 70%; border: groove 1px black">
<?php
@$xyz=@$_REQUEST['xx'];
if(@$xyz=='M')
{
	include("phoneno.php");
}
if(@$xyz=='A')
{
	include("da.php");
}
if(@$xyz=='cp')
{
	include("changepassword.php");
}
?>
</td>
</tr>
</table>
</div>

