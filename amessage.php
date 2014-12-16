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
          require_once('adheader.php');
           @session_start();
      if($_SESSION['type']!='admin')
      {
        //if(!isset($_SESSION['user_name']))
        //{
    echo "<script type='text/javascript'>alert('UNAUTHORIZED!');location.href='home.php'</script>";
    exit();
  //}
}

require_once('connect.php');
          $rs=mysqli_query($d1,"SELECT COUNT(name) from amessage");
                                $row1=mysqli_fetch_array($rs);
           ?>
           


<!--content-->


 <section id="content">
      <div class="padding">
        <div class="indent">
          <section id="content">
      <div class="wrapper">
 
<br>
<font color="black">
  <h3><b><p align="center">Messages(<?php echo $row1[0];?>)</p></b></h3></font>
  <br></font>
    

<?php 
//require_once('header.php');
@session_start();
   require_once('connect.php');
   if(!isset($_SESSION['user_name']))
   {
        echo"<script type='text/javascript'>alert('!!please login first!!'); location.href='admin.php'</script>";
        exit();
   }
  
 


  
    //$t1=$_POST['t1'];
    //$t2=$_POST['t2'];
    //$fee=$_POST['fee'];
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
                                $rs_result = mysqli_query ($d1,"SELECT * FROM amessage  ORDER by name LIMIT $start_from, 3");
                                  if(mysqli_num_rows($rs_result)==0)
                                  {
                                     echo"<script type='text/javascript'>alert('!!No Messages!!'); location.href='admin.php'</script>";
                                  }
                               // $row = mysqli_fetch_array($rs_result);
                               // $_SESSION['id1']=$row['tuid'];
                                  
                                while ($row = mysqli_fetch_array($rs_result)) {
                                    ?>
                                        <form  method = "POST" action="amessage.php">
                                        <div class="col-md-4">
                                              <div class="jumbotron">
                                              <font color="black">
                                            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['name']))  echo $row['name']; ?>"><br><br>
                                            email:&nbsp;&nbsp;<input type="text" size="25" style="border:0" value="<?php if ( !empty($row['email']))  echo $row['email']; ?>"><br><br>
                                            Message:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows="4" cols="25"><?php if ( !empty($row['message']))  echo $row['message']; ?></textarea>
                                        </font><br><br>
                                          <!--p align="center"><a class="btn btn-primary" href="#" role="button">View</a></p-->
                                          <!--input type="hidden" name="vid" value="<?php echo $row['tuid'] ;?>"/>
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
                                $result = mysqli_query($d1,"SELECT COUNT(name) FROM amessage ");
                                $row = mysqli_fetch_row($result);
                                $total_records = $row[0];
                                $f=ceil( $total_records /3);
                                
                                 echo 'Go : ';
                                for ($i=1; $i<=$f; $i++) {
                                            //echo '<button';
                                            echo "<a href='amessage.php?page=".$i."'>   " . $i. "</a>";
                                            //echo '</footer>';
                                }




                     


 
require_once('footer.php');
 ?>
 