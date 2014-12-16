<!DOCTYPE html>
<html lang="en">
<head>
<title>password</title>
<?php
  require_once('link.php'); 
 ?>
</head>
<body id="page1">
<?php 
        require_once('adheader.php'); ?>
<!--content-->

<section id="content">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
      <div class="wrapper">
        <br><br>
    <font color="#0099cc">
      <h1>Old password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="opass" size="30"></h1>
      <br></font><font color="black">
      </font>
      <br><br>
      <p><br>
      <h1><font color="#0099cc">New password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="npass" size="30"></h1>

      <br><br></font>
    </p>

 <p>
      <h1><font color="#0099cc">retype Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="nnpass" size="30"></h1>

      <br><br></font>
      <br>
      <br>
      <br>
      <br>
    </p>
    <p align="center">
      <input type="submit" class="btn btn-primary" value="confirm" name="pass"></p>
      </form>
</section>
<?php 
      require_once('footer.php');
      if(isset($_POST['pass']))
      {
        //echo $_SESSION['password'];
        require_once('connect.php');
            $pa=$_SESSION['password'];
            $n1=$_POST['opass'];
            $e1= $_POST['npass'];
            $p1=$_POST['nnpass'];
            if(!empty($n1)&&!empty($e1)&&!empty($p1))
            {
              if($pa==$n1&&$e1==$p1)
              {
                  $query1 = "UPDATE log SET password = '$e1'  WHERE username = '" . $_SESSION['user_name'] . "'";
                 $query2 = "UPDATE student SET password = '$e1'  WHERE username = '" . $_SESSION['user_name'] . "'";
                  mysqli_query($d1, $query1);
                 $result= mysqli_query($d1, $query2);
                 if($result)
                  echo"<script type='text/javascript'>alert('password changed!!!'); location.href='admin.php'</script>";
                else
                  echo"erroe";
              }
              else
                echo "<script type='text/javascript'>alert('ERROR !!! enter again!!!'); location.href='apass.php'</script>";
            }
            else
              echo "<script type='text/javascript'>alert('Enter all the feilds!!!'); location.href='apass.php'</script>";
            
      }





 ?>

    