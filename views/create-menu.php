<?php

require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Model.php';
require_once __DIR__ . '/../Model/Item.php';

$categoriesModel = new Category();
$categories = $categoriesModel->all(); // Mengambil semua kategori

$menu = new Item();

if (isset($_POST["submit"])) {
    var_dump($_FILES);
    $datas = [
        "post" => $_POST,
        "files" => $_FILES
    ];
    $result = $menu->create($datas);
    if(gettype($result) == "string"){
        echo "<script>alert('{$result}'); window.location.href = 'create-menu.php';</script>";
    }else{
        echo "<script>alert('Menu created successfully'); window.location.href = 'create-menu.php';</script>";
    }
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="../assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
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
                        <h1>Create Menu</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <img src="../assets/img/illustrations/order.svg" alt="" width="400" height="300">
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <form action="" method="post" class="card-body" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Nama Menu</label>
                                                <input type="text" name="name" id="name" class="form-control" required>
                                            </div>
                                            <div class="form-group d-flex flex-column">
                                                <label for="attachment" class="form-control-label">Gambar</label>
                                                <div class="custom-file">
                                                    <input type="file" name="attachment" id="attachment" class="custom-file-input" required>
                                                    <label class="custom-file-label" for="attachment">Choose File</label>
                                                </div>
                                                <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                            </div>
                                            <div class="form-group">
                                                <label for="category_id">Pilih Kategori</label>
                                                <select name="category_id" id="category_id" class="form-control" required>
                                                    <?php foreach ($categories as $category) : ?>
                                                        <option value="<?= htmlspecialchars($category["id"]) ?>"><?= htmlspecialchars($category["name"]) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Harga</label>
                                                <input name="price" id="price" type="number" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button name="submit" id="submit" type="submit" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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
    <script src="../assets/modules/cleave-js/dist/cleave.min.js"></script>
    <script src="../assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
    <script src="../assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="../assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="../assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>