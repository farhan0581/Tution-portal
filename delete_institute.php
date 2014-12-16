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

<script>
    function ConfirmDelete()
	{
		var result = confirm("Are you sure?");
		if (result==true) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>

<?php
if(isset($_GET['delid']))
{
$sqldel = "DELETE FROM log where username='".$_GET['delid']."'";
$resdel = mysqli_query($d1,$sqldel);
	if(!$resdel)
	{
		echo "Failed to delete... Problem in sql query";
	}
	else
	{
		echo "<script type='text/javascript'>alert('record deleted successfully!');</script>";
	}
}

$sql = "SELECT * FROM institute";
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
              	<h2>remove tutor </h2>
            <p>
<table  class='tftable' width="896" border="1">
<tr>
<th width="100">ins_id</th>
<th width="144">Username</th>
<th width="151">Institute Name</th>
<th width="100">fee structure</th>
<th width="220">Contact Details</th>
</tr>
<?php
while($rs = mysqli_fetch_array($resstudents))
{
	
	//echo "<tr><td>";
	 echo "</td><td>$rs[insid]</td>";  
	echo "</td><td>$rs[username]</td>";
	echo "<td>$rs[name]</td>";
	echo "<td>$rs[fee]</td>";
	echo "<td>
	<strong>Email ID:</strong> <br>$rs[email] <br>
	<strong>Mobile No.</strong> <br>$rs[phone]
	</td>";
	echo "<td>
	<a href='delete_institute.php?delid=$rs[username]' onclick='return ConfirmDelete()'>Delete</a> </a>
	</td>";;
	echo "</tr>";
}
?>
</table>
</p>

        <!-- </div>-->
            
     	</div> <!-- /row 1 -->
        
        <div class="row space30"> <!-- row 2 begins --> 
        
            
        </div> <!-- /row 2 -->
<?php 
include("footer.php");
?>