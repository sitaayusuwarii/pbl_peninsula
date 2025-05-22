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
        <h1>Spot Viewpoint di Atas Tebing</h1>
        <p>Temukan Kedamaian di Atas Tebing Peninsula Island</p>
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
              <h3>Informasi Spot Viewpoint</h3>
              <ul>
                <li><strong>Kategori</strong>: Spot Viewpoint di Atas Tebing </li>
                <li><strong>Aktivitas Populer</strong>: Spot foto & healing.</li>
                <li><strong>Jam Operasional</strong>: Setiap hari, pukul 06.00 – 18.00 WITA</li>
                <li><strong>Tiket Masuk</strong>: Gratis</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Viewpoint Ikonik di Peninsula Island</h2>
              <p  style="text-align: justify;">
              Berdiri megah di atas tebing karang yang menghadap langsung ke Samudra Hindia, view point Peninsula Island menjadi salah satu spot terbaik di Nusa Dua yang menawarkan pesona alam yang luar biasa. Pemandangan laut biru yang membentang luas dipadukan dengan suara ombak yang menghantam tebing menciptakan suasana yang menenangkan dan dramatis. 
              </p>
            </div>
          </div>
        </div>
        <p  style="text-align: justify;">
              Ditambah lagi dengan fenomena alam berupa blowhole—semburan air dari celah batu akibat tekanan ombak—yang menjadi daya tarik tersendiri bagi para pengunjung. Di tempat ini, Anda bisa menikmati hembusan angin laut yang menyegarkan sambil menyaksikan matahari terbit maupun terbenam yang memukau. Area ini juga sangat cocok untuk berburu foto instagramable dengan latar belakang panorama alam Bali yang masih alami. Bagi Anda yang mencari tempat untuk healing, bersantai, atau sekadar mengagumi keindahan alam, spot tebing di Peninsula Island adalah destinasi yang tidak boleh dilewatkan.
        </p>
      </div>
    </section><!-- /Portfolio Details Section -->
  </main>

  @include('partials.footer')