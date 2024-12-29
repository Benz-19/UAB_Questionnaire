<?php

use Student\Student;

// Prevent page caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once __DIR__ .  "/../includes/cssFile.inc.php";
require_once __DIR__ .  "/../includes/autoloader.inc.php";

// Check for logout
if (!isset($_POST["logout"])) {
    echo '<div class="redirect">Failed to logout<br>REDIRECTING...</div>';
    echo '<script>
        setTimeout(() => {
            window.location.href = "../../public/index.php";
        }, 2000);
    </script>';
} else {
    $student = new Student();
    $student->studentLogout(); // Clears session and logs the student out

    // Redirect to index.php
    echo '<div class="end">Logout Successful<br>REDIRECTING...</div>';
    echo '<script>
        setTimeout(() => {
            window.location.href = "../../public/index.php";
        }, 2000);
    </script>';
    echo
    '<script>
        window.history.forward();
    </script>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php getCSS("index") ?>">
    <link rel="stylesheet" href="<?php getCSS("logout") ?>">

    <title>Logout</title>
</head>

<body>
    <section id="logout">
        <div class="idx-logo">
            <img src="../../public/images/logo.ds.png" alt="uni-logo" class="logo">
        </div>
        <div id="successMessage" style="display: non;" class="alert alert-success mt-3">
            Formularul a fost completat cu succes!
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../../public/js/form.js"></script>

</body>

</html>