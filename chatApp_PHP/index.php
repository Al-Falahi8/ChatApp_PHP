<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    Header("location: users.php");
}

include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label >First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="field input">
                        <label >Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="field input">
                        <label >Email Address</label>
                        <input type="email" name="email" placeholder="Example@Example.com" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="field input">
                        <label >Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label >Choose an Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Already Signed Up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    

    <script src="public/js/pass-show-hide.js"></script>
    <script src="public/js/signup.js"></script>
</body>
</html>