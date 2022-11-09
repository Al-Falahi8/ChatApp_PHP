<?php 
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label >Email Address</label>
                        <input type="email" name="email" placeholder="Example@Example.com">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="field input">
                        <label >Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Not yet Signed Up? <a href="index.php">Signup Now</a></div>
        </section>
    </div>
    

    <script src="public/js/pass-show-hide.js"></script>
    <script src="public/js/login.js"></script>
</body>
</html>