<!DOCTYPE html>
<script>
    window.history.forward();
</script>
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
            background-image: url("../../interlaced.62abeced.png");
            background-repeat: repeat;
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
        </div>
    </header>

    <div class="adj"></div>
    <section class="idx-container">
        <!--Login Form -->
        <article class="idx-form">
            <p>Introduceți codul de acces pentru a accesa</p>
            <form action="../validate/admin.validate.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="inputEmail4" class="text-danger">Admin Acces Cod</label>
                        <input type="text" name="password" class="form-control w-4" id="inputEmail4" placeholder="Introduceți codul dvs." autocomplete="off" required>
                    </div>
                </div>

                <div class="idx-btn">
                    <button type="submit" name="submit" class="btn btn-danger">AUTHENTIFICĂ-VĂ</button>
                </div>
            </form>
        </article>
    </section>


    <!--JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>