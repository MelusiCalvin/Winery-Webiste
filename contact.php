<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
	<link rel="icon" type="image/png" sizes="16x16" href="pics/grapes-2032838_1920.jpg">
</head>
<body>
<?php
    include('header.php');
    include('links.php');
?>
<!-- body -->
<section>
    <div class="container">
        <div class="contactInfo">
            <div>
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <span>1982 Unity Street Sunrise <br>
                        Doornkop, Soweto <br>
                        1852</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <span>info@Soweto'sFinestWinery.com</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <span>(011) 81 216 2711</span>
                    </li>
                </ul>
            </div>
        </div>
        <form action="code.php" method="POST">
            
            <div class="contactForm">
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-warning"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                <?php endif; ?>
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-warning"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
                    <?php endif; ?>
            <h2>Send A Message</h2>
            <div class="formBox">
                <div class="inputBox w50">
                <input type="text" name="name" required>
                <span>First Name</span>
                </div>
                <div class="inputBox w50">
                <input type="email" name="contact-email" required>
                <span>Email Address</span>
                </div>
                <div class="inputBox w50">
                <input type="text" name="subject" required>
                <span>Subject</span>
                </div>
                <div class="inputBox w50">
                <input type="text" name="mobile" maxlength="10" required>
                <span>Mobile Number</span>
                </div>
                <div class="inputBox w100">
                <textarea name="msg" required></textarea>
                <span>Write your message here...</span>
                </div>
                <div class="inputBox">
                <input type="submit" value="Submit">
                </div>
            </div>
        </div>

        </form>
        </div>
</section>
<!-- body -->


</body>
</html>