<?php // ileride buraya auth kontrolü için include('auth/check-login.php'); ekleriz, şimdilik böyle ?>
<section class="mb-5">
    <!-- giriş formu, sade ama işlevsel olsun dedik -->
    <h1 class="section-heading">Giriş Yap</h1>
    <p class="lead">Hesabına giriş yapıp kitap listelerini yönetebilirsin, yoksa kayıt olmayı da unutma.</p>
</section>

<section class="mb-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">E-posta Adresi</label>
                    <input type="email" class="form-control" id="loginEmail" placeholder="ogrenci@okul.edu" required>
                    <div class="form-text">Okul mailini yazarsan sistem seni daha çabuk tanır gibi.</div>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Şifre</label>
                    <input type="password" class="form-control" id="loginPassword" placeholder="••••••" required>
                    <div class="form-text">En az 8 karakter, arada bir büyük harf koymak fena olmaz.</div>
                </div>
                <div class="mb-3">
                    <label for="loginRole" class="form-label">Rolün</label>
                    <select class="form-select" id="loginRole" required>
                        <option value="" selected disabled>Seç bir rol</option>
                        <option value="student">Öğrenci</option>
                        <option value="teacher">Öğretmen</option>
                        <option value="guest">Ziyaretçi</option>
                    </select>
                    <div class="form-text">Rol seçmezsen sistem kime kapı açacağını bilemiyor.</div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Beni hatırla</label>
                    </div>
                    <a href="#" class="small">Şifremi unuttum</a>
                </div>
                <button type="submit" class="btn btn-library w-100">Giriş Yap</button>
                <p class="mt-3 mb-0">Hesabın yok mu? <a href="?page=register">Hemen kayıt ol.</a></p>
            </form>
        </div>
    </div>
</section>
