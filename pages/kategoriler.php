<section class="container-xxl mt-4">
  <div class="eh-card p-4">
    <h1 class="h5 fw-bold mb-3">Kategoriler</h1>
    <div class="row g-3">
      <?php
        $kats = ["Hepsi","Kampüs","Teknoloji","Genel"];
        foreach($kats as $k):
      ?>
      <div class="col-6 col-md-3">
        <a class="btn btn-light w-100"><?php echo htmlspecialchars($k); ?></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>