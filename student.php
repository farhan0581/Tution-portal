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
      ?>
    <!-- content -->
    <div class="row-2">
                      <nav>
                        <ul class="menu">
                          <li><a href="home.php">Home Page</a></li>
                          <li><a class="active" href="student.php">For Student</a></li>
                          <li><a href="tutor.php">For Tutor</a></li>
                          <li><a href="institute.php">For Institute</a></li>

                          <li class="last-item"><a href="contacts.html">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div>

    <section id="content">
      <div class="padding">
        <div class="indent">
          <section id="content">
          <form method="post" action="search2.php">
      <div class="wrapper">
  <a href="dview.php"><h3><p align="right">View Profile</a></p></h3>
<br><br>
<div class="jumbotron">
  <h3>Search For Teacher:</h3>
  <br>
  <font color=black>
<font color="red">*</font>Looking For:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="select">
      <option value="--Select--">--Select--</option>
  <option value="teacher">Teacher</option>
  <option value="coaching">Coaching</option>
  </select>
<br><br><br>
<!--Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="textbox" name="location"-->
<font color="red">*</font>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="textbox" name="city" >


<font color="red">*</font>State: <select name="state" >
  <option value="--select--">--Select--</option>
  <option value="Andhra pradesh">Andhra pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Delhi">Delhi</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Jammu & Kashmir">Jammu & Kashmir</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="uttar pradesh">Uttar Pradesh</option>
  <option value="West Bengal">West Bengal</option>


</select>

<br><br><br>



<font color="red">*</font>Subject: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="subject">
  <option value="--Select--">--Select--</option>
  <option value="math">Mathematics</option>
  <option value="physics">Physics</option>
  <option value="chemistry">Chemistry</option>
  <option value="biology">Biology</option>
  <option value="zoology">Zoology</option>
  <option value="botany">Botany</option>
  <option value="accounts">Accounts</option>
  <option value="bisiness">Business</option>
  <option value="banking">Banking</option>
  <option value="english">English</option>
  <option value="history">History</option>
  <option value="economics">Economics</option>
  <option value="geography">Geography</option>
  <option value="hindi">Hindi</option>
  <option value="urdu">Urdu</option>
  <option value="electronics">Electronics</option>
  <option value="mental">Mental Ability</option>

</select>

<br><br><br>

<!--Timing:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: <input type="text" size="10" name="t1">  &nbsp;&nbsp;To:  <input type="text" size="10" name="t2">

<br><br><br>

Fees:(per subject) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fee">
  <option value="--Select--">--Select--</option>
  <option value="500">500</option>
  <option value="1000">1000</option>
  <option value="1500">1500</option>
  <option value="2000">2000</option>
  <option value="2500">2500</option>
  <option value="3000">3000</option>
  <option value="3500">3500</option>
  <option value="4000">4000</option>
  <option value="4500">4500</option>
  <option value="5000">5000</option>
  <option value="5500">5500</option>
  <option value="above 5500">Above 5500</option>
  
</select-->
<br><br><br>
<input type="submit" class="btn btn-primary" value="search" name="search"></p>
  
</div>
</form>
</section>
</div>
</div>




</section> 

  <?php 
  require_once('footer.php');

  

?>
