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
    <div class="col-12 col-md-4">
      <div class="eh-card p-3">
        <div class="eh-kpi">
          <i class="bi bi-newspaper"></i>
          <div>
            <div class="text-secondary small">Toplam Haber</div>
            <div class="fs-4 fw-bold">12</div>
          </div>
          <span class="ms-auto eh-badge text-bg-success">+3 bugün</span>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="eh-card p-3">
        <div class="eh-kpi">
          <i class="bi bi-eye"></i>
          <div>
            <div class="text-secondary small">Bugünkü Görüntüleme</div>
            <div class="fs-4 fw-bold">1.254</div>
          </div>
          <span class="ms-auto eh-badge text-bg-primary">+8%</span>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="eh-card p-3">
        <div class="eh-kpi">
          <i class="bi bi-people"></i>
          <div>
            <div class="text-secondary small">Editör Sayısı</div>
            <div class="fs-4 fw-bold">4</div>
          </div>
          <span class="ms-auto eh-badge text-bg-secondary">stabil</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-3 mt-1">
    <div class="col-12 col-lg-8">
      <div class="eh-card p-3">
        <div class="d-flex align-items-center justify-content-between mb-2">
          <h5 class="mb-0">Son Haberler</h5>
          <a href="haber-ekle.php" class="btn btn-sm btn-primary"><i class="bi bi-plus-lg me-1"></i>Yeni</a>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead><tr><th>Başlık</th><th>Tarih</th><th>Durum</th><th class="text-end">İşlem</th></tr></thead>
            <tbody>
              <tr>
                <td>xxxxxxxxxxxxxxxxxxxxxxxxx</td>
                <td>2025-10-25</td>
                <td><span class="eh-badge text-bg-success">Yayında</span></td>
                <td class="text-end">
                  <a class="btn btn-sm btn-outline-primary" href="haber-ekle.php"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-outline-secondary" disabled><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>xxxxxxxxxxxx</td>
                <td>2025-10-24</td>
                <td><span class="eh-badge text-bg-warning">Taslak</span></td>
                <td class="text-end"><a class="btn btn-sm btn-outline-primary" href="haber-ekle.php"><i class="bi bi-pencil"></i></a></td>
              </tr>
              <tr>
                <td>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</td>
                <td>2025-10-23</td>
                <td><span class="eh-badge text-bg-success">Yayında</span></td>
                <td class="text-end"><a class="btn btn-sm btn-outline-primary" href="haber-ekle.php"><i class="bi bi-pencil"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <small class="text-secondary">Toplam 12 kayıt (demo)</small>
          <nav aria-label="Sayfalama">
            <ul class="pagination pagination-sm mb-0">
              <li class="page-item disabled"><a class="page-link">Önceki</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="eh-card p-3 mb-3">
        <h6>Yayın Planı</h6>
        <div class="d-flex align-items-center justify-content-between small mb-1">
          <span>Bu hafta</span><span>60%</span>
        </div>
        <div class="eh-progress"><div style="width:60%"></div></div>
      </div>
      <div class="eh-card p-3">
        <h6>Aktivite</h6>
        <ul class="list-unstyled small mb-0">
          <li class="mb-2"><i class="bi bi-dot text-primary"></i> 2 haber taslağa alındı</li>
          <li class="mb-2"><i class="bi bi-dot text-success"></i> 1 haber yayınlandı</li>
          <li class="mb-2"><i class="bi bi-dot text-warning"></i> Görsel güncellendi</li>
        </ul>
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
