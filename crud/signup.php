<?php
if(isset($_POST['signup']))
{
$con=mysqli_connect("localhost","root","","crud");

$n=$_POST['n'];
$m=$_POST['m'];
$e=$_POST['e'];
$p=$_POST['p'];

$sql="insert into userdetail(name,mobile,email,password)
values('$n','$m','$e','$p')";

$res=mysqli_query($con,$sql);

if ($res==true)
{
echo "1 Row inserted successfully!!";
}
else
{
echo "something went worng";
}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <title>Signup</title>
</head>

<body>
        <div
        style="height: 250px; width: 300px; border: 2px solid black; margin-top:220px; margin-left:620px; background-color:rgb(112, 112, 58)">
        <p style="text-align:center">Signup Form</p>
        <form action="signup.php" method="Post">
            <label>Name:</label>
            &nbsp &nbsp&nbsp&nbsp&nbsp<input type="text" name="n" placeholder="Enter your name">
            <br><br>

            <label>Mobile:</label>
            &nbsp&nbsp&nbsp&nbsp<input type="text" name="m" placeholder="Enter your Mobile no">
            <br><br>

            <label>Email:</label>
            &nbsp &nbsp &nbsp&nbsp<input type="email" name="e" placeholder="Enter your email">
            <br><br>

            <label>Password:</label>
            <input type="Password" name="p" placeholder="Enter your Password">
            <br><br>

            <input type="submit" value="Signup" name="signup">
            <a href="index.php" ></a>
        </form>
    </div>
</body>

</html>