<?php 

require_once ('DB.php');

$name=$_POST['name'];

$email=$_POST['email'];

$password=$_POST['password'];

$sql="INSERT INTO student(name,email,password)
 VALUES ('$name','$email','$password')";

$result=mysqli_query($conn , $sql);

if ($result==true) {
    
    // echo "<h1>Data inserted successfully</h1>";
} else {

    echo "Faild !!! ";
}

?>

