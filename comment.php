<?php 
@session_start();
require_once('connect.php');
  if(isset($_POST['comment']))
{
       // $id=$_POST['vid'];
        $c=$_POST['comments'];
        $u=$_SESSION['id1'];
       // require_once('connect.php');
        $query1="select name from student where username='".$_SESSION['user_name']."'";
        $data1=mysqli_query($d1,$query1);
        $query2="select username from tutor where tuid='".$u."'";
        $data2=mysqli_query($d1,$query2);
         $row = mysqli_fetch_array($data1);
          $row2 = mysqli_fetch_array($data2);
          $n=$row['name'];
          $user=$row2['username'];
          

          $query3="insert into comment(username,sname,comment) values ('$user','$n','$c')";
          $data3=mysqli_query($d1,$query3);

          if($data3)
          {
            echo "<script type='text/javascript'>alert('your response has been recorded!!!');</script>";
          }
          else
          {
            echo "<script type='text/javascript'>alert('error!');</script>";
          }

}
 ?>