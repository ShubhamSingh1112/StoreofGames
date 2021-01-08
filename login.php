  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div>
  <nav class="navbar navbar-inverse " style="background-image: url(sogimg/theme.jpg); background-repeat: no-repeat; background-size: 100%">
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
      <li><a href="register.php" style="color: white"><span class="glyphicon glyphicon-user" ></span>Sign Up</a></li>
      <li><a href="login.php" style="color: white"><span class="glyphicon glyphicon-user"></span>Sign In</a></li>
      <li><a href="#" style="color: white"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div>
<?php
session_start();
@$t1=$_REQUEST['t1'];
@$_SESSION['t1']=$t1;
@$_SESSION['t2']=$t2;
	
@$t2=@$_REQUEST['t2'];
if(@$_REQUEST['go'])
{
	if(file_exists("useracc/$t1") && file_exists("useracc/$t1/$t2"))
	{
		header("location:SOG.php");
	}
	else
	{
		echo "not match";
	}
}
?>

<style>
body  {
    background-image: url("sogimg/bg2.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
</style>

<form>
  <br><br><br><br><br><br><br><br><br><br>
<div class="container" align="center">
  <div class="row">
<div class="col-sm-12">
<div class="card" style="border: groove 1px red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white">
       <div class="cars-block">
        <h3 align="center" class="card-text">Sign In</h3>
<table>
        <tr>
  <td><b>Email Id:</b></td>
  <td><input type="text" name="t1" placeholder="Email ID"></td>
</tr>
<tr>
  <td><b>Password:</b></td>
  <td><input type="password" name="t2" placeholder="Password"></td>
</tr>
</table>
<br>
<input type="submit" name="go" value="Login" class="btn btn-success"></td>
<td><button class='btn btn-warning'><a href="register.php" style="color: white; text-decoration: none">Sign Up</a></button></td>
        <p></p>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</div>
