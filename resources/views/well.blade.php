<!doctype html>

<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Selamat Datang Diwebsite BANSOS</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<link rel="stylesheet" href="{{ asset ('user/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset ('user/css/isotope.css') }}" media="screen" />
<link rel="stylesheet" href="{{ asset ('user/js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
<link href="{{ asset ('user/css/animate.css') }}" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="{{ asset ('user/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset ('user/css/styles.css') }}" />
<!-- Font Awesome -->
<link href="{{ asset ('user/font/css/font-awesome.min.css') }}" rel="stylesheet">
<style type="text/css">
  p {
    text-align: justify;
  }

</style>
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i><img style="width: 100px" src="{{ asset ('user/images/logo.png') }}" /></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
            <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
            <li><a href="#Features" class="scroll-link">Manfaat</a></li>
            <li><a href="#aboutUs" class="scroll-link">Tentang</a></li>
            <li><a href="#work" class="scroll-link">Galery</a></li>
            <li><a href="#contactUs" class="scroll-link">Contact</a></li>
           @if (Route::has('login'))

            @auth

            @else
            <li><a href="{{ route('login') }}" class="scroll-link">Login</a></li>
          @endauth
          @endif

        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
  	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="{{ asset ('user/images/banner-bg.jpg') }}" style="width: 1600px; height: 700px" alt="banner" /></div>
    <div class="item"><img src="{{ asset ('user/images/banner-bg2.jpg') }}" style="width: 1600px; height: 700px" alt="banner" /></div>
    <div class="item"><img src="{{ asset ('user/images/banner-bg3.jpg') }}" style="width: 1600px; height: 700px" alt="banner" /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div>
	
  </div>  
  
  <div class="container hero-text2"> 

		<div class="col-md-9">
		<h2>Pengumuman</h1>
			<p> Untuk Mengetahui Apakah Anda Mendapatkan BANSOS dari Pemerintah Bisa Klik Cek Pengumuman Disamping Dengan Memasukkan NIK  </p>   
		</div>  
		<div class="col-md-3">
			<a class="btn btn-apply" href="#"><i class="fa fa-play-circle"></i>Cek Pengumuman</a>  
		</div>
  </div>
