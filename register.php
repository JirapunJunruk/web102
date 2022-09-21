
<?php
session_start();
if($_SESSION['id']){
        header("location:index.php");
        die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style ="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <center>
        <table style = "border: 2px solid black; width: 300px">
            <tr><td style="background-color :#6CD2FE;" colspan="2">กรอกข้อมูล</td></tr>
            <tr><td>ชื่อบัญชี</td><td><input type ="text" name="login" ></td></tr>
            <tr><td>รหัสผ่าน</td><td><input type ="text" name="pwd"></td><tr>
            <tr><td>ชื่อ-นามสกุล</td><td><input type ="text" name="pwd"></td><tr>
            <tr>
                 <td rowspan="4">เพศ :</td>
                 <tr><td><input type="radio" name="gender" value="body">ชาย</td></tr>
                 <tr><td><input type="radio" name="gender" value="girl">หญิง</td></tr>
                 <tr><td><input type="radio" name="gender" value="more">อื่นๆ</td></tr>
</tr>  
                <tr><td>อีเมล</td><td><input type ="text" name="pwd"></td></tr>
            <tr><td colspan="2" style="text-align: center;"><input type="submit" value="สมัครสมาชิก"></td></tr>
           </table>
           <br>
           <a href="index.php">กลับไปหน้าหลัก</a>
           
</body>
</html>