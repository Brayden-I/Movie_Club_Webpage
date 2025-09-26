<?php
// Check if the user is a member
if (isset($_GET['member']) && $_GET['member'] === false) {
    header('Location: signup.php');
    exit();
}
?>

<?php 
include 'includes/bootstrapcdnlinks.php';
include 'includes/navigation.php';
?>

<div class="container mt-5">
    <h1>Welcome to the VIP Area!</h1>
    <p>Join us to explore and discuss a wide variety of films!</p>
</div>
