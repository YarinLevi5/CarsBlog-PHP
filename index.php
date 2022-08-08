<?php
$page_title = "HOME";
include './tpl/header.php'
?>


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
<?php
include './tpl/footer.php'
?>