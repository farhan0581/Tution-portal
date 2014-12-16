<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
 @session_start();
      if($_SESSION['type']!='admin')
      {
        //if(!isset($_SESSION['user_name']))
        //{
    echo "<script type='text/javascript'>alert('UNAUTHORIZED!');location.href='home.php'</script>";
    exit();
  //}
}
?>

<?php

$sql = "SELECT * FROM Student";
$resstudents=mysqli_query($d1,$sql);
?>
<?php
include("link.php");
?>             
      	<div class="row space30"> <!-- row 1 begins -->
      
  <?php
  include("adheader.php");
  ?>
            
          <div class="col-xs-12 col-sm-6 col-lg-8">
              	<h2>View Students</h2>
            <p>
<table  class='tftable' width="896" border="1">
<tr>
<th width="100">std_id</th>
<th width="144">Username</th>
<th width="151">Name</th>
<th width="100">class</th>
<th width="100">School</th>
<th width="220">Contact Details</th>
</tr>
<?php
while($rs = mysqli_fetch_array($resstudents))
{
	
	//echo "<tr><td>";
	 echo "</td><td>$rs[stdid]</td>";  
	echo "</td><td>$rs[username]</td>";
	echo "<td>$rs[name]</td>";
	echo "<td>$rs[class]</td>";
	echo "<td>$rs[school]</td>";
	echo "<td>
	<strong>Email ID:</strong> <br>$rs[email] <br>
	<strong>Mobile No.</strong> <br>$rs[phone]
	</td>";
	echo "</tr>";
}
?>
</table>
</p>


        <!-- </div>-->
            
     	</div> <!-- /row 1 -->
        
       <div class="row space30"> <!--row 2 begins --> 
        
            
        </div> <!-- /row 2 -->
<?php 
include("footer.php");
?>