<!DOCTYPE html>
<html lang="en">
<body id="page1">
<?php
  // Start the session
  require_once('link.php');
  require_once('header.php');


  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['user_name'])) {

    echo"<script type='text/javascript'>alert('please login to enter the page'); location.href='home.php'</script>";
    exit();
  }

  // Show the navigation menu
  //require_once('navmenu.php');

  // Connect to the database
  require_once('connect.php');

  // Grab the profile data from the database
  if (isset($_SESSION['user_name'])) { 
    $query = "SELECT username, name, email, class, school, location, city,state,phone,t1,t2 FROM student WHERE username = '" . $_SESSION['user_name'] . "'";
  }
 // else {
   // $query = "SELECT (username, name, email, class, school, location, city,state,phone,t1,t2) FROM mismatch_user WHERE username = '" . $_GET['username'] . "'";
  //}
  $data=mysqli_query($d1, $query);

  if (mysqli_num_rows($data)==1) {
    // The user row was found so display the user data
    $row = mysqli_fetch_array($data);
   
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
                          <li><a  href="home.php">Home Page</a></li>
                          <li><a class="active" href="student.php">For Student</a></li>
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
      <h1>Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" size="30" value="<?php if (!empty($row['username'])) echo $row['username'] ; ?>"></h1>
      
      
      <br>
      <p><br>
      <h1><font color="black">Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" size="30" value="<?php if (!empty($row['email'])) echo $row['email'] ; ?>"></h1>

      <br><br></font>
    </p>

 

    
<p>
 <h1><font color="black">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" size="30" value="<?php if (!empty($row['name'])) echo $row['name'] ; ?>"></h1>

      <br><br></font>
    </p>
<font color="black">

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Class: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="class">
  <option value="<?php if (!empty($row['class'])) echo $row['class'] ; ?>"><?php if (!empty($row['class'])) echo $row['class'] ; ?></option>
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
</b></font>
<br> 

</font>
<br><br>

<p>
 <h1><font color="black">School: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="school" size="30" value="<?php if (!empty($row['school'])) echo $row['school'] ; ?>"></h1>

      <br><br></font>
    </p>

<p>
 <h1><font color="black">Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="black">Location: <input type="text" name="loc" size="20" value="<?php if (!empty($row['location'])) echo $row['location'] ; ?>">&nbsp;&nbsp;&nbsp;&nbsp;City: <input type="text" name="city" size="20" value="<?php if (!empty($row['city'])) echo $row['city'] ; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
 
 State: <select name="state" >
  <option value="<?php if (!empty($row['state'])) echo $row['state'] ; ?>"><?php if (!empty($row['state'])) echo $row['state'] ; ?></option>
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


</select></h1>

      <br><br></font>
    </p>

  <p>
 <h1><font color="black">Contact No.: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="number" size="30" value="<?php if (!empty($row['phone'])) echo $row['phone'] ; ?>"></h1>

      <br><br></font>
    </p>


  <p>
 <h1><font color="black">Timing:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="black">From: <input type="text" name="t1" size="10" value="<?php if (!empty($row['t1'])) echo $row['t1'] ; ?>">  &nbsp;&nbsp;To:  <input type="text" name="t2" size="10"
 value="<?php if (!empty($row['t2'])) echo $row['t2'] ; ?>"></h1>

      <br><br></font>
    </p>

  




<p align="center">
      <input type="submit" class="btn btn-primary" value="edit profile" name="eprof" ></p>
      </form>
</section>
<?php 
require_once('footer.php');
 if (isset($_POST['eprof'])) {
    // Grab the profile data from the POST
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $class =$_POST['class'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $school = $_POST['school'];
    $loc=$_POST['loc'];
    $number=$_POST['number'];
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];

    
    // Update the profile data in the database
       if(!empty($username)&&!empty($email)&&!empty($name)&&!empty($class)&&!empty($city)&&!empty($state)&&!empty($school)&&!empty($loc)&&!empty($number)&&!empty($t1)&&!empty($t2)) {
        
           $query1= "UPDATE log SET username = '$username'  WHERE username = '" . $_SESSION['user_name'] . "'";
          $query2 = "UPDATE student SET username = '$username', name = '$name', email = '$email', " .
            " class = '$class', city = '$city', state = '$state', school = '$school', location='$loc',phone='$number',t1='$t1',t2='$t2' WHERE username = '" . $_SESSION['user_name'] . "'";
        mysqli_query($d1,$query1);
        
       $result = mysqli_query($d1, $query2);


        // Confirm success with the user
        if($result)
        {
            echo "<script type='text/javascript'>alert('Your profile has been updated!'); location.href='sview.php'</script>"; 
        }
        else
          echo"problre";
       

        mysqli_close($d1);
        exit();
      }
      else {
        echo "<script type='text/javascript'>alert('enter all the fileld!'); location.href='sview.php'</script>";;
      }
   // End of check for form submission
 
    //else {
      //echo '<p class="error">There was a problem accessing your profile.</p>';
    //}
  }

  mysqli_close($d1);

  // Insert the page footer
  //require_once('footer.php');
?>



