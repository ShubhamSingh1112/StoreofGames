<?php
$img=scandir("adimg");
array_shift($img);
array_shift($img);
$randimg=array_rand($img);
?>
<img src="adimg/<?php echo $img[$randimg]; ?>" width="100%" height="80%" id="testing"/>