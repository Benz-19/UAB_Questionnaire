<?php
session_start();
include_once __DIR__ . "/../includes/autoloader.inc.php";

if (isset($_SESSION["logged-in"]) !== true && isset($_SESSION["logout"]) === true) {
    echo
    '<script>
       window.history.forward();
   </script>';

    header("Location: adminLogin.php");
} else {
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
    <link rel="../images/logo.ds.png" href="favicon.ico" type="image/x-icon">

    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/index.css">
    <style>
        body {
            background-image: url("../../public/images/interlaced.png");
            background-repeat: repeat;
        }

        .adm-container {
            margin: 100px auto;
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .card-edt {
            box-shadow: 0 2px 7px gray;
            cursor: pointer;
            transition: all 0.5s ease-in-out;
        }

        .card-edt:hover {
            transform: translateY(-4px);
        }

        .card-text {
            padding: 12px;
            text-align: center;
            width: 185px;
        }

        .adm-container article div:nth-child(1) {
            margin-right: 8px;
        }

        .adm-container article .dwnload {
            margin-left: 8px;
        }

        .dwnload a {
            padding-bottom: 10px;
        }

        .dwnload p {
            padding-bottom: 50px;
        }

        .dwnload button {
            width: 80px;
        }

        @media screen and (max-width: 530px) {

            .adm-container article div {
                margin: 0;
                padding: 0;
                margin-top: 20px;
            }
        }

        @media screen and (max-width: 220px) {

            header .idx-logo .logo {
                width: 168px;
                height: 68px;
            }
        }
    </style>
    <title>Questioniare--Admin</title>
</head>

<body>

    <header>
        <div class="idx-logo">
            <img src="../../public/images/logo.ds.png" alt="uni-logo" class="logo">
        </div>
        <div class="idx-header-det">
            <h3>Absolvenţii şi piaţa muncii </h3>
            <p>Chestionar de monitorizare a inserţiei pe piaţa muncii a absolvenţilor, Universitatea “1 Decembrie 1918” din Alba Iulia </p>
            <h5 class="text-danger">Admin View</h5>
        </div>

        <form action="../validate/adminLogout.validate.php" method="POST">
            <div>
                <button type="submit" name="admLogout" class="btn btn-danger ms-3">Logout</button>
            </div>
        </form>
    </header>

    <section>
        <!--Login Form -->
        <form action="adminResponse.php" method="POST" class="adm-container">
            <article>

                <div class="card d-flex justify-content-center flex-direction-column align-items-center card-edt">
                    <p class="card-text position-relative fw-bold">Generate a new unique student access code</p>
                    <a href="">
                        <button type="submit" class="btn btn-success mb-3" name="submit">Generate</button>
                    </a>
                </div>
            </article>

            <article>
                <div class="card d-flex justify-content-center flex-direction-column align-items-center card-edt dwnload">
                    <p class="form-check card-text position-relative fw-bold">View the Students' Response</p>
                    <a href="">
                        <button type="submit" name="displayResponse" class="btn btn-success mb-2 mt-2">View</button>
                    </a>
                </div>
            </article>
        </form>
    </section>


    <!--JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>