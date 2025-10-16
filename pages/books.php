<section class="mb-5">
    <!-- kitap listesi için ufak bir giriş konuşması -->
    <h1 class="section-heading">Kitap Koleksiyonumuz</h1>
    <p class="lead">Aşağıdaki listede farklı kategorilerden seçtiğimiz kitapları bulabilirsin, hepsi raflarda seni bekliyor.</p>
</section>

<section>
    <!-- tablo yapalım dedik, düzenli duruyor -->
    <div class="table-responsive shadow-sm">
        <table class="table table-striped align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Başlık</th>
                    <th scope="col">Yazar</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Durum</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // evet, bu veriler şimdilik hayali ama iş görüyor
                $books = [
                    ['title' => 'Tutunamayanlar', 'author' => 'Oğuz Atay', 'category' => 'Roman', 'status' => 'Mevcut'],
                    ['title' => '1984', 'author' => 'George Orwell', 'category' => 'Distopya', 'status' => 'Ödünçte'],
                    ['title' => 'İnce Memed', 'author' => 'Yaşar Kemal', 'category' => 'Roman', 'status' => 'Mevcut'],
                    ['title' => 'Dune', 'author' => 'Frank Herbert', 'category' => 'Bilim Kurgu', 'status' => 'Mevcut'],
                    ['title' => 'Sefiller', 'author' => 'Victor Hugo', 'category' => 'Klasik', 'status' => 'Ödünçte']
                ];
                foreach ($books as $book) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($book['title'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($book['author'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($book['category'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td>
                            <span class="badge <?php echo $book['status'] === 'Mevcut' ? 'bg-success' : 'bg-warning text-dark'; ?>">
                                <?php echo htmlspecialchars($book['status'], ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
