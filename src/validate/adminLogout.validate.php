<?php

use Admin\Admin;


session_start();
include __DIR__ . "/../includes/autoloader.inc.php";



if (isset($_POST["admLogout"])) {
    echo "yes";
    $admin = new Admin;
    session_destroy();
    $admin->adminLogout();

    // Redirect to adminLogin.php
    echo '<div class="end">Logout Successful<br>REDIRECTING...</div>';
    echo '<script>
          setTimeout(() => {
              window.location.href = "../form/adminLogin.php";
          }, 4000);
      </script>';
    echo
    '<script>
          window.history.forward();
      </script>';
} else {
    echo '<div class="msg">Failed to logout, Redirecting...</div>';

    // Redirects to the index page
    echo '<script>
        const msg = document.querySelector(".msg");
        if (msg) {
            setTimeout(() => {
                window.location.href = "adminLogin.php";
            }, 2000); 
        }
    </script>';
}

?>

<style>
    .studentCode {
        display: flex;
        justify-content: center;
    }

    .studentCode .inner {
        position: absolute;
        top: 570px;
        text-align: center;
    }

    .inner {
        color: red;
        text-align: center;
    }
</style>