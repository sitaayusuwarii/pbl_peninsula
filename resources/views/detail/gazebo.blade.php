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
        <h1>Gazebo & Tempat Duduk</h1>
        <p>Tempat Istirahat Ideal untuk Menikmati Pemandangan</p>
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
              <h3>Informasi </h3>
              <ul>
                <li><strong>Kategori</strong>: Fasilitas Istirahat </li>
                <li><strong>Lokasi</strong>: Tersebar di berbagai titik strategis </li>
                <li><strong>Jam Penggunaan</strong>: Setiap hari, pukul 06.00 – 18.00 WITA</li>
                <li><strong>Aksesibilitas</strong>: Mudah dijangkau </li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Tempat Santai dan Teduh di Peninsula Island</h2>
              <p  style="text-align: justify;">
              Peninsula Island menyediakan berbagai fasilitas tempat duduk yang nyaman, termasuk gazebo yang tersebar di beberapa titik strategis di sepanjang jalur wisata. Gazebo-gazebo ini menawarkan tempat yang teduh dan nyaman, ideal untuk bersantai sambil menikmati angin laut yang sejuk dan pemandangan laut yang menakjubkan. 
              </p>
            </div>
          </div>
        </div>
        <p  style="text-align: justify;">
              Dengan desain yang estetik dan menyatu dengan alam sekitar, gazebo ini tidak hanya berfungsi sebagai tempat istirahat, tetapi juga sebagai spot foto yang menarik bagi wisatawan yang ingin mengabadikan momen indah mereka di pulau ini. Selain gazebo, di berbagai area taman dan sepanjang jalur pantai, tersedia juga tempat duduk yang dapat digunakan oleh pengunjung yang ingin menikmati suasana alam dengan santai. Tempat duduk ini didesain dengan material yang ramah lingkungan dan terbuat dari bahan yang tahan lama, sehingga nyaman digunakan dalam waktu yang lama. Baik untuk beristirahat sejenak, menikmati keindahan matahari terbenam, atau sekadar menikmati kebersamaan dengan keluarga dan teman, fasilitas tempat duduk ini menjadikan kunjungan Anda semakin menyenangkan. Dengan adanya tempat-tempat ini, Anda dapat lebih lama menikmati keindahan alam Peninsula Island tanpa merasa tergesa-gesa.
        </p>
      </div>
    </section><!-- /Portfolio Details Section -->
  </main>

  @include('partials.footer')