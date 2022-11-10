<?php 
session_start();
if(isset($_GET['action']) && $_GET['action']=='remove'){
	$id = $_GET['id'];
	unset($_SESSION['shopping_cart'][$id]);
	echo "removed from cart successfully";
}else{
@$connect = mysqli_connect("localhost", "root", "", "test");
$pro_id = $_GET['id'];
$res = $connect->query("select * from tb1_product where id=$pro_id");
$productDetails = mysqli_fetch_assoc($res);
$productDetails['quantity'] = $_POST['quantity'];

$_SESSION['shopping_cart'][$pro_id] = $productDetails;
}//echo "<pre>";
//print_r($_SESSION['shopping_cart']);
?>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
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
              <li><a href="hompage.php?xx=s2">Exclusives</a></li>
            </ul>
          </li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php" style="color: white; margin-top: -5px"><span><?php
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
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<td>S.No</td>
    			<td>Product Name</td>
    			<td>Quanity</td>
    			<td>Per Product Price</td>
    			<td>Total Line Price</td>
    			<td>Remove</td>
    		</tr>
    	</thead>
    	<tbody>
    		<?php
    		$total = 0;
   	             foreach($_SESSION['shopping_cart'] as $eachRow){
   	             	//print_r($eachRow);
   	             	$total +=($eachRow['quantity']*$eachRow['price']);
    		 ?>
    		<tr>
	    		<td>1</td>
	    		<td><p><img src="<?php echo str_replace('StoreofGames/', '', $eachRow['image']) ?>" style="width: 150px; height: 150px"></p><p><?php echo $eachRow['name'] ?></p></td>
	    		<td><?php echo $eachRow['quantity'] ?></td>
	    		<td><?php echo $eachRow['price'] ?></td>
	    		<td><?php echo $eachRow['quantity']*$eachRow['price'] ?></td>
	    		
	    		<td><a href="cart.php?action=remove&id=<?php echo $eachRow['id'] ?>">X</a></td>
    	</tr>
    	<?php } ?>
    	</tbody>
    	<tr>
    		<td colspan="6" align="right">Total Price = <?php echo $total; ?></td>
    	</tr>
    </table>
</div>

<div class="container">
<div align="right">
	<button style="text-decoration: none" class="btn btn-warning"><a href="payment.php" style="text-decoration: none; color:white">Checkout</a></button>
</div>
</div>
<br>

<div class="container" style="border: 1px groove gray">
  <div  class="row">
  <div class="col-sm-4">
<?php 
echo "<h3>Delivery Address</h3>";
echo $_SESSION['t4'];
?>
</div>
</div>
</div>
<br>
<div class="container" style="border: 1px groove gray">
  <div class="row">
  <div class="col-sm-4">
<?php 
echo "<h3>Phone no.</h3>";
echo $_SESSION['t5'];
?>
</div>
</div>
</div>
