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
    <div class="page-title dark-background" data-aos="fade" style="background-image: url({{ asset('style/assets/img/detail/toilet.jpg')}});">
      <div class="container position-relative">
        <h1>Toilet dan Tempat Bilas</h1>
        <p>Nikmati Momen Santaimu dengan Fasilitas Bilas Peninsula Island</p>
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
                  <img src="{{ asset('style/assets/img/detail/wcdepan.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('style/assets/img/detail/toilet.jpg')}}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('style/assets/img/detail/wc2.jpg')}}" alt="">
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
              <h3>Informasi Toilet</h3>
              <ul>
                <li><strong>Kategori</strong>: Fasilitas pendukung </li>
                <li><strong>Kondisi</strong>: Terjaga kebersihannya</li>
                <li><strong>Jam Operasional</strong>: Setiap hari, pukul 06.00 – 18.00 WITA</li>
                <li><strong>Biaya Penggunaan</strong>: Gratis</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Fasilitas Toilet & Tempat Bilas Nyaman untuk Wisatawan</h2>
              <p  style="text-align: justify;">
              Selain menawarkan keindahan alam yang luar biasa, Peninsula Island juga dilengkapi dengan fasilitas pendukung yang membuat kunjungan Anda semakin nyaman. Salah satunya adalah ketersediaan toilet umum yang bersih dan terawat. 
              </p>
            </div>
          </div>
        </div>
        <p  style="text-align: justify;">
              Fasilitas ini sangat membantu para pengunjung, baik yang datang hanya untuk berjalan-jalan maupun yang menikmati suasana lebih lama. Kebersihan toilet selalu dijaga oleh petugas, sehingga pengunjung tidak perlu khawatir soal kenyamanan selama berada di lokasi. Tak hanya itu, bagi Anda yang ingin bermain air atau hanya membasuh diri setelah seharian menjelajah area tebing dan pantai, tersedia pula tempat bilas dengan air bersih yang bisa digunakan secara gratis atau dengan biaya sangat terjangkau. Fasilitas ini sangat cocok bagi wisatawan yang membawa anak-anak, maupun mereka yang ingin merasa segar kembali sebelum melanjutkan perjalanan. Penambahan fasilitas ini menjadi bukti bahwa Peninsula Island tidak hanya memanjakan mata, tetapi juga memperhatikan kenyamanan setiap pengunjung yang datang.
        </p>
      </div>
    </section><!-- /Portfolio Details Section -->
  </main>

  @include('partials.footer')