<?php include("inc_header.php") ?>
<?php
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
?>
<h1>Halaman Admin</h1>
<p>
    <a href="halaman_input.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman Baru">
    </a>
</p>
<form class="row g-3" method="GET">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="katakunci" value="<?php echo $katakunci ?>">
    </div>
    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary">
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>Judul</th>
            <th>Kutipan</th>
            <th class="col-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, nisi!</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
            <td>
                <span class="badge bg-warning text-dark">Edit</span>
                <span class="badge bg-danger">Delete</span>
            </td>
        </tr>
    </tbody>
</table>
<?php include("inc_footer.php") ?>