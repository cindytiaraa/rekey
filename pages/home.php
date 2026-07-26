<?php
/**
 * index.php — Beranda
 * Halaman utama, penuh interaksi (hero + ringkasan tiap section),
 * mengarahkan pengunjung ke halaman-halaman detail lainnya.
 */
$base      = '';
$current   = 'home';
$pageTitle = 'Beranda';
$pageDesc  = 'Foldable Totebag Keychain — mengubah limbah plastik LDPE menjadi kebiasaan baru membawa tas belanja sendiri.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<!-- HERO -->
<section class="hero" id="hero">
  <div class="container">
    <div class="hero-copy" data-aos="fade-up">
      <div class="hero-eyebrow">
        <span class="dot"><i class="fa-solid fa-recycle"></i></span>
        Proyek Riset KIM &amp; PKM-KC
      </div>

      <h1>Setiap Plastik<br>Berhak Punya <em>Kehidupan Kedua.</em></h1>

      <p class="hero-sub">
        Kami mengubah limbah kantong plastik LDPE menjadi totebag lipat yang menempel langsung
        di gantungan kunci — supaya membawa tas belanja sendiri bukan lagi soal ingat atau lupa.
      </p>

      <div class="hero-actions">
        <a href="pages/education.php" class="btn btn-primary">Pelajari Masalahnya <i class="fa-solid fa-arrow-right"></i></a>
        <a href="pages/process.php" class="btn btn-outline">Lihat Prosesnya <i class="fa-solid fa-diagram-project"></i></a>
      </div>

      <div class="hero-stats">
        <div class="stat">
          <b data-count="34" data-suffix=" jt">0</b>
          <span>Timbulan Sampah Nasional 2024</span>
        </div>
        <div class="stat">
          <b data-count="89" data-suffix="%">0</b>
          <span>Responden Mengaku Lupa Bawa Tas</span>
        </div>
        <div class="stat">
          <b data-count="94" data-suffix="%">0</b>
          <span>Responden Tertarik ReKey</span>
        </div>
      </div>
    </div>

    <div class="hero-visual" data-aos="zoom-in" data-aos-delay="150">
      <div class="blob"></div>
      <img class="keyring-illustration" src="assets/img/product/Keychain.png" alt="ReKey — Foldable Totebag Keychain" style="width:100%; max-width:380px;">
      <div class="float-chip chip-1"><i class="fa-solid fa-droplet"></i> Tahan Air</div>
      <div class="float-chip chip-2"><i class="fa-solid fa-key"></i> Selalu Terbawa</div>
    </div>
  </div>

  <div class="scroll-cue">
    Scroll
    <span class="chevron"></span>
  </div>
</section>

<!-- RINGKASAN / PETA HALAMAN -->
<section class="section-pad" id="explore">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Jelajahi</span>
      <h2 class="section-title">Empat Hal yang Perlu Anda Tahu</h2>
      <p class="section-sub">Landing page ini terbagi menjadi beberapa halaman singkat — mulai dari mana pun sesuai rasa penasaran Anda.</p>
    </div>

    <div class="tw-explore-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
      <a href="pages/education.php" class="tw-explore-card group" data-aos="fade-up" data-aos-delay="0">
        <div class="tw-explore-icon"><i class="fa-solid fa-book-open"></i></div>
        <h4>Edukasi</h4>
        <p>Latar belakang masalah plastik, jenis-jenis sampah plastik, dan tujuan proyek.</p>
        <span class="tw-explore-link">Baca selengkapnya <i class="fa-solid fa-arrow-right"></i></span>
      </a>
      <a href="pages/process.php" class="tw-explore-card group" data-aos="fade-up" data-aos-delay="80">
        <div class="tw-explore-icon"><i class="fa-solid fa-diagram-project"></i></div>
        <h4>Proses</h4>
        <p>Bagaimana limbah plastik berubah menjadi totebag lipat berbentuk keychain.</p>
        <span class="tw-explore-link">Lihat prosesnya <i class="fa-solid fa-arrow-right"></i></span>
      </a>
      <a href="pages/solution.php" class="tw-explore-card group" data-aos="fade-up" data-aos-delay="160">
        <div class="tw-explore-icon"><i class="fa-solid fa-bag-shopping"></i></div>
        <h4>Solusi</h4>
        <p>Rancangan akhir produk — Foldable Totebag Keychain hasil riset kami.</p>
        <span class="tw-explore-link">Lihat produk <i class="fa-solid fa-arrow-right"></i></span>
      </a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Punya pertanyaan atau ingin berdiskusi?</h3>
        <p>Kirimkan pesan Anda — tim riset kami akan membalas melalui email.</p>
      </div>
      <div class="cta-actions">
        <a href="pages/contact.php" class="btn btn-clay">Hubungi Kami <i class="fa-solid fa-paper-plane"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>