</section>
<section id="Features" class="page-section colord">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Manfaat</h2>
    </div>
    <div class="row"> 
      <!-- item -->
      <div class="col-md-3 text-center">
	  <div class="box-item">
	  <i class="circle"> <img src="{{ asset ('user/images/1.png') }}" alt="" /></i>
        <h3>Bidang kesehatan</h3>
          <p>meliputi Program Jaskesmas dan
            Pelayanan Kesehatan di Rumah sakit kelas III.</p>
      </div>
	   </div>
      <!-- end: --> 
      <!-- item -->
      <div class="col-md-3 text-center"> 
	  <div class="box-item">
	  <i class="circle"><img src="{{ asset ('user/images/5.png') }}" alt="" /></i>
        <h3>Bidang pendidikan</h3>
        <p>Bidang pendidikan meliputi Program BOS dan Bea Siswa
          Pendidikan Siswa /Mahasiswa Miskin.
          </p>
      </div>
	   </div>
      <!-- end: --> 
      
      <!-- item -->
      <div class="col-md-3 text-center">
	  <div class="box-item">
	  <i class="circle"> <img src="{{ asset ('user/images/2.png') }}" alt="" /></i>
        <h3>Bidang Perlindungan Sosial</h3>
        <p>Bidang Perlindungan Sosial, meliputi Program Keluarga
          Harapan/PKH, dan Bantuan Langsung Tunai/BLT.1</p>
      </div>
	   </div>
      <!-- end: --> 
      <!-- item -->
      <div class="col-md-3 text-center">
	  <div class="box-item">
	  <i class="circle"> <img src="{{ asset ('user/images/3.png') }}" alt="" /></i>
        <h3>Bidang Pemberdayaan Masyarakat</h3>
         <p>Bidang Pemberdayaan Masyarakat (PNPM Perdesaan
          menckup Kecamatan PPK, P2KP, PNPM Perkotaan, PNPM
          Infrastruktur Perdesaan/PPIP, PNPM Daerah
          Tertinggal/PDT, PNPM Infrastruktur Sosial Ekonomi
          Wilayah).</p>
      </div>
      <!-- end:-->
	   </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Tentang</h2>
    </div>
    <div class="row feature design">
      <div class="area1 columns left">
        <h3>BANSOS</h3>
        <p>Bantuan sosial (bansos) adalah merupakan transfer uang
          atau barang yang diberikan kepada masyarakat guna melindungi
          dari kemungkinan terjadinya resiko sosial dan untuk
          meningkatkan kesejahteraan masyarakat.</p>
        <p>Bansos dapat diberikan secara langsung kepada
          masyarakat atau lembaga kemasyarakatan termasuk di dalamnya
          bantuan untuk lembaga non pemerintah bidang pendidikan dan
          keagamaan, sifatnya tidak terus menerus dan selektif. Dinas
          bansos bisa “dengan syarat” atau “tanpa syarat”, diberikan
          melalui Kementerian/Lembaga, serta untuk bencana alam. Dari
          segi durasinya, bansos dapat bersifat sementara (untuk korban
          bencana), atau tetap (penyandang cacat), dan dapat berupa uang
          atau barang.</p>
          <a href="#" class="btn">Daftar BANSOS</a>
      </div>
      <div class="area2 columns feature-media right"> <img src="{{ asset ('user/images/about-img.png') }}" alt="" width="100%"> </div>
    </div>
    <div class="row dataTxt">	
						<div class="col-md-4 col-sm-6">
							<h3>Dasar Hukum</h3>
							<p>Saat ini regulasi pemberian bantuan sosial yang
                bersumber dari APBD oleh pemerintah daerah baik pemerintah
                provinsi dan pemerintah kabupaten/kota dapat dikatakan
                “komplit”, walaupun sesungguhnya masih diperlukan berbagai ketentuan yang butuh penjelasan dari Kementerian Dalam
                Negeri.</p>
							<br>
						</div>
						
						<div class="col-md-4 col-sm-6">
							
							<h3>Undang-undang</h3>
							<p>Regulasi atau ketentuan peranturan perundang-undangan
                yang mengatur pemberian hibah dan bansos oleeh pemerintah
                daerah </p>
                            <ul class="listArrow">
								<li style="text-align: justify;">Permendagri Nomor 32 tahun 2011 tentang
                pedoman pemberian hibah dan bantuan sosial yang bersumber
                dari APBD yang ditetapkan pada tanggal 27 Juli 2011 dan di
                undangkan pada tanggal 28 Juli 2012</li>
								<li style="text-align: justify;">Kemudian pada tanggal
                21 Mei 2012 telah ditetapkan Permendagri Nomor 39 tahun
                2012 tentang perubahan atas peraturan Menteri Dalam Negri
                Nomor 32 tahun 2011 tentang pedoman pemberian Hibah dan
                Bantuan Sosial yang bersumber dari APBD yang diundangkan
                pada tanggal 22 Mei 2012</li>
								<li style="text-align: justify;"> Demikian pula sejak tanggal 3
                Januari 2012 telah ditetapkan dan pada tanggal 4 Januari telah
                diundangkan Peraturan Pemerintah Nomor 2 tahun 2012 tentang
                Hibah Daerah</li>
							</ul>
							<!-- Accordion starts -->
							</div>
						
						<div class="col-md-4 col-sm-6">
							
							<h3>Syarat Penerima Hibah dan BANSOS</h3>
							<p>Pemberian bantuan sosial harus memenuhi kriteria
                sebagaimana diatur dalam pasal 24 Permendagri nomor 32
                tahun 2011 sebagai beriku</p>
                            <ul  class="list3">
								<li>Kriteria selektif</li>
								<li>Kriteria memenuhi persyaratan penerima bantuan</li>
								<li>Kriteria bersifat sementara dan tidak terus menerus</li>
								<li>Sesuai tujuan penggunaan</li> 
							</ul>
                            
							<!-- Accordion starts -->
							</div>
						
					</div>
  </div>
