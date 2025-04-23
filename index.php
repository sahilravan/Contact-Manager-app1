<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Manager</title>
    <link rel="stylesheet" href="https://your-bucket-name.s3.amazonaws.com/style.css">
</head>
<body>
    <h1>Contact Manager</h1>
    <form method="POST" action="add_contact.php">
        Name: <input type="text" name="name" required>
        Email: <input type="email" name="email" required>
        <button type="submit">Add Contact</button>
    </form>

    <h2>All Contacts:</h2>
    <ul>
        <?php
        $result = $conn->query("SELECT * FROM contacts");
        while($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']} - {$row['email']}</li>";
        }
        ?>
    </ul>
</body>
</html>