<section class="mb-5">
    <!-- burası giriş kısmı, biraz sıcak bir karşılama olsun dedik -->
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold section-heading">Bilgi Bahçesi'ne Hoş Geldin!</h1>
            <p class="col-md-8 fs-5 mt-3">Okulun kütüphanesi gibi ama daha havalı: online katalog, etkinlikler ve arkadaşça notlar burada.</p>
            <a class="btn btn-library btn-lg" href="?page=books">Kitapları Keşfet</a>
        </div>
    </div>
</section>

<section class="mb-5">
    <!-- kitaplarla ilgili kartlar, baya seviyoruz bu işleri -->
    <h2 class="section-heading mb-4">Haftanın Öne Çıkan Kitapları</h2>
    <div class="row g-4">
        <?php
        // hızlıca sahte verileri hazırladık, gerçekleri sonra ekleriz
        $featuredBooks = [
            ['title' => 'Simyacı', 'author' => 'Paulo Coelho', 'desc' => 'Kendi yolculuğunu bulmak isteyenler için klasik bir macera.'],
            ['title' => 'Beyaz Diş', 'author' => 'Jack London', 'desc' => 'Doğa ve insan ilişkisini anlatan bol heyecanlı bir roman.'],
            ['title' => 'Körlük', 'author' => 'José Saramago', 'desc' => 'Toplumsal eleştirisi güçlü, etkileyici bir hikaye.'],
            ['title' => 'Kürk Mantolu Madonna', 'author' => 'Sabahattin Ali', 'desc' => 'Aşkın ve yalnızlığın en sade hali.']
        ];
        foreach ($featuredBooks as $book) : ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title h5"><?php echo htmlspecialchars($book['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="text-muted mb-2"><?php echo htmlspecialchars($book['author'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="card-text"><?php echo htmlspecialchars($book['desc'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section>
    <!-- duyuru bölümü, hoca bakınca sevinsin -->
    <h2 class="section-heading mb-4">Duyurular</h2>
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card border-primary h-100">
                <div class="card-body">
                    <h3 class="card-title h5">Okuma Kulübü Toplantısı</h3>
                    <p class="card-text">Cuma günü 15.30'da Edebiyat salonunda buluşuyoruz, çayları unutmayın!</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-success h-100">
                <div class="card-body">
                    <h3 class="card-title h5">Yeni Kitap Rafı Açıldı</h3>
                    <p class="card-text">Bilim kurgu rafını yeniledik, Star Wars köşesine bekleriz.</p>
                </div>
            </div>
        </div>
    </div>
</section>
