<?php
// Redirect to signup page if 'member' parameter is set to 'false'
if (isset($_GET['member']) && $_GET['member'] === 'false') {
    header("Location: signup.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CSS -->
    <?php include 'includes/bootstrapcdnlinks.php'; ?>
    <title>Movie club</title>
</head>
<body>
    <!-- Include the navigation bar -->
    <?php include 'includes/navigation.php'; ?>

    <div class="mt-4">
        <a href="signup.php" class="btn btn-primary">Join the Club!</a>
        <a href="welcome.php?member=false" class="btn btn-outline-secondary">VIP Area</a>
        

    </div>

    <!-- Your main content goes here -->
    

</body>
</html>