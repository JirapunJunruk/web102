<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1><center>Webboard DooDee</center></h1>
<hr>
 <center>
 <?php
                $num = $_GET["id"];
                echo "ต้องการดูกระทู้หมายเลข ".$num."<br>";

                if($num%2 == 0){
                    echo " เป็นกระทู้หมายเลขคู่ ";
                    }  else 
                    echo " เป็นกระทู้หมายเลขคี่";
   
        ?>
        
    <br>
    <br>
 <table style = "border: 2px solid black; width: 50px">
            <tr><td style="background-color :#6CD2FE;" colspan="2">แสดงความคิดเห็น</td></tr>
            <tr><td><textarea nsme = "message" rows="3" cols="30"></textarea><td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
     </center>
    <br>
          <center>  <a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>