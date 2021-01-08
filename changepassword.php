<?php
  //change pass code...
  @$op=$_REQUEST['a1'];
  @$np=$_REQUEST['a2'];
  @$cp=$_REQUEST['a3'];
  @$b=$_REQUEST['go'];
  //echo $op."".$np."".$cp."".$b;
  if(isset($b))
  {
    if(empty($op) or empty($np) or empty($cp) )
  {
    echo "pls  fill all"; 
  }
  else if(file_exists("useracc/$t1/$t2"))
  {
    if($np==$cp)
    {
      rename("useracc/$t1/$op","useracc/$t1/$np");
      echo "pass is changed!";
    }
    else
    {
      echo "your new pass and confirm not matched";
    }    
  }
  else
  {
    echo "your old pass is wrong";
  }
  }
?>




<form>
<table width="200" border="1">
  <tr>
    <td>old pass</td>
    <td><input type="text" name="a1" ></td>
  </tr>
  <tr>
    <td>new pass</td>
    <td><input type="text" name="a2" ></td>
  </tr>
  <tr>
    <td>confirm pass</td>
    <td><input type="text" name="a3" ></td>
  </tr>
  <tr>    
    <td colspan="2"><input type="submit" name="go" value="save"></td>
  </tr>
</table>
</form>