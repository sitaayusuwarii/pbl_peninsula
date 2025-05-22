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
        <h1>Amphitheater Outdoor</h1>
        <p>Nikmati Pertunjukan di Tengah Alam</p>
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
              <h3>Informasi Amphitheater Outdoor</h3>
              <ul>
                <li><strong>Kategori</strong>: Panggung terbuka </li>
                <li><strong>Aktivitas Populer</strong>: Tempat pertunjukan</li>
                <li><strong>Jam Operasional</strong>: Setiap hari, pukul 06.00 – 18.00 WITA</li>
                <li><strong>Tiket Masuk</strong>: Gratis, namun mengikuti kebijakan event.</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Ruang Terbuka untuk Karya & Hiburan</h2>
              <p  style="text-align: justify;">
             Sebagai salah satu daya tarik utama, Peninsula Island juga memiliki amphitheater outdoor yang dirancang dengan indah untuk mendukung berbagai acara dan pertunjukan. Terletak di lokasi yang strategis.
              </p>
            </div>
          </div>
        </div>
        <p  style="text-align: justify;">
              Amphitheater ini menawarkan pemandangan laut yang spektakuler sebagai latar belakangnya, memberikan nuansa unik dan memukau untuk setiap pertunjukan yang diadakan. Dengan kapasitas yang cukup besar, area ini cocok digunakan untuk berbagai jenis acara, mulai dari konser musik, pertunjukan teater, festival budaya, hingga acara khusus seperti pertemuan komunitas atau pernikahan. Keindahan alam dan desain panggung yang terbuka membuat setiap acara di sini terasa lebih hidup dan penuh energi. Amphitheater outdoor di Peninsula Island tidak hanya berfungsi sebagai tempat hiburan, tetapi juga sebagai ruang untuk mengapresiasi seni dan budaya dalam suasana yang luar biasa. Dengan fasilitas yang lengkap dan didukung oleh akustik yang baik, tempat ini memungkinkan pengunjung untuk menikmati acara dengan kualitas terbaik. Ditambah dengan udara laut yang sejuk dan suasana alam yang tenang, amphitheater ini menjadi pilihan sempurna bagi pengunjung yang ingin menikmati pengalaman berbeda sambil meresapi pesona alam Bali yang menakjubkan.
        </p>
      </div>
    </section><!-- /Portfolio Details Section -->
  </main>

  @include('partials.footer')