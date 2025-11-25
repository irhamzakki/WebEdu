<?php 
require_once __DIR__ . '/../config.php';
include 'header.php';

?>
<div class="content">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h3><i class="bi bi-journal-text"></i> Data Mahasiswa / Kursus</h3>
    <a href="materi_tambah.php" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Tambah Data
        </a>
    </div>
  <table class="table table-bordered mt-3 table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
      while($row = mysqli_fetch_assoc($result)):
      ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nim'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['jurusan'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
