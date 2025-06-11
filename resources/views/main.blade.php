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

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ asset('style/assets/img/peninsulackr/patung1.jpg')}}" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Jelajahi Keindahan Peninsula Island</h2>
        <p data-aos="fade-up" data-aos-delay="200">Sambut petualangan baru di Peninsula Island dengan keindahan alam yang menawan.</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          {{-- <a href="#about" class="btn-get-started">Get Started</a> --}}
           <a href="https://drive.google.com/file/d/1hFnEHj28urhnHnQh3DdDgxwLP11OOeYo/preview" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

       <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Tentang Peninsula Island</h3>
            <img src="{{ asset('style/assets/img/peninsulackr/foto2.JPG')}}" class="img-fluid rounded-4 mb-4" alt="">
            <p style="text-align: justify;">Pulau Peninsula, surga kecil seluas 7,4 hektar, menjadi sebuah permata di bagian selatan Bali. Terletak di dalam area ITDC Nusa Dua yang bergengsi, Pulau Peninsula menawarkan perpaduan menakjubkan antara pemandangan laut biru, tebing karang yang menakjubkan, dan pantai berpasir putih yang masih alami.</p>
            <p style="text-align: justify;">Pulau Peninsula juga dikenal sebagai lokasi ikonik untuk berbagai acara penting, mulai dari festival musik, upacara budaya, hingga event olahraga internasional. Dengan areanya yang luas dan pemandangan terbuka ke arah Samudra Hindia, Peninsula Island menawarkan pengalaman wisata yang tak hanya santai, tapi juga berkelas.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p style="text-align: justify;">
                Peninsula Island adalah destinasi eksotis dengan panorama alam yang memukau, pantai berpasir putih, dan perairan biru jernih. Nikmati pengalaman liburan yang tak terlupakan dengan berbagai aktivitas seru.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Pasir putih dan air laut yang jernih, menciptakan pemandangan yang memukau.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span> Spot foto instagramable dengan latar belakang alam yang memukau.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Suasana yang tenang sangat cocok untuk relaksasi dan liburan santai.</span></li>
              </ul>
              <p style="text-align: justify;">
                Peninsula Island bukan hanya menawarkan keindahan visual, tetapi juga ketenangan yang sulit ditemukan di tempat lain. Setiap langkah di pulau kecil ini adalah undangan untuk menikmati Bali dalam versi yang lebih damai, asri, dan penuh keajaiban.
              </p>

              <div class="position-relative mt-4">
                <img src="{{ asset('style/assets/img/detail/bunga1.jpg')}}" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2></h2>
        <p>Fasilitas Peninsula Island<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/luas.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-tree-fill"></i>               
                </div>
                  <h3>Taman Terbuka Hijau yang Luas</h3>
                <p style="text-align: justify;">Peninsula memiliki taman hijau yang luas dan terawat, cocok untuk bersantai, piknik, atau acara outdoor seperti yoga, workshop, atau festival budaya.  Suasananya tenang, rindang, dan dikelilingi pepohonan tropis yang menyegarkan.</p>
                 <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/taman') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/joging.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-person-walking"></i>
                </div>
                  <h3>Jogging Track & Jalur Jalan Kaki</h3>
                <p style="text-align: justify;">Bagi pengunjung yang ingin berolahraga ringan, tersedia jalur jogging dan jalan kaki yang mengelilingi area taman hingga tepi pantai. Jalur ini bersih, datar, dan nyaman digunakan di pagi atau sore hari sambil menikmati angin pantai.</p>
                  <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/joging') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/viewtebing.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-sunset-fill"></i>
                </div>
                  <h3>Spot Viewpoint di Atas Tebing</h3>
                <p style="text-align: justify;">Terdapat beberapa titik di atas tebing dengan pemandangan langsung ke Samudra Hindia. Spot ini sangat populer sebagai lokasi berfoto dan tempat menikmati matahari terbit maupun terbenam dengan latar pemandangan yang dramatis.</p>
                  <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/spot') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

       <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mt-1">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/toilet.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-badge-wc-fill"></i>
                </div>
                  <h3>Toilet dan Tempat Bilas</h3>
                <p style="text-align: justify;">Peninsula menyediakan toilet umum dan tempat bilas yang bersih. Fasilitas ini sangat berguna setelah aktivitas luar ruangan atau bermain di pantai, terutama untuk menjaga kebersihan dan kenyamanan selama berada di area wisata.</p>
                    <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/toilet') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/parkir.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-p-circle-fill"></i>
                </div>
                  <h3>Area Parkir Luas</h3><br>
                <p style="text-align: justify;">Peninsula menyediakan area parkir yang luas dan aman untuk kendaraan pribadi, baik mobil maupun motor. Letaknya dekat pintu masuk utama sehingga memudahkan pengunjung mengakses area wisata dengan nyaman, cepat, dan praktis.</p>
                    <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/parkir') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/duduk.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-person-wheelchair"></i>
                </div>
                  <h3>Gazebo & Tempat Duduk</h3>
                <p style="text-align: justify;">Peninsula menyediakan gazebo dan tempat duduk yang tersebar di sepanjang taman serta tepi pantai. Lokasinya strategis dan nyaman, cocok sebagai tempat istirahat sambil menikmati suasana dan keindahan alam sekitar.</p>
                  <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/gazebo') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

      </div>

       <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mt-1">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/pameran.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar-event-fill"></i>
                </div>
                  <h3>Area Event & Pameran</h3>
                <p style="text-align: justify;">Peninsula kerap menjadi lokasi berbagai event, mulai dari festival, bazar, pameran, hingga pesta pernikahan. Area ini dilengkapi fasilitas pendukung yang memadai dan pemandangan indah sebagai latar yang menambah kesan istimewa.</p>
                    <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/event') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/kecak.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-megaphone-fill"></i>
                </div>
                  <h3>Amphitheater Outdoor</h3>
                <p style="text-align: justify;">Amphitheater di Peninsula adalah area pertunjukan terbuka yang sering dipakai untuk konser, seni, dan event budaya. Berlatarkan laut yang indah, tempat ini menyajikan pengalaman menonton yang unik dan dekat dengan alam.</p>
                    <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/outdor') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="style/assets/img/peninsulackr/petugaskebersihan.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-shield-fill-exclamation"></i>
                </div>
                {{-- <a href="service-details.html" class="stretched-link"> --}}
                  <h3>Keamanan & Kebersihan Terjaga</h3>
                {{-- </a> --}}
                <p style="text-align: justify;">Petugas kebersihan dan keamanan selalu berjaga di area Peninsula untuk memastikan seluruh fasilitas tetap bersih, rapi, dan aman. Kehadiran mereka membuat pengunjung merasa nyaman dan tenang selama menikmati waktu di sana.</p>
                    <!-- Tombol Baca Selengkapnya -->
               <a href="{{ url('/detail/keamanan') }}" class="btn btn-baca mt-2">Baca Selengkapnya</a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">
        <div class="container section-title" data-aos="fade-up" >
          {{-- <h2>Services</h2> --}}
          <p>Aktivitas & Event Peninsula Island<br></p>
        </div>
        
     <!-- Wrapper tombol dan tab -->
