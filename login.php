<?php
session_start();
include 'header.php';
if (isset($_POST['submit1']))
 {
 $email=$_POST['email'];
 $password=$_POST['password'];
 $query=mysql_query("SELECT * from citytable where email='$email' ");
 $n=mysql_num_rows($query);//retrieves a number of rows from a result set
 if($n==1)
 {
  $row=mysql_fetch_assoc($query);//corresponds to the fetched row,and moves the internal data pointer ahead;
  if ($password==$row['password'])
  {
 echo '<h1><b>'."WELCOME"."$email".'</b></h1>';
 header("refresh:1;url=feed4.php");}
 else
  {
    echo "Failure!";
  }
 }
 else {
  echo "Email doesn't Exist!";
 }
 }

?>
<!DOCTYPE html>
<html>
<head>
 <style>
 body{
   font-size:30px;
   background-image: url("tumblr_ps6idz0AJZ1wv22ulo1_1280.jpg");
background-size:cover;
font-family:Arial,Helvetica,san-serif;

 }

 .column {
   float: left;
   width: 50%;
 /*  padding: 10px;*/
   height: 600px; /* Should be removed. Only for demonstration */
 }

 /* Clear floats after the columns */
 .row:after {
   content: "";
   display: table;
   clear: both;
 }
</style>
 </head>
<centre> <body backgroundimg="tumblr_ps6idz0AJZ1wv22ulo1_1280.jpg">
<h1 style="background-color:;"><marquee> WE WELCOME YOU   </marquee></h1>
<div>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
   <table style="width:100%" >
     <tr>
       <th style="text-align:left">Login credentials</th>
       <th style="text-align:left">Login Info</th>
     </tr>
     <h1><tr>
       <td>Email:</td>
       <td><input type="email" required placeholder="Enter a valid e-mail id" name="email" size="35" height="8"></td>
     </tr></h1>
     <h2><tr>
       <td>Password:</td>
       <td><input type="password" required placeholder="Enter your password" name="password" size="35" height="8"></td>
     </tr></h2>
   </table>
   <center><button type="submit" name="submit1" ><font size=6><b>Submit</button></b></font></center></form>
   </div>
</div>
</body></centre>
</html>
