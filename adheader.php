<!DOCTYPE html>
<html>

<body>
<?php require_once('link.php'); ?>


<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
        <h1> <a class="logo" href="index.html">Point.co</a> <strong class="slog">The most creative ideas</strong> </h1>
        <!--form id="search-form" action="#" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="search-form">
              <input type="text" name="search" value="Type Keyword Here" onBlur="if(this.value=='') this.value='Type Keyword Here'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
              <a href="#">Search</a> </div>
          </fieldset>
        </form-->
      <?php
      @session_start();
         echo '
                        <div class="btn-group" style="float:right; margin-top:0px; margin-right:70px;">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >'.$_SESSION['user_name'].'
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="logout.php">logout</a></li>
                  <li><a href="apass.php">change password</a></li>
                </ul>
              </div>';
              ?>
      </div>
       <div class="row-2">
        <nav>
        <!--  <ul class="menu">
            <li><a  href="index.html">Home Page</a></li>
            <li><a href="news.html">For Student</a></li>
            <li><a href="services.html">For Tutor</a></li>
            <li><a href="products.html">Member Zone</a></li>
            <li class="last-item"><a href="contacts.html">Contact Us</a></li>
          </ul>
        </nav>
      </div>-->

      </html>