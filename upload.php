<?php
//$db = mysqli_connect('localhost', 'root', '', 'registration');
$db = mysqli_connect('remotemysql.com', 'pxYp4Hh3H7', '6apPOdEDhw', 'pxYp4Hh3H7');
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 
  $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  $result=mysqli_query($db,$sql);
  if(mysqli_fetch_assoc($result)==1)
 {
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='admin.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='admin.php?fail';
        </script>
  <?php
 }
}

if(isset($_POST['delete_item'])){
      
      $file_name = mysqli_real_escape_string($db, $_POST['file']);
      $query="DELETE FROM tbl_uploads WHERE file='$file_name' LIMIT 1 ";
      $result=mysqli_query ($db,$query);
 if ($result == 1) { 
// //if it updated
 ?>

 <script>
   alert('successfully deleted');
         window.location.href='admin.php?success';
         </script>
   <?php


  } else { 
 //if it failed
 ?>

<script>
 alert('deletion unsuccessful');
       window.location.href='admin.php?fail';
       </script>



 <?php
  } 
            
    }

?>
