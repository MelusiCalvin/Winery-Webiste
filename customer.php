<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Logout/Update</title>
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <section class="form-section">
        <div class="container">
            <div class="user signinBx">
            <div class="imgBx"><img src="pics/red-wine-1004255_1920.jpg" alt="red wine"></div>
            <div class="formBx">
                <form action="code.php" method="POST">
                    <h2>Sign Out</h2>
                    <center>
                    <input type="submit" name="SignOut"  value="Sign Out">
                    <p class="signup">Want To Change Information?<a href="#" onclick="toggleForm();"><br><br>Update Your Details</a></p>
                    <p class="signup"><a href="index.php">Back To Home</a></p>
                    </center>
                </form>
            </div>
            </div>
            
            <div class="user signupBx">
            <div class="formBx">
                <form action="code.php" method="POST">
                    <h2>Update Details</h2>
                    <?php
                    session_start();
                    if(isset($_SESSION['update']) && $_SESSION['update'] !='')
                    {
                        echo '<center><h5 style="color: green;" >'.$_SESSION['update'].'</h5></center>';
                        unset($_SESSION['update']);
                    }
                    if(isset($_SESSION['update_fail']) && $_SESSION['update_fail'] !='')
                    {
                        echo '<center><h5 style="color: green;" >'.$_SESSION['update_fail'].'</h5></center>';
                        unset($_SESSION['update_fail']);
                    }
                    // if(isset($_SESSION['update']))
                    // {
                    //     echo "<a href='index.php'>Back To Home</a>";
                    // }

                    include('dbcontroller.php');
                    if(isset($_POST['btn3']))
                    {
                        $id = $_SESSION['username'];

                        $query = "SELECT * FROM tblusers WHERE username = '$id' ";
                        $query_run = mysqli_query( $con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <input type="text" name="name_surname" placeholder="Name & Surname" value="<?php echo $row['username'] ?>">
                    <input type="email" name="email" placeholder="Email Address" value="<?php echo $row['email'] ?>">
                    <input type="text" name="mobile" placeholder="Contact Number" maxlength="10" value="<?php echo $row['contact'] ?>">
                    <input type="text" name="address" placeholder="Postal Address" value="<?php echo $row['address'] ?>">
                    <input type="text" name="pass" placeholder="Create Password" value="<?php echo $row['password'] ?>">
                    <center>
                    <input type="submit" name="UpdateProfile" value="Upload Info">
                    <p class="signup">You Want to <a href="#" onclick="toggleForm();"><br>Cancel?</a></p>
                    </center>
                    
                    <?php
                            }
                        }
                        else
                        {
                            echo "No Records Found";
                        }

                        
                    }

                    ?>
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