
<!DOCTYPE html>
<html lang="en">
    <head>
               <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="SISTEM IRIGASI TETES"/>
        <meta name="author" content="fauziallagan"/>
        <title>SISTEM IRIGASI TETES</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" /> -->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutDefault">
            <div id="layoutDefault_content">
                <main>
                    <!-- Navbar-->
                    <nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-light fixed-top">
                        <div class="container px-5">
                            <a class="navbar-brand text-primary" href="index.php">Irigasi Tetes</a>
                         
                            </div>
                        </div>
                    </nav>
                    <section class="bg-white py-10">
                        <div class="container px-5">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-6">
                                    <div class="text-center mt-4">
                                        <img class="img-fluid p-4" src="assets/img/illustrations/404-error.svg" alt="..." />
                                        <p class="lead"><?php mysqli_error($connection);?></p>
                                        <a class="text-arrow-icon" href="http://192.168.1.100/sistem-irigasi/log.php">
                                         <button class="btn btn-info">   <i class="ms-0 me-1" data-feather="arrow-left"></i>
                                            Return Home
</button>
                                          </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </section>
                </main>
            </div>
            <div id="layoutDefault_footer">
                <footer class="footer pt-10 pb-5 mt-auto bg-light footer-light">
                    <div class="container px-5">
                        <div class="row gx-5">
                            <div class="col-lg-12">
                                <div class="footer-brand">Irigasi Tetes</div>
                                <div class="mb-3">Smart Monitoring</div>
                                <div class="icon-list-social mb-5">
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5" />
                        <div class="row gx-5 align-items-center">
                            <div class="col-md-6 small">Copyright &copy; Multimedia dan Robotika Universitas Gunadarma</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>