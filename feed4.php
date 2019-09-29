


 <!DOCTYPE html>

 <html lang="en" dir="ltr">
 	<head><style>
    .aa{margin-top: 100px;
      margin-left: 550px;
      width:400px;
      height:450px;
      float:left;
      box-shadow: 0 3px 5px rgba(0,0,0,0.6) ;}
      select{ padding: 10px;
      margin-left: 20px;
      border: 0px;
       }
       .b{padding: 15px;
        line-height: 40px;}
a{text-decoration:none;
   color:green;
    margin-left: 170px;}
    }


  </style>
 		<meta charset="utf-8">
 		<title></title>
 	</head>
 	<body style="background: #dcfaf2">
       <center><h1>POST</h1></center>
 	</body>
 </html>
 <?php
 	  session_start();
    include 'header.php';
     	if(isset($_POST) & !empty($_POST)){
  		  $description = mysql_real_escape_string($_POST['postdescription']);

       $currentcity=mysql_real_escape_string($_POST['currentcity']);
 		if(isset($_FILES) & !empty($_FILES)){
 			$name = $_FILES['postimage']['name'];
 			$size = $_FILES['postimage']['size'];
 			$type = $_FILES['postimage']['type'];
 			$tmp_name = $_FILES['postimage']['tmp_name'];
 			$max_size = 10000000;//bytes
 			$extension = substr($name, strpos($name, '.') + 1);
 			if(isset($name) && !empty($name)){
 				if(($extension == "jpg" || $extension == "jpeg") &&
 				 $type == "image/jpeg" && $size<=$max_size){
 					$location = "upload";
 					if(move_uploaded_file($tmp_name, $location.$name)){

 						$res = mysql_query( "INSERT INTO feed ( description,
               thumb, currentcity)
 						VALUES ( '$description', '$location$name','$currentcity')");
 						if($res){

 							echo 'post added Successfully1';
 						}else{
 							$fmsg = "Failed to Create Post1";
 						}
 					}else{
 						$fmsg = "Failed to Upload File";
 					}
 				}else{
 					$fmsg = "Only JPG files are allowed and should be less that 1MB";
 				}
 			}else{
 				$fmsg = "Please Select a File";
 			}
 		}
 	}
 ?>
 			<form class="aa" method="post" enctype="multipart/form-data">
 			   <div class="b"> <label for="postdescription">Post Description</label>
 			    <textarea style="border:0px;height: 25px;"  name="postdescription"
 			    rows="3"></textarea>
          <p>where are you posting from?</p>
 			    <select  name="currentcity">
 				  <option value=" current city">SELECT current city</option>
           <option value="kochi">kochi</option>
           <option value="bilaspur">bilaspur</option>
           <option value="patna">patna</option>
 				</select><br>



 			    <label for="postimage"> Image post</label>
 			    <input type="file" name="postimage" >
 			    <p >Only jpg/png are allowed.</p>
 			  <button type="submit">Submit</button></div>
        <a  href="fetch1.php">want to previous posts?</a>
 			</form>