</section> 
<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="heading">
      <h2>Galery</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="filters list-inline">
            <li> <a class="active" data-filter="*" href="#">All</a> </li>
            <li> <a data-filter=".photography" href="#">Events</a> </li>
            <li> <a data-filter=".branding" href="#">Games</a> </li>
            <li> <a data-filter=".web" href="#">Science fair</a> </li>
          </ul>
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
            <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> 
								 			 
			  <figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/1.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/1.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
					
			  </li>
			  
			 
			  
			  
            <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/2.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/2.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/3.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/3.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure>  
			  </li>
            <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> 
			<figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/4.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/4.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure>  
			  </li>
            <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> 
			<figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/5.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/5.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item web" style="position: absolute; left: 292px; top: 219px;"> 
			<figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/6.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/6.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item photography" style="position: absolute; left: 585px; top: 219px;">
			<figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/7.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/7.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
            <li class="item web" style="position: absolute; left: 877px; top: 219px;">
			<figure class="effect-bubba">
						<img src="{{ asset ('user/images/work/8.jpg') }}" alt="img02"/>
						<figcaption>
							<h2>B-Events</h2> 
							<a href="{{ asset ('user/images/work/8.jpg') }}" class="fancybox">View more</a> 
						</figcaption>			
					</figure> 
			  </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Contact Us</h2>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
        </div>
      </div>
      <div class="row mrgn30">
        <form method="post" action="" id="contactfrm" role="form">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
            </div>
            <div class="form-group">
              <label for="comments">Comments</label>
              <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
            </div>
            <div class="result"></div>
          </div>
        </form>
      </div>
    </div>
    <!--/.container--> 
  </div>
</section>
<footer>
<div class="container">
        <div class="row">
            <div class="col-md-3">
            	<div class="col">
                   <h4>Contact us</h4>
                   <ul>
                        <li>1th Avenue, New York - United States</li>
                        <li>Phone: +22 342 2345 345 | Fax: +22 724 2342 343 </li>
                        <li>Email: <a href="mailto:info@example.com" title="Email Us">info@example.com</a></li>
                        <li>Skype: <a href="skype:my.test?call" title="Skype us">my-company</a></li>
                    </ul>
                 </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col">
                    <h4>Mailing list</h4>
                    <p>Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat.</p>
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your email address...">
                            <span class="input-group-btn">
                                <button class="btn" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col col-social-icons">
                    <h4>Follow us</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>

             <div class="col-md-3">
             	<div class="col">
                    <h4>Latest News</h4>
                    <p>
                    Lorem ipsum dolor labitur scsstie per sit amet, ea eum labitur scsstie percipitoleat.
                    <br><br>
                    <a href="#" class="btn">Get Mores!</a>
                    </p>
                </div>
            </div>
        </div>
         
    </div>
    
</footer>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2021 Sistem Penentuan Bantuan Bansos </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="{{ asset ('user/js/modernizr-latest.js') }}"></script> 
<script src="{{ asset ('user/js/jquery-1.8.2.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset ('user/js/bootstrap.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset ('user/js/jquery.isotope.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset ('user/js/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script> 
<script src="{{ asset ('user/js/jquery.nav.js') }}" type="text/javascript"></script> 
<script src="{{ asset ('user/js/jquery.fittext.js') }}"></script> 
<script src="{{ asset ('user/js/waypoints.js') }}"></script> 
<script src="{{ asset ('user/js/custom.js') }}" type="text/javascript"></script> 
<script src="{{ asset ('user/js/owl-carousel/owl.carousel.js') }}"></script>
</body>
</html>
