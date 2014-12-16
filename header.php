<!DOCTYPE html>
<html>

<body>
<?php require_once('link.php'); ?>



        <!--form id="search-form" action="#" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="search-form">
              <input type="text" name="search" value="Type Keyword Here" onBlur="if(this.value=='') this.value='Type Keyword Here'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
              <a href="#">Search</a> </div>
          </fieldset>
        </form--><?php
        
                     
        $form=true;
            
                        @session_start();

                        // If the user isn't logged in, try to log them in
                        if (!isset($_SESSION['user_name']))
                        {

                                    
                        
    if (isset($_POST['login'])) {
      // Connect to the database
      require_once('connect.php');

      // Grab the user-entered log-in data
      $user_username = ($_POST['username']);
      $user_password = ($_POST['password']);

      if (!empty($user_username) && !empty($user_password)) {
        // Look up the username and password in the database
        $query = "SELECT username, password,type FROM log WHERE username = '$user_username' AND password = '$user_password'";
        $data = mysqli_query($d1, $query);

        if (mysqli_num_rows($data) == 1) {
          // The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
          $row = mysqli_fetch_array($data);
        
          $_SESSION['user_name'] = $row['username'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['type']= $row['type'];
        

         
          setcookie('user_name', $row['username'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
          echo '

                        <div class="btn-group" style="float:right; margin-top:50px; margin-right:50px;">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >'.$_SESSION['user_name'].'
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="dview.php">view profile</a></li>
                  <li><a href="logout.php">logout</a></li>
                  <li><a href="pass.php">change password</a></li>
                  <li><a href="adlogin.php">admin</a></li>
                </ul>
              </div>';
          $form=false;
          
        }
        else {
          // The username/password are incorrect so set an error message
          echo "<script type='text/javascript'>alert('Enter correct username and password!'); location.href='home.php'</script>";$form=true;
        }
      }
      else {
        // The username/password weren't entered so set an error message
        echo"<script type='text/javascript'>alert('Enter a username and password to log in'); location.href='home.php'</script>";$form=true;
      }
    }
  }
  else{
    $form=false;
    echo '

                        <div class="btn-group" style="float:right; margin-top:50px; margin-right:70px;">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >'.$_SESSION['user_name'].'
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="dview.php">view profile</a></li>
                  <li><a href="logout.php">logout</a></li>
                  <li><a href="pass.php">change password</a></li>
                  <li><a href="adlogin.php">admin</a></li>
                </ul>
              </div>';
  }
  
  

?>
<!-- header -->

<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
        <h1> <a   class="logo" href="home.php"></a><br> <strong class="slog">The most creative ideas<br></strong> </h1>

        <?php
        if($form)
        {
          ?>
          
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" align="top">
                    <p align="right" align="top">
                        
                      Username: <input type="text" name="username" >
                      Password: <input type="password" name="password" >
                     <input type="submit" class="btn btn-primary" name="login" value="login" ></p>
                     <p align="right" align="top">
                     
                     Don't have account:
                      <input type="submit" class="btn btn-primary" value="signup" name="signup" onclick="window.open('sign.php')"></a></p>
          </form>
                      
                      
                      
       <?php
        }
?>
        </div>



                    
          
             
                     <!--div class="row-2">
                      <nav>
                        <ul class="menu">
                          <li><a class="active" href="home.php">Home Page</a></li>
                          <li><a href="student.php">For Student</a></li>
                          <li><a href="tutor.php">For Tutor</a></li>
                          <li><a href="institute.php">For Institute</a></li>

                          <li class="last-item"><a href="contacts.html">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div-->

                    
</body>
</html>
        
     