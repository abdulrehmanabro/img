<?php
if(isset($_POST['submit'])){
    $mysqli = mysqli_connect("localhost:3307","root","","practice");
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $file = addslashes(file_get_contents($_FILES['profile_pic']['tmp_name']));
    // $file = addslashes(file_get_contents($_FILES(['profile_pic']['tmp_name'])));
    $pic = $_POST['profile_pic'];

    $insrt = "INSERT INTO `employees`(`id`, `name`, `designation`, `profile_picture`) VALUES (NULL,'$name','$designation','$file')";
    $inject = mysqli_query($mysqli,$insrt);
    if($inject){
        echo "<script>alert('Inseerted Data')</script>";
    }
    else{
        echo "<script>alert('Could Not be Proceed')</script>";
    }
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data" class="form-control">
                <label for="name">Name:</label>
                <input type="text" class="input" name="name" placeholder="Enter Your Name" required>

                <label for="name">Designation:</label>
                <input type="text" class="input" name="designation" placeholder="Enter Your Desination" required>

                <label for="name">Picture:</label>
                <input type="file" class="input-img" name="profile_pic" placeholder="Enter Your Picture" accept="image/*" required>

                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
    </div>

</body>

</html>