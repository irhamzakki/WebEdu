<?php 
require_once __DIR__ . '/../config.php';
include 'header.php';
?>
<div class="content">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3><i class="bi bi-book"></i> Data Materi</h3>
    <a href="materi_tambah.php" class="btn btn-primary">
      <i class="bi bi-plus-circle me-1"></i> Tambah Data
    </a>
  </div>

  <table class="table table-bordered mt-3 table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Isian</th>
        <th>Ringkasan</th>
        <th>Uploaded</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM belajar ORDER BY id DESC");
      while($row = mysqli_fetch_assoc($result)):
      ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['title'] ?></td>
        <td><img src="../../<?= $row['thumbnail'] ?>" width="60"></td>
        <td><?= $row['excerpt'] ?></td>
        <td><?= $row['slug'] ?></td>
        <td class="text-center"><?= $row['Uploaded_at'] ?></td>
        <td class="text-center">
          <a href="materi_edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
          <a href="materi_hapus.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
