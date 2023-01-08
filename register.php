<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-3">Let's Login</h1>
                <?php
                if (isset($_SESSION['errMsg'])) {
                ?>
                    <h6 class="text-center text-danger">
                        <?php echo $_SESSION['errMsg']; ?>
                    </h6>
                <?php
                }
                ?>
                <form method="post" action="register.create.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        
                    </div>
                    <div class="form-group">
                        <label for="tel">Tel</label>
                        <input type="text" class="form-control" id="tel" aria-describedby="emailHelp" placeholder="Enter tel" name="tel">
                    </div>
                    <div class="form-group">
                        <label for="add">Address</label>
                        <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password">Profile Picture</label>
                        <input type="file" class="form-control" id="pic" name="pic">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </form>
                <div class="text-center mt-3">
                    <a href="login.php">Click here to login.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>