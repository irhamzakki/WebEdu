<?php 
require_once __DIR__ . '/../config.php'; 
include 'header.php';  

// hitung jumlah data
$jml_materi = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM belajar"))['total'];
$jml_quiz = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM soal"))['total'];
$jml_mentor = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM expert"))['total'];
$jml_mhs = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM mahasiswa"))['total'];
?>
<div class="content">
  <h3>📊 Dashboard Admin</h3>
  <p>Selamat datang di halaman kontrol IGM Math Hub</p>

  <div class="row mt-4">
    <div class="col-md-3">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Materi</h5>
          <p class="display-6"><?= $jml_materi ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Kursus</h5>
          <p class="display-6"><?= $jml_mhs ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Quiz</h5>
          <p class="display-6"><?= $jml_quiz ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Mentor</h5>
          <p class="display-6"><?= $jml_mentor ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
