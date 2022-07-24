<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<h1>hna der form o dakxi d CRUD</h1>


      
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>