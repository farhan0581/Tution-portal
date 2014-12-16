

<!-- Author: Michael Milstead / Mode87.com
     for Untame.net
     Twitter Bootstrap Tutorial
     Modal Contact Demo, 2013


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap Modal Contact Form Demo</title>
    <meta name="description" content="Creating Modal Window with Twitter Bootstrap">
    <script src="js/jquery-1.11.1.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/bootstrap.min.js" type=""></script>
    
    <script>
        $(document).ready(function () {
            $("input#submit").click(function(){
                $.ajax({
                    type: "POST",
                    url: "process.php", // 
                    data: $('form.contact').serialize(),
                    success: function(msg){
                        $("#thanks").html(msg)
                        $("#form-content").modal('hide');   
                    },
                    error: function(){
                        alert("failure");
                    }
                });
            });
        });
    </script>

    <style type="text/css">
        body { margin: 50px; background: url(assets/bglight.png); }
        .well { background: #fff; text-align: center; }
        .modal { text-align: left; }
    </style>

</head>
<body>

<div class="container">
    <div class="well well-large">
        <h2>Twitter Bootstrap Modal Contact Form Demo</h2>
        <div id="form-content" class="modal hide fade in" style="display: none;">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Send me a message</h3>
            </div>
            <div class="modal-body">
                <form class="contact" name="contact">
                    <label class="label" for="name">Your Name</label><br>
                    <input type="text" name="name" class="input-xlarge"><br>
                    <label class="label" for="email">Your E-mail</label><br>
                    <input type="email" name="email" class="input-xlarge"><br>
                    <label class="label" for="message">Enter a Message</label><br>
                    <textarea name="message" class="input-xlarge"></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" value="Send!" id="submit">
                <a href="#" class="btn" data-dismiss="modal">Nah.</a>
            </div>
        </div>
        <div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary btn-large">Modal powers, activate!</a></p></div>
    </div>
</div>

</body>
</html>
 create table institute(insid bigint(20) primary key auto_increment,
 username varchar(60),password varchar(60),name varchar(60),email varchar(60),
 subjects varchar(60),fee varchar(20),location varchar(60),city varchar(60),
 state varchar(60),phone bigint(20),t1 int (5),t2 int (5),
 foreign key (username) references log(username) on update cascade on delete cascade);
select (name,qualif,fees) from tutor where subjects like '%%'-->
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
                Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15" value="<?php if ( !empty($row['name']))  echo $row['name']; ?>"><br><br>
                Qualification:&nbsp;&nbsp;<input type="text" size="15" value="<?php if ( !empty($row['qualif']))  echo $row['qualif']; ?>"><br><br>
                Subjects:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="15"value="<?php if ( !empty($row['subjects']))  echo $row['subjects']; ?>">
            </font><br><br>
              <p align="center"><a class="btn btn-primary btn-lg" href="#" role="button">View</a></p>
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


