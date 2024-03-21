<?php
if(isset($_POST['login']))
{
$con=mysqli_connect("localhost","root","","crud");

$e=$_POST['e'];
$p=$_POST['p'];

$sql="select*from userdetail where email='$e'&&password='$p'";

$res=mysqli_query($con,$sql);
$row=mysqli_fetch_row($res);

if ($row>0)
{
echo "Login successfully!!";
}
else
{
echo "Your Email or Password is Wrong";
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
        <title>Login</title>
</head>

<body>
    <div
        style="height: 250px; width: 300px; border: 2px solid black; margin-top:220px; margin-left:620px; background-color:rgb(165, 133, 133)">
        <p style="text-align:center">Login</p>
        <form action="index.php" method="Post">
            <label>Email:</label>
            &nbsp &nbsp &nbsp&nbsp<input type="email" name="e" placeholder="Enter your email">
            <br><br>

            <label>Password:</label>
            <input type="Password" name="p" placeholder="Enter your Password">
            <br><br>

            <input type="submit" value="Login" name="login">
            <a href="signup.php">If you don't have an account, click here to create an account</a>
        </form>
    </div>
</body>

</html>