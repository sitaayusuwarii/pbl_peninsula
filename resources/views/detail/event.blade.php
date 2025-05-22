<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PBL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('style/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('style/assets/css/main.css')}}" rel="stylesheet">

 
</head>

<body class="index-page">
  @include('partials.navbar')
  <main class="main">
     <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('style/assets/img/portfolio/books-1.jpg')}});">
      <div class="container position-relative">
        <h1>Area Event & Pameran</h1>
        <p>Ruang Terbuka untuk Acara dan Pameran Spesial</p>
        {{-- <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav> --}}
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('style/assets/img/portfolio/app-1.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('style/assets/img/portfolio/product-1.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('style/assets/img/portfolio/branding-1.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('style/assets/img/portfolio/books-1.jpg')}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Informasi Area</h3>
              <ul>
                <li><strong>Kategori</strong>: Event dan Pameran </li>
                <li><strong>Aktivitas Populer</strong>:  Acara festival, pameran budaya, bazar, hingga kegiatan komunitas</li>
                <li><strong>Jam Operasional</strong>: Menyesuaikan acara</li>
                <li><strong>Tiket Masuk</strong>: Sesuai event</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Area Event dan Pameran yang Luas dan Strategis</h2>
              <p  style="text-align: justify;">
              Peninsula Island juga menyediakan area event dan pameran yang dapat digunakan untuk berbagai kegiatan, mulai dari acara budaya, pertunjukan seni, hingga pameran produk lokal dan seni tradisional Bali. Area ini dirancang dengan ruang yang luas dan fleksibel, memungkinkan penyelenggaraan acara dalam skala kecil hingga besar dengan suasana yang nyaman dan alami. 
              </p>
            </div>
          </div>
        </div>
        <p  style="text-align: justify;">
              Terletak di lokasi strategis, pengunjung dapat menikmati acara sambil tetap dikelilingi oleh keindahan alam yang menenangkan, menjadikannya tempat yang sempurna untuk acara yang melibatkan banyak orang atau bahkan acara pribadi seperti pernikahan di tepi laut. Selain sebagai tempat untuk event besar, area pameran di Peninsula Island juga menjadi sarana untuk mengenalkan berbagai produk lokal dan karya seni Bali. Pengunjung dapat menjelajahi berbagai pameran seni yang menampilkan kerajinan tangan, lukisan, patung, hingga produk-produk budaya lainnya yang mencerminkan kekayaan tradisi Bali. Dengan adanya area ini, Peninsula Island tidak hanya menjadi destinasi wisata alam, tetapi juga pusat budaya yang mendukung dan mempromosikan kesenian dan kerajinan lokal. Ini memberikan pengalaman yang lebih lengkap bagi pengunjung yang ingin merasakan keindahan alam sekaligus mengenal lebih dalam tentang budaya Bali.
        </p>
      </div>
    </section><!-- /Portfolio Details Section -->
  </main>

  @include('partials.footer')