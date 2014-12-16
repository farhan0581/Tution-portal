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
  <h3><b><p align="center">Search Results</p></b></h3></font>
  <br></font>
    

<?php 
//require_once('header.php');
   require_once('connect.php');
   if(isset($_POST['search']))
   {
         $s=$_POST['select'];
    $ct=$_POST['city'];
    $st=$_POST['state'];
    $cl=$_POST['class'];
    $_SESSION['select']=$s;
    $_SESSION['city']=$ct;
    $_SESSION['state']=$st;
    $_SESSION['class']=$cl;
   }
    $s=$_SESSION['select'];
    $ct=$_SESSION['city'];
    $st=$_SESSION['state'];
    $cl=$_SESSION['class'];


   //$s=$_POST['select'];
   // $loc=$_POST['location'];
    //$ct=$_POST['city'];
    //$st=$_POST['state'];
    //$cl=$_POST['class'];
    //$sub=$_POST['subject'];
    ///$cl=$_POST['class'];
    //$t1=$_POST['t1'];
    //$t2=$_POST['t2'];
    //$fee=$_POST['fee'];
    require_once('connect.php');
if($s=='student')
{

    if(!empty($s)&&!empty($ct)&&!empty($st)&&!empty($cl))
    {
        





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
        $rs_result = mysqli_query ($d1,"SELECT * FROM student   where class like'%".$cl."%' AND state like '%".$st."%' AND city like '%".$ct."%'ORDER by name LIMIT $start_from, 3");
                                  if(mysqli_num_rows($rs_result)==0)
                                  {
                                     echo"<script type='text/javascript'>alert('NO RESULTS!!!Please redefine your search!!'); location.href='student.php'</script>";
                                  }
                               // $row = mysqli_fetch_array($rs_result);
                               // $_SESSION['id1']=$row['tuid'];
                                  
                                while ($row = mysqli_fetch_array($rs_result)) {
                                    ?>
                                        <form  method = "POST" action="tuview1.php">
                                        <div class="col-md-4">
                                              <div class="jumbotron">
                                              <font color="black">
                                            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['name']))  echo $row['name']; ?>"><br><br>
                                            class:&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['class']))  echo $row['class']; ?>"><br><br>
                                            School:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" size="35" value="<?php if ( !empty($row['school']))  echo $row['school']; ?>">
                                        </font><br><br>
                                          <!--p align="center"><a class="btn btn-primary" href="#" role="button">View</a></p-->
                                          <input type="hidden" name="vid" value="<?php echo $row['stdid'] ;?>"/>
                                          <input type="submit" class="btn btn-primary" value="view" name="view">
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
                                $result = mysqli_query($d1,"SELECT COUNT(name) FROM student where class like '%".$cl."%'AND state like '%".$st."%' AND city like '%".$ct."%'");
                                $row = mysqli_fetch_row($result);
                                $total_records = $row[0];
                                $f=ceil( $total_records /3);
                                
                                 echo 'Go : ';
                                for ($i=1; $i<=$f; $i++) {
                                            //echo '<button';
                                            echo "<a href='search3.php?page=".$i."'>   " . $i. "</a>";
                                            //echo '</footer>';
                                }




                                

  } 
}


          else if($s=='institute')
          {  

              if(!empty($s)&&!empty($ct)&&!empty($st))
              {

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
                                $rs_result = mysqli_query ($d1,"SELECT * FROM institute   where state like '%".$st."%' AND city like '%".$ct."%'ORDER by name LIMIT $start_from, 3");
                                  if(mysqli_num_rows($rs_result)==0)
                                  {
                                     echo"<script type='text/javascript'>alert('NO RESULTS!!!Please redefine your search!!'); location.href='student.php'</script>";
                                  }
                                
                                  
                                while ($row = mysqli_fetch_array($rs_result)) {
                                    ?>
                                        <form  method = "POST" action="tuview2.php">
                                        <div class="col-md-4">
                                              <div class="jumbotron">
                                              <font color="black">
                                            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['name']))  echo $row['name']; ?>"><br><br>
                                            
                                            Subjects:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" size="15" value="<?php if ( !empty($row['subjects']))  echo $row['subjects']; ?>">
                                        </font><br><br>
                                          <!--p align="center"><a class="btn btn-primary" href="#" role="button">View</a></p-->
                                          <input type="hidden" name="vid" value="<?php echo $row['insid'] ;?>"/>
                                          <input type="submit" class="btn btn-primary" value="view" name="view">
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
                                $result = mysqli_query($d1,"SELECT COUNT(name) FROM institute   where state like '%".$st."%' AND city like '%".$ct."%'");
                                $row = mysqli_fetch_row($result);
                                $total_records = $row[0];
                                $f=ceil( $total_records /3);
                                
                                 echo 'Go : ';
                                for ($i=1; $i<=$f; $i++) {
                                            //echo '<button';
                                            echo "<a href='search3.php?page=".$i."'>   " . $i. "</a>";
                                            //echo '</footer>';
                                }


          }     
     }     



   


 
require_once('footer.php');
 ?>
 