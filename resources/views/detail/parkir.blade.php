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
        <h1>Area Parkir Luas</h1>
        <p>Area Parkir Luas dan Strategis untuk Kenyamanan Pengunjung</p>
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
              <h3>Informasi Parkir</h3>
              <ul>
                <li><strong>Kategori</strong>: Tempat Parkir </li>
                <li><strong>Lokasi Parkir</strong>: Dekat pintu masuk utama</li>
                <li><strong>Jam Operasional</strong>: Setiap hari, pukul 06.00 – 18.00 WITA</li>
                <li><strong>Biaya Parkir</strong>: Motor Rp5.000/jam & Mobil 10.000/jam</li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>Parkir Mudah, Liburan Tenang di Peninsula Island</h2>
              <p  style="text-align: justify;">
              Peninsula Island tidak hanya menawarkan keindahan alam yang mempesona, tetapi juga memberikan kenyamanan bagi setiap pengunjung dengan fasilitas tempat parkir yang luas dan memadai. Area parkir yang tersedia dirancang untuk menampung berbagai jenis kendaraan, mulai dari mobil pribadi, sepeda motor, hingga bus pariwisata besar.
              </p>
            </div>
          </div>
        </div>
        <p  style="text-align: justify;">
              Dengan lokasi yang strategis, pengunjung tidak perlu khawatir kehabisan tempat parkir, bahkan saat musim liburan atau akhir pekan yang ramai. Hal ini membuat Peninsula Island sangat cocok untuk kunjungan keluarga besar, rombongan wisata, maupun para pelancong yang datang sendirian. Tak hanya luas, tempat parkir di Peninsula Island juga dirancang dengan rapi dan aman, dilengkapi dengan petunjuk arah yang jelas, sehingga pengunjung dapat dengan mudah menemukan lokasi parkir yang paling dekat dengan pintu masuk atau spot utama yang ingin dikunjungi. Selain itu, area parkir ini juga dipantau secara rutin oleh petugas keamanan untuk menjaga kenyamanan dan keselamatan kendaraan selama berada di sana. Dengan adanya fasilitas parkir yang nyaman dan mudah diakses, Anda dapat menikmati setiap momen di Peninsula Island tanpa harus khawatir tentang tempat parkir, memberikan pengalaman wisata yang lebih menyenangkan dan bebas stres.
        </p>
      </div>
    </section><!-- /Portfolio Details Section -->
  </main>

  @include('partials.footer')