<?php

include 'includes/header.php';

$host = getenv('DB_HOST') ?: 'db';
$user = getenv('DB_USER') ?: 'lampuser';
$password = getenv('DB_PASSWORD') ?: 'lamppass';
$database = getenv('DB_NAME') ?: 'lampdb';

echo "<h2>Welcome to My LAMP Application!</h2>";

echo "<p>This application is running using Docker containers.</p>";

echo "<h3>Database Connection Status</h3>";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    echo "<p>Database connection failed.</p>";
} else {
    echo "<p>Successfully connected to MySQL!</p>";

    $result = $conn->query(
        "SELECT name, roll_number FROM students"
    );

    if ($result && $result->num_rows > 0) {
        echo "<h3>Student Information</h3>";

        while ($row = $result->fetch_assoc()) {
            echo "<p>Name: "
                . htmlspecialchars($row['name'])
                . "</p>";

            echo "<p>Roll Number: "
                . htmlspecialchars($row['roll_number'])
                . "</p>";
        }
    } else {
        echo "<p>No student records found.</p>";
    }

    $conn->close();
}

?>

<p><a href="home.php">Visit the Home Page</a></p>

</main>
</body>
</html>
