<section class="container-xxl mt-4">
  <div class="eh-hero p-4 p-lg-5 mb-4">
    <div class="d-lg-flex align-items-center justify-content-between">
      <div class="me-lg-4">
        <h1 class="h3 fw-bold mb-2">Günün Manşetleri</h1>
        <p class="text-secondary mb-0">Öne çıkan başlıklar ve son gelişmeler.</p>
      </div>
      <div class="mt-3 mt-lg-0">
        <a class="btn btn-primary me-2" href="index.php?sayfa=haber"><i class="bi bi-newspaper me-1"></i>Tüm Haberler</a>
        <a class="btn btn-outline-primary" href="admin/login.php"><i class="bi bi-box-arrow-in-right me-1"></i>Admin</a>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <aside class="col-12 col-lg-3">
      <div class="eh-sidebar">
        <div class="eh-card p-3 mb-3">
          <h6 class="mb-2">Kategoriler</h6>
          <div class="d-grid gap-2">
            <a class="btn btn-light btn-sm text-start" href="index.php?sayfa=kategoriler">Hepsi</a>
            <a class="btn btn-light btn-sm text-start" href="index.php?sayfa=kategoriler">Kampüs</a>
            <a class="btn btn-light btn-sm text-start" href="index.php?sayfa=kategoriler">Teknoloji</a>
            <a class="btn btn-light btn-sm text-start" href="index.php?sayfa=kategoriler">Genel</a>
          </div>
        </div>
        <div class="eh-card p-3">
          <h6 class="mb-2">Takvim</h6>
          <div class="small text-secondary">Bu hafta planlı içerikler mevcut.</div>
        </div>
      </div>
    </aside>

    <div class="col-12 col-lg-9">
      <div class="row g-4">
        <?php
          $haberler = [
            ["id"=>1,"baslik"=>"xxxxxxxxxxxxxxxx","ozet"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx","tarih"=>"2025-10-25","durum"=>"Yayında"],
            ["id"=>2,"baslik"=>"xxxxxxxxxxxxxxxx","ozet"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxx","tarih"=>"2025-10-24","durum"=>"Taslak"],
            ["id"=>3,"baslik"=>"xxxxxxxxxxxxxxxx","ozet"=>"xxxxxxxxxxxxxxxxxxxxxxx","tarih"=>"2025-10-23","durum"=>"Yayında"],
            ["id"=>4,"baslik"=>"xxxxxxxxxxxxxxxx","ozet"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx","tarih"=>"2025-10-22","durum"=>"Yayında"]
          ];
          foreach($haberler as $h):
        ?>
        <div class="col-12 col-md-6">
          <article class="eh-card">
            <div class="thumb"></div>
            <div class="p-3">
              <div class="d-flex align-items-center justify-content-between mb-1">
                <span class="badge <?php echo $h['durum']==='Yayında' ? 'text-bg-success' : 'text-bg-warning'; ?> eh-badge">
                  <?php echo htmlspecialchars($h['durum']); ?>
                </span>
                <small class="text-secondary"><?php echo htmlspecialchars($h['tarih']); ?></small>
              </div>
              <h2 class="h6 fw-bold mb-1"><?php echo htmlspecialchars($h['baslik']); ?></h2>
              <p class="text-secondary small mb-2"><?php echo htmlspecialchars($h['ozet']); ?></p>
              <a class="btn btn-sm btn-outline-primary" href="index.php?sayfa=haber&id=<?php echo (int)$h['id']; ?>">Haberi Oku</a>
            </div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>

      <nav class="mt-4 d-flex justify-content-between align-items-center">
        <small class="text-secondary">4 içerik</small>
        <ul class="pagination pagination-sm mb-0">
          <li class="page-item disabled"><a class="page-link">Önceki</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>