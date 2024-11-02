<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php include './../components/layout/navbar.php'; ?>
            <?php include './../components/layout/sidebar.php'; ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Profile</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item">Profile</div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title">Hi, Alwan!</h2>
                        <p class="section-lead">
                            Change information about yourself on this page.
                        </p>

                        <div class="row mt-sm-4">
                            <div class="col-12 col-md-12 col-lg-5">
                                <div class="card profile-widget">
                                    <div class="profile-widget-header">
                                        <img alt="image" src="../assets/img/illustrations/profile.png" class="rounded-circle profile-widget-picture">

                                    </div>
                                    <div class="profile-widget-description">
                                        <div class="profile-widget-name">Alwan Abdillah <div class="text-muted d-inline font-weight-normal">
                                                <div class="slash"></div> Front-End Dev
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="font-weight-bold mb-2">Follow Alwan On</div>
                                        <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-github mr-1">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="btn btn-social-icon btn-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-7">
                                <div class="card">
                                    <form method="post" class="needs-validation" novalidate="">
                                        <div class="card-header">
                                            <h4>Edit Profile</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" value="Alwan" required="">
                                                    <div class="invalid-feedback">
                                                        Please fill in the first name
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" value="Abdillah" required="">
                                                    <div class="invalid-feedback">
                                                        Please fill in the last name
                                                    </div>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" value="abdillahalwan67@gmail.com" required="">
                                                    <div class="invalid-feedback">
                                                        Please fill in the last name
                                                    </div>
                                                </div>

                                            </div>
                                            <label class="form-control-label">Gambar</label>
                                            <div class="custom-file">
                                                <input type="file" name="site_favicon" class="custom-file-input" id="site-favicon">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            <div class="form-text text-muted">The image must have a maximum size of 1MB</div>

                                            <label class="form-control-label">Gender</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <select class="custom-select" id="inputGroupSelect04">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Female</option>
                                                        <option value="2">Male</option>
                                                        <option value="3">Sissy</option>
                                                    </select>
                                                    <!-- <div class="input-group-append">
                                                                    <button class="btn btn-primary" type="button">Button</button>
                                                                </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </section>
        </div>
        <?php include './../components/layout/footer.php'; ?>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../assets/modules/summernote/summernote-bs4.js"></script>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>