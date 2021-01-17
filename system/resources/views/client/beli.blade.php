<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>virashop - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('public')}}/user/assets/img/favicon.png" rel="icon">
  <link href="{{url('public')}}/user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('public')}}/user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{url('public')}}/user/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('public')}}/user/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v2.1.1
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">virashop</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{url('public')}}/user/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Beranda</a></li>
          <li><a href="{{url('keranjang')}}">Keranjang</a></li>
          <li><a href="{{url('/index')}}#produk">Produk</a></li>
          <li><a href="{{url('login')}}">Login</a></li>
          <li><a href="{{url('registrasi')}}">Registrasi</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Produk</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="">
              <div class="">
                <form action="{{url('keranjang')}}">
                  @csrf
                  <div class="row">
                    <div class="form-group col-4">
                      <label for="exampleInputEmail1">Nama Produkk</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{$produk->nama}}" readonly="">
                    </div>
                    <div class="form-group col-4">
                      <label for="exampleInputEmail1">Nama Seller</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{$produk->seller->username}}" readonly="">
                    </div>
                  </div>
                  <div class="form-group col-4">
                    <label for="exampleInputPassword1">Harga Produk</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="harga" value="{{$produk->harga}}" readonly="">
                  </div>
                  <div class="form-group col-2">
                    <label for="stok">Stok Produk</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="{{$produk->stok}}" readonly="">
                  </div>
                  <div class="form-group col-2">
                    <label for="total">Total Beli Produk</label>
                    <input type="number" class="form-control" id="total" name="total" required="" min="1">
                  </div>
                    <div class="col-md-12 mt-5">
                      <div class="card">
                        <div class="card-header">
                          Alamat
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="c0l-md-3">
                          </div>
                            <div class="col-md-3">
                              <label for="" class="control-label">Provinsi</label>
                              <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                <option value="">Pilih Provinsi</option>
                                @foreach($list_provinsi as $provinsi)
                                  <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                @endforeach
                              </select>
                            </div>


                             <div class="col-md-3">
                              <label for="" class="control-label">Kabupaten/Kota</label>
                              <select name="" class="form-control" onchange="gantiKabupaten(this.value)">
                                <option value="">Pilih Kabupaten</option>
                                @foreach($list_kabupaten as $kabupaten)
                                  <option value="{{$provinsi->id}}">{{$kabupaten->name}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="col-md-3">
                              <label for="" class="control-label">Kecamatan</label>
                              <select name="" class="form-control" onchange="gantiKecamatan(this.value)">
                                <option value="">Pilih Kecamatan</option>
                                @foreach($list_kecamatan as $kecamatan)
                                  <option value="{{$provinsi->id}}">{{$kecamatan->name}}</option>
                                @endforeach
                              </select>
                            </div>
                           <div class="col-md-3">
                              <label for="" class="control-label">Desa</label>
                              <select name="" class="form-control" onchange="gantiDesa(this.value)">
                                <option value="">Pilih Desa</option>
                                @foreach($list_desa as $desa)
                                  <option value="{{$provinsi->id}}">{{$desa->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-2 mt-3">
                  <button type="submit" class="btn btn-primary">Keranjang</button>
                  </div>
                </form>
              </div>  
            </div>
          </div>
 
        </div>


    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-mobile"></i>
                  <p>
                    Call: +62 8956 1773 0122<br>
                    <span>Senin-Sabtu (9-11 wib)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p>
                    Email: viratres29@gmail.com
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p>
                    Location: Jl.Sisingamangaraja Gg.Amal<br>
                    <span>Ketapang, Kalimantan Barat</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
</main><!-- End #main -->

    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Vira Tresyana</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('public')}}/user/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/appear/jquery.appear.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/knob/jquery.knob.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/parallax/parallax.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/wow/wow.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{url('public')}}/user/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public')}}/user/assets/js/main.js"></script>

</body>

</html>