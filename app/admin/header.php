<?php
// include config jika perlu
require_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | IGM Math Hub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f6f8fc;
    }
    .sidebar {
      height: 100vh;
      width: 240px;
      position: fixed;
      left: 0;
      top: 0;
      background: #1e2a38;
      color: #fff;
      display: flex;
      flex-direction: column;
      padding-top: 20px;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
      font-size: 20px;
    }
    .sidebar a {
      color: #cfd8dc;
      text-decoration: none;
      padding: 12px 20px;
      display: block;
      transition: all 0.2s;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #2e3e52;
      color: #fff;
      border-left: 4px solid #0d6efd;
    }
    .content {
      margin-left: 240px;
      padding: 30px;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2><i class="bi bi-calculator"></i> IGM Math Hub</h2>
    <a href="db.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
      <i class="bi bi-speedometer2 me-2"></i> Dashboard
    </a>
    <a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == 'materi.php' ? 'active' : '' ?>">
      <i class="bi bi-book me-2"></i> Materi
    </a>
    <a href="kursus.php" class="<?= basename($_SERVER['PHP_SELF']) == 'kursus.php' ? 'active' : '' ?>">
      <i class="bi bi-journal-text me-2"></i> Kursus
    </a>
    <a href="quiz.php" class="<?= basename($_SERVER['PHP_SELF']) == 'quiz.php' ? 'active' : '' ?>">
      <i class="bi bi-puzzle me-2"></i> Quiz
    </a>
    <a href="mentor.php" class="<?= basename($_SERVER['PHP_SELF']) == 'mentor.php' ? 'active' : '' ?>">
      <i class="bi bi-person-video3 me-2"></i> Mentor
    </a>
    <a href="../../logout.php" class="text-danger mt-auto">
      <i class="bi bi-box-arrow-right me-2"></i> Logout
    </a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <h3>Selamat Datang, Admin 👋</h3>
    <p>Ini adalah halaman dashboard utama. Pilih menu di samping untuk mulai mengelola konten IGM Math Hub.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
