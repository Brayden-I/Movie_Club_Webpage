<?php
    $errors = [];
    $username = '';
    $email = '';
    $password = '';
    $favorite_movie = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $username = trim($_POST['username'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $favorite_movie = trim($_POST['favorite_movie'] ?? '');

        if (empty($username)){
            $errors[] = "Name is required";
        }

        if (empty($email)){
            $errors[] = "Email is required";
        }

        if (empty($password)){
            $errors[] = "Password is required";
        }

        if (empty($favorite_movie)){
            $errors[] = "Favourite movie is required";
        }

        if (empty($errors)){
            header("Location: signup.php?ok=1&username=" . urlencode($username) . "&movie=" . urlencode($favorite_movie));
            exit();
        }
    }

    // Check for success message
    $show_success = isset($_GET['ok']) && $_GET['ok'] === '1';
    $username = $_GET['username'] ?? '';
    $favorite_movie = $_GET['favorite_movie'] ?? '';
?>

<?php 
include 'includes/bootstrapcdnlinks.php';
include 'includes/navigation.php';
?>

<div class="container mt-5">
    <h2>Join the Movie Club</h2>

    <?php if ($show_success): ?>
        <div class="alert alert-success">
            Thanks <?php echo htmlspecialchars($username); ?>, we've added your favorite movie "<?php echo htmlspecialchars($movie); ?>" to our club list.
        </div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <h5>Please fix the following errors:</h5>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="signup.php" method="POST">
        <div class="mb-3">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required
            
            value="<?php echo htmlspecialchars($username);?>">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required
            
            value="<?php echo htmlspecialchars($email);?>">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <div class="mb-3">
            <label for="favorite_movie" class="form-control">Favorite Movie</label>
            <input type="text" name="favorite_movie" id="favorite_movie">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Join Club</button>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<div class="mt-4"><pre>';
            var_dump($_POST);
            echo '</pre></div>';
        }
    ?>
</div>