<div class="d-flex align-items-center">
  <!-- Tombol kiri -->
  <button class="btn btn-light me-2" id="scroll-left">
    <i class="bi bi-chevron-left"></i>
  </button>

  <!-- Container scrollable -->
  <div class="tab-scroll-container flex-grow-1" style="overflow-x: auto; white-space: nowrap; scroll-behavior: smooth;">
    <ul class="nav nav-tabs d-flex flex-nowrap mb-0" style="min-width: max-content;">
      <li class="nav-item text-center" style="flex: 0 0 250px;">
        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#features-tab-1">
          {{-- <i class="bi bi-binoculars"></i> --}}
          <h4 class="d-none d-lg-block">Konser & Festival Musik</h4>
        </a>
      </li>
      <li class="nav-item text-center" style="flex: 0 0 250px;">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
          {{-- <i class="bi bi-box-seam"></i> --}}
          <h4 class="d-none d-lg-block">Tari Kecak</h4>
        </a>
      </li>
      <li class="nav-item text-center" style="flex: 0 0 250px;">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
          {{-- <i class="bi bi-brightness-high"></i> --}}
          <h4 class="d-none d-lg-block">Jogging</h4>
        </a>
      </li>
      <li class="nav-item text-center" style="flex: 0 0 250px;">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
          {{-- <i class="bi bi-command"></i> --}}
          <h4 class="d-none d-lg-block">Water Blow</h4>
        </a>
      </li>
      <li class="nav-item text-center" style="flex: 0 0 250px;">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
          {{-- <i class="bi bi-command"></i> --}}
          <h4 class="d-none d-lg-block">Bersepeda</h4>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tombol kanan -->
  <button class="btn btn-light ms-2" id="scroll-right">
    <i class="bi bi-chevron-right"></i>
  </button>
