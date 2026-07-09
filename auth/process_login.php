<?php
session_start();

include "../config/db.php";

// Get form data
$email = trim($_POST['email']);
$password = $_POST['password'];

// Find user by email
$stmt = $conn->prepare("SELECT id, fullname, email, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {

    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {

        // Store user information in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullname'] = $user['fullname'];
        $_SESSION['email'] = $user['email'];

        // Redirect to dashboard
        header("Location: ../dashboard.php");
        exit();

    } else {
        echo "Incorrect Password.";
    }

} else {
    echo "No account found with this email.";
}

$stmt->close();
$conn->close();

?>