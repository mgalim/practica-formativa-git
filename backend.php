<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!empty($username) && !empty($password)) {
        echo "ok - usuario: " . htmlspecialchars($username);
    } else {
        echo "error - faltan datos";
    }
}
?>
