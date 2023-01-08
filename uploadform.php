<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading</title>
</head>
<body>
    <h1>Uploading a File</h1>
    <hr>
    <form action="savefile.php" method="post" enctype="multipart/form-data">
        <p>
            Please select a file: 
            <input type="file" name="file1">
        </p>
        <p>
            <button>Save</button>
        </p>
    </form>
</body>
</html>