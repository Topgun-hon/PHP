<?php
session_start();

$correct_email = "honore@gmail.com";
$correct_psswd = "topgun";
$message = "";

if(isset($_POST['login'])){
   $email = $_POST['email'];
   $password = $_POST['password'];

if($email === $correct_email && $password === $correct_psswd){

    $_SESSION['user'] = $email;
    header("Location:wel_page.php");
    exit();
}else{
       $message = "Incorect email or password";
}

}
?>
<html>
    <body>
        <h2>Login page</h2>
        <form method="POST" style="align-items:center;">
            <label for="email">Enter your E-mail</label><br>
            <input type="email" name="email" id="email"><br>
            <label for="pass">Enter your password</label><br>
            <input type="password" name="password" id="password" required><br><br>
            
            <input type="submit" name="login" value="Login">
        </form>
        <p style="color:red"><?php echo $message ?></p>
    </body>
</html>