<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/navbar.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #7ECA9C;">
    <div class="container">
        <a class="navbar-brand" href="index.php" style="font-size: 40px;">CureCorner
            <!-- <img src="" alt="" class="src"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3" style="font-size: 20px;">
                    <a <?php if($pageactive == "index") echo "class='nav-link active'";?> class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-3" style="font-size: 20px;">
                    <a <?php if($pageactive == "service") echo "class='nav-link active'";?>class="nav-link" aria-current="page" href="service.php">Service</a>
                </li>
                <li class="nav-item mx-3" style="font-size: 20px;">
                    <a class="nav-link" aria-current="page" href="#contact"> About</a>
                </li>
                <li>
                    <a id="Logoutbtn" class="btn btn-primary nav-link active" aria-current="page" href="../logout.php" style="font-size: 21px;font-family: 'Assistant', sans-serif; font-weight: 600; letter-spacing: 1px" onclick="return confirm('Yakin ingin logout ?')">Logout</a>
                </li>
            </ul>
        </div>

        </div>
    </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>