    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
  <script src="Bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="Bootstrap/js/jquery.js" type="text/javascript"></script>

<br><br><br><br><br><br><br><br>
     <div class="container" align="center">
    <h2>Select Payment Method</h2>
        <form action="Orderconfirmed.php">
               <p><a href="payment.php?pay=cp" style="text-decoration: none">Card Payment</a></p>
     <p id="demo"></p>
   <script>
        function myCard(){
        var card=document.getElementById("card").value;
        if(isNaN(card)){
            alert('Enter only the numeric value');
            document.getElementById("card").value="";
        }
              else if( card.length==16){
                if(card.charAt(0)==4  ){
                  document.getElementById("card").style.color="blue";
              document.getElementById("demo").innerHTML= "<img src='sogimg/v.png' alt='visa'>";
              }
              else if(card.charAt(0)==5 && (card.charAt(1)>=1 && card.charAt(1)<=5 )){
              document.getElementById("demo").innerHTML= "<img src='sogimg/mc.png' alt='master card'>";
              }
              else if(  (card.charAt(0)==5 || card.charAt(0)==6) && (card.charAt(1)==0 || card.charAt(1)==3 || card.charAt(1)==7) ) {
              document.getElementById("demo").innerHTML= "<img src='sogimg/m.png' alt='maestro card'>";
              }
              else if(  card.charAt(0)==3 && (card.charAt(1)==4 || card.charAt(1)==7)){
              document.getElementById("demo").innerHTML= "<img src='sogimg/ae.png' alt='american express'>";
              }
              else {
               document.getElementById("demo").innerHTML="*invalid number";
                  document.getElementById("demo").style.color="red";
                  document.getElementById("card").value="";
              }
        }
    }
    </script>

     <p><a href="payment.php?pay=cod" style="text-decoration: none">COD</a></p>
     <hr>
     <?php
@$xyz=@$_REQUEST['pay'];
if(@$xyz=='cp')
{
echo '<input type="text" id="card" placeholder="enter card number" onkeyup="myCard()" maxlength="16">';
}
if(@$xyz=='cod')
{
echo '<input type="radio" name="COD" value="COD">Cash On Delivery';
}
?>
<p></p>
<p><a href="Orderconfirmed.php" style="text-decoration: none"><input type="submit" name="go" value="Submit" class="btn btn-success"></a></p>
</form>
</div>

<div class="container" align="center">
  <?php
$a=range(111, 999);
$b=array_rand($a);
if(@$_REQUEST['go'])
{
  if(@$_REQUEST['d']==@$_REQUEST['e'])
  {
    header("location:Orderconfirmed.php");
}
else
{ 
  echo "Renter captcha value ";}
}
?>
<form>
  <table>
  <tr><td>Captcha:</td><td><input type="text" name="d" value="<?php echo $a[$b]?>"><br></td></tr>
  <tr><td>Enter Captcha:</td><td><input type="text" name="e"><br></td></tr>
</table>
</form>
</div>