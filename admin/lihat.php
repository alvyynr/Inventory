<?php
include "../koneksi.php";
$id_admin=$_GET['id_admin'];
$query=mysqli_query ($koneksi," SELECT * FROM admin WHERE id_admin='$id_admin'");
$r=mysqli_fetch_array($query);
?>
<?php include "sidebar.php" ?>
<h2 style="margin-top: 24px;">Data Admin</h2>
    <div class="col">
        <div class="row mt-5">
        <form class="form-input" method="POST">
            <div class="mb-3">
                <label for="nama_admin" class="form-label">Name</label>
                <input type="text" name="nama_admin" value="<?php echo $r['nama_admin']?>" class="form-control" style="width: auto;" readonly>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" value="<?php echo $r['username']?>" class="form-control" style="width: auto;" readonly>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" value="<?php echo $r['password']?>" class="form-control" style="width: auto;" readonly>
            </div>
            <a href="index.php" button type="button" class="btn" style="background-color: #525E75;"><i class="bi bi-chevron-left"></i> Kembali</a>       
        </form>                                  
    </div>

    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>