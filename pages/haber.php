<?php
$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
$liste = [
  1 => ["baslik"=>"xxxxxxxxxxxxx", "tarih"=>"2025-10-25",
        "icerik"=>"xxxxxxxxxxxxxxxxxxxxxxxx"],
  2 => ["baslik"=>"xxxxxxxxxxxxx", "tarih"=>"2025-10-24",
        "icerik"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"],
  3 => ["baslik"=>"xxxxxxxxxxxxx", "tarih"=>"2025-10-23",
        "icerik"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"],
  4 => ["baslik"=>"xxxxxxxxxxxxx", "tarih"=>"2025-10-22",
        "icerik"=>"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"]
];
?>
<section class="container-xxl mt-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb small">
      <li class="breadcrumb-item"><a href="index.php">Ana Sayfa</a></li>
      <li class="breadcrumb-item"><a href="index.php?sayfa=haber">Haberler</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo isset($liste[$id]) ? htmlspecialchars($liste[$id]['baslik']) : 'Bulunamadı'; ?></li>
    </ol>
  </nav>

  <article class="eh-card">
    <img src="assets/img/haber1.png" class="w-100" style="max-height:280px; object-fit:cover;" alt="kapak">
    <div class="p-4 p-lg-5">
      <?php if(isset($liste[$id])): $h = $liste[$id]; ?>
        <h1 class="h4 fw-bold mb-2"><?php echo htmlspecialchars($h['baslik']); ?></h1>
        <div class="text-secondary small mb-3"><i class="bi bi-calendar-event me-1"></i><?php echo htmlspecialchars($h['tarih']); ?></div>
        <p class="lead"><?php echo nl2br(htmlspecialchars($h['icerik'])); ?></p>
      <?php else: ?>
        <p class="text-secondary mb-0">Bu haber bulunamadı.</p>
      <?php endif; ?>
    </div>
  </article>
</section>