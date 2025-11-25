<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | IGM Math Hub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffecd2, #fcb69f);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .login-card {
      background: white;
      border-radius: 25px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      padding: 2rem;
      position: relative;
      z-index: 10;
      animation: floatCard 4s ease-in-out infinite alternate;
    }

    @keyframes floatCard {
      0% { transform: translateY(0px); }
      100% { transform: translateY(-10px); }
    }

    .login-card h2 {
      text-align: center;
      font-weight: 700;
      color: #ff6a00;
      margin-bottom: 1.5rem;
      text-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .form-control {
      border-radius: 15px;
      border: 2px solid #fcb69f;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #ff6a00;
      box-shadow: 0 0 10px rgba(255,106,0,0.3);
    }

    .btn-login {
      background: linear-gradient(90deg, #ff6a00, #ee0979);
      border: none;
      color: white;
      font-weight: 600;
      width: 100%;
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-login:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 20px rgba(238,9,121,0.4);
    }

    .wave {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 200%;
      height: 200px;
      background: rgba(255,255,255,0.3);
      border-radius: 50%;
      animation: waveAnim 8s ease-in-out infinite alternate;
    }

    @keyframes waveAnim {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    .register-link {
      text-align: center;
      margin-top: 1rem;
    }

    .register-link a {
      color: #ee0979;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    /* Karakter animasi kecil (Marvel-style) */
    .hero-icon {
      position: absolute;
      width: 60px;
      top: 10%;
      animation: flyHero 6s ease-in-out infinite alternate;
    }

    @keyframes flyHero {
      0% { transform: translateY(0) rotate(0deg); }
      100% { transform: translateY(-15px) rotate(5deg); }
    }

  </style>
</head>
<body>

  <!-- Karakter hiasan -->
  <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="hero-icon" style="left: 15%;" alt="Hero">
  <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" class="hero-icon" style="right: 15%;" alt="Hero">

  <div class="login-card">
  <h2>👋 Selamat Datang di IGM Math Hub</h2>
  <form id="loginForm">
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" id="email" class="form-control" placeholder="Masukkan email kamu" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Kata Sandi</label>
      <input type="password" id="password" class="form-control" placeholder="Masukkan kata sandi" required>
    </div>
    <button type="submit" class="btn btn-login mt-2">Masuk</button>
    <div class="register-link">
      Belum punya akun? <a href="#">Daftar Sekarang</a>
    </div>
  </form>
</div>

<script>
  // Akun admin
  const admin = {
    email: "admin@hub.com",
    password: "admin123"
  };

  document.getElementById('loginForm').addEventListener('submit', function(e){
    e.preventDefault(); // mencegah reload halaman
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if(email === admin.email && password === admin.password){
      alert("Login berhasil! Mengarahkan ke dashboard...");
      // arahkan ke dashboard
      window.location.href = "app/admin/dashboard.php";
    } else {
      alert("Email atau kata sandi salah!");
    }
  });
</script>

  <!-- Wave Background -->
  <div class="wave"></div>
  <div class="wave" style="animation-delay: 3s; opacity: 0.5;"></div>

</body>
</html>
