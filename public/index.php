<?php

use Admin\Admin;

session_start();
require_once __DIR__ . "/../src/includes/autoloader.inc.php";

if (isset($_SESSION["logged-in"]) !== true && isset($_SESSION["logout"]) === true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="images/logo.ds.png" href="favicon.ico" type="image/x-icon">

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <style>
        body {
            background-image: url("./images/interlaced.png");
            background-repeat: repeat;
        }
    </style>
    <title>Questioniare</title>
</head>

<body>

    <header>
        <div class="idx-logo">
            <img src="images/logo.ds.png" alt="uni-logo" class="logo">
        </div>
        <div class="idx-header-det">
            <h3>Absolvenţii şi piaţa muncii </h3>
            <p>Chestionar de monitorizare a inserţiei pe piaţa muncii a absolvenţilor, Universitatea “1 Decembrie 1918” din Alba Iulia </p>
        </div>
    </header>

    <div class="adj"></div>
    <section class="idx-container">

        <article class="idx-info">
            <p>Vă mulţumim că ați acceptat să participați la studiu.</p>
            <p>Completarea chestionarului se face pe bază voluntară și va dura aproximativ 5 minute. Atenție! Chestionarul este stocat pe serverul UAB în mod anonim. Chiar dacă autentificarea se realizează din contul d-voastră, nu este identificată persoana care completează chestionarul şi nu se va face nici o legatură cu adresa de email a absolventului.</p>
            <p>Pentru a permite accesul la chestionar doar persoanelor autorizate, vă rugăm să introduceți în câmpul de mai jos codul d-voastra de acces, generat în contul creat pe platformă. Folosind acest cod, aveți posibilitatea să reveniți mai târziu, să continuați completarea sau să corectați informațiile deja completate. Când reaccesați chestionarul, veți fi direcționat/-ă spre ultima pagină pe care ați completat-o.</p>
        </article>

        <!--Login Form -->
        <article class="idx-form">
            <p>Introduceți codul de acces pentru a accesa chestionarul</p>
            <form action="../src/validate/student.validate.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="inputEmail4">Cod acces</label>
                        <input type="text" name="password" class="form-control" id="inputEmail4" placeholder="Introduceți codul dvs." autocomplete="off" required>
                    </div>
                </div>

                <div class="idx-btn">
                    <button type="submit" name="submit" class="btn btn-danger">ACCESEAZĂ CHESTIONARUL</button>
                </div>
            </form>
        </article>
    </section>


    <!--JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>