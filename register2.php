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

    <label for="re_username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="re_username" required id="re_username">

    <label for="re_password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="re_password" required id="re_password">
 
      <label for="re_name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="re_name" required id="re_name">
    
    <label for="re_tel"><b>Tel</b></label>
    <input type="text" placeholder="Enter Tel" name="re_tel" required id="re_tel">
    
    <label for="re_address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="re_address" required id="re_address">
    
    <hr>
    

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  </div>
</form>

</body>
</html>
