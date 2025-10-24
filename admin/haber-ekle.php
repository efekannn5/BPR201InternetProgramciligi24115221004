<?php /* admin/_head.php - ortak head */ ?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EnHaber Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root{
      --eh-bg:#f1f4f9;
      --eh-navy:#0a192f;
      --eh-navy-2:#1b263b;
      --eh-accent:#3b82f6; /* mavi */
      --eh-accent-2:#22c55e; /* yeşil */
      --eh-text:#0f172a;
    }
    body{ background:var(--eh-bg); color:var(--eh-text); }
    .eh-sidebar{
      position: fixed; top:0; left:0; bottom:0; width:240px;
      background:var(--eh-navy); color:#e5e7eb; padding:18px 14px;
    }
    .eh-brand{ color:#fff; text-decoration:none; font-weight:700; letter-spacing:.2px; }
    .eh-nav a{
      color:#cdd6e6; text-decoration:none; display:block; padding:10px 10px; border-radius:8px;
    }
    .eh-nav a:hover, .eh-nav a.active{ background:var(--eh-navy-2); color:#fff; }
    .eh-content{ margin-left:240px; min-height:100vh; }
    .eh-topbar{
      position:sticky; top:0; z-index:20; background:#fff; border-bottom:1px solid #e5e7eb;
    }
    .eh-card{ background:#fff; border:1px solid #eaecef; border-radius:14px; }
    .eh-badge{ font-size:.75rem; padding:.25rem .5rem; border-radius:9999px; }
    .eh-progress{ height:8px; background:#e5e7eb; border-radius:9999px; overflow:hidden; }
    .eh-progress > div{ height:100%; background:var(--eh-accent); }
    .table thead th{ color:#64748b; font-weight:600; }
    .eh-kpi{ display:flex; align-items:center; gap:12px; }
    .eh-kpi i{ font-size:1.2rem; color:var(--eh-accent); }
    @media (max-width: 991px){
      .eh-sidebar{ transform:translateX(-100%); transition:transform .2s; }
      .eh-sidebar.show{ transform:none; }
      .eh-content{ margin-left:0; }
    }
  </style>
</head>
<body>
<?php /* admin/_shell_open.php */ ?>
<div class="eh-sidebar" id="sidebar" style="background-color:#646A99;">
  <div class="d-flex align-items-center justify-content-between mb-3">
    <a class="eh-brand" href="dashboard.php">EnHaber</a>
    <button class="btn btn-sm btn-outline-light d-lg-none" id="btnClose"><i class="bi bi-x-lg"></i></button>
  </div>
  <div class="eh-nav">
    <a href="dashboard.php" class="active"><i class="bi bi-speedometer2 me-2"></i>Panel</a>
    <a href="haber-listesi.php"><i class="bi bi-newspaper me-2"></i>Haberler</a>
    <a href="kategoriler.php"><i class="bi bi-tags me-2"></i>Kategoriler</a>
    <a href="editorler.php"><i class="bi bi-people me-2"></i>Editorler</a>
    <div class="mt-3 small text-secondary">Sistem</div>
    <a href="login.php"><i class="bi bi-box-arrow-right me-2"></i>Çıkış</a>
  </div>
</div>

<div class="eh-content">
  <div class="eh-topbar py-3 px-3 px-lg-4 d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
      <button class="btn btn-outline-secondary d-lg-none" id="btnOpen"><i class="bi bi-list"></i></button>
      <span class="fw-semibold">Yönetim Paneli</span>
    </div>
    <div class="d-flex align-items-center gap-3">
      <div class="input-group input-group-sm" style="width:220px;">
        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
        <input class="form-control" placeholder="Ara (demo)">
      </div>
      <span class="badge text-bg-primary">admin</span>
    </div>
  </div>
  <div class="container-fluid py-4">
  <div class="row g-3">
    <div class="col-12 col-lg-8">
      <div class="eh-card p-4">
        <h5 class="mb-3">Haber Ekle</h5>
        <form action="javascript:void(0)" class="row g-3">
          <div class="col-12">
            <label class="form-label small">Başlık</label>
            <input class="form-control form-control-lg" placeholder="Haber başlığı">
          </div>
          <div class="col-12">
            <label class="form-label small">Özet</label>
            <textarea class="form-control" rows="2" placeholder="Kısa özet"></textarea>
          </div>
          <div class="col-12">
            <label class="form-label small">İçerik</label>
            <textarea class="form-control" rows="8" placeholder="Haber metni"></textarea>
          </div>
          <div class="col-12">
            <label class="form-label small">Kapak Görseli</label>
            <input type="file" class="form-control">
            <div class="form-text">Demo: işlem yapılmaz</div>
          </div>
          <div class="col-12 d-flex gap-2">
            <button class="btn btn-primary"><i class="bi bi-save me-1"></i>Kaydet (Demo)</button>
            <a class="btn btn-outline-secondary" href="haber-listesi.php">İptal</a>
          </div>
        </form>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="eh-card p-3">
        <h6 class="mb-2">Durum</h6>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="durum" id="d1" checked>
          <label class="form-check-label" for="d1">Taslak</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="durum" id="d2">
          <label class="form-check-label" for="d2">Yayında</label>
        </div>
        <hr>
        <label class="form-label small">Kategori</label>
        <select class="form-select">
          <option>Genel</option>
          <option>Kampüs</option>
          <option>Teknoloji</option>
        </select>
      </div>
    </div>
  </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const sidebar = document.getElementById('sidebar');
  document.getElementById('btnOpen')?.addEventListener('click', ()=> sidebar.classList.add('show'));
  document.getElementById('btnClose')?.addEventListener('click', ()=> sidebar.classList.remove('show'));
</script>
</body>
</html>
