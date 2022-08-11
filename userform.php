<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
<form  method="post" action="userform.php">
    <div id="user">
        <img src="img.jpeg" class="im" alt="" width="100px" height="100px">
        <div id="id">
        <input id="text" type="text" name="user" placeholder="TypeHere">
        <p id="name">userID</p>
    </div>
    <div id="password">
        <input id="word" type="password" name="pass" placeholder="TypeHere">
        <p id="pass">Password</p></div>
        <input id="login" type="submit" value="login" name="submit">
        <a href="regform.html"><input type="button" id="new" value="singup" name="new"></a>
        <input type="submit" id="forg" value="Forgot Password?" name="forg">
</div></form>
<script type="text/javaScript">
<?php
if(isset($_POST['submit'])){
$mysqli=new mysqli("localhost","root","","myproject");
if($mysqli===false)
{
    die("not connected");
}
$name=$_POST['user'];
$pass=$_POST['pass'];
$sam=mysqli_query($mysqli,"select * from login where userid='$name' && pass='$pass'");
if(mysqli_num_rows($sam) > 0){
    while($user=mysqli_fetch_assoc($sam)){
    echo "alert('Logined succesfully');";
    header("location:user1.php");
}
}else{
    echo"alert('notlogined');";
}
}
?>
</script>
</body>
</html>