<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
        
<body>
    <h1 style ="text-align: center;">Webboard Jame</h1>
        <hr>
        
    <form action="verify.php" method="post">
        <center>
        <table style = "border: 2px solid black; width: 40px">
            <tr><td style="background-color :#6CD2FE;" colspan="2">เข้าสู่ระบบ</td></tr>
            <tr><td>Login</td><td><input type ="text" name="login" ></td></tr>
            <tr><td>password</td><td><input type ="text" name="pwd"></td><tr>
            <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Login"></td></tr>
           </table>
        </form>
        <br>
    </head>
    ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a>
</body>

</html>