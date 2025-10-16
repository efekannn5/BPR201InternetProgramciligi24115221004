<?php
// selam, burası ana yönlendirme sayfamız :)
$allowedPages = [
    'home' => 'Anasayfa',
    'books' => 'Kitaplar',
    'about' => 'Hakkımızda',
    'contact' => 'İletişim',
    'login' => 'Giriş Yap',
    'register' => 'Kayıt Ol'
];
// gelen parametreye şöyle bir bakıyoruz, aman dikkat
$pageKey = $_GET['page'] ?? 'home';
if (!array_key_exists($pageKey, $allowedPages)) {
    $pageKey = 'home'; // yanlış gelen olursa anasayfaya dönüş yapıyoruz
}
$pagePath = __DIR__ . '/pages/' . $pageKey . '.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilgi Bahçesi Kütüphanesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="Kitap Logo" width="40" height="40" class="me-2">
                <span>Bilgi Bahçesi</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link<?php echo $pageKey === 'home' ? ' active' : ''; ?>" href="?page=home">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo $pageKey === 'books' ? ' active' : ''; ?>" href="?page=books">Kitaplar</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo $pageKey === 'about' ? ' active' : ''; ?>" href="?page=about">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link<?php echo $pageKey === 'contact' ? ' active' : ''; ?>" href="?page=contact">İletişim</a></li>
                </ul>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-light" href="?page=login">Giriş Yap</a>
                    <a class="btn btn-light text-primary" href="?page=register">Kayıt Ol</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <?php
            // burada seçilen sayfayı dahil edip gösteriyoruz, çok havalı
            if (file_exists($pagePath)) {
                include $pagePath;
            } else {
                echo '<div class="alert alert-warning">Seçilen sayfa bulunamadı, yine anasayfaya döndük :)</div>';
            }
            ?>
        </div>
    </div>
</main>

<footer class="bg-light py-4 mt-auto border-top">
    <div class="container text-center">
        <p class="mb-0 footer-note">© <?php echo date('Y'); ?> Bilgi Bahçesi Kütüphanesi - öğrenciyiz, elimizden bu kadar geliyor :)</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
