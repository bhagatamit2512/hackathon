<?php
session_start();
include 'header.php';
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $ccity=$_POST['currentcity'];
  $hcity=$_POST['hometown'];
  $gender=$_POST['gender'];
  if($password==$cpassword){
    $query=mysql_query("SELECT email from citytable where email='$email'");
  //  echo mysql_error() ;
    $n=mysql_num_rows($query);
    if($n==0)
    {
      $q=mysql_query("INSERT into citytable(email,password,hometown,currentcity,gender) VALUES('$email','$password','$hcity','$ccity','$gender')");
      if($q)
      {
        echo "Account Created";
        $_SESSION['email']=$email;
      }
      else {
        echo "fail";
      }}
      else{
        $q=mysql_query("UPDATE citytable set password='$password',gender='$gender',hometown='$hcity',currentcity='$ccity' where email='$email'");

  		if ($q)
  		{
  			echo "updated";

  		}

  		else
  		{
  			echo "update failed";
  		}
    }
    }
    else{
      echo "password doesn't match";
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
<center><body>
    <h1 style="background-color:;"><i><marquee>JOIN US TO EXPLORE MORE</marquee></i></h1>
  <div class="row">
    <div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
      <table style="width:100%">
        <tr>
          <th style="text-align:left" ></th>
          <th style="text-align:left">Your Info</th>
        </tr>
        <tr><b>
          <td>Email:</td>
          <td><input type="email" required placeholder="Enter a valid e-mail id" name="email" size="35" style="border-radius: 10px;height:25px;border:solid" ></td>
        </tr>
        <tr>
          <td>Current City:</td>
          <td><font size="10"><select name="currentcity" style="border-radius: 10px;height:25px;border:solid" >
              <option value="" >select city</option>
              <option value="Patna">Patna</option>
              <option value="Delhi">Delhi</option>
              <option value="Kochi">Kochi</option>
            </select></font></td>
        </tr>
        <tr>
          <td>Home City:</td>
          <td><font size="10"><select name="hometown" style="border-radius: 10px;height:25px;border:solid" >
              <option value="" >select city</option>
              <option value="Patna">Patna</option>
              <option value="Delhi">Delhi</option>
              <option value="Kochi">Kochi</option>
            </select></font></td>
        </tr>

        <tr>
          <td>Gender:</td>
          <td> <font size="10"> <select name="gender" style="border-radius: 10px;height:25px;border:solid">
              <option value="" >select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="disclose">Rather Not Say</option>
            </select></font></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><font size="10"><input type="password" required placeholder="Enter your password" name="password"size="35" style="border-radius: 10px;height:25px;border:solid"></td>
        </tr></font>
    <tr>
          <td>Confirm Password:</td>
          <td><font size="10"><input type="password" placeholder="Confirm Password" id="confirm_password" name="cpassword" required size="35" style="border-radius: 10px;height:25px;border:solid"></td>
        </tr></font>
      </table>
  <center><h1><button type="submit" name="submit" size="20px"><b><font size="20">Submit</font></b></button></h1></center>
</form>
</div>
</body></center>
</html>
