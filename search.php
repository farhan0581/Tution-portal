<!DOCTYPE html>
<html>
<head>
<title>signing up</title>
<meta charset="utf-8">
<meta charset="utf-8">
       <?php 
              require_once('link.php'); ?>

</head>
<body id="page1">
<?php 
          require_once('header.php'); ?>


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
  <h3><b><p align="center">Search Results</p></b></h3></font>
  <br></font>
    

<?php 
//require_once('header.php');
   require_once('connect.php');

   




   

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
    $rs_result = mysqli_query ($d1,"SELECT * FROM tutor   where subjects like '%math%' ORDER by name LIMIT $start_from, 3");
      
    
      
    while ($row = mysqli_fetch_array($rs_result)) {
        ?>
            <form  method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="col-md-4">
                  <div class="jumbotron">
                  <font color="black">
                Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['name']))  echo $row['name']; ?>"><br><br>
                Qualification:&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['qualif']))  echo $row['qualif']; ?>"><br><br>
                Subjects:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" size="15" value="<?php if ( !empty($row['subjects']))  echo $row['subjects']; ?>">
            </font><br><br>
              <p align="center"><a class="btn btn-primary" href="#" role="button">View</a></p>
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
    $result = mysqli_query($d1,"SELECT COUNT(name) FROM tutor");
    $row = mysqli_fetch_row($result);
    $total_records = $row[0];
    $f=ceil( $total_records /3);
    
     echo 'Go : ';
    for ($i=1; $i<=$f; $i++) {
                //echo '<button';
                echo "<a href='formdrop.php?page=".$i."'>   " . $i. "</a>";
                //echo '</footer>';
    }

 
require_once('footer.php');
 ?>
