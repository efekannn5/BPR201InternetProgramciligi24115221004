<?php /* admin/_shell_open.php */ ?>
<div class="eh-sidebar" id="sidebar">
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
