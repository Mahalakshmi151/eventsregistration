<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUeMO-exj3bvkjCXTKVoo3nS00ZkSJzWTYzA&usqp=CAU);
  background-size:auto;
}
.navabt{
  background-image: url(https://cdn.manomano.com/images/images_products/1504056/P/31934290_1.jpg);

    overflow: hidden;
    
    height: 63px;
    margin-top: -5px;
}
.navabt a{
    float: right;
    border-left: 1px solid dimgrey;
    color:black;
    text-align: center;
    padding: 20px 16px;
    font-size: 18px;
    width: 150px;
    text-decoration: none;
    font-weight: bold;

}
.conabt a{
    float:left;
    font-size: 20px;
    
}

.navabt a:hover{
   
    color:rgb(211, 157, 39);
}
form {border: 3px solid #f1f1f1;}

input[type=text] {
  text-align:center;
  justify-content:center;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=password]{
  text-align:center;
  justify-content:center;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 58%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  text-align:center;
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<h1 style="padding-left: 40px;background-color:white;fit-content;">Login Form</h1>
<form action="#" method="post" style="background-color:#ddf5e7">
  <div class="imgcontainer">
    <img src="https://www.go.ooo/img/bg-img/Login.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter email" name="m_user" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="m_pass" required>
        
    <button type="submit" name="login">Login</button><br>
    Don't have an account?<a class="btn btn-link" href="signin.php"><b>SIGN IN</b></a>
   
</form>


</body>
</html>
<?php
$conn = mysqli_connect("sql309.epizy.com","epiz_30208098","KEdumAyB1NcX","epiz_30208098_events");
if ($conn-> connect_error){
die("Connection Failed:". $conn-> connect_error);
}
if(isset($_POST['login']))
{
session_start();
$_SESSION['email']=$_POST['m_user'];
$name=$_POST['m_user'];
$password=$_POST['m_pass'];
$sql = "SELECT mail,pass from login";
$i=0;
$result= $conn-> query($sql);
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
            if($name=='admin@gmail.com' and $password=='Admin123$')
            {
			header("Refresh:0;url=homeadmin.php");
            exit();

            }
		if($row['mail']==$name and $row['pass']==$password){
			header("Refresh:0;url=home.php");
            $i=1;
		}
    }
		if($i==0){
			echo '<script>alert("Invalid details")</script>';
		}
	}
}
?>