<!DOCTYPE html>
<html lang="en">
<body id="page1">
<?php
  // Start the session
 @session_start();
  require_once('link.php');
  require_once('header.php');


  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['user_name'])) {

    echo"<script type='text/javascript'>alert('please login to enter the page'); location.href='home.php'</script>";
    exit();
  }
  if(isset($_POST['view']))
                                {
                                   $id=$_POST['vid'];
                                   $_SESSION['id1']=$id;
                                   //header('sview.php');
                                }



  // Show the navigation menu
  //require_once('navmenu.php');

  // Connect to the database
      // $id=$_POST['vid'];
  $id=$_SESSION['id1'];

require_once('connect.php');
  // Grab the profile data from the database
  if (isset($_SESSION['user_name'])) { 

    $query = "SELECT username, name, email,subjects ,fee, location, city,state,phone,t1,t2 FROM institute WHERE insid = '" . $id. "'";
    //$query1= "SELECT comment,sname FROM tcomment WHERE tuid = '" . $id. "'";
  }
 // else {
   // $query = "SELECT (username, name, email, class, school, location, city,state,phone,t1,t2) FROM mismatch_user WHERE username = '" . $_GET['username'] . "'";
  //}
  $data=mysqli_query($d1, $query);

  //$data1=mysqli_query($d1, $query1);
  //$row1=mysqli_fetch_array($data1);

  if (mysqli_num_rows($data)==1) {
    // The user row was found so display the user data
    $row = mysqli_fetch_array($data);
   //$_SESSION['id1'] = $row['tuid'];
    //if (!isset($_GET['user_id']) || ($_SESSION['user_id'] == $_GET['user_id'])) {
      //echo '<p>Would you like to <a href="editprofile.php">edit your profile</a>?</p>';
    //}
  } // End of check for a single row of user results
  else {
    echo '<p class="error">There was a problem accessing your profile.</p>';
  }

        






?>

<div class="row-2">
                      <nav>
                        <ul class="menu">
                          <li><a class="active" href="home.php">Home Page</a></li>
                          <li><a href="student.php">For Student</a></li>
                          <li><a href="tutor.php">For Tutor</a></li>
                          <li><a href="institute.php">For Institute</a></li>

                          <li class="last-item"><a href="contacts.php">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div>




<section id="content">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
      <div class="wrapper">
        <br><br>
    <font color="black">
      <h1><b>Username</b>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" style="border:0" size="30" value="<?php if (!empty($row['username'])) echo $row['username'] ; ?>"></h1>
      
      
      <br>
      <p><br>
      <h1><font color="black"><b>Email:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" style="border:0" name="email" size="30" value="<?php if (!empty($row['email'])) echo $row['email'] ; ?>"></h1>

      <br><br></font>
    </p>

 

    
<p>
 <h1><font color="black"><b>Name:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" name="name" size="30" value="<?php if (!empty($row['name'])) echo $row['name'] ; ?>"></h1>

      <br><br></font>
    </p>
<font color="black">
<b> 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Subjects:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" name="class" size="40"
  value="<?php if (!empty($row['subjects'])) echo $row['subjects'] ; ?>">
  <!--option value="500">500</option>
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
  <option value="above 5500">Above 5500</option-->
</select>
</font>
<br><br>


</b></font>
<br><br>
<p>
 <h1><font color="black"><b>Fee:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" name="subject"  value="<?php if (!empty($row['fee'])) echo $row['fee'] ; ?>"size="30"></h1>

      <br><br></font>
    </p> 
    <br><br>



<p>
 <h1><font color="black"><b>Address:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="black"><b>Location:</b> <input type="text" name="loc"style="border:0" size="40" value="<?php if (!empty($row['location'])) echo $row['location'] ; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<b>City:</b> <input type="text" style="border:0" name="city" size="20" value="<?php if (!empty($row['city'])) echo $row['city'] ; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<b>State:</b> <input type="text" style="border:0" name="state" size="20" 
 value="<?php if (!empty($row['state'])) echo $row['state'] ; ?>"></h1>

      <br><br></font>
    </p>

  <p>
 <h1><font color="black"><b>Contact No.:</b> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="number" style="border:0" size="10" value="<?php if (!empty($row['phone'])) echo $row['phone'] ; ?>"></h1>

      <br><br></font>
    </p>


  <p>
 <h1><font color="black"><b>Timing: </b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="black">From: <input type="text" style="border:0" name="t1" size="10" value="<?php if (!empty($row['t1'])) echo $row['t1'] ; ?>">  &nbsp;&nbsp;To:  <input type="text" name="t2"style="border:0" size="10"
 value="<?php if (!empty($row['t2'])) echo $row['t2'] ; ?>"></h1>

      <br><br></font>
    </p>
    





      </form>
</section>

<?php   
  // Insert the page footer
require_once('footer.php');
?>



