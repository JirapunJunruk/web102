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
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script>
        function myFunction1() {
            let r = confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
    </script>
</head>
<?php
if (!isset($_SESSION['id'])) {

?>

    <body>
        <div class="container">
            <h1>
                <center>Webboard Jame</center>
            </h1>
            <?php include "nav.php"; ?>
            <hr>

            <br>
            <div class="d-flex">
                <div>
                    <label>หมวดหมู่</label>
                    <span class="dropdown">
                        <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
                            --ทั้งหมด--
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="button2">
                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                            $sql = "SELECT * FROM category";
                            foreach ($conn->query($sql) as $row) {
                                echo " <li><a href='' class='dropdown-item'>$row[name]</a></li>";
                            }
                            $conn = null;
                            ?>
                            <!-- <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                            <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                            <li><a href="#" class="dropdown-item">เรื่องทั้วไป</a></li> -->
                        </ul>
                    </span>
                </div>
            </div>

            <table class="table table-striped">
                <form action="post.php" method="get">
                    <?php

                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                    $sql = "SELECT post.title , post.post_date , user.login , category.name from category , post , user 
                                    where category.id = post.cat_id and user.id = post.user_id order by post.post_date desc
                                    ";
                    foreach ($conn->query($sql) as $row) {
                        echo "<tr><td> [ $row[name] ] <a href='post.php?id=1' style=text-decoration:none>   $row[title]  </a><br> $row[login] $row[post_date] </td></tr>";
                    }
                    $conn = null;

                    ?>
                </form>
            </table>
        </div>
    </body>

<?php
} else { ?>

    <body>
        <div class="container">
            <h1>
                <center>Webboard Jame</center>
            </h1>
            <?php include "nav.php"; ?>
            <hr>

            <div class="d-flex justify-content-between">
                <div>
                    <label>หมวดหมู่</label>
                    <span class="dropdown">
                        <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
                            --ทั้งหมด--
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="button2">

                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                            $sql = "SELECT * FROM category";
                            foreach ($conn->query($sql) as $row) {
                                echo " <li><a href='' class='dropdown-item'>$row[name]</a></li>";
                            }
                            $conn = null;
                            ?>
                            <!-- <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                                    <li><a href="#" class="dropdown-item">เรื่องทั้วไป</a></li> -->
                        </ul>]
                    </span>
                </div>
                <div><a href="newpost.php " class="btn btn-success btn-sm">สร้างกระทู้ใหม่</a> </div>
            </div>
            <br>


            <br>
            <table class="table table-striped">
                <form action="post.php" method="get">
                    <?php

                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                    $sql = "SELECT  post.id, post.title , post.post_date , user.login , category.name from category , post , user 
                                    where category.id = post.cat_id and user.id = post.user_id order by post.post_date desc
                                    ";
                    foreach ($conn->query($sql) as $row) {
                        echo "<tr><td> [ $row[name] ] <a href='post.php?id=1' style=text-decoration:none>   $row[title]  </a>  <a href=delete.php?id=$row[id] class='btn btn-danger btn-sm float-end' onclick='return myFunction1();'>
                        <i class='bi bi-trash'></i></a> <br> $row[login] $row[post_date] </td></tr>";
                    }
                    
                    $conn = null;

                    ?>
                </form>
            </table>
        </div>


    </body>
<?php
}
?>


</html>