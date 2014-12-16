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
          $rs=mysqli_query($d1,"SELECT COUNT(sname) from tcomment");
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
  <h3><b><p align="center">Comments(<?php echo $row1[0];?>)</p></b></h3></font>
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
                                $start_from = ($page-1) * 6;
                                //$sql = "SELECT * FROM assign ORDER BY id ASC LIMIT $start_from, 5";
                                $rs_result = mysqli_query ($d1,"SELECT * FROM tcomment  ORDER by sname LIMIT $start_from, 6");
                                  if(mysqli_num_rows($rs_result)==0)
                                  {
                                     echo"<script type='text/javascript'>alert('!!No Comments!!'); location.href='admin.php'</script>";
                                  }
                               // $row = mysqli_fetch_array($rs_result);
                               // $_SESSION['id1']=$row['tuid'];
                                  
                                while ($row = mysqli_fetch_array($rs_result)) {
                                    ?>
                                        <form  method = "POST" action="atcom.php">
                                        <div class="col-md-4">
                                              <div class="jumbotron">
                                              <font color="black">
                                            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" style="border:0" value="<?php if ( !empty($row['sname']))  echo $row['sname']; ?>"><br><br>
                                            
                                            Comment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="border:0" size="35" value="<?php if ( !empty($row['comment']))  echo $row['comment']; ?>">
                                        </font><br><br>
                                          <!--p align="center"><a class="btn btn-primary" href="#" role="button">View</a></p-->
                                          <input type="hidden" name="vid" value="<?php echo $row['cid'] ;?>"/>
                                          <input type="submit" class="btn btn-primary" value="delete" name="delete">
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
                                $result = mysqli_query($d1,"SELECT COUNT(sname) FROM tcomment ");
                                $row = mysqli_fetch_row($result);
                                $total_records = $row[0];
                                $f=ceil( $total_records /6);
                                
                                 echo 'Go : ';
                                for ($i=1; $i<=$f; $i++) {
                                            //echo '<button';
                                            echo "<a href='atcom.php?page=".$i."'>   " . $i. "</a>";
                                            //echo '</footer>';
                                }


                     


 
require_once('footer.php');
if(isset($_POST['delete']))
{
  $id=$_POST['vid'];
  require_once('connect.php');
  $q="DELETE from tcomment where cid='".$id."'";
  $d=mysqli_query($d1,$q);
  if($d)
  {
                                     echo"<script type='text/javascript'>alert('!!comment deleted!!'); location.href='atcom.php'</script>";

  }
  else
                                     echo"<script type='text/javascript'>alert('!!Not deleted!!'); location.href='atcom.php'</script>";

}
 ?>
 </body>
 </html>