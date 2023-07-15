<?php
session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: login.php"); // redirect ไปยังหน้า login.php
    exit;
}

$user = $_SESSION['user_login'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="bg-light p-5 rounded mt-3">
            <h1>User <?php echo $user['fullname']; ?></h1>
            <h2>Level <?php echo $user['level']; ?></h2>
            <div class="mt-5">
                <?php if ($user['level'] == 'administrator') { // แสดงลิงค์ไปยังหน้าผู้ดูแลระบบเมื่อผู้ใช้เป็นแอดมิน ?>
                    <a href="admin.php" class="btn btn-lg btn-warning">
admin page</a>
                <?php } ?>
                <a href="logout_action.php" class="btn btn-lg btn-danger">exit the system</a>
            </div>
        </div>
    </div>
</body>

</html>