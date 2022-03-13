<!DOCTYPE html>
<html lang="en">

<head>
    <title>All User</title>
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>
<!-- Header -->
    <div id="header">
        <div class="image">
            <img src="Image/1.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="user.php">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="index.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
<!-- Main -->
    <div class="main">
        <div class="heading">
            <h1>All User</h1>
        </div>
        <?php
    $connect = mysqli_connect("localhost","root","","userform") or die(mysqli_error($connect));
    $fetch_query = "SELECT * FROM user";
    $result = mysqli_query($connect,$fetch_query) or die(mysqli_error($connect));
    if (mysqli_num_rows($result) > 0) {
        ?>
    
        <table>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Number</th>
        <th>Date of Birth</th>
        <th>Email</th>
        </thead>
        <tbody>
        <?php 
            while ($user = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $user['u_id']; ?></td>
                <td><?php echo $user['u_name']; ?></td>
                <td><?php echo $user['u_number']; ?></td>
                <td><?php echo $user['u_dob']; ?></td>
                <td><?php echo $user['u_email']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php } ?>

<!-- Footer -->
<div id="footeru">
        <div class="menu">
            <ul>
                <li><a href="user.php">Home</a></li>
                <li><a href=" ">About</a></li>
                <li><a href=" ">Contact</a></li>
                <li><a href="index.php">Sign Up</a></li>
            </ul>
        </div>
        <div class="image">
            <img src="Image/1.png" alt=" ">
        </div>
        <div class="social">
            <ul>
                <li><a href=" ">Facebook</a></li>
                <li><a href=" ">Twitter</a></li>
                <li><a href=" ">Instagram</a></li>
            </ul>
        </div>
    </div>

</body>

</html>