<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<form id="form1" method="post" action="register2_add.php">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form name="form1" method="post" action="register2_add.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="member_user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="member_user" required id="member_user">

    <label for="member_pass "><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="member_pass" required id="member_pass">
 
      <label for="member_name "><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="member_name" required id="member_name">
    
    <label for="member_surname "><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="member_surname" required id="member_surname">
    
    <label for="member_address"><b>Address</b></label>
   <input type="text" placeholder="Enter Address" name="member_address" required id="member_address"> 
   
       <label for="member_address"><b>Emial</b></label>
   <input type="text" placeholder="Enter Email" name="member_email" required id="member_email"> 


    <label for="member_address"><b>Phone</b></label>
   <input name="member_phone" type="text" required id="member_phone" placeholder="Enter Phone"> 
    <label for="member_address"><b>gender</b></label>
   <select  name="member_gender" id="member_gender">
  <option value="ชาย">ชาย</option>
  <option value="หญิง">หญิง</option>
</select> 


    
    <hr>
    

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  </div>
</form>

</body>
</html>
