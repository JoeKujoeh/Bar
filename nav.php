
<?php

$output = '
    <nav>
        <a href="#">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#where">Where</a>
';


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $output .= '
            <a id="ownerUpdate" href="update.php">Change Menu</a>
            <a id="ownerLogout" href="logout.php">Log out</a>
    ';
} else {
    $output .= '
        <a id="ownerSignin" href="register.php">Sign in</a>
        <a id="ownerLogin" href="login.php">Login</a>
    ';
}
$output .= '</nav>';

echo $output;
?>