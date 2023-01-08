<?php
    session_start();
    // if(!isset($_SESSION['user'])){
    //     header("Location: login.php");
    // }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">My Social</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=feed">News Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?menu=market">Market Place</a>
                    </li>
                    <?php
                    if (!isset($_SESSION['user'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php
                    } else {
                        $name = $_SESSION['user']->name;
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="login.php" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                [<?php echo $name; ?>]
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="index.php?menu=profile">My Profile</a>
                                <a class="dropdown-item" href="index.php?menu=editprofile">Edit Profile</a>
                                <a class="dropdown-item" href="index.php?menu=changepassword">Change Password</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="page-content-wrapper">
            <?php
                if(isset($_GET['menu'])){
                    $menu=$_GET['menu'];
                }else{
                    $menu="";
                }
                switch($menu){
                    case "profile":{
                        $filename="profile/profile.php";
                        break;
                    }
                    case "changepassword":{
                        $filename="profile/changepassword.php";
                        break;
                    }
                    case "editprofile":{
                        $filename="profile/editprofile.php";
                        break;
                    }
                    case "market":{
                        $filename="marketplace.php";
                        break;
                    }
                    case "feed":{
                        $filename="newsfeed.php";
                        break;
                    }
                    default: $filename="main.php";
                }
                include($filename);
            ?>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>