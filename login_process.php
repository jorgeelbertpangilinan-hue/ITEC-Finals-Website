<?php
// Simulan ang session sa pinakataas ng file
session_start();

// Ikonekta ang iyong connect.php file
require_once 'connect.php';

if (isset($_POST['signIn'])) {
    
    $email = $conn->real_escape_string(trim($_POST['email']));
    $passwordInput = trim($_POST['password']);
    $encryptedPassword = md5($passwordInput);
    
    // HAKBANG 1: I-check muna kung mayroong user na may ganitong email
    $sqlEmail = "SELECT * FROM users WHERE email='$email'";
    $resultEmail = $conn->query($sqlEmail);
    
    if ($resultEmail && $resultEmail->num_rows > 0) {
        $row = $resultEmail->fetch_assoc();
        
        // HAKBANG 2: Kung tama ang email, i-check naman kung tama ang password
        if ($row['password'] === $encryptedPassword) {
            // Kung parehong tama, pasok sa Dashboard!
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            
            header("Location: dashboard.php");
            exit();
            
        } else {
            // Tama ang email pero MALI ANG PASSWORD
            header("Location: index.php?error=password");
            exit();
        }
    } else {
        // MALI ANG EMAIL (walang nahanap na user)
        header("Location: index.php?error=email");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>