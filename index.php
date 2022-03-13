<!DOCTYPE html>
<html>

<head>
    <title>JavaScript Form Validation Demo</title>
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
    <div id="main">
        <div class="heading">
            <h1>User Registration</h1>
        </div>
        <div class="form">
            <form id="signup" class="form" name="form" action="Functions/addUserData.php" method="post">
                <div class="form-field">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="number">Number:</label>
                    <input type="number" name="number" id="number" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="dob" id="dob" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" autocomplete="off">
                    <small></small>
                </div>


                <div class="form-field">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" name="confirm-password" id="confirm-password" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <input type="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>

<!-- Footer -->
    <div id="footer">
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

<!-- JS Script -->
    <script src="Js/app.js"></script>
</body>

</html>