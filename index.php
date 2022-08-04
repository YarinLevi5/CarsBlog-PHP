<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICAR</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">I<i class="bi bi-truck mx-1"></i>Car</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- NAVBAR LINKS -->
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid flex-fill">

        <!-- PAGE HEADER -->

        <section id="main-top-content">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h1 class="display-3 text-primary">
                        Welcome, Cars Lovers
                        <i class="bi bi-heart-fill ms-3">
                        </i>
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis doloribus obcaecati voluptate cumque illum iusto iste provident dolore.
                    </p>
                    <p class="mt-4">
                        <button class="btn btn-outline-success btn-lg">Join Us!</button>
                    </p>
                </div>
            </div>
        </section>

        <!-- PAGE CONTENT -->

        <div id="main-content" class="container mt-5">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-center align-center">
                                <img src="https://cdn.pixabay.com/photo/2013/07/13/11/44/car-158548_1280.png" class="img-fluid rounded-start" alt="Red car">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Highlights</h5>
                                    <p class="card-text">Highlights Cars</p>
                                    <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus necessitatibus tempora repellat debitis ut. Dolorum illum suscipit unde possimus excepturi!</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-center align-center">
                                <img src="https://cdn.pixabay.com/photo/2012/04/26/14/04/car-42552__480.png" class="img-fluid rounded-start" alt="Yellow car">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Priceless</h5>
                                    <p class="card-text">The most priceless Cars</p>
                                    <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores repellendus voluptatibus in minus ducimus omnis voluptate quae quo dolorem ipsam?</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-secondary h-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center m-0 p-2">
                        <span>I<i class="bi bi-truck mx-1"></i>Car</span>
                        <span>&copy;</span>
                        <span><?= date('Y') ?></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>