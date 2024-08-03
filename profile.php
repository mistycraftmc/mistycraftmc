<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>User Profile</h1>
        <?php
        // Get user ID from the query parameter
        $user_id = $_GET['userid'];

        // Fetch user data from the database (replace with your own logic)
        // Example: $user = getUserData($user_id);

        // Display user information
        echo "<p>User ID: $user_id</p>";
        // Display other user details (e.g., name, email, etc.)

        // Add more content as needed
        ?>
    </header>
    <!-- Add more sections or content as desired -->
</body>
</html>

