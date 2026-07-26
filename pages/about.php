<?php
/**
 * pages/about.php — Tentang Kami
 * Anggota tim, visi & misi proyek.
 */
$base      = '../';
$current   = 'about';
$pageTitle = 'Tentang Kami';
$pageDesc  = 'Kenali tim riset di balik proyek Foldable Totebag Keychain, beserta visi dan misinya.';

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<section class="section-pad" style="padding-top:150px;">
  <div class="container">
    <div class="section-head center" data-aos="fade-up">
      <span class="eyebrow">Tentang Kami</span>
      <h2 class="section-title">Orang-Orang di Balik Proyek Ini</h2>
      <p class="section-sub">Tim mahasiswa lintas peran yang menjalankan proyek ini dari riset literatur hingga purwarupa.</p>
    </div>
  </div>
</section>

<!-- VISI MISI -->
<section class="section-pad" style="padding-top:0;">
  <div class="container">
    <div class="why-ldpe" data-aos="fade-up" style="grid-template-columns:1fr 1fr;">
      <div>
        <span class="eyebrow" style="margin-bottom:14px;"><i class="fa-solid fa-eye"></i> Visi</span>
        <p style="color:var(--ink-600); line-height:1.8; font-size:15.5px;">
          Menjadi inovasi produk berkelanjutan yang mengubah limbah plastik LDPE menjadi solusi praktis pembawa tas belanja — membangun kebiasaan ramah lingkungan yang melekat pada keseharian masyarakat Indonesia.
        </p>
      </div>
      <div>
        <span class="eyebrow" style="margin-bottom:14px;"><i class="fa-solid fa-bullseye"></i> Misi</span>
        <p style="color:var(--ink-600); line-height:1.8; font-size:15.5px;">
          1. Merancang dan menghasilkan purwarupa <em>foldable keychain bag</em> berbahan daur ulang LDPE yang ergonomis dan praktis.<br><br>
          2. Mengintegrasikan QR Digital Passport sebagai media edukasi <em>circular economy</em> yang transparan dan interaktif.<br><br>
          3. Mendorong perubahan perilaku konsumen dari penggunaan kantong plastik sekali pakai menuju kebiasaan membawa tas belanja sendiri secara konsisten.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="team-section section-pad" id="team" style="padding-top:0;">
  <div class="container">
    <div class="team-grid">
      <div class="team-card" data-aos="fade-up" data-aos-delay="0">
        <div class="team-avatar">RS</div>
        <h4>Rizka Fadhilah Septiane</h4>
        <div class="role">Ketua Peneliti</div>
        <p style="font-size:11px;color:var(--ink-400);margin:4px 0 12px;">Bahasa &amp; Sastra Indonesia</p>
        <div class="socials">
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="70">
        <div class="team-avatar">CT</div>
        <h4>Cindy Tiara Anastasya</h4>
        <div class="role">UI/UX &amp; Konten Digital</div>
        <p style="font-size:11px;color:var(--ink-400);margin:4px 0 12px;">Teknik Informatika</p>
        <div class="socials">
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="140">
        <div class="team-avatar">MF</div>
        <h4>Muhammad Fachriditya</h4>
        <div class="role">Web Developer</div>
        <p style="font-size:11px;color:var(--ink-400);margin:4px 0 12px;">Teknik Informatika</p>
        <div class="socials">
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="210">
        <div class="team-avatar">NF</div>
        <h4>Nadiah Fahmi Arifanti</h4>
        <div class="role">Studi Literatur</div>
        <p style="font-size:11px;color:var(--ink-400);margin:4px 0 12px;">Bahasa &amp; Sastra Indonesia</p>
        <div class="socials">
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="280">
        <div class="team-avatar">SD</div>
        <h4>Sukma Dea Andini</h4>
        <div class="role">Studi Literatur &amp; Operasional</div>
        <p style="font-size:11px;color:var(--ink-400);margin:4px 0 12px;">Bahasa &amp; Sastra Indonesia</p>
        <div class="socials">
          <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:80px;">
    <div class="cta-band" data-aos="fade-up">
      <div>
        <h3>Ingin berdiskusi dengan tim kami?</h3>
        <p>Kirimkan pesan Anda lewat halaman Kontak — kami akan membalas melalui email.</p>
      </div>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-clay">Hubungi Kami <i class="fa-solid fa-paper-plane"></i></a>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
