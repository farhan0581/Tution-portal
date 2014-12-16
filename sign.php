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

                          <li class="last-item"><a href="contacts.php">Contact Us</a></li>
                        </ul>
                      </nav>
                    </div>
<section id="content">
      <div class="wrapper">
         <p><font color="#0099cc">
          <h3>Student Registration:</h3></font>
          <br>
         <font color="black"> <h1>1. If you are looking for a tutor and want to register as a student, choose option I am a: Student</h1>
          <h1>2. You will be asked for the subject you need to learn. Be specific about the subject, e.g. if you want to learn Integral Calculus, write Integral Calculus, don't just write Calculus.</h1>
          <h1>3. During the registration you will be asked for your marks/ score in your last exam. This is the percentage score you got in last major exam. For an example if currently I am grade 9th, I will write my percentage marks in grade 8th.</h1>
          <h1>4. In the section 'Profile Description' write at least 2-3 meaningful sentences explaining you requirements in detail.</h1>
          <h1>5. In 'Contact Information', you will be asked to write your contact details like phone no, email, cell no etc. This information will be available to BharatTutors members only. If you don't feel comfortable to share these, write 'na'('na' stands for not available). There are several inbuilt features too to contact tutors such as sending instant message, xpress message, chat etc</h1>
          <br><br><br><br></font></p>
          <p align=center>
            <br><br><br><br>
             

          <input type="button" class="btn btn-primary" value="register for student" onclick="window.location.href='streg.php'">
          <br><br>
          <p><font color="#0099cc">
            <h3>Tutor Registration:</h3></font><br><br>
          <font color="black">
            <h1>1. If you are offering your tutoring services and want to register as a tutor, choose option I am a : Tutor</h1>
            <h1>2. You will be asked about your qualification, tutor experience, references etc. Be cautious while filling these fields as these records can be verified anytime by manual process. Members providing falsified information will be banned from BharatTutors.com</h1>
            <h1>3. In the section 'Profile Description', write at least 4-5 meaningful sentences explaining your skills, and knowledge you can provide to your student. This is very important section as most of the students decide their tutors after reading this section.</h1>
            <h1>4. In 'Contact Information', you will be asked to write your contact details like phone no, email, cell no etc. Be specific while writing these details, and update those details whenever they change.</h1>
            <h1>5. In the end of the registration you will be asked to add a photo to your profile. Remember, profiles with photos get 10 times more responses, so make sure you add your recent photo to your profile.</h1>
            <br><br></font></p>
            <p align=center>
              <br><br>
              <input type="button" class="btn btn-primary" value="register for tutor" onclick="window.location.href='tureg.php'">


          
          <p><font color="#0099cc">
            <h3>Institute Registration:</h3></font><br><br>
          <font color="black">
            <h1>1. If you run an institute or represent an institute offering educational services, you should join as institute. Choose option - I am a : Institute.</h1>
            <h1>2. You will be asked about description of institute, year of establishment, courses offering, address etc. Be cautious while filling these fields as these records can be verified anytime by manual process. Members providing falsified or misleading information will be banned from BharatTutors.com.</h1>
            <h1>3. In the section 'Profile Description', write at least 4-5 meaningful sentences explaining the description of your institute, and what services you offer to students and tutors. This is very important section as most of the students and tutors opt for the institutes based on this description.</h1>
            <h1>4. In 'Contact Information', you will be asked to write your contact details like phone no, email, cell no etc. Be specific while writing these details, and update those details whenever they change.</h1>
            <h1>5. In the end of the registration you will be asked to add a photo to your profile. Remember, profiles with photos get 6 times more responses, so make sure you add your recent photo to your profile.</h1>
              <br><br></font></p>
            <p align=center>
              <br><br>
              <input type="button" class="btn btn-primary" value="register for institute" onclick="window.location.href='inslogin.php'"></a>
</section>



<?php 
                        require_once('footer.php'); 
   ?>




    