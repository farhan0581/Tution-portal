<!DOCTYPE html>
<html lang="en">
<head>
<title>student</title>
<?php 
require_once('link.php'); ?>
</head>
<body id="page2">
<?php 
      require_once('adheader.php');
      @session_start();
      if(!isset($_SESSION['user_name'])&&($_SESSION['type']!='admin'))
      {
    echo "<script type='text/javascript'>alert('UNAUTHORIZED!');location.href='home.php'</script>";
    exit();

      }
      ?>
    
        <div class="center">
              <h4 align="center">Admin Menu</h4>
              <h2 align="center"><a href="view_student.php">VIEW STUDENTS</a></h2>                 
              <h2 align="center"><a href="view_tutor.php">VIEW TUTORS</a></h2>  
              <h2 align="center"><a href="view_institute.php">VIEW INSTITUTION</a></h2>                                     
              <h2 align="center"><a href="delete_student.php">REMOVE STUDENT</a></h2>
              <h2 align="center"><a href="delete_tutor.php">REMOVE TUTOR</a></h2>
              <h2 align="center"><a href="delete_institute.php">REMOVE INSTITUTION</a></h2>
              <h2 align="center"> <a href="astreg.php">ADD STUDENT</a></h2>
              <h2 align="center"><a href="atureg.php">ADD TUTOR</a></h2>
              <h2 align="center"><a href="ainslogin.php">ADD INSTITUTION</a></h2>
               <h2 align="center"><a href="amessage.php">VIEW MESSAGES</a></h2>
               <h2 align="center"><a href="atcom.php">VIEW TUTOR COMMENTS</a></h2>
               <h2 align="center"><a href="aicom.php">VIEW INSTITUTE COMMENTS</a></h2>
               </div>
                        
            
<?php
      require_once('footer.php'); ?>
</body>
</html>