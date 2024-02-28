<?php
include "../conn/db_connect.php";
error_reporting(0);
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5( $_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];

        header("location: index.php");
        echo "<script> alert('Berhasil Masuk')</script>";
    } else {
        echo "<script> alert('Username atau Password anda salah, silahkan coba lagi')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <form action="" class="form-signin" method="post">
                        <h3 class="">Login</h3>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="mb-3 mt-3">
                                            <input type="text" name="username" class="form-control" placeholder="Nama" required autofocus>
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div>
                                            <button name="submit" class="btn btn-primary">Login</button>
                                            <a href="../index.php" class="btn btn-success">Dashboard</a>
                                        </div>
                                    <!-- </form> -->
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../Bootstrap//bootstrap.min.js"></script>
    <script src="../Bootstrap//jquery.min.js"></script>
</body>
</html>