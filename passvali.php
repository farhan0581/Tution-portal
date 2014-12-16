<!DOCTYPE html>
<html>
<head>
	<title>password</title>
</head>
<body>
			<meta charset="utf-8">
<script src="js/jquery-1.11.1.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/bootstrap.min.js" type=""></script>

			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			PASSWORD <input type="password"  name="password"><br><br>
			RENTER<input type="password"  name="rpass"><br><br>
			<p align="side">
      <input type="submit" class="btn btn-primary" value="confirm" name="pass"></p>
				
			</form>

</body>
</html>



<?php
		if(isset($_POST['pass']))
		{
			 $p= trim($_POST['password']);
      		$q =trim($_POST['rpass']);
      		if($p==$q)
      		{
      			if(strlen($p)>=6)
      			{
      				echo "done";
      			}
      			else
      			{
      				echo "length short";
      			}
      		}

		}



		 ?>