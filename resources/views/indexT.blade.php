@extends('layouts.app')
@section('content')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Juragan SMK</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Beranda</a></li>
                <li><a href="#services-section" class="nav-link">PanduanAplikasi</a></li>
                <li><a href="#agents-section" class="nav-link">Barang Saya</a></li> 
                <!-- <li><a href="#about-section" class="nav-link">Barang Saya</a></li> -->
                <li><a href="#news-section" class="nav-link">Berita </a></li>
                <li><a href="#contact-section" class="nav-link">Pembelian</a></li>
              </ul>     
            </nav>
          </div>

















          

          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    
    <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Laporan Penjualan</h1>
              <p class="mb-5 text-shadow">Website Pelaporan Penjulan Smkn N 1 Kebumen <a href="https://free-template.co/" target="_blank">SMK BISA!</a>  </p>
              <p><a href="https://free-template.co" target="_blank" class="btn btn-primary px-5 py-3">Mulai Laporan !</a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
  
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">
  
  
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Juragan SMK </h1>
              <p class="mb-5 text-shadow">Kami Hadir Memberikan Barang Barang Berkualitas Dengan Harga Yang Pas <a href="https://free-template.co/" target="_blank">Free-Template.co</a>  </p>
              <p><a href="https://free-template.co" target="_blank" class="btn btn-primary px-5 py-3">Mulai Jualan </a></p>
              
            </div>
          </div>
        </div>
  
        
      </div>  
    </div>   
    
  </div>      
<!-- 

  <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row large-gutters">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="property-single.html" class="d-inline-block mb-4"><img src="storage/images/property_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3>HD17 19 Utica Ave.</h3>
                  <p>New York - USA</p>
                  <strong>$20,000,000</strong>
                </div>
  
              </div> 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="storage/images/property_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>HD17 19 Utica Ave.</h3>
                      <p>New York - USA</p>
                      <strong>$20,000,000</strong>
                    </div>
      
                  </div> 
                </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="storage/images/property_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>HD17 19 Utica Ave.</h3>
                      <p>New York - USA</p>
                      <strong>$20,000,000</strong>
                    </div>
      
                  </div> 
                </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                <div class="ftco-media-1-inner">
                  <a href="property-single.html" class="d-inline-block mb-4"><img src="storage/images/property_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                  <div class="ftco-media-details">
                    <h3>HD17 19 Utica Ave.</h3>
                    <p>New York - USA</p>
                    <strong>$20,000,000</strong>
                  </div>
    
                </div> 
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="storage/images/property_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>HD17 19 Utica Ave.</h3>
                        <p>New York - USA</p>
                        <strong>$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="storage/images/property_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>HD17 19 Utica Ave.</h3>
                        <p>New York - USA</p>
                        <strong>$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div>

        </div>
      </div>
    </div>
    
     -->
