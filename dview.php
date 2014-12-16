<?php 
		 @session_start();

		if (isset($_SESSION['user_name']))
		{
			$T=$_SESSION['type'];
			if($T=='student')
			{
				header('Location:sview.php');
			}
			elseif($T=='tutor')
			{
				header('Location:tview.php');

			}
			elseif ($T=='institute')
			 {
				header('Location:iview.php');
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Please login first!!');location.href='home.php'</script>";
		}


 ?>