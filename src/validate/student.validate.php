<?php

use Student\Student;

require_once __DIR__ .  "/../includes/autoloader.inc.php";

if (isset($_POST["submit"])) {

    $student = new Student;

    $inputPassword = $_POST["password"];
    if ($student->studentLogin($inputPassword) === false) {
        echo '<div class="msg">LOGIN FAILED</div>';

        // Redirects to the index page
        echo '<script>
            const msg = document.querySelector(".msg");
            if (msg) {
                setTimeout(() => {
                    window.location.href = "../../public/index.php";
                }, 2000); 
            }
        </script>';
    } else {
        $_SESSION["logged-in"] = true;
        header("Location: ../form/form.php");
        exit();
    }
} else {
    echo "Failed to submit your code";
    echo '<div class="msg">LOGIN FAILED</div>';

    // Redirects to the index page
    echo '<script>
        const msg = document.querySelector(".msg");
        if (msg) {
            setTimeout(() => {
                window.location.href = "../../public/index.php";
            }, 2000); 
        }
    </script>';
}

?>



<style>
    .msg {
        color: red;
        position: relative;
        top: 300px;
        display: flex;
        justify-content: center;
        font-size: large;
    }
</style>