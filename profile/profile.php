<?php
$user = $_SESSION['user'];
?>
<div class="container-fluid">
    <div class="row">
        <h1>My Profile</h1>
        <hr>
        <div class="col-12">
            <div class="text-center">
                <img class="w-25" src="images/uploaded/<?php echo $user->profilepic; ?>" alt="">
            </div>
        </div>
        <div class="col-12">
            Name: <?php echo $user->name; ?>
        </div>
        <div class="col-12">
            Tel: <?php echo $user->tel; ?>
        </div>
        <div class="col-12">
            Email: <?php echo $user->email; ?>
        </div>
        <div class="col-12">
            Address: <?php echo $user->address; ?>
        </div>
    </div>
</div>