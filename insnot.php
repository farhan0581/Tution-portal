<!DOCTYPE html>
<html>
<head>
<title>signing up</title>
<meta charset="utf-8">
       <?php 
              require_once('link.php'); ?>

</head>
<body id="page1">
<?php 
          require_once('header.php');
          @session_start();
          require_once('connect.php');
  // require_once('connect.php');
          if(!isset($_SESSION['user_name']))
          {
            echo "<script type='text/javascript'>alert('please login first!!');location.href='home.php'</script>";
            exit();
          }
          if($_SESSION['type']!='institute')
          {
            echo "<script type='text/javascript'>alert('You are not institute!!');location.href='institute.php'</script>";
            exit();
          }
   $qu="select insid from institute where username='".$_SESSION['user_name']."'";
   $dt=mysqli_query($d1,$qu);
   $r1=mysqli_fetch_array($dt);
   $id=$r1['insid'];
          $rs=mysqli_query($d1,"SELECT COUNT(sname) from ireq where insid='".$id."'");
                                $row1=mysqli_fetch_array($rs);


           ?>


<!--content-->
<div class="row-2">
                      <nav>
                        <ul class="menu">
                          <li><a class="active" href="home.php">Home Page</a></li>
                          <li><a href="student.php">For Student</a></li>
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
      <div class="wrapper">
 
<br>
<font color="black">
  <h3><b><p align="center">REQUESTS(<?php echo  $row1[0];?>)</p></b></h3></font>
  <br></font>
    

<?php 
//require_once('header.php');
@session_start();
   require_once('connect.php');
   $qu="select insid from institute where username='".$_SESSION['user_name']."'";
   $dt=mysqli_query($d1,$qu);
   $r1=mysqli_fetch_array($dt);
   $id=$r1['insid'];

  


                                if (isset($_GET["page"])) 

                                { 
                                    $page  = $_GET["page"]; 
                                } 

                                else 
                                { 
                                    $page=1; 
                                }
                                $start_from = ($page-1) * 3;
                                //$sql = "SELECT * FROM assign ORDER BY id ASC LIMIT $start_from, 5";
                                $rs_result = mysqli_query ($d1,"SELECT sname,email,phone,time from ireq where insid='".$id."'");
                                  if(mysqli_num_rows($rs_result)==0)
                                  {
                                     echo"<script type='text/javascript'>alert('NO REQUESTS!!');</script>";
                                  }
                                //$row = mysqli_fetch_array($rs_result);
                               // $_SESSION['id1']=$row['tuid'];
                                  
                                while ($row = mysqli_fetch_array($rs_result)) {
                                    ?>
                                        <form  method = "POST" action="">
                                        <div class="col-md-4">
                                              <div class="jumbotron">
                                              <font color="black">
                                            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['sname']))  echo $row['sname']; ?>"><br><br>
                                            Email:&nbsp;&nbsp;<input type="text" size="25" style="border:0" value="<?php if ( !empty($row['email']))  echo $row['email']; ?>"><br><br>
                                            Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" size="15" value="<?php if ( !empty($row['phone']))  echo $row['phone']; ?>"><br><br>
                                            Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" size="15" value="<?php if ( !empty($row['time']))  echo $row['time']; ?>">
                                        </font><br><br>
                                          <!--p align="center"><a class="btn btn-primary" href="#" role="button">View</a></p>
                                          <input type="hidden" name="vid" value="<?php echo $row['tuid'] ;?>"/>
                                          <input type="submit" class="btn btn-primary" value="view" name="view"-->
                                        </div></div>
                                           </form> 


                                   <?php
                                        // echo $row['qid'];
                                }
                                ?>
                                 </div>
                                        </section>
                                        </div>
                                        </div>
                                        </section>
                                        <?php
                                $result = mysqli_query($d1,"SELECT COUNT(sname) from ireq where insid='".$id."'");
                                $row = mysqli_fetch_row($result);
                                $total_records = $row[0];
                                $f=ceil( $total_records /3);
                                
                                 echo 'Go : ';
                                for ($i=1; $i<=$f; $i++) {
                                            //echo '<button';
                                            echo "<a href='insnot.php?page=".$i."'>   " . $i. "</a>";
                                            //echo '</footer>';
                                }


                                    


   



   


 
require_once('footer.php');
 ?>
 