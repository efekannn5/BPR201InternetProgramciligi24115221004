<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EnHaber Admin - Giriş</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body{ min-height:100vh; background: linear-gradient(135deg, #0a192f 0%, #1b263b 60%, #0a192f 100%); }
    .login-card{ background:#fff; border-radius:16px; box-shadow:0 20px 50px rgba(0,0,0,.25); overflow:hidden; }
    .login-aside{ background:#0a192f; color:#e5e7eb; padding:26px; }
    .login-aside h1{ font-size:1.4rem; margin:0 0 8px; }
    .login-aside p{ margin:0; opacity:.85; }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center py-5">
  <div class="container" style="max-width:980px;">
    <div class="row g-0 login-card">
      <div class="col-lg-5 login-aside d-flex flex-column justify-content-between">
        <div>
          <h1>EnHaber Yönetim</h1>
          <p class="small">Yetkili erişim paneli.</p>
        </div>
        <div class="text-center">
          <i class="bi bi-newspaper" style="font-size:64px; opacity:.25;"></i>
        </div>
      </div>
      <div class="col-lg-7 bg-white p-4 p-lg-5">
        <h2 class="h4 fw-semibold mb-1">Giriş</h2>
        <p class="text-secondary small mb-4">Lütfen hesap bilgileriniz ile giriş yapın.</p>
        <form action="#" method="post" class="row gy-3">
          <div class="col-12">
            <label class="form-label small">E-posta</label>
            <input type="email" class="form-control form-control-lg" placeholder="ornek@site.com">
          </div>
          <div class="col-12">
            <label class="form-label small">Şifre</label>
            <input type="password" class="form-control form-control-lg" placeholder="••••••••">
          </div>
          <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember">
              <label class="form-check-label small" for="remember">Beni hatırla</label>
            </div>
            <a href="#" class="small">Şifremi unuttum</a>
          </div>
          <div class="col-12 d-grid">
            <button class="btn btn-primary btn-lg">Giriş</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>