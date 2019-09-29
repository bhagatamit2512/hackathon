<?php
include 'header.php';
error_reporting(0);
if(isset($_POST['currentcity']))
{
  $search_city=$_POST['currentcity'];

   if(!empty($search_city)){

     if(strlen($search_city)>2)
     {
      $query=mysql_query("SELECT * FROM feed WHERE currentcity LIKE '%".$search_city."%'  ");
        $no_result=mysql_num_rows($query);
      if($no_result>=1){
       echo $no_result. 'result found :<br>';
       while ($query_fetch=mysql_fetch_assoc($query)){
         echo $query_fetch['thumb'].'<br>';
         echo $query_fetch['description'].'<br>';
       }


      }
      else {
        echo 'not found';
      }
   }
   else {
     echo 'keyword must be greater than 2 charcters';
   }}
   else {
     echo 'you have not enter anything';
   }
}
 ?>

 <form class="" action="search.php" method="post">
   <labeL>SEARCH</label>
     <input type="text" name="currentcity" placeholder="search here">

     <input type="submit" name="submit" value="submit">

 </form>
