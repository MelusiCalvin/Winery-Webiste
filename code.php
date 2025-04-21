<?php
session_start();
include('dbcontroller.php');

if(isset($_POST['SignIn']))
{
    $name = $_POST['name_surname'];
    $password = $_POST['pass'];

    if(empty($name && $password)){
        $_SESSION['login'] = "Fill in all fields";
        header('location:forms.php');
    }else
    {

        $query = "SELECT * FROM tblusers WHERE username='$name' AND password='$password' ";
        $query_run = mysqli_query($con, $query);
    
        if(mysqli_fetch_assoc($query_run))
        {
            $_SESSION['username'] = $name;
            header('location:index.php');
        }
        else
        {
            $_SESSION['login'] = "Wrong Email / Password Credentials";
            header('location:forms.php');
        }
    }
}

// if(isset($_POST['SignIn']))
// {
//     $email = $_POST['email'];
//     $pass = $_POST['password'];

//     $query = "SELECT * FROM tblusers WHERE username='$email' AND password='$pass' ";
//     $query_run = mysqli_query($con, $query);

//     if($query_run){
//         $_SESSION['username'] = $email;
//         header('location: index.php');
//     }else{
//         $_SESSION['login'] = "Email / Password is incorrect";
//         header('location:forms.php');
//     }
// }

// registration
if(isset($_POST['SignUp']))
{
    $name = $_POST['name_surname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];

    if(empty($name && $email && $mobile && $address && $address && $pass && $c_pass ))
    {
        $_SESSION['register'] = "fill in all fields";
        header('location: forms.php');
    }
    else{
    if($pass != $c_pass)
    {
        $_SESSION['register'] = "Passwords Don't Match";
        header('location: forms.php');
    }
    else{
        $pass = md5($pass);
        $query = "INSERT  INTO tblusers (username, password, address, contact, email ) VALUES ('$name', '$pass', '$address', '$mobile', '$email' ) ";
    
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['register'] = "Registered Successfully" ;
            header('refresh:2; url=forms.php');
        }
        else
        {
            $_SESSION['register'] = "Not Registered Successfully" ;
            header('location: forms.php');
        }
    }}

}

// if updating profile
if(isset($_POST['UpdateProfile']))
{
    $id = $_POST['id'];
    $name = $_POST['name_surname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $pass = $_POST['pass'];

    $pass = md5($pass);
    $query = "UPDATE tblusers SET username='$name', password='$pass', address='$address', contact='$mobile', email='$email' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['update'] = "Pofile Updated Succesfully";
        header('location:customer.php');
    }
    else
    {
        $_SESSION['update'] = "Pofile Not Updated Succesfully";
        header('location:customer.php');
    }
}


if(isset($_POST['SignOut'])){
    session_destroy();
    header('location:index.php');
}

if (isset($_POST['name'])) {

    if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['contact-email']) || empty($_POST['msg'])) {
        $error = "All the field is required";
        $_SESSION['error'] = $error;
        header("Location: contact.php");
    } else if (!filter_var($_POST['contact-email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Enter your valid email address";
        $_SESSION['error'] = $error;
        header("Location: contact.php");
    } else if (strlen($_POST['msg']) < 10 && strlen($_POST['msg']) > 1000) {
        $error = "Message length should greater than 10 & less than 100 characters";
        $_SESSION['error'] = $error;
        header("Location: contact.php");
    } else {

        //connect to the database
        $name = $_POST['name'];
        $email = $_POST['contact-email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        $is_done = $con->query("INSERT INTO `contact_us`( `name`, `email`, `subject`, `msg` ) VALUES( '$name','$email','$subject','$msg' )");
        if ($is_done == TRUE) {
            $_SESSION['success'] = "Thank You For Reaching Out, We Will Get Back To You As Soon As We Get Your Message.";
            header("Location: contact.php");
        }
    }
}

?>