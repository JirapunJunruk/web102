
<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style ="text-align: center;">Webboard Jame</h1>
        <hr>
     <?php echo "ผู้ใช้ : $_SESSION[username]";
     ?>
     <br>
     <table >
     <tr><td>หมวดหมู่ : </td><td>
   <select name="category" >
        <option value="general">เรื่องทั่วไป </option>
        <option value="study">เรื่องเรียน </option>
    </select> </td></tr>
    <tr><td> หัวข้อ  :</td><td><input type ="input" ></td></tr>  
    <tr><td>  เนื้อหา :</td><td><textarea name="box" id="" cols="21%" rows="3"></textarea></td></tr> 
    <tr><td> </td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
    


    </table>
     

   
        
      
    
</body>
</html>