<!DOCTYPE html>
<html lang="en">
<head>
<title>Tutor register</title>
<?php 
require_once('link.php'); ?>
</head>
<body id="page1">
<?php 
      require_once('adheader.php');

      require_once('adheader.php');
      @session_start();
      if(($_SESSION['type']!='admin'))
      {
    echo "<script type='text/javascript'>alert('UNAUTHORIZED!');location.href='home.php'</script>";
    exit();}
       ?>
<!--content-->

<section id="content">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
      <div class="wrapper">
        <br><br>
         <font color="black">
      <h1>Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" size="30" value="<?php if (!empty($_POST['username'])) echo $_POST['username'] ; ?>"></h1>
      <br></font><font color="black">
      <h1>Member names can be any combination of letters, numbers, underscores and hyphens, up to 15 characters in length. Spaces, Accents and other punctuation are not permitted.</h1>
      </font>
      <br><br>
      <p><br>
      <h1><font color="black">Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" size="30" value="<?php if (!empty($_POST['email'])) echo $_POST['email'] ; ?>"></h1>

      <br><br></font>
    </p>

 <p>
      <h1><font color="black">Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass" size="30" ></h1>

      <br><br></font>
    </p>

    <p>
      <h1><font color="black">Re-type Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="rpass" size="30"></h1>

      <br><br></font>
    </p>

    <p>
      <font color="black">
      <h1>Please Note: </h1>
      <br><br>

    <h1>1. ALL fields are required. Write 'NA' if needed.</h1>
   <br><br>
   <h1>2. DO NOT write contact information anywhere on the website other than 'Contact Information" area.</h1>
   <br><br>
   <h1>3. DO NOT use indecent/ offensive language.</h1><br><br>
   <h1>Violators and Spammers will be DELETED without warning.</h1><br><br>
 </p>
<p>
 <h1><font color="black">Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" size="30" value="<?php if (!empty($_POST['name'])) echo $_POST['name'] ; ?>"></h1>

      <br><br></font>
    </p>
   
<p>
 <h1><font color="black">Subjects: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="subject"  value="<?php if (!empty($_POST['subject'])) echo $_POST['subject'] ; ?>"size="30"></h1>

      <br><br></font>
    </p> 

<p>
 <h1><font color="black">Qualification: &nbsp;&nbsp;<input type="text" name="qual" value="<?php if (!empty($_POST['qual'])) echo $_POST['qual'] ; ?>"size="30"></h1>

      <br><br></font>
    </p>

<font color="black">
<b> 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Fee Structure: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fees">
  <option value="--Select--">--Select--</option>
  <option value="500">500</option>
  <option value="1000">1000</option>
  <option value="1500">1500</option>
  <option value="2000">2000</option>
  <option value="2500">2500</option>
  <option value="3000">3000</option>
  <option value="3500">3500</option>
  <option value="4000">4000</option>
  <option value="4500">4500</option>
  <option value="5000">5000</option>
  <option value="5500">5500</option>
  <option value="above 5500">Above 5500</option>
</select>
</b></font>
<br><br>



<br>

<p>
 <h1><font color="black">Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="black">Location: <input type="text" name="loc" size="20" value="<?php if (!empty($_POST['loc'])) echo $_POST['loc'] ; ?>">&nbsp;&nbsp;&nbsp;&nbsp;City: <input type="text" name="city" size="20" value="<?php if (!empty($_POST['city'])) echo $_POST['city'] ; ?>">&nbsp;&nbsp;&nbsp;&nbsp;

  State: <select name="state" >
  <option value="<?php if (!empty($_POST['state'])) echo $_POST['state'] ; ?>"><?php if (!empty($_POST['state'])) echo $_POST['state'] ; ?></option>
  <option value="Andhra pradesh">Andhra pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Delhi">Delhi</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Jammu & Kashmir">Jammu & Kashmir</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="uttar pradesh">Uttar Pradesh</option>
  <option value="West Bengal">West Bengal</option>


</select></h1>

      <br><br></font>
    </p>

  <p>
 <h1><font color="black">Contact No.: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="number" size="30" value="<?php if (!empty($_POST['number'])) echo $_POST['number'] ; ?>"></h1>

      <br><br></font>
    </p>


  <p>
 <h1><font color="black">Timing:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="black">From: <input type="text" name="t1" size="10">  &nbsp;&nbsp;To:  <input type="text" name="t2" size="10"></h1>

      <br><br></font>
    </p>
 <h1><font color="black">Terms and Condition:</h1></font>
      <p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      

        <textarea readonly="readonly" style="width:450px; height:70px;">ATTENTION: YOU MUST BE AT LEAST 13 YEARS OLD TO REGISTER ON OR USE THIS WEBSITE. ACCESS OR USE OF THIS SITE OR ITS CONTENTS BY ANY PERSON UNDER THE AGE OF 13 IS STRICTLY PROHIBITED. 
These Terms are issued by http://www.bharattutors.com/ (the "Company"). Please read this Member Terms and Conditions Agreement (the "Agreement") carefully. The Agreement sets out the terms under which the Website services (the "Services") are provided to you by us and applies to the entire contents of the Website under the domain name http://www.bharattutors.com/ (the "Website" ) and to any correspondence by e-mail between you and us. Please read this Agreement carefully before using this Website.

By registering with Website, you become a Member (a "Member"), and you agree to be bound by the terms and conditions of this Agreement (the "Terms") for as long as you continue to be a Member. Visitors to the Website who do not register as a member also agree to be bound by these Terms. If you do not agree to the Terms, please do not register for the Website Service or otherwise access or use this Website.

1. INTRODUCTION


--------------------------------------------------------------------------------

1.1 By accessing any part of the Website, you shall be deemed to have accepted the Terms in full. If you do not accept these Terms in full, you must leave the Website immediately.

1.2 You are responsible for obtaining access to the Website, and that access may involve third-party fees (such as Internet service provider or airtime charges). You are responsible for those fees. In addition, you must provide and are responsible for all equipment necessary to access the Website.

1.3 The Company makes no guarantee that the Website will be secure, continuously accessible � without interruption or delay � and completely error free 100% of the time. The Company accepts no liability or responsibility for any breaches of security, interruptions or delays, or errors, which you might experience on the Website other than as set out in these Terms.

1.4 Access to the Website may be suspended temporarily and without notice in the case of system failure, maintenance or repair or for reasons beyond the Company�s control.

1.5 The Company reserves the right to modify or withdraw, temporarily or permanently the Website (or any part of it) with or without notice and shall not be liable to you or any third party for any modification or withdrawal of the Website.

2. OUR RIGHTS 


--------------------------------------------------------------------------------

2.1 We reserve the right at any time to:

2.1.1 Change the terms and conditions of the Agreement;

2.1.2 Change the Website, including eliminating or discontinuing any content on or feature of the Website; or

2.1.3 Change any membership fees or charges for using the Website.

2.2. Any changes we make will be effective immediately upon notice, which we may provide by means including, without limitation, posting on the Website or email. Your use of the Website after such notice will be deemed acceptance of the changes. Be sure to review this Agreement periodically to ensure familiarity with the most current version. Upon our request, you agree to sign a non-electronic version of this Agreement.

3. REGISTRATION


--------------------------------------------------------------------------------

3.1 To become a Member you must register with us. When and if you register to become a Member, you agree to provide accurate, current and complete information about yourself as prompted by our registration form ("Registration Data"), and to maintain and update your information to keep it accurate, current and complete. You agree that we may rely on your Registration Data as accurate, current and complete. You acknowledge that if your Registration Data is untrue, inaccurate, not current or incomplete in any respect, we reserve the right to terminate this Agreement and your use of the Website.

3.2 When you register, we will require that you provide sufficient information to indicate that you are at least 13 years old. By becoming a Member, you represent and warrant that you are at least 13 years old, which is the minimum required age to become a Member. However, we cannot guarantee that each Member is at least the required minimum age, nor do we accept responsibility or liability for any content, communication or other use or access of the Website by persons under the age of 13 in violation of these Terms.

3.3 Either you or Website may terminate your Membership at any time, for any reason, effective upon sending written notice to the other party. All Membership fees paid are non-refundable. We reserve the right to immediately suspend or terminate your access to the Service, without notice, upon any breach of this Agreement by you, which is brought to our attention.

3.4 Your Membership in the Service is for your sole, personal use. You may not authorize others to use your Membership, and you may not assign or otherwise transfer your account to any other person or entity

4. USERNAME AND PASSWORD. 


--------------------------------------------------------------------------------

4.1 As part of the registration process, you will be asked to select a username and password. We may refuse to grant any username that impersonates someone else, is or may be illegal, is or may be protected by trademark or other proprietary rights law, is vulgar or otherwise offensive, or may cause confusion, as we determine in our sole discretion. You are responsible for the confidentiality and use of your username and password and agree not to transfer or resell your use of or access to the Website to any third party. If you have reason to believe that your account is no longer secure, you must promptly change your password by updating your account information, available at the 'My Profile' Page after logging on to  BharatTutors.com website, and immediately notify us by emailing us. YOU ARE SOLELY RESPONSIBLE FOR MAINTAINING THE CONFIDENTIALITY OF YOUR USERNAME AND PASSWORD AND FOR ANY AND ALL ACTIVITIES THAT ARE CONDUCTED THROUGH YOUR ACCOUNT and for restricting access to Your computer to prevent unauthorized access following registration.

5. PAYMENT 


--------------------------------------------------------------------------------

5.1 Our fees are as set out in our Website from time to time. Fees are due in full in advance and are payable monthly unless you have opted for lifetime membership where one payment is due in advance.

5.2 Upon registering for the Services you will be sent your user registration details and payment confirmation e-mail, which contains your payment reference. You must keep a copy of this information as this may be required if you want to cancel your FuturePay agreement.

5.3 Once you have started using the Services you shall not be entitled to any refund unless there is an error in the operation of our program or processes that results in the Services being unavailable for 48 hours or more in any one consecutive period . If you feel that the Services have been defective in any way you must contact our Support Team using the Contact Form on the Website, with your reasons for claiming a refund plus a copy of your user registration details and Transaction id Number or Payment invoice (without this we will be unable to help).

5.4 Where we agree to a refund, the refund will be made within 30 days of your application. If a refund is granted then this will be on a pro-rated basis for how long you have used the membership. A small administration charge will be deducted from the amount paid.

5.5 In the event that:

5.5.1 we are unable to process your payment details within three days of the due date;

5.5.2 your payment is refused; or

5.5.3 your payment is not cleared

the Services will terminate automatically.

6. ONLINE CONDUCT 


--------------------------------------------------------------------------------

6.1 As a Member, you agree that:

6.1.1 You are solely responsible for the content or information you publish or display (hereinafter, "post") on the Service, or transmit to other Members.

6.1.2 You will not post on the Service, or transmit to other Members or employees, any defamatory, inaccurate, abusive, obscene, profane, offensive sexually oriented, threatening, harassing, racially offensive, or illegal material, or any material that infringes or violates another party's rights (including, but not limited to, intellectual property rights, and rights of privacy and publicity). 

6.1.3 You will use the Service in a manner consistent with any and all applicable laws and regulations. You will not include in your profile any telephone numbers, street addresses, last names, URLs, email addresses, offensive references, or offensive language, or any confidential information of any third person, and you will not post any photographs or other images containing personal information. We reserves the right, but has no obligation, to reject any profile or photograph or image that does not comply with the following prohibitions:

(a) You will not impersonate any person or entity;

(b) You will not "stalk" or otherwise harass any person;

(c) You will not engage in advertising to, or solicitation of, other Members to buy or sell any products or services through the Service. You will not transmit any chain letters, spam or junk email to other Members;

(d) You will not express or imply that any statements you make are endorsed by us, without our specific prior written consent;

(e) You will not harvest or collect personal information about other members whether or not for commercial purposes, without their express consent;

(f) You will not use any robot, spider, site search/retrieval application, or other manual or automatic device or process to retrieve, index, "data mine", or in any way reproduce or circumvent the navigational structure or presentation of the Website or its contents;

(g) You will not post, d…</textarea>
   <br></p>
 <p align="center">
      <input type="submit" class="btn btn-primary" value="register" name="register"></p>
      </form>
</section> 




<?php 
      require_once('footer.php'); 
      
      
         if(isset($_POST['register']))
        {   
            require_once('connect.php');
            $n1=$_POST['name'];
            $e1= $_POST['email'];
            $p1=$_POST['pass'];
            $p2=$_POST['rpass'];
            $user=$_POST['username'];
            $sub=$_POST['subject'];
            $ql=$_POST['qual'];
            $fe=$_POST['fees'];
            $loct=$_POST['loc'];
            $ct=$_POST['city'];
            $st=$_POST['state'];
            $nm=$_POST['number'];
            $tm1=$_POST['t1'];
            $tm2=$_POST['t2'];


            if(!empty($n1)&&!empty($e1)&&!empty($p1)&&!empty($p2)&&!empty($user)&&!empty($sub)&&!empty($ql)&&!empty($fe)&&!empty($loct)&&!empty($ct)&&!empty($nm)&&!empty($tm1)&&!empty($tm2)&&!empty($st))
            {
              if($p1==$p2)
              {
                
                      $query3 = "SELECT username FROM log WHERE username = '$user'";
                      $data = mysqli_query($d1, $query3);

                      if (mysqli_num_rows($data) == 1)
                      {
                         echo "<script type='text/javascript'>alert('username not avilable!');</script>";
                      }
                      else
                      {
        
                          $query1="insert into log(username,password,type) values ('$user','$p1','tutor')";
                          $query2="insert into tutor(username,password,name,email,subjects,qualif,fee,location,city,state,phone,t1,t2) values('$user','$p1','$n1','$e1','$sub','$ql','$fe','$loct','$ct','$st',$nm,$tm1,$tm2)";
                          mysqli_query($d1,$query1);
                     $status2=mysqli_query($d1,$query2);

                     if($status2)
                     {
                         echo "<script type='text/javascript'>alert('you have been registered!'); location.href='admin.php'</script>"; 
                     }
                     else
                         {echo "<script type='text/javascript'>alert('error in database!');</script>";} 
                      }
            }
              else
              {
                echo "<script type='text/javascript'>alert('passwords do not match!');</script>";
              }
            
            }
            else
            {
              
                echo "<script type='text/javascript'>alert('Enter all the fields!'); </script>"; 
        
            }
        }



       ?>


 