
<?php
  // Start the session
  require_once('link.php');
 require_once('header.php');

  // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['user_name'])) {
    echo '<p class="login">Please <a href="login.php">log in</a> to access this page.</p>';
    exit();
  }

  // Connect to the database
  require_once('connect.php');

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
        mysqli_query($d1,$query1)
        
       $result= mysqli_query($d1, $query2);

        // Confirm success with the user
        if($result)
        {
            echo "<script type='text/javascript'>alert('Your profile has been updated!'); location.href='view.php'</script>"; 
        }
        else
          echo"problre";
       

        mysqli_close($d1);
        exit();
      }
      else {
        echo "<script type='text/javascript'>alert('enter all the fileld!'); location.href='view.php'</script>";;
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
