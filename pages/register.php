<?php // kayıt için de include('auth/register-handler.php'); planlıyoruz, daha vakit var ?>
<section class="mb-5">
    <!-- kayıt formu, kullanıcıları davet ediyoruz -->
    <h1 class="section-heading">Kayıt Ol</h1>
    <p class="lead">Aramıza katıl, kitaplara ve etkinliklere hızlı eriş. Söz veriyoruz spam yok.</p>
</section>

<section class="mb-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="registerName" class="form-label">Ad Soyad</label>
                    <input type="text" class="form-control" id="registerName" placeholder="Adını ve soyadını yaz" required>
                    <div class="form-text">Gerçek ismini yaz ki kartını kolayca hazırlayalım.</div>
                </div>
                <div class="mb-3">
                    <label for="registerEmail" class="form-label">E-posta Adresi</label>
                    <input type="email" class="form-control" id="registerEmail" placeholder="ogrenci@okul.edu" required>
                    <div class="form-text">Okul maili tercihimiz ama kişisel mail de olur, sıkıntı yapmıyoruz.</div>
                </div>
                <div class="mb-3">
                    <label for="registerPassword" class="form-label">Şifre</label>
                    <input type="password" class="form-control" id="registerPassword" placeholder="en az 8 karakter" required>
                    <div class="form-text">Şifreni kimseyle paylaşma, yoksa kütüphane puanlarını kaptırırsın.</div>
                </div>
                <div class="mb-3">
                    <label for="registerRole" class="form-label">Rol Seç</label>
                    <select class="form-select" id="registerRole" required>
                        <option value="" selected disabled>Rolünü seç</option>
                        <option value="student">Öğrenci</option>
                        <option value="teacher">Öğretmen</option>
                        <option value="alumni">Mezun</option>
                    </select>
                    <div class="form-text">Rolüne göre duyuruları filtreleyeceğiz, boşuna seçmiyorsun yani.</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="policy" required>
                    <label class="form-check-label" for="policy">Kuralları okudum, kitaplara iyi bakacağıma söz veriyorum.</label>
                </div>
                <button type="submit" class="btn btn-library w-100">Kayıt Ol</button>
                <p class="mt-3 mb-0">Zaten üyeysen <a href="?page=login">hemen giriş yap.</a></p>
            </form>
        </div>
    </div>
</section>
