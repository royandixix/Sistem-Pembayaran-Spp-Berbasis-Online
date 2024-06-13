<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styleLogin.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="card-title">LOGIN</h2>
                <h6 class="card-subtitle text-muted mb-5">Silahkan Login Terlebih Dahulu</h6>
                <img class="gambar" src="user.png" width="150px" height="150px">
                <form action="proses-login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username*</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password*</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="d-grid mt-5">
                    <button type="submit" class="btn btn-success btn-login" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>