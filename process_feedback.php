<?php
// Database configuration
$servername = "localhost";
$username = "root"; // XAMPP default
$password = ""; // XAMPP default (usually empty)
$dbname = "freedom_wall"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $age = !empty($_POST['age']) ? (int)$_POST['age'] : null;
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);
    $submitted_at = date('Y-m-d H:i:s');

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email format";
        exit;
    }

    // Prepare and bind SQL statement
    $sql = "INSERT INTO feedback (name, email, age, subject, message, submitted_at) 
            VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        http_response_code(500);
        echo "Error preparing statement: " . $conn->error;
        exit;
    }

    // Bind parameters
    $stmt->bind_param("ssisss", $name, $email, $age, $subject, $message, $submitted_at);

    // Execute and check if successful
    if ($stmt->execute()) {
        http_response_code(200);
        echo "Feedback submitted successfully!";
    } else {
        http_response_code(500);
        echo "Error submitting feedback: " . $stmt->error;
    }

    header("location: feedback.php");
    $stmt->close();
    $conn->close();
} else {
    http_response_code(405);
    echo "Method not allowed";
}
?>
