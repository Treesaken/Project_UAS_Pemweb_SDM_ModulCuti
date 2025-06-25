<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" href="assets/img/waktu.jpg" type="image/x-icon">
  <title>CuTime</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com') }}" rel="preconnect">
  <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Maxim
  * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">CuTime</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/cutime.jpg" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Welcome To CuTime</h2>
            <p>we will provide holiday information for employees</p>
            <a href="{{ route('filament.admin.auth.login') }}" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-0 ps-lg-3">
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="bi bi-diagram-3"></i>
                  <div>
                    <h4>Ullamco laboris nisi ut aliquip consequat</h4>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /About Section -->

         

    </section><!-- /Tabs Section -->

    <!-- Services Section -->
   <section id="services" class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kenapa CuTime?</h2>
    <p>Berikut manfaat yang akan kamu dapatkan ketika menggunakan CuTime untuk mengatur cutimu secara profesional dan efisien.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row g-5">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item item-cyan position-relative">
          <i class="bi bi-shield-check icon"></i>
          <div>
            <h3>Cuti Tanpa Khawatir</h3>
            <p>CuTime bikin cuti kamu bebas khawatir. Semua proses dijamin aman dan transparan.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <i class="bi bi-cash-coin icon"></i>
          <div>
            <h3>Gaji Tetap Lancar</h3>
            <p>Cuti yang pasti, gaji tetap lancar. CuTime bantu kamu nikmati cuti tanpa stres finansial.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <i class="bi bi-heart-pulse icon"></i>
          <div>
            <h3>Fokus pada Kesehatan</h3>
            <p>CuTime mendukung kamu untuk utamakan kesehatan, biar kerja makin maksimal.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <i class="bi bi-emoji-smile icon"></i>
          <div>
            <h3>Waktu untuk Recharge</h3>
            <p>Cuti itu hak kamu. Waktu terbaik buat istirahat dan balik kerja dengan semangat baru.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item item-indigo position-relative">
          <i class="bi bi-check-circle icon"></i>
          <div>
            <h3>Hak Karyawan Terjamin</h3>
            <p>Cuti adalah hak setiap karyawan. CuTime bantu pastikan hak itu selalu terpenuhi.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item item-pink position-relative">
          <i class="bi bi-file-earmark-text icon"></i>
          <div>
            <h3>Transparan & Profesional</h3>
            <p>Dengan CuTime, semua pengajuan cuti dilakukan secara efisien, transparan, dan profesional.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- /Services Section -->




    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Jika mengalami kendala, silakan hubungi tim HR kami.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jl. Jend. Sudirman Kav. 52-53, Senayan, Kebayoran Baru, Jakarta Selatan, DKI Jakarta 12190</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Hubungi kami</h3>
                  <p>+62 812 3456 7890</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>CuTime@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nama Anda</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2"></label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Pesan</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>

                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
  <div class="container footer-top">
    <div class="row gy-4 justify-content-between">
      <!-- Kolom pertama: Pesan utama + logo -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">CuTime</span>
        </a>
        <div class="footer-message pt-3">
          <p><i>CUTIME bikin cuti kamu bebas khawatir. Cuti yang pasti, gaji yang lancar. Cuti itu hak kamu, dan waktu untuk balik dengan semangat baru. Fokus jaga kesehatan, biar kerja makin maksimal!"</i></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Kolom kedua: Contact Us (di tengah) -->
      <div class="col-lg-4 col-md-6 footer-links text-center">
        <h4>Hubungi kami</h4>
        <div class="footer-contact pt-3">
          <p>Jl. Jend. Sudirman Kav. 52-53, Senayan</p>
          <p>Kebayoran Baru, Jakarta Selatan, DKI Jakarta 12190</p>
          <p class="mt-3"><strong>Telepon:</strong> <span>+62 812 3456 7890</span></p>
          <br>
          <p><strong>Email:</strong> <span>CuTime@gmail.com</span></p>
        </div>
      </div>

      <!-- Kolom ketiga: Useful Links (pindah ke kanan) -->
      <div class="col-lg-3 col-md-6 footer-links text-end">
  <h4 class="text-end">Useful Links</h4>
  <ul class="list-unstyled d-flex flex-column align-items-end">
    <li><a class="text-decoration-none text-white" href="#"><i class="bi bi-chevron-right"></i> Home</a></li>
    <li><a class="text-decoration-none text-white" href="#"><i class="bi bi-chevron-right"></i> About us</a></li>
    <li><a class="text-decoration-none text-white" href="#"><i class="bi bi-chevron-right"></i> Services</a></li>
    <li><a class="text-decoration-none text-white" href="#"><i class="bi bi-chevron-right"></i> Terms of service</a></li>
    <li><a class="text-decoration-none text-white" href="#"><i class="bi bi-chevron-right"></i> Privacy policy</a></li>
  </ul>
</div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright 2025</span> <strong class="px-1 sitename">CuTime by Stransa</strong> <span>All Rights Reserved</span></p>
  </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>