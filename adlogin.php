<!DOCTYPE html>
<html lang="en">
<head>
<title>student</title>
<?php 
require_once('link.php'); ?>
</head>
<body id="page1">
<?php 
      require_once('header.php');
      @session_start();
      if(!isset($_SESSION['user_name'])&&($_SESSION['type']!='admin'))
      {
    echo "<script type='text/javascript'>alert('UNAUTHORIZED!');location.href='home.php'</script>";
    exit();

      }
      ?>
    <!-- content -->
    <section id="content">
      <div class="padding">
        <div class="indent">
          <section id="content">
          <form method="post" action="admincheck.php">
      <div class="wrapper">
  <a href="home.php"><h3><p align="right">go back to home page</a></p></h3>
<br><br>
<div class="jumbotron">
 
<br><br>
<h3>username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username"><h3/>
<br><br><br>
<h3>password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"><h3/>
<br><br><br>

 <p align="center">
      <input type="submit" class="btn btn-primary" value="login" name="login"></p>
</div>
</form>
</section>
</div>
</div>




</section> 

  <?php 
  require_once('footer.php'); ?>