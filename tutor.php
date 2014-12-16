<!DOCTYPE html>
<html lang="en">
<head>
<title>Tutor</title>
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
                          <li><a  href="home.php">Home Page</a></li>
                          <li><a href="student.php">For Student</a></li>
                          <li><a class="active" href="tutor.php">For Tutor</a></li>
                          <li><a href="institute.php">For Institute</a></li>

                          <li class="last-item"><a href="contacts.php">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div>
    <section id="content">
      <div class="padding">
        <div class="indent">
          <section id="content">
          <form method="post" action="search3.php">
      <div class="wrapper">
  <a href="dview.php"><h3><p align="right">View Profile</a>&nbsp;&nbsp; | <a href="tutornot.php">Notification</a></p></h3>
<br><br>
<div class="jumbotron">
  <h3>Search For Student/coaching:</h3>
  <br><br><br>
  <font color=black>
<font color="red">*</font>Looking For:&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="select">
      <option value="--Select--">--Select--</option>
  <option value="student">Student</option>
  <option value="institute">Coaching</option>
  </select>
<br><br><br>
<!--Location:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=textbox-->
<font color="red">*</font>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="city">
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

 <font color="red">*</font>Class: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="class">
  <option value="--Select--">--Select--</option>
  <option value="I">I</option>
  <option value="I">II</option>
  <option value="III">III</option>
  <option value="IV">IV</option>
  <option value="V">V</option>
  <option value="VI">VI</option>
  <option value="VII">VII</option>
  <option value="VIII">VIII</option>
  <option value="IX">IX</option>
  <option value="X">X</option>
  <option value="XI">XI</option>
  <option value="XII">XII</option>
</select>
<br><br><br>








<input type="submit" class="btn btn-primary" value="search" name="search"></p>

</div>
</form>
</section>
</div>
</div>




</section> 


  <?php 
  require_once('footer.php'); ?> 