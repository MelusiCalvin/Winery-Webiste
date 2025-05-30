<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="css/forms.css">
	<link rel="icon" type="image/png" sizes="16x16" href="pics/grapes-2032838_1920.jpg">
</head>
<body>
    <section class="form-section">
        <div class="container">
            <div class="user signinBx">
            <div class="imgBx"><img src="pics/red-wine-1004255_1920.jpg" alt="red wine"></div>
            <div class="formBx">
                <form action="code.php" method="POST">
                    <h2>Sign In</h2>
                    <?php

                        session_start();
                    if(isset($_SESSION['login']) && $_SESSION['login'] !='')
                    {
                        echo '<center><h5 style="color: red;">'.$_SESSION['login'].'</h5></center>';
                        unset($_SESSION['login']);
                    }

                    ?>
                    <input type="text" name="name_surname" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="SignIn" placeholder="Sign In" value="Sign In">
                    <!-- <button class="formBtn" name="SignIn" >Sign In</button> -->
                    <style>
                                            
                    .form-section .container .user .formBx form .formBtn{
                        width: 100%;
                        height: 35px;
                        outline: none;
                        border: none;
                        background: #677eff;
                        color: #fff;
                        cursor: pointer;
                        font-size: 14px;
                        font-weight: 500;
                        letter-spacing: 1px;
                        transition: 0.5s;
                    }
                    </style>
                    <p class="signup">Don't Have An Account ? <a href="#" onclick="toggleForm();">Sign Up</a></p>
                </form>
            </div>
            </div>
            
            <div class="user signupBx">
            <div class="formBx">
                <form action="code.php" method="POST">
                    <h2>Create an account</h2>
                    <?php

                    if(isset($_SESSION['register']) && $_SESSION['register'] !='')
                    {
                        echo '<center><h5 style="color: red;" >'.$_SESSION['register'].'</h5></center>';
                        unset($_SESSION['register']);
                    }

                    ?>

                    <input type="text" name="name_surname" placeholder="Name & Surname">
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="text" name="mobile" placeholder="Contact Number" maxlength="10">
                    <input type="text" name="address" placeholder="Postal Address">
                    <input type="password" name="pass" placeholder="Create Password">
                    <input type="password" name="c_pass" placeholder="Confirm Password">
                    <input type="submit" name="SignUp" placeholder="Sign Up">
                    <p class="signup">Already Have An Account ? <a href="#" onclick="toggleForm();">Sign In</a></p>
                    
                </form>
            </div>
            <div class="imgBx"><img src="pics/wine-4931923_1920.jpg" alt="red wine"></div>
            </div>
        </div>
    </section>

    <script>
        function toggleForm(){
            var container = document.querySelector('.container');
                container.classList.toggle('active');
        }
    </script>
</body>
</html>