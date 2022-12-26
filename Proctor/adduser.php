<?php

$conn = mysqli_connect("localhost","root","","harsh","3308");
if(!$conn){
    echo "cant connect database".mysqli_connect_error($conn);
    exit;
}

$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$mothername = $_POST['mothername'];
$address = $_POST['address'];
$cityname = $_POST['cityname'];
$pincode = $_POST['pincode'];
$studentnumber = $_POST['snumber'];
$fathernumber = $_POST['fnumber'];
$mothernumber = $_POST['mnumber'];
$email = $_POST['email'];
$hobbies=$_POST['hobbies'];
$bloodgroup = $_POST['bg'];
$admcategory = $_POST['admcategory'];
$gender = $_POST['gender'];
$query = "INSERT INTO proctor(lname,fname,mname,mothername,address,cityname,pincode,snumber,fnumber,mnumber,email,hobbies,bg,admcategory,gender) VALUES ('$lname','$fname','$mname','$mothername','$address','$cityname','$pincode','$studentnumber','$fathernumber','$mothernumber','$email','$hobbies','$bloodgroup','$admcategory','$gender');";
$result = mysqli_query($conn,$query);


if(!$result){
    echo"Query issue.".mysqli_error($conn);
}

else {
     echo "<script>alert('Successfully registered!');
     window.location.href = 'http://localhost/Proctor/createuser.php';
     </script>";
     
}

?>