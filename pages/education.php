<?php
/**
 * pages/education.php — Edukasi
 * Latar belakang masalah, jenis-jenis sampah plastik, dan tujuan proyek.
 */
$base      = '../';
$current   = 'education';
$pageTitle = 'Edukasi';
$pageDesc  = 'Latar belakang masalah plastik, jenis-jenis sampah plastik, dan tujuan dari proyek Foldable Totebag Keychain.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<!-- PAGE HEADER -->
<section class="section-pad" style="padding-bottom:0;">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Edukasi</span>
      <h2 class="section-title">Memahami Masalah Sebelum Bicara Solusi</h2>
      <p class="section-sub">Sebelum mengenal produknya, penting untuk memahami skala masalah plastik dan mengapa LDPE menjadi jawaban yang kami pilih.</p>
    </div>
  </div>
</section>

<!-- LATAR BELAKANG -->
<section class="section-pad" style="padding-top:40px;">
  <div class="container">
    <div class="about-grid">
      <div class="about-visual" data-aos="fade-up" style="background:var(--white);">
        <img src="../assets/img/illustration/sampah.jpeg" alt="Ilustrasi Sampah Plastik" style="width:85%; border-radius:var(--radius-md); object-fit:contain;">
      </div>
      <div class="about-copy">
        <h3 style="font-family:var(--font-display); font-size:24px; color:var(--forest-800); margin:0 0 16px;">Latar Belakang</h3>
        <p data-aos="fade-up">
          Indonesia hingga saat ini masih menghadapi persoalan besar terkait tingginya timbulan sampah plastik, khususnya sampah berbahan <em>Low-Density Polyethylene</em> (LDPE) yang banyak digunakan sebagai kantong belanja sekali pakai. Data menunjukkan bahwa timbulan sampah nasional pada tahun 2024 tercatat sebanyak 34 juta ton, dan plastik tetap menjadi kontributor sampah terbesar dengan porsi 19,48% dari total timbulan.
        </p>
        <p data-aos="fade-up" data-aos-delay="80">
          Persoalan yang muncul bukan terletak pada ketiadaan <em>reusable bag</em>, melainkan pada konsistensi penggunaannya. Hasil survei awal terhadap 35 mahasiswa menunjukkan 80% responden mengaku pernah berbelanja tanpa membawa tas belanja sendiri, dan 89% menyebut <strong>lupa</strong> sebagai alasan utama. Inilah yang menjadi titik awal proyek ReKey: menghadirkan tas belanja yang selalu menempel di kunci, sehingga tidak ada lagi alasan untuk lupa.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- STATISTIK MASALAH -->
<section class="problem section-pad" id="problem">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Skala Masalah</span>
      <h2 class="section-title">Sampah Plastik Sekali Pakai Tidak Pernah Benar-Benar "Hilang"</h2>
    </div>
    <div class="stats-grid">
      <div class="stat-card" data-aos="fade-up" data-aos-delay="0">
        <div class="stat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
        <div class="stat-number" data-count="34" data-suffix=" jt ton">0</div>
        <div class="stat-label">Timbulan sampah nasional Indonesia pada tahun 2024</div>
      </div>
      <div class="stat-card" data-aos="fade-up" data-aos-delay="80">
        <div class="stat-icon"><i class="fa-solid fa-hourglass-half"></i></div>
        <div class="stat-number" data-count="19.48" data-suffix="%">0</div>
        <div class="stat-label">Kontribusi plastik terhadap total timbulan sampah nasional</div>
      </div>
      <div class="stat-card" data-aos="fade-up" data-aos-delay="160">
        <div class="stat-icon"><i class="fa-solid fa-house"></i></div>
        <div class="stat-number" data-count="89" data-suffix="%">0</div>
        <div class="stat-label">Responden yang menyebut <strong>lupa</strong> sebagai alasan tidak membawa tas belanja sendiri</div>
      </div>
      <div class="stat-card" data-aos="fade-up" data-aos-delay="240">
        <div class="stat-icon"><i class="fa-solid fa-arrow-rotate-left"></i></div>
        <div class="stat-number" data-count="94" data-suffix="%">0</div>
        <div class="stat-label">Responden mahasiswa yang tertarik dengan konsep <em>foldable keychain bag</em></div>
      </div>
    </div>
  </div>
</section>

<!-- JENIS PLASTIK -->
<section class="plastic-education section-pad" id="plastic">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Kenali Plastik</span>
      <h2 class="section-title">Tidak Semua Plastik Diciptakan Setara</h2>
      <p class="section-sub">Setiap jenis plastik punya kode daur ulang dan sifat material yang berbeda.</p>
    </div>

    <div class="plastic-grid">
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="0">
        <div class="code-badge">1</div><h4>PET</h4><p>Botol minuman, mudah didaur ulang</p>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="60">
        <div class="code-badge">2</div><h4>HDPE</h4><p>Botol sabun, kaku dan kuat</p>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="120">
        <div class="code-badge">3</div><h4>PVC</h4><p>Pipa, sulit didaur ulang</p>
      </div>
      <div class="plastic-card highlight" data-aos="fade-up" data-aos-delay="180">
        <div class="code-badge">4</div><h4>LDPE</h4><p>Kantong plastik, lentur &amp; bisa dilebur</p>
        <span class="tag">Dipilih</span>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="240">
        <div class="code-badge">5</div><h4>PP</h4><p>Wadah makanan, tahan panas</p>
      </div>
      <div class="plastic-card" data-aos="fade-up" data-aos-delay="300">
        <div class="code-badge">6</div><h4>PS</h4><p>Styrofoam, sangat sulit terurai</p>
      </div>
    </div>

    <div class="why-ldpe" data-aos="fade-up">
      <div>
        <span class="eyebrow" style="margin-bottom:14px;">Mengapa LDPE?</span>
        <h3>Lentur, Mudah Dilebur, dan Paling Banyak Dibuang</h3>
        <p>LDPE dipilih karena sifatnya yang lentur, titik lelehnya relatif rendah untuk proses thermal fusion, dan merupakan limbah rumah tangga yang paling mudah ditemukan namun paling jarang didaur ulang secara mandiri.</p>
      </div>
      <div class="property-list">
        <div class="property-row">
          <div class="property-top"><span>Fleksibilitas</span><span>92%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:92%;"></div></div>
        </div>
        <div class="property-row">
          <div class="property-top"><span>Kemudahan Dilebur (Thermal Fusion)</span><span>88%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:88%;"></div></div>
        </div>
        <div class="property-row">
          <div class="property-top"><span>Ketahanan Terhadap Air</span><span>80%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:80%;"></div></div>
        </div>
        <div class="property-row">
          <div class="property-top"><span>Ketersediaan sebagai Limbah</span><span>95%</span></div>
          <div class="property-track"><div class="property-fill" style="--fill:95%;"></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Sudah paham masalahnya?</h3>
        <p>Lanjut lihat bagaimana kami mengubah limbah ini jadi produk nyata.</p>
      </div>
      <div class="cta-actions">
        <a href="process.php" class="btn btn-clay">Lihat Prosesnya <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
