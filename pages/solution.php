<?php
/**
 * pages/solution.php — Solusi
 * Gambar / rancangan akhir dari proyek: produk, alasan bentuk keychain,
 * dan dampak lingkungan yang diharapkan.
 */
$base      = '../';
$current   = 'solution';
$pageTitle = 'Solusi';
$pageDesc  = 'Rancangan akhir Foldable Totebag Keychain — fitur produk dan dampak lingkungan yang diharapkan.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<!-- PRODUCT SHOWCASE -->
<section class="product section-pad" id="product" style="padding-top:150px;">
  <div class="container">
    <div class="product-grid">
      <div class="product-stage" data-aos="zoom-in" style="background:var(--white);">
        <div style="display:flex; flex-direction:column; align-items:center; gap:24px; padding:40px 30px;">
          <img src="../assets/img/product/Keychain.png" alt="ReKey Keychain" style="width:160px; height:auto;">
          <div style="width:60px; height:2px; background:var(--sand-300); border-radius:2px;"></div>
          <img src="../assets/img/product/Totebag.png" alt="ReKey Totebag" style="width:240px; height:auto;">
        </div>
        <div class="feature-tag ft-1"><i class="fa-solid fa-droplet"></i> Waterproof</div>
        <div class="feature-tag ft-2"><i class="fa-solid fa-compress"></i> Foldable</div>
        <div class="feature-tag ft-3"><i class="fa-solid fa-key"></i> Keychain</div>
      </div>

      <div class="product-copy">
        <div class="section-head" data-aos="fade-up">
          <span class="eyebrow">Produk</span>
          <h2 class="section-title">Kenalan dengan Foldable Totebag Keychain</h2>
          <p class="section-sub"><strong>ReKey</strong> — <em>reusable foldable keychain bag</em> berbahan limbah plastik LDPE yang dilengkapi QR Digital Passport. Dirancang untuk selalu ada, tanpa perlu diingat-ingat.</p>
        </div>

        <div class="feature-list">
          <div class="feature-item" data-aos="fade-up" data-aos-delay="0">
            <i class="fa-solid fa-arrows-rotate"></i>
            <div><h5>Reusable</h5><p>Dipakai berulang kali, bukan sekali buang</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="60">
            <i class="fa-solid fa-droplet"></i>
            <div><h5>Waterproof</h5><p>Tahan terhadap percikan &amp; rembesan air</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="120">
            <i class="fa-solid fa-feather"></i>
            <div><h5>Lightweight</h5><p>Ringan, tidak membebani gantungan kunci</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="180">
            <i class="fa-solid fa-compress"></i>
            <div><h5>Foldable</h5><p>Dilipat sekecil dompet kunci biasa</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="240">
            <i class="fa-solid fa-hand-holding"></i>
            <div><h5>Easy to Carry</h5><p>Mudah dibawa ke mana pun tanpa terasa</p></div>
          </div>
          <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
            <i class="fa-solid fa-key"></i>
            <div><h5>Keychain-Attached</h5><p>Menempel langsung, selalu ada saat dibutuhkan</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY KEYCHAIN -->
<section class="keychain-why section-pad" id="why-keychain">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Inti Inovasi</span>
      <h2 class="section-title">Kenapa Harus Berbentuk Keychain?</h2>
      <p class="section-sub">Inovasi ini bukan sekadar "totebag baru". Kami menjawab masalah yang lebih mendasar: orang lupa membawanya.</p>
    </div>

    <div class="compare-grid">
      <div class="compare-card no" data-aos="fade-up">
        <h4><i class="fa-solid fa-bag-shopping"></i> Totebag Biasa</h4>
        <ul>
          <li><i class="fa-solid fa-circle-xmark"></i> Sering tertinggal di rumah</li>
          <li><i class="fa-solid fa-circle-xmark"></i> Perlu diingat-ingat sebelum berangkat</li>
          <li><i class="fa-solid fa-circle-xmark"></i> Cukup besar untuk dibawa setiap hari</li>
          <li><i class="fa-solid fa-circle-xmark"></i> Butuh tas tambahan untuk membawanya</li>
        </ul>
      </div>
      <div class="compare-vs" data-aos="zoom-in">VS</div>
      <div class="compare-card yes" data-aos="fade-up" data-aos-delay="120">
        <h4><i class="fa-solid fa-key"></i> Foldable Keychain Tote</h4>
        <ul>
          <li><i class="fa-solid fa-circle-check"></i> Selalu menempel di kunci Anda</li>
          <li><i class="fa-solid fa-circle-check"></i> Tidak butuh usaha ekstra untuk diingat</li>
          <li><i class="fa-solid fa-circle-check"></i> Ringkas, muat di saku atau gantungan tas</li>
          <li><i class="fa-solid fa-circle-check"></i> Terbuka begitu saja saat dibutuhkan</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- CARA MELIPAT -->
<section class="section-pad" id="fold-tutorial">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Cara Melipat</span>
      <h2 class="section-title">Dari Totebag ke Keychain dalam 4 Langkah</h2>
      <p class="section-sub">Simpel dan cepat — cukup ikuti langkah berikut setiap kali selesai berbelanja.</p>
    </div>

    <div class="product-copy" style="max-width:820px; margin:0 auto;">
      <div class="feature-list" style="grid-template-columns:repeat(2,1fr);">
        <div class="feature-item" data-aos="fade-up" data-aos-delay="0">
          <i class="fa-solid fa-1" style="font-size:16px; font-weight:700;"></i>
          <div><h5>Bentangkan</h5><p>Buka totebag dan ratakan di permukaan datar, pastikan tidak ada lipatan yang tersisa.</p></div>
        </div>
        <div class="feature-item" data-aos="fade-up" data-aos-delay="80">
          <i class="fa-solid fa-2" style="font-size:16px; font-weight:700;"></i>
          <div><h5>Lipat Memanjang</h5><p>Lipat sisi kiri dan kanan ke arah tengah secara vertikal hingga membentuk strip.</p></div>
        </div>
        <div class="feature-item" data-aos="fade-up" data-aos-delay="160">
          <i class="fa-solid fa-3" style="font-size:16px; font-weight:700;"></i>
          <div><h5>Lipat Melintang</h5><p>Lipat dari bawah ke atas secara horizontal menjadi persegi kecil seukuran pouch.</p></div>
        </div>
        <div class="feature-item" data-aos="fade-up" data-aos-delay="240">
          <i class="fa-solid fa-4" style="font-size:16px; font-weight:700;"></i>
          <div><h5>Masukkan &amp; Kaitkan</h5><p>Masukkan ke dalam character pouch, kancingkan snap button, dan gantung di kunci Anda.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Tertarik dengan produk ini?</h3>
        <p>Kenali tim di baliknya atau hubungi kami langsung.</p>
      </div>
      <div class="cta-actions">
        <a href="about.php" class="btn btn-outline" style="border-color:rgba(255,255,255,.4); color:#fff;">Tentang Kami</a>
        <a href="contact.php" class="btn btn-clay">Hubungi Kami <i class="fa-solid fa-paper-plane"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
