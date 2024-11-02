<?php 

require '../DB/Connection.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM name WHERE name LIKE '%$keyword%'";
$categories = searchData($query)
?>

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