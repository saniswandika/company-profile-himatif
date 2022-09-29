<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Himpunan Mahasiswa Teknik Informatika </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/assets/img/himatif.png') }}" rel="icon">
  <link href="{{ asset('/assets/img/himatif.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link type="text/css" href="{{ asset('/assets/vendors/aos/aos.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  
  <link type="text/css" href="{{ asset('/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('/assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}" />
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">dfhimatif@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0881022649160
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo text-light"><a href="index.html"><img src="{{ asset('assets/img/himatif.png') }}" alt=""></a>HIMATIF</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#kegiatan">Kegiatan Himatif</a></li>
          <li><a class="nav-link scrollto" href="#services">Program Kerja</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">GALERI</a></li>
          <li><a class="nav-link scrollto" href="#Partnership">Partnership</a></li>
          <li><a class="nav-link scrollto" href="#team">kepengurusan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to HIMATIF</h1>
      <h2>Himpunan Mahasiswa Teknik Informatika </h2>
      <a href="#dataanggota" class="btn-get-started scrollto">Statistik Keanggotaan</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
        <!-- ======= About Section ======= -->
    <section id="dataanggota" class="about">
      <div class="container">
        <div class="section-title" data-aos="fade-right">
          <span>Data Statistik</span>
          <h2>Data Statistik</h2>
          <p>Data ini di ambil dari data Anggota HIMATIF Stmik Amik Bandung dari tahun ke tahun</p>
        </div>
        <div class="row">
            <div class="col-xl-12" data-aos="fade-left">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Data Statistik</h6>
                                <h2 class="mb-0">Anggota Himatif </h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart" >
                              <canvas id="myChart" height="100px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
      <div class="section-title">
          <span>Tentang Himatif</span>
          <h2>Tentang Himatif</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="{{ asset('/assets/img/brand/barudak.JPG') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Didirikan pada tanggal 24 November 1992 dengan nama HIMA.T.IF, HIMATIF STMIK "AMIKBANDUNG" adalah bagian dari Badan Eksekutif Mahasiswa STMIK "AMIKBANDUNG" dan mempunyai otonomi luas dalam lingkungan HIMATIF STMIK “AMIKBANDUNG”.</h3>
            <p class="fst-italic">
              adapun maksud dan tujuan Himatif didirikan di kampus STMIK Amik Bandung adalah :  
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Membina kekeluargaan antara anggota khusunya dan antar mahasiswa umumnya.</li>
              <li><i class="bi bi-check-circle"></i> Menumbuhkembangkan bidang teknologi informasi dan kewirausahaan</li>
              <li><i class="bi bi-check-circle"></i> mempersiapkan potensi dan kemampuan anggota untuk menghadapi masa depan dan pengabdian pada masyarakat.</li>
            </ul>
            <p>
            Mahasiswa program jurusan Teknik Informatika STMIK “AMIKBANDUNG” merupakan unsur yang mutlak 
            dan tidak dapat dipisah-pisahkan dari program jurusan Teknik Informatika STMIK “AMIKBANDUNG”. Sadar 
            atas tanggung jawabnya terhadap Tuhan Yang Maha Esa, tanah air dan bangsa, maka seluruh mahasiswa 
            jurusan Teknik Informatika STMIK “AMIKBANDUNG” menggabungkan diri di dalam suatu wadah organisasi 
            Badan Eksekutif Mahasiswa STMIK “AMIKBANDUNG”.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Program Kerja HIMATIF</span>
          <h2>Program Kerja HIMATIF</h2>
          <p>Program Kerja Himatif ini di ambil dari program kerja ketua dewan pengurus</p>
        </div>

        <div class="row">
        @foreach($posting_proker as $r)
            <div class="col-lg-4 mt-4 mt-lg-0 mr-10" data-aos="fade-up" data-aos-delay="150">
                <!-- Card -->
              <div class="card card-image"
                style="background-image:url({{asset('/file_program/' . $r->file_program)}}); background-size: cover;  background-position: center;">
                  <div class="icon-box" >
                <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                      <div>
                        <h3 class="card-title pt-2"><strong>{{$r->nama_program}}</strong></h3>
                        <p>{!! Str::limit($r->deskripsi_program, 100) !!}</p>
                        <a href ="{{route('program.show', $r->id)}}" class="btn btn-pink"><i class="fas fa-clone left"></i> Read More</a>
                      </div>
                    </div>
                  </div>
              </div>              
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- End Why Us Section -->
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Lambang HIMATIF</h3>
          <p>Secara keseluruhan, lambang Himatif memiliki arti
              Himpunan Mahasiswa Teknik Informatika yang berada dibawah naungan STMIK AMIKBANDUNG, yang
              memiliki jiwa kebangsaan dan diikat dalam tali persaudaraan tanpa memandang suku, agama, golongan
              dan kebangsaan, yang bertujuan memajukan anggotanya dan membaktikan ilmu pengetahuan yang dimiliki
              untuk kemajuan organisasi, kampus dan bangsa.</p>
        </div>

      </div>
    </section><!-- End Cta Section -->
<!-- ======= Why Us Section ======= -->
<section id="kegiatan" class="why-us">
      <div class="container">
      <div class="section-title">
          <span>Kegiatan Himatif</span>
          <h2>Kegiatan Himatif</h2>
          <p>adapun kegiatan himatif yang berjalan dari program kerja himatif</p>
        </div>
        <div class="row">
          @foreach($posting_kegiatan as $r)
            <div class="col-lg-4 mt-4 mt-lg-0 mr-10" data-aos="fade-up" data-aos-delay="150">
                <!-- Card -->
              <div class="card card-image mt-4"
                style="background-image:url({{asset('/file_kegiatan/' . $r->file_kegiatan)}}); background-size: cover;  background-position: center;">
                  <div class="box" >
                <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                      <div>
                        <h5 class="pink-text"><i class="fas fa-chart-pie"></i>Kegiatan Himatif </h5>
                        <h3 class="card-title pt-2"><strong>{{$r->nama_kegiatan}}</strong></h3>
                        <p>{!! Str::limit($r->deskripsi_kegiatan, 100) !!}</p>
                        <a href ="{{route('kegiatan.show', $r->id)}}" class="btn btn-pink"><i class="fas fa-clone left"></i> Read More</a>
                      </div>
                    </div>
                  </div>
              </div>              
            </div>
          @endforeach

          

        </div>

      </div>
    </section>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Galeri</span>
          <h2>Galeri</h2>
          <p>Galeri Himatif di ambil dari kegiatan kegiatan himatif yang sudah di jalan kan</p>
        </div>
        @php
        $no = 0;
        @endphp
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
            @foreach($posting_galeri as $r);
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ asset('file_gambar/'. $r->file_gambar ) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$r->nama_gambar}}</h4>
                  <a href="{{ asset('file_gambar/'. $r->file_gambar ) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>kepengurusan Himatif</span>
          <h2>Kepengurusan Himatif</h2>
          <p>ini adalah anggota kepengurusan himatif yang bertanggung atas jalan kepengurusan di himatif</p>
        </div>

        <div class="row">
        @foreach($posting_sekretaris as $r)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <img src="{{asset('/profil-anggota/' . $r->gambar)}}" class="rounded-circle" alt="">
              <div class="member">
                  <h4>{{$r->nama_anggota}}</h4>
                  <span>{{$r->jabatan }}</span>
              </div>
            </div>
        @endforeach
        @foreach($posting_divisi as $r)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
              <div class="member">
                  <img src="{{asset('/profil-anggota/' . $r->gambar)}}" class="rounded-circle" alt="">
                  <h4>{{$r->nama_anggota}}</h4>
                  <span>{{$r->jabatan }}</span>
              </div>
            </div>
        @endforeach
          @foreach($posting_bendahara as $r)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
              <div class="member">
              
                  <img src="{{ asset('/profil-anggota/'. $r->gambar ) }}" class="rounded-circle" alt="">
                  <h4>{{$r->nama_anggota}}</h4>
                  <span>{{$r->jabatan }}</span>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->
    <section id="Partnership" class="clients">
      <div class="section-title">
            <span>Partnership</span>
            <h2>Partnership</h2>
            <p>Instansi atau perusahaan yang telah bekerja sama dengan HIMATIF</p>
        </div>
        <div class="container" data-aos="zoom-in">
      
              <div class="row d-flex align-items-center">
              @foreach($posting_partnership as $r)
                    <div class="col-lg-2 col-md-4 col-6">
                      <img src="{{ asset('logo_perusahaan/'. $r->logo_perusahaan ) }}" class="img-fluid" alt="">
                    </div>
              @endforeach
                </div>
        </div>
    </section><!-- End Clients Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Bisa hubungi kontak kami di bawah ini, untuk menjalin kerja sama dengan HIMATIF</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Base Camp Himatif</h3>
              <p>Jl. Jakarta No.28, RW.1, Kebonwaru, Kec. Batununggal, Kota Bandung, Jawa Barat 40272</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>dfhimatif@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>0881022649160</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12">
            <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=Jl.%20Jakarta%20No.28,%20Kebonwaru,%20Kec.%20Batununggal,%20Kota%20Bandung,%20Jawa%20Barat%2040272&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BKK-CORPS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BKK-CORPS</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
<script type="text/javascript">
  
  var labels =  {{ Js::from($labels) }};
  var users =  {{ Js::from($data) }};

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: users,
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

</script>


  <script src="{{ asset('/assets/vendors/aos/aos.js') }}"></script>
  <script src="{{ asset('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendors/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/assets/vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/vendors/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>
