<?php
include "../koneksi.php";

$id_keluar=$_GET['id_keluar'];
$query=mysqli_query ($koneksi," SELECT * FROM barang_keluar WHERE id_keluar='$id_keluar'");
$r=mysqli_fetch_array($query);

?>
<?php include "sidebar.php" ?>
<h2 style="margin-top: 24px;">Barang Keluar</h2>
        <div class="col">
            <div class="row mt-5">
            <form class="form-input" method="POST">
            <div class="mb-3">
            <label for="id_keluar" class="form-label">ID keluar</label>
            <input type="text" name="id_keluar" value="<?php echo $r['id_keluar']?>" class="form-control" style="width: auto;" readonly>
        </div>
        <div class="mb-3">
            <label for="id_barang" class="form-label">ID barang</label>
            <input type="text" name="id_barang" value="<?php echo $r['id_barang']?>" class="form-control" style="width: auto;" readonly>
        </div>
        <div class="mb-3">
            <label for="id_admin" class="form-label">ID admin</label>
            <input type="text" name="id_admin" value="<?php echo $r['id_admin']?>" class="form-control" style="width: auto;" readonly>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" value="<?php echo $r['jumlah']?>" class="form-control" style="width: auto;" readonly>
        </div>
        <div class="mb-3">
            <label for="tangggal_keluar" class="form-label">Tanggal keluar</label>
            <input type="text" name="tangggal_keluar" value="<?php echo $r['tanggal_keluar']?>" class="form-control" style="width: auto;" readonly>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" value="<?php echo $r['keterangan']?>" class="form-control" style="width: auto;" readonly>
        </div>
        <a href="index.php" button type="button" class="btn" style="background-color: #525E75;"><i class="bi bi-chevron-left"></i> Kembali</a>                                         
        </div>
    </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

