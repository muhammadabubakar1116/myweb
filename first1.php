<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the input values from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
if ($username === 'ali' && $password === 'ahmad' && $email === 'srcforshazaib@gmail.com') {
    header('Location: php_project.html'); 
    exit();
} else {



    echo '<p style="color:red;">Incorrect username or password. Please try again.</p>';
}
}
?>
