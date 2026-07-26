<?php
/**
 * includes/navbar.php
 * Expects $base ('' or '../') and $current (page key) from the caller
 * to highlight the active nav link. Real multi-page links — not anchors.
 */
if (!isset($base)) { $base = ''; }
if (!isset($current)) { $current = 'home'; }

$navItems = [
  "home"      => ["label" => "Beranda",   "href" => $base . "index.php"],
  "education" => ["label" => "Edukasi",   "href" => $base . "pages/education.php"],
  "process"   => ["label" => "Proses",    "href" => $base . "pages/process.php"],
  "solution"  => ["label" => "Solusi",    "href" => $base . "pages/solution.php"],
];
?>
<nav class="kim-nav" id="kimNav">
  <a href="<?php echo $base; ?>index.php" class="brand">
    <img src="<?php echo $base; ?>assets/img/icons/Icon.jpeg" alt="ReKey" class="ring-mark" style="width:30px; height:30px; flex-shrink:0;">
    <span>Rekey</span>
  </a>

  <ul class="nav-links" id="navLinks">
    <?php foreach ($navItems as $key => $item): ?>
      <li><a href="<?php echo $item['href']; ?>" class="<?php echo $current === $key ? 'active' : ''; ?>"><?php echo $item['label']; ?></a></li>
    <?php endforeach; ?>
  </ul>

  <div class="nav-cta">

      <!-- Desktop -->
      <a href="<?php echo $base; ?>pages/about.php" class="btn btn-outline hidden lg:inline-flex">
          Tentang Kami
      </a>

      <a href="<?php echo $base; ?>pages/contact.php" class="btn btn-primary hidden lg:inline-flex">
          Hubungi Kami
      </a>

      <!-- Mobile -->
      <button class="nav-toggle flex lg:hidden" id="navToggle" aria-label="Buka menu">
          <i class="fa-solid fa-bars"></i>
      </button>
      
  </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <button class="close-menu" id="closeMenu" aria-label="Tutup menu"><i class="fa-solid fa-xmark"></i></button>
  <?php foreach ($navItems as $key => $item): ?>
    <a href="<?php echo $item['href']; ?>" class="mm-link"><?php echo $item['label']; ?></a>
  <?php endforeach; ?>
  <a href="<?php echo $base; ?>pages/about.php" class="btn btn-clay mm-cta">Tentang Kami</a>
  <a href="<?php echo $base; ?>pages/contact.php" class="btn btn-clay mm-cta">Hubungi Kami</a>
</div>