<!--     
    <section class="site-section" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Real Estate Agents</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="storage/images/person_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Allison Holmes</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="storage/images/person_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Dave Simpson</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="storage/images/person_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Ben Thompson</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section> -->





    

   <section class="site-section" id="agents-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Galeri Produk Smenza </h2>
            <p class="lead">Menampilkan Produk Produk dari Bisi Smenza Menampilkan Produk Produk dari Bisi Smenza Menampilkan Produk Produk dari Bisi Smenza Menampilkan Produk Produk dari Bisi Smenza </p>
          </div>
        </div>

        <div class="col-lg-6 ml-auto">
            
        <a href="{{route('barang.create')}}"><h2 ><div class="btn btn-primary mr-2 mb-2">Tambah Produk</div></h2></a>
            </div>


        <div class="row">
          
        @foreach($barang as $b)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
              <?php
    
              $foto="storage/upload/img/".$b->foto;
              ?>

      
      <img src="{{asset($foto)}}" style="width:450px;height:200px" alt="Free website template by Free-Template.co" class="img-fluid" >
              </figure>

              <div class="p-3 bg-primary">
                <h3 class="mb-2">{{$b->nama_barang}}</h3>
                <a href="{{route('barang.edit',$b->id)}}"><span class="btn btn-primary mr-2 mb-2" > Update</span></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
       <p><a href="{{route('barang.index')}}" class="btn btn-primary mr-2 mb-2-right">Lihat Semua Barang </a></p>
    </section>
  




    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-black">Find Property.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <span class="custom-icon flaticon-coin text-black"></span>
              <h3 class="text-dark">Buy Property.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <span class="custom-icon flaticon-home text-black"></span>
              <h3 class="text-dark">Outstanding Houses.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>  
    </section>



    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">

              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="storage/images/img_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></div>
                  <div><img src="storage/images/img_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></div>
                  <div><img src="storage/images/img_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></div>
                </div>

          </div>
          <div class="col-lg-6 ml-auto">
            
            <h2 class="section-title mb-3">Pembelian </h2>
                <p class="lead">Laporkan Pembelian</p>
                <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit  Quo suscipit omnis iste velit maxime.</p>

                <ul class="list-unstyled ul-check success">
                  <li>Beli Barang Di toko Bisi SMENZA sesuai Jadwal siswa </li>
                  <li>Dapatkan Nota   Dan Masukan Kode Nota</li>
                  <li>Tambahkan Kode Beli Dengan Kode Nota </li>
                  <li>Pilih Barang Yang Dibeli </li>
                  <li> Masukan Jumlah Barang sesuai Pembelian </li>
                </ul>

                <p><a href="{{route('beli.create')}}" class="btn btn-primary mr-2 mb-2">Laporkan Pembelian </a></p>
            
          </div>
        </div>
      </div>
    </section>

    

    <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Panduan Aplikasi</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
              <div>
                <h3>Lihat Barang </h3>
                <p>LIhat daftar Barang  untuk melihat refrensi produk produk yang ada di Bisi Smenza.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
              <div>
                <h3>  Beli Barang </h3>
                <p>Setelah mendapatkan Barang Barang yang kita ingin kan Masukan Kedalam Kranjang Blanja dan Masukan Sesuai nota Pembelian.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
              <div>
                <h3>Barang Siswa</h3>
                <p>Barang Siswa Berisi Barang  Yang Siap Dijual oleh siswa , Fitur ini juga berisi Penentuan Harga Jual .</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
              <div>
                <h3>Peenjualan</h3>
                <p>Mengisikan Daftar Daftar pembeli dan Barang yang dii beli </p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
              <div>
                <h3>Login</h3>
                <p>Siswa Login dengan Pasword dan Username yang telah terregister .</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone"></span></div>
              <div>
                <h3>Laporan </h3>
                <p> Terdapat fitur laporan untuk melihat Laporan penjualan .</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials<h2>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="ftco-testimonial-1">
                  <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                    <img src="storage/images/person_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                    <div>
                      <h3>Allison Holmes</h3>
                      <span>Customer</span>
                    </div>
                  </div>
                  <div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                  <div class="ftco-testimonial-1">
                      <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="storage/images/person_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                        <div>
                          <h3>James Phelps</h3>
                          <span>Customer</span>
                        </div>
                      </div>
                      <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                      </div>
                    </div>
              </div> 

              <div class="col-md-6 mb-4">
                  <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                      <img src="storage/images/person_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                      <div>
                        <h3>Nestor Helsin</h3>
                        <span>Customer</span>
                      </div>
                    </div>
                    <div>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                          <img src="storage/images/person_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid mr-3">
                          <div>
                            <h3>Allison Holmes</h3>
                            <span>Customer</span>
                          </div>
                        </div>
                        <div>
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                        </div>
                      </div>
                </div> 
        </div>
      </div>
    </section>

    
    <section class="site-section" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Berita  &amp; Info Lomba</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/berita1.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Tim Juragan Kebumen Juara Khong Guan SMK Jago Jualan 2018</a></h2>
              <div class="meta mb-4">Allison Holmes <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/berita2.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">SUN LIFE RESOLUTION RUN 2020 adalah lomba lari yang berjarak 10 KM, 5 KM, dan Family Run 1.5 KM.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="single.html"><img src="images/berita3.jpg" alt="Free website template by Free-Template.co" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="single.html" class="text-dark">Lomba Cerpen 2019</a></h2>
              <div class="meta mb-4">Allison Holmes <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
            </div> 
          </div>
           <p><a href="{{route('berita.create')}}" class="btn btn-primary mr-2 mb-2">Uploade Lomba </a></p> 
           
        </div>
      </div>
    </section>

   


    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contct Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Get In Touch</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 mx-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="copyright"><small>&copy; <script>document.write(new Date().getFullYear());</script> Warehouse. All Rights Reserved.  Design by <a href="https://free-template.co" target="_blank">Free-Template.co</a></small></p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body><!-- 
</html> -->

@endsection