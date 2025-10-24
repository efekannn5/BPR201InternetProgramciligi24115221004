<?php
// EnHaber v5 — frontend hazır görünümlü, router basit
$sayfalar = [
  "home"         => "pages/home.php",
  "haber"        => "pages/haber.php",
  "hakkinda"     => "pages/hakkinda.php",
  "iletisim"     => "pages/iletisim.php",
  "kategoriler"  => "pages/kategoriler.php"
];
$sayfa = isset($_GET["sayfa"]) ? strtolower(trim($_GET["sayfa"])) : "home";
if(!array_key_exists($sayfa, $sayfalar)){ $sayfa = "home"; }
include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/navbar.php";
include __DIR__ . "/" . $sayfalar[$sayfa];
include __DIR__ . "/includes/footer.php";
?>