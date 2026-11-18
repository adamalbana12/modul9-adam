<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Starbucks: The Best Coffee and Espresso Drinks | Starbucks Indonesia</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  {{-- Bootstrap + Custom CSS (sudah digabung di resources/sass/app.scss) --}}
  @vite('resources/sass/app.scss')
</head>
<body>

  <!-- Top Green Accent Bar -->
  <div class="top-accent-bar"></div>

  <!-- Navbar Utama -->
  <nav class="navbar navbar-expand-lg sb-navbar sticky-top">
    <div class="container">
      <!-- Logo Starbucks -->
      <a class="navbar-brand me-4" href="#">
        <img src="{{ Vite::asset('resources/images/logo-black.svg') }}" alt="Starbucks Indonesia" width="56" height="56" />
      </a>

      <!-- Mobile Hamburger Button -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#starbucksNavbar" aria-controls="starbucksNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu Navigasi -->
      <div class="collapse navbar-collapse" id="starbucksNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item dropdown">
            <a class="nav-link sb-nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">COFFEE</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Our Coffee</a></li>
              <li><a class="dropdown-item" href="#">Starbucks VIA® Instant</a></li>
              <li><a class="dropdown-item" href="#">Whole Bean Coffee</a></li>
              <li><a class="dropdown-item" href="#">How to Brew Great Coffee</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link sb-nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">MENU</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Holiday Beverages</a></li>
              <li><a class="dropdown-item" href="#">Espresso &amp; Coffee</a></li>
              <li><a class="dropdown-item" href="#">Frappuccino® Blended Beverages</a></li>
              <li><a class="dropdown-item" href="#">Bakery &amp; Food</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link sb-nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">COFFEEHOUSE</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Store Design</a></li>
              <li><a class="dropdown-item" href="#">Free Wi-Fi</a></li>
              <li><a class="dropdown-item" href="#">Starbucks Community Store</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link sb-nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">RESPONSIBILITY</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Ethical Sourcing</a></li>
              <li><a class="dropdown-item" href="#">Environment</a></li>
              <li><a class="dropdown-item" href="#">Community</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link sb-nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">STARBUCKS REWARDS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">About Starbucks Rewards</a></li>
              <li><a class="dropdown-item" href="#">Starbucks Card</a></li>
              <li><a class="dropdown-item" href="#">Mobile App</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link sb-nav-link" href="#">DEWATA</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link sb-nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ABOUT US</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Our Heritage</a></li>
              <li><a class="dropdown-item" href="#">Our Company</a></li>
              <li><a class="dropdown-item" href="#">Career Center</a></li>
              <li><a class="dropdown-item" href="#">Newsroom</a></li>
            </ul>
          </li>
        </ul>

        <!-- Find A Store Button -->
        <div class="d-flex align-items-center mt-2 mt-lg-0">
          <a href="#" class="find-store-btn" data-bs-toggle="modal" data-bs-target="#storeLocatorModal">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#00704A">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
            <span>Find A Store</span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Banner Holiday ("Wrapped in Joy.") -->
  <section class="hero-holiday">
    <!-- Decorative Sparkles -->
    <span class="sparkle" style="top: 14%; left: 21%; font-size: 16px;">&#10052;</span>
    <span class="sparkle" style="top: 11%; left: 33%; font-size: 14px;">&#9830;</span>
    <span class="sparkle" style="top: 46%; left: 7%; font-size: 16px;">&#10052;</span>
    <span class="sparkle" style="top: 67%; left: 17%; font-size: 14px;">&#10052;</span>
    <span class="sparkle" style="top: 82%; left: 37%; font-size: 22px; color: rgba(255,245,230,0.85);">&#10038;</span>
    <span class="sparkle" style="top: 13%; left: 53%; font-size: 16px;">&#10052;</span>
    <span class="sparkle" style="top: 18%; right: 20%; font-size: 15px;">&#10052;</span>
    <span class="sparkle" style="top: 49%; right: 7%; font-size: 16px;">&#10052;</span>

    <!-- Pita Dekorasi Kiri Bawah -->
    <svg class="ribbon-left" viewBox="0 0 320 120" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M-20 40 C 80 35, 190 50, 260 95 L 245 125 C 180 80, 75 65, -20 72 Z" fill="#FFFFFF"/>
      <path d="M-20 46 C 80 41, 188 56, 256 101" stroke="#C81425" stroke-width="5"/>
      <path d="M-20 58 C 80 53, 184 68, 250 113" stroke="#C81425" stroke-width="5"/>
    </svg>

    <!-- Pita Dekorasi Kanan -->
    <svg class="ribbon-right" viewBox="0 0 300 180" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M320 35 C 220 20, 150 25, 110 65 C 75 100, 35 125, -10 125 L -10 155 C 45 155, 92 125, 130 85 C 165 48, 225 46, 320 65 Z" fill="#FFFFFF"/>
      <path d="M320 43 C 222 28, 154 33, 115 72 C 80 107, 40 132, -10 132" stroke="#C81425" stroke-width="4.5"/>
      <path d="M320 54 C 224 39, 158 44, 121 81 C 86 116, 44 143, -10 143" stroke="#C81425" stroke-width="4.5"/>
    </svg>

    <!-- Main Hero Container -->
    <div class="container position-relative" style="z-index: 2;">
      <div class="row align-items-center py-5">
        <!-- Kolom Kiri: Headline -->
        <div class="col-lg-5 text-center text-lg-start mb-4 mb-lg-0 ps-lg-4">
          <h1 class="hero-title mb-0">
            Wrapped in<br />Joy.
          </h1>
        </div>

        <!-- Kolom Kanan: Ilustrasi Produk Holiday -->
        <div class="col-lg-7 d-flex justify-content-center justify-content-lg-start">
          <img src="{{ Vite::asset('resources/images/main.svg') }}" alt="Starbucks Holiday Collection" class="img-fluid" style="max-height: 410px;" />
        </div>
      </div>
    </div>

    <!-- Lencana Halal Indonesia Putih di Pojok Kanan Bawah -->
    <div class="halal-badge-hero d-none d-sm-block">
      <img src="{{ Vite::asset('resources/images/logo-white.svg') }}" alt="Halal Indonesia" width="44" height="58" />
    </div>
  </section>

  <!-- Footer Lengkap -->
  <footer class="sb-footer">
    <div class="container">
      <!-- Strip Ikon Sosial Media -->
      <div class="social-strip d-flex align-items-center">
        <a href="https://www.facebook.com/StarbucksIndonesia" target="_blank" rel="noopener" class="social-icon-link" aria-label="Facebook">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/>
          </svg>
        </a>
        <a href="https://www.instagram.com/starbucksindonesia/" target="_blank" rel="noopener" class="social-icon-link" aria-label="Instagram" style="background-color: transparent; color: #333333; border: 2px solid #333333;">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
          </svg>
        </a>
        <a href="https://twitter.com/SbuxIndonesia" target="_blank" rel="noopener" class="social-icon-link" aria-label="Twitter" style="background-color: transparent; color: #333333;">
          <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
          </svg>
        </a>
      </div>

      <!-- Grid Kolom Link & Certification -->
      <div class="row gy-4 justify-content-between">
        <div class="col-lg-8">
          <div class="row gy-4">
            <!-- ABOUT US -->
            <div class="col-6 col-md-4">
              <h6 class="footer-heading">ABOUT US</h6>
              <ul class="footer-list">
                <li><a href="#">Our Heritage</a></li>
                <li><a href="#">Pressroom</a></li>
                <li><a href="#">Our Company</a></li>
                <li><a href="#">Career Center</a></li>
                <li><a href="#">Newsroom</a></li>
              </ul>
            </div>

            <!-- CUSTOMER SERVICE -->
            <div class="col-6 col-md-4">
              <h6 class="footer-heading">CUSTOMER SERVICE</h6>
              <ul class="footer-list">
                <li><a href="#">Frequently Asked Questions</a></li>
              </ul>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-6 col-md-4">
              <h6 class="footer-heading">QUICK LINKS</h6>
              <ul class="footer-list">
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#storeLocatorModal">Store Locator</a></li>
                <li><a href="#">For Partners</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CERTIFICATION -->
        <div class="col-lg-3">
          <h6 class="footer-heading">CERTIFICATION</h6>
          <div class="d-flex align-items-center gap-3">
            <img src="{{ Vite::asset('resources/images/bs-icons.png') }}" alt="SGS Certification" width="54" height="54" />
            <img src="{{ Vite::asset('resources/images/bs-themes.png') }}" alt="Halal Indonesia Certification" width="46" height="56" />
          </div>
        </div>
      </div>

      <!-- Baris Legal & Copyright -->
      <div class="legal-links">
        <a href="#">Privacy Statement</a> |
        <a href="#" class="ms-2">Terms of use</a> |
        <a href="#" class="ms-2">Site Map</a> |
        <div class="copyright-text">
          &copy; 2026 Starbucks Coffee Company, All Rights Reserved
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal Find A Store -->
  <div class="modal fade" id="storeLocatorModal" tabindex="-1" aria-labelledby="storeLocatorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow">
        <div class="modal-header" style="background-color: #00704A; color: #ffffff;">
          <h5 class="modal-title fw-bold" id="storeLocatorModalLabel">Find A Starbucks Store</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div class="mb-3">
            <label for="cityInput" class="form-label fw-semibold small text-uppercase">Cari Kota atau Area</label>
            <input type="text" class="form-control" id="cityInput" placeholder="Contoh: Surabaya, Jakarta, Bali..." value="Surabaya" />
          </div>
          <div class="list-group list-group-flush small">
            <div class="list-group-item px-0">
              <div class="fw-bold text-dark">Starbucks Tunjungan Plaza 5</div>
              <div class="text-muted">Jl. Embong Malang No.1-21, Kedungdoro, Surabaya &bull; 07:00 - 22:00 WIB</div>
            </div>
            <div class="list-group-item px-0">
              <div class="fw-bold text-dark">Starbucks Reserve™ Dewata</div>
              <div class="text-muted">Jl. Sunset Road No.77, Seminyak, Bali &bull; 08:00 - 22:00 WITA</div>
            </div>
            <div class="list-group-item px-0">
              <div class="fw-bold text-dark">Starbucks Grand Indonesia</div>
              <div class="text-muted">Jl. M.H. Thamrin No.1, Jakarta Pusat &bull; 07:00 - 22:00 WIB</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Bootstrap JS (dibundel lewat resources/js/app.js) --}}
  @vite('resources/js/app.js')
</body>
</html>
