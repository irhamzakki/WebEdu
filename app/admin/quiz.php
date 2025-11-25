<?php 
require_once __DIR__ . '/../config.php';
include 'header.php';

?>
<div class="content">
    <div class="d-flex justify-content-between align-items-center mb-3">
  <h3><i class="bi bi-puzzle"></i> Data Soal Quiz</h3>
  <a href="materi_tambah.php" class="btn btn-primary">
      <i class="bi bi-plus-circle me-1"></i> Tambah Data
    </a>
    </div>  
  <table class="table table-bordered mt-3 table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Jenis</th>
        <th>Topik</th>
        <th>Soal</th>
        <th>Jawaban</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM soal ORDER BY id DESC");
      while($row = mysqli_fetch_assoc($result)):
      ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['jenis'] ?></td>
        <td><?= $row['topik'] ?></td>
        <td><?= $row['soal'] ?></td>
        <td><?= $row['jawaban'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
