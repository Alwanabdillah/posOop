<?php

require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Model.php';


$countDataPage = 3;
$countData = count(searchData("SELECT * FROM categories"));
$countPage = ceil($countData / $countDataPage);
$ActPage = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$startData = ($countDataPage * $ActPage) - $countDataPage;

$categories = searchData("SELECT * FROM categories LIMIT $startData, $countDataPage");

if (isset($_POST["cari"])) {
    $categories = cari($_POST["keyword"]);
}

?>

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
                        <h1>Home Category</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Advanced Table</h4>
                                        <div class="card-header-form">
                                            <form action="" method="POST">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="cari . . . . ." autocomplete="off" autofocus>
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary" name="cari" id="tombolCari" type="submit"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <div id="container">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th>
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Name Category</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <?php foreach ($categories as $key => $value) : ?>
                                                        <tr>
                                                            <td class="">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <td><?= $value['name']; ?></td>
                                                            <td>
                                                                <a href="detail-category.php" <?= $value['id']; ?> class="btn btn-primary mr-1"><i class="fas fa-eye mr-1"></i>Detail</a>
                                                                <a href="edit-category.php" <?= $value['id']; ?> class="btn btn-success mr-1"><i class="fas fa-edit mr-1"></i>Edit</a>
                                                                <a href="delete-category.php" <?= $value['id']; ?> class="btn btn-danger mr-1"><i class="fas fa-trash-alt mr-1"></i>Hapus</a>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <?php if ($ActPage > 1) : ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?halaman=<?= $ActPage - 1; ?>">Previous</a>
                                            </li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= $countPage; $i++) : ?>
                                            <?php if ($i == $ActPage) : ?>
                                                <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>" style="font-weight: bold; color: blue;"><?= $i; ?></a></li>
                                            <?php else : ?>
                                                <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                        <?php if ($ActPage < $countPage) : ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?halaman=<?= $ActPage + 1; ?>">Next</a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include './../components/layout/footer.php'; ?>
        </div>
    </div>

    <!-- form -->
    <script src="ajax/js/jquery.js"></script>
    <script src="ajax/js/script.js"></script>
    <!-- General JS Scripts -->
    <script src="../assets/modules/jquery.min.js"></script>
    <script src="../assets/modules/popper.js"></script>
    <script src="../assets/modules/tooltip.js"></script>
    <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../assets/modules/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>