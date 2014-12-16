<!DOCTYPE html>

<body id="page5">
<?php 
  require_once('link.php');
    require_once('header.php');
     ?>
<!-- header -->

      <div class="row-2">
        <nav>
          <ul class="menu">
            <li><a href="home.php">Home Page</a></li>
            <li><a href="student.php">student</a></li>
            <li><a href="tutor.php">tutor</a></li>
            <li><a href="institute.php">institute</a></li>
            <li class="last-item"><a class="active" href="contacts.php">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- content -->
    <?php 
   // require_once('link.php');
    ?>
    <section id="content">
      <div class="padding">
        <div class="wrapper margin-bot">
          <div class="col-3">
            <div class="indent">
              <h2 class="p0">Contact Form</h2>
              <form id="contact-form" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
                <fieldset>
                  <label><span class="text-form">Name:</span>
                    <input name="name" type="text" color="black"/>
                  </label>
                  <label><span class="text-form">Email:</span>
                    <input name="email" type="text" />
                  </label>
                  <div class="wrapper">
                    <div class="text-form">Message:</div>
                    <textarea name="message"></textarea>
                    <br><br><br>
                     <p align="center"><br>
                <input type="submit" class="btn btn-success" value="send" name="msg" style=""></p>
                  </div>
                  
                 
      
                </fieldset>
              </form>
            </div>
          </div>
          <div class="col-4">
            <div class="block-news">
              <h3 class="color-4 indent-bot2">Contacts</h3>
              <dl class="contact p3">
                <dt><span>Our Address:</span>Hall of boys residence,jamia millia islamia</dt>
                <dd><span>Telephone:</span>+919540961579</dd>
                <dd><span>E-mail:</span>justtution@yahoo.com
              </dl>
              <h3 class="color-4 indent-bot2">Miscellaneous</h3>
              <p class="text-1">Please sent your valuable<br>
                feedback and comments,as they help us to improve ourself and bring to your better services..<br>
                </p>
            </div>
          </div>
        </div>
        <!--div class="box-bg">
          <div class="wrapper">
            <div class="col-1">
              <div class="box first">
                <div class="pad">
                  <div class="wrapper indent-bot"> <strong class="numb img-indent2">01</strong>
                    <div class="extra-wrap">
                      <h3 class="color-1"><strong>Careful</strong>Analysis</h3>
                    </div>
                  </div>
                  <div class="wrapper"> <a class="button img-indent-r" href="#">>></a>
                    <div class="extra-wrap"> Point.co is one of free website templates created by TemplateMonster.com. </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1">
              <div class="box second">
                <div class="pad">
                  <div class="wrapper indent-bot"> <strong class="numb img-indent2">02</strong>
                    <div class="extra-wrap">
                      <h3 class="color-2"><strong>Quick</strong>Research</h3>
                    </div>
                  </div>
                  <div class="wrapper"> <a class="button img-indent-r" href="#"></a>
                    <div class="extra-wrap"> This Template goes with two packages – with PSD files and without them. </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="box third">
                <div class="pad">
                  <div class="wrapper indent-bot"> <strong class="numb img-indent2">03</strong>
                    <div class="extra-wrap">
                      <h3 class="color-3"><strong>New</strong>Strategies</h3>
                    </div>
                  </div>
                  <div class="wrapper"> <a class="button img-indent-r" href="#">>></a>
                    <div class="extra-wrap"> It has several pages: <a class="link" href="home.php">Home</a>, <a class="link" href="news.html">News</a>, <a class="link" href="services.html">Services</a>, <a class="link" href="">Products</a>, <a class="link" href="contacts.html">Contacts</a>. </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <!--footer>
      <div class="row-top">
        <div class="row-padding">
          <div class="wrapper">
            <div class="col-1">
              <h4>Address:</h4>
              <dl class="address">
                <dt><span>Country:</span>USA</dt>
                <dd><span>City:</span>San Diego</dd>
                <dd><span>Address:</span>Beach st. 54</dd>
                <dd><span>Email:</span><a href="#">lcenter@mail.com</a></dd>
              </dl>
            </div>
            <div class="col-2">
              <h4>Follow Us:</h4>
              <ul class="list-services">
                <li class="item-1"><a href="#">Facebook</a></li>
                <li class="item-2"><a href="#">Twitter</a></li>
                <li class="item-3"><a href="#">LinkedIn</a></li>
              </ul>
            </div>
            <div class="col-3">
              <h4>Why Us:</h4>
              <ul class="list-1">
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Aonsect adipisic</a></li>
                <li><a href="#">Eiusmjkod tempor</a></li>
                <li><a href="#">Incididunt ut labore</a></li>
              </ul>
            </div>
            <div class="col-4">
              <div class="indent3"> <strong class="footer-logo">Point.<strong>co</strong></strong> <strong class="phone"><strong>Toll Free:</strong> 1-800-567-8934</strong> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-bot">
        <div class="aligncenter">
          <p class="p0">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</p>
          Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a><br>
          <!-- {%FOOTER_LINK} -->
        <!--/div>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html-->
</div>
</section>
</body>

<?php 
require_once('footer.php'); 


  if(isset($_POST['msg']))
  {


     // @session_start();
//if(!isset($_SESSION['user_name']))
//{
  //      echo "<script type='text/javascript'>alert('please login first!'); location.href='contacts.php'</script>";

//}




    $n=$_POST['name'];



    $e=$_POST['email'];
    $m=$_POST['message'];
    require_once('connect.php');
    if(!empty($n)&&!empty($m)&&!empty($e))
    {
    $q="insert into amessage(name,email,message) values ('$n','$e','$m')";
    $d=mysqli_query($d1,$q);
    if($d)
    {
        echo "<script type='text/javascript'>alert('message sent!'); location.href='contacts.php'</script>";
      

    }
    else
    {
        echo "<script type='text/javascript'>alert('message not sent!'); location.href='contacts.php'</script>";
      
    }
  }else
  {
    echo "<script type='text/javascript'>alert('enter all the fields!'); location.href='contacts.php'</script>";
  }
  }




?>