</div>


        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Nikmati serunya konser musik di alam terbuka dengan panorama laut yang memesona!</h3>
                <p class="fst-italic" style="text-align: justify;">
                 Peninsula Island adalah destinasi sempurna untuk menggelar konser dan festival musik yang tak terlupakan. Dikelilingi oleh birunya laut, hamparan rumput hijau, dan langit terbuka yang luas, setiap acara di sini terasa lebih hidup dan penuh energi. Dari konser akustik yang intim hingga festival musik yang megah, semua momen terasa spesial berkat nuansa alami yang memanjakan.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Area luas untuk berbagai skala konser</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Mendukung semua genre musik dan komunitas</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Atmosfer alami yang memperkaya suasana</span></li>
                </ul>
                <p style="text-align: justify;">
                Menggelar konser di Peninsula Island bukan hanya soal musik, tapi menciptakan pengalaman tak terlupakan. Di sinilah musik bertemu dengan alam, menciptakan harmoni yang sempurna antara hiburan, keindahan, dan emosi.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="style/assets/img/peninsulackr/konser.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Rasakan magisnya budaya Bali di Peninsula Island lewat pertunjukan Tari Kecak yang ikonik.</h3>
                <p style="text-align: justify;">
                 Di tengah keindahan alam dan suasana sunset yang memukau, Tari Kecak disajikan dengan latar suara ombak dan cahaya api obor. Perpaduan alam dan budaya ini menjadikan setiap pertunjukan terasa magis dan mengesankan.
                </p>
                <p class="fst-italic">
                 Menonton Tari Kecak di Peninsula bukan sekadar hiburan, tapi perjalanan budaya yang menggetarkan hati.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Disajikan di tengah panorama Peninsula Island</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Menggunakan elemen alami seperti api obor dan ombak
                  Suara deburan ombak dan cahaya obor di sekeliling penari menambah kesan dramatis dan magis pada setiap pertunjukan.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span> Menjadi daya tarik utama acara budaya di Peninsula
                  Tari Kecak sering dijadikan highlight di berbagai event, festival, atau pertunjukan khusus yang digelar di Peninsula Island.</span></li>                
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="style/assets/img/peninsulackr/kecak.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Rasakan Kesegaran Alam Bali lewat Jogging Santai di Peninsula Island</h3>
                <p style="text-align: justify;">
                Peninsula Island adalah tempat yang sempurna untuk menjaga kebugaran sambil menikmati alam yang menenangkan. Dengan udara segar dan pemandangan yang menakjubkan, aktivitas ini menjadi cara ideal untuk menyatu dengan alam Bali.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span> Jalur jogging yang nyaman dan menyegarkan</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Pemandangan alami yang menakjubkan</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Cocok untuk semua tingkat kebugaran</span></li>
                </ul>
                <p class="fst-italic" style="text-align: justify;">
                  Jogging di Peninsula Island bukan hanya tentang olahraga, tetapi juga kesempatan untuk menikmati keindahan alam Bali dengan cara yang sehat dan menyegarkan.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="style/assets/img/peninsulackr/joging.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Nikmati Keindahan Alam Bali lewat Sensasi Water Blow di Peninsula Island</h3>
                <p style="text-align: justify;">
                  Water Blow Peninsula Island adalah daya tarik alam yang menakjubkan, di mana ombak laut bertabrakan dengan karang besar, menciptakan semburan air yang spektakuler dan menyegarkan. Tempat ini sempurna untuk menikmati keindahan alam Bali sekaligus merasakan energi laut yang kuat dan menyegarkan.
                </p>
                <p class="fst-italic" style="text-align: justify;">
                  Mengunjungi Water Blow bukan hanya soal melihat semburan air yang memukau, tapi juga kesempatan untuk menyatu dengan alam Bali yang penuh kekuatan dan keindahan. Sensasi segarnya semburan air laut dan suara ombak yang menghantam karang akan membuat pengalaman Anda di Peninsula Island semakin tak terlupakan.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Pemandangan ombak besar yang dramatis
                  </span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Suasana alami yang segar dan menyenangkan.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Spot foto yang instagramable dan unik</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="style/assets/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-5">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Rasakan Kesegaran Alam Bali lewat Bersepeda Santai di Peninsula Island</h3>
                <p style="text-align: justify;">
                 Bersepeda di Peninsula Island adalah cara sempurna untuk menjaga kebugaran sekaligus menikmati keindahan alam Bali yang asri. Dengan jalur yang ramah pengendara sepeda dan udara segar yang menyejukkan, aktivitas ini cocok untuk semua kalangan, mulai dari pemula hingga yang sudah berpengalaman.
                </p>
                <p class="fst-italic" style="text-align: justify;">
                 Bersepeda di Peninsula Island bukan hanya olahraga, tapi juga kesempatan menikmati udara segar dan panorama alam Bali yang menyejukkan sambil menghirup energi positif dari lingkungan sekitar. Jadi, ayo gowes dan nikmati keindahan Bali dengan cara yang menyenangkan dan sehat!
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Jalur bersepeda yang aman dan nyaman</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Pemandangan hijau dan laut yang menenangkan.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Cocok untuk seluruh keluarga dan komunitas</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="style/assets/img/working-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tips</h2>
        <p>Berkunjung Ke Peninsula Island</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-calendar-check icon flex-shrink-0"></i>
              <div>
                <h4 class="title">Waktu Terbaik Berkunjung</h4>
                <p class="description" style="text-align: justify;">Waktu paling ideal untuk menikmati Peninsula Island adalah di pagi hari atau sore menjelang matahari terbenam. Pagi hari cocok untuk jogging santai sambil merasakan udara segar dan suasana yang masih tenang. Sedangkan sore hari menawarkan pemandangan sunset yang luar biasa indah, cocok untuk bersantai sambil menikmati panorama laut biru yang memukau.
                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-person-standing-dress icon flex-shrink-0"></i>
              <div>
                <h4 class="title">Pakaian yang Disarankan</h4>
                <p class="description" style="text-align: justify;">Sebaiknya kenakan pakaian yang nyaman seperti kaos, celana pendek, atau pakaian olahraga ringan. Gunakan alas kaki anti slip, terutama jika kamu ingin menuju spot Water Blow, karena jalannya bisa menjadi licin akibat cipratan ombak. Membawa topi dan kacamata hitam juga disarankan untuk melindungi diri dari terik matahari di siang hari.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-camera icon flex-shrink-0"></i>
              <div>
                <h4 class="title">Bawa Kamera</h4>
                <p class="description" style="text-align: justify;">Peninsula Island punya banyak sudut yang sangat instagramable, mulai dari taman hijau, patung-patung khas Bali, hingga tebing karang dengan latar belakang laut lepas. Pastikan membawa kamera atau smartphone berkamera dengan baterai penuh agar tidak melewatkan kesempatan mengabadikan momen-momen berharga selama di sana.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-binoculars icon flex-shrink-0"></i>
              <div>
                <h4 class="title">Tips Tambahan</h4>
                <p class="description" style="text-align: justify;">Jangan lupa membawa air minum pribadi untuk menjaga tubuh tetap terhidrasi, terutama saat cuaca panas. Selalu ikuti rambu dan petunjuk keselamatan, khususnya di area tebing dan Water Blow. Terakhir, tetap jaga kebersihan dengan tidak membuang sampah sembarangan agar keindahan Peninsula Island tetap terjaga dan bisa dinikmati semua pengunjung.</p>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>

          <!-- Section Title -->
        <div class="container section-title mt-4" data-aos="fade-up">
          <p>Informasi Kunjungan</p>
        </div><!-- End Section Title -->

        <div class="service-item d-flex position-relative h-100 mb-4">
          <i class="bi bi-clock icon flex-shrink-0"></i>
          <div>
            <h4 class="title">Jam Operasional</h4>
            <p class="description" style="text-align: justify;">
              Peninsula Island terbuka untuk umum setiap hari dari <b>pukul 06.00 hingga 22.00 WITA.</b> Pengunjung bebas menikmati kawasan ini sepanjang jam operasional tersebut, mulai dari jalan santai, jogging, hingga bersantai menikmati pemandangan. Khusus untuk area <b>Waterblow</b>, biasanya jam operasionalnya lebih terbatas, yakni mulai <b>pukul 09.00 hingga 17.00 WITA</b>. Disarankan untuk datang di pagi atau sore hari agar bisa menikmati suasana yang lebih nyaman dan tidak terlalu panas. 
            </p>
          </div>
        </div><!-- End Service Item -->

        <div class="service-item d-flex position-relative h-100 mb-4">
          <i class="bi bi-ticket icon flex-shrink-0"></i>
          <div>
            <h4 class="title">
              Tiket Masuk
            </h4>
            <p class="description" style="text-align: justify;">
              Tidak ada biaya tiket masuk untuk mengunjungi Peninsula Island. <br>
              Peninsula Island sendiri dapat dikunjungi tanpa biaya tiket masuk. Namun, bagi pengunjung yang ingin menikmati Waterblow, yaitu atraksi yang terkenal dengan percikan air besar yang terjadi saat ombak menghantam tebing, terdapat biaya masuk. 
              <b>Biaya masuk untuk mengunjungi Waterblow adalah sekitar Rp20.000 - Rp30.000 per orang.</b> 
              Meskipun ada biaya tambahan untuk Waterblow, pengunjung tetap bisa menikmati banyak keindahan lainnya di sekitar Peninsula Island secara gratis.
            </p>
          </div>
        </div><!-- End Service Item -->

        <div class="service-item d-flex position-relative h-100 mb-4">
          <i class="bi bi-p-circle icon flex-shrink-0"></i>
          <div>
            <h4 class="title mt-4">
              Biaya Parkir
            </h4>
            <p class="description">
              Meskipun tiket masuk ke Peninsula Island gratis, pengunjung yang membawa kendaraan perlu memperhatikan biaya parkir.
            </p>
            <ul class="description">
              <li>Untuk sepeda motor, tarif parkir yang berlaku adalah sekitar: Rp5.000 per jam.</li>
              <li>Untuk mobil dikenakan biaya sekitar Rp10.000 per jam.</li>
            </ul>
          </div>
        </div><!-- End Service Item -->      
      </div>
    </section><!-- /Services 2 Section -->

    <!-- Team Section -->
    {{-- <section id="team" class="team section light-background"> --}}

      <!-- Section Title -->
      {{-- <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
      </div><!-- End Section Title --> --}}

      {{-- <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
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

    </section><!-- /Team Section --> --}}



    <!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">
    <img src="{{ asset('style/assets/img/detail/bunga1.jpg') }}" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
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

            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <!-- Ganti gambar dengan gambar default atau upload sesuai ulasan -->
                        <img src="{{ asset('style/assets/img/testimonials/default.jpg') }}" class="testimonial-img" alt="">
                        
                        <!-- Nama dan Posisi -->
                        <h3>{{ $testimonial->name }}</h3>
                        {{-- <h4>{{ $testimonial->position ?? 'Position' }}</h4> <!-- Menampilkan posisi jika ada --> --}}

                        <!-- Rating -->
                        <div class="stars">
                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                <i class="bi bi-star-fill"></i>
                            @endfor
                        </div>

                        <!-- Pesan -->
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{ $testimonial->message }}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div> <!-- End testimonial item -->
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->



    <!-- Contact Section -->
    <section id="ulasan" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        {{-- <h2>Contact</h2> --}}
        <p>Lokasi & Ulasan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Lokasi Peninsula Island</h3>
                  {{-- <p>A108 Adam Street, New York, NY 535022</p>  --}}
                  <br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.824358785721!2d115.23601977374439!3d-8.802566190005058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd242d7ab709d33%3A0x39de1606c19ad392!2sNusa%20Gede!5e0!3m2!1sid!2sid!4v1746602053856!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

     <div class="col-lg-6">
  <div class="card shadow-sm rounded p-4 bg-white border" data-aos="fade-up" data-aos-delay="500">
    <form action="{{ route('submit.review') }}" method="POST">
      @csrf
      <div class="row gy-4">
        <h3>Bagikan Pengalaman Anda!</h3>

        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Nama" required>
        </div>

        <div class="col-md-6">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>

        <div class="col-md-12">
          <label class="form-label">Rating:</label>
          <div class="rating">
            <input type="radio" name="rating" value="5" id="star5"><label for="star5">&#9733;</label>
            <input type="radio" name="rating" value="4" id="star4"><label for="star4">&#9733;</label>
            <input type="radio" name="rating" value="3" id="star3"><label for="star3">&#9733;</label>
            <input type="radio" name="rating" value="2" id="star2"><label for="star2">&#9733;</label>
            <input type="radio" name="rating" value="1" id="star1"><label for="star1">&#9733;</label>
          </div>
        </div>

        <div class="col-md-12">
          <textarea class="form-control" name="message" rows="4" placeholder="Ketikkan ulasan" required></textarea>
        </div>

        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
        </div>
      </div>
    </form>
    {{-- Notifikasi setelah kirim --}}
  @if(session('success'))
    <div class="alert alert-success mt-3">
      {{ session('success') }}
    </div>
  @elseif(session('error'))
    <div class="alert alert-danger mt-3">
      {{ session('error') }}
    </div>
  @endif
  </div>
</div>
</div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>
    @include('partials.footer')
