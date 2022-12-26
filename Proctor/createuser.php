<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
    <h1 align="center"><strong>Proctor Form</strong></h1><br>
<form action="adduser.php" method="post">



  
       <div class="mb-3">

          <label for="lname" class="form-label">Lastname</label>
          <input type="text" placeholder="lastname" class="form-control" id="lname" name="lname" required><br><br>

          <label for="fname" class="form-label">Firstname</label>
          <input type="text" placeholder="firstname" class="form-control" id="fname" name="fname" required><br><br>

          <label for="mname" class="form-label">Middlename</label>
          <input type="text" placeholder="middlename" class="form-control" id="mname" name="mname" required><br><br>

          <label for="mothername" class="form-label">Mother's name</label>
          <input type="text" placeholder="mother's name" class="form-control" id="mothername" name="mothername" required><br><br>

          <label for="address" class="form-label">address</label>
          <input type="text" placeholder="address" class="form-control" id="address" name="address" required><br><br>

          <label for="cityname" class="form-label">City name</label>
          <input type="text" placeholder="cityname" class="form-control" id="cityname" name="cityname" required><br><br>

          <label for="pincode" class="form-label">Pincode</label>
          <input type="text" placeholder="pincode" class="form-control" id="pincode" name="pincode" required><br><br>

          <label for="snumber" class="form-label">Student number</label>
          <input type="text" placeholder="student number" class="form-control" id="snumber" name="snumber" required><br><br>

          <label for="fnumber" class="form-label">Father's number</label>
          <input type="text" placeholder="father's number" class="form-control" id="fnumber" name="fnumber" required><br><br>

          <label for="mnumber" class="form-label">Mother's number</label>
          <input type="text" placeholder="mother's number" class="form-control" id="mnumber" name="mnumber" required><br><br>

          <label for="email" class="form-label">email</label>
          <input type="text" placeholder="email" class="form-control" id="email" name="email" required><br><br>
      
        
          <label for="hobbies" class="form-label">Hobbies</label>
            <input type="text" placeholder="ENter Hobby" class="form-control" id="hobbies" name="hobbies" required><br><br>

          <label for="bloodgroup">Blood Group:</label>
          <select name="bg" id="bg">
            <option><--Select--></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
      <br><br>
          <label for="admcategory">Admission Category:</label>
          <select name="admcategory" id="admcategory">
            <option><--Select--></option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="General">General</option>
            <option value="EBC">EBC</option>
          </select>
      <br><br>
          <label for="gender">Gender:</label>
          <select name="gender" id="gender">
            <option><--Select--></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
      <br><br>
          <button type="submit" name="register" class="btn btn-primary">register</button>
         
        </div>
</form>
</div>
</body>
</html>