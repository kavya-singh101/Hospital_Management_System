<!DOCTYPE html>
<html>

<head>
    <title></title> <!-- Corrected the title tag -->

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>



    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="d-flex justify-content-between align-items-center w-100">
            <h5 class="text-white">Hospital Management System</h5>

            <div class="mr-auto"></div>

            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['admin'])) {
                    $user=$_SESSION['admin'];
                    echo '
                    <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
                    ';
                } else {
                    echo '
                    <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li> 
                    <li class="nav-item"><a href="#" class="nav-link text-white">Doctor</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Patient</a></li>
                    ';
                }
                ?>
            </ul>



    </nav>

</body>

</html>