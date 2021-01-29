<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">EKSPEDISI OUTDOOR PADANG</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Journey</a></li>
        <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
        <li><a href="#testimonials" class="page-scroll">Note</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Sea to summit</h1>
            <p>Penjualan dan Penyewaan Peralatan Outdoor<br>
            Guide dan Porter Gunung dan Pulau</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-custom btn-lg page-scroll" data-toggle="modal" data-target="#exampleModal">
              Register
            </button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="exampleModalLabel">Registration Form</h3>
                  </div>
                  <div class="modal-body">
                    <!-- <?php echo form_open('Home/create'); ?> -->
                    <form method="post" action="http://localhost/CI/Home/create">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Full Name</label>
                      <input type="text" class="form-control" name="nama" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Place of Birth</label>
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="Place of Birth">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Date of Birth</label>
                      <input type="date" class="form-control" name="tanggal_lahir" placeholder="Date of Birth">
                    </div>
                    <div class="form-group">  
                      <label for="formGroupExampleInput">Country</label>
                      <input type="text" class="form-control" name="country" placeholder="Country">
                    </div>
                    <div class="form-group">  
                      <label for="formGroupExampleInput">State/Province</label>
                      <select class="form-control" name="provinsi">
                        <option selected>-- Choose Your State/Province--</option>
                        <option value="1">Aceh</option>
                        <option value="2">Bali</option>
                        <option value="3">Bangka Belitung Islands</option>
                        <option value="4">Banten</option>
                        <option value="5">Bengkulu</option>
                        <option value="6">Central Java</option>
                        <option value="7">Central Kalimantan</option>
                        <option value="8">Central Sulawesi</option>
                        <option value="9">East Java</option>
                        <option value="10">East Kalimantan</option>
                        <option value="11">East Nusa Tenggara</option>
                        <option value="12">Gorontalo</option>
                        <option value="13">Jambi</option>
                        <option value="14">Lampung</option>
                        <option value="15">Maluku</option>
                        <option value="16">North Kalimantan</option>
                        <option value="17">North Maluku</option>
                        <option value="18">North Sulawesi</option>
                        <option value="19">North Sumatra</option>
                        <option value="20">Papua</option>
                        <option value="21">Riau</option>
                        <option value="22">Riau Islands</option>
                        <option value="23">Southeast Sulawesi</option>
                        <option value="24">South Kalimantan</option>
                        <option value="25">South Sulawesi</option>
                        <option value="26">South Sumatra</option>
                        <option value="27">Special Capital Region of Jakarta</option>
                        <option value="28">Special Region of Yogyakarta</option>
                        <option value="29">West Java</option>
                        <option value="30">West Kalimantan</option>
                        <option value="31">West Nusa Tenggara</option>
                        <option value="32">West Papua</option>
                        <option value="33">West Sulawesi</option>
                        <option value="34">West Sumatra</option>
                      </select>
                    </div>
                    <div class="form-group">  
                      <label for="formGroupExampleInput">City</label>
                      <input type="text" class="form-control" name="kota" placeholder="City">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Address</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Postal Code</label>
                      <input type="text" class="form-control" name="kode_pos" placeholder="Postal Code">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Email Address</label>
                      <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Phone Number</label>
                      <input type="text" class="form-control" name="no_hp" placeholder="Phone Number">
                    </div>
                    <div class="form-group">  
                      <label for="formGroupExampleInput">Mountainering Proficiency</label>
                      <select class="form-control" name="mountain">
                        <option selected>-- Choose Your Mountainering Proficiency --</option>
                        <option value="1">Beginner</option>
                        <option value="2">Amateur</option>
                        <option value="3">Intermediate</option>
                        <option value="4">Upper-Intermediate</option>
                        <option value="5">Professional</option>
                        <option value="6">Advanced</option>
                      </select>
                    </div> 
                    <br>
                    <br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary btn-submit">
                    <br>  
                    </form>
                    <!-- <?php echo form_close(); ?> -->
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Apa itu <span>EKSPEDISI OUTDOOR PADANG</span> ?</h2>
          <hr>
          <p>Ekspedisi Outdoor Padang adalah sebuah bisnis penyewaan dan penjualan peralatan outdoor, serta jasa Event Organizer, Guide ataupun Porter Gunung dan Pulau yang ada di Indonesia, khususnya di Sumatera Barat.</p>
          <p>Bisnis ini berlatar belakang dari hobi beberapa orang mahasiswa yang memiliki hobi beraktivitas dialam bebas, dan berinisiatif menjadikan hobi ini sebagai penghasilan tambahan. Sehinggaterbentuk </p>
          <a href="#services" class="btn btn-custom btn-lg page-scroll">Lihat Perjalanan</a> </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="<?php echo base_url(); ?>/assets/img/ari.png" alt=" "> </div>
        <div class="about-desc">
          <h3>ARI RIZKI RAMANDA</h3>
          <p>Owner Ekspedisi Outdoor</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="<?php echo base_url(); ?>/assets/img/akbar.png" alt=" "> </div>
        <div class="about-desc">
          <h3>Akbar Ashiddiqi</h3>
          <p>Owner Ekspedisi Outdoor</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>JOURNEY</h2>
      <hr>
      <p>Destinasi</p>
    </div>
    <div class="row">
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="<?php echo base_url(); ?>/assets/img/services/sumbar.png" alt=" "> </div>
        <div class="service-desc">
          <h3>Sumatera Barat</h3>
          <p>Singgalang, Tandikek, Talamau, Sago, Marapi, Talang</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="<?php echo base_url(); ?>/assets/img/services/kerinci.png" alt=" "> </div>
        <div class="service-desc">
          <h3>Jambi</h3>
          <p>Kerinci, Gunung Tujuh</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="<?php echo base_url(); ?>/assets/img/services/jawa.png" alt=" "> </div>
        <div class="service-desc">
          <h3>Jawa</h3>
          <p>Sumbing, Slamet, Sindoro, Sumbing, Merapi, Merbaru dll</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="<?php echo base_url(); ?>/assets/img/services/rinjani.png" alt=" "> </div>
        <div class="service-desc">
          <h3>Nusa Tenggara</h3>
          <p>Rinjani, Tambora, Inerie</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Kumpulan Perjalanan</h2>
      <hr>
      <p>Dokumentasi Event dan kisah tentang perjalanan kami ke berbagai daerah. <br></p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter=".SumateraBarat">Sumatera Barat</a></li>
            <li><a href="#" data-filter=".Jambi">Jambi</a></li>
            <li><a href="#" data-filter=".Jawa">Jawa</a></li>
            <li><a href="#" data-filter=".NusaTenggara">Nusa Tenggara</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 Sumatera Barat">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/marapi1-large.JPG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Pucak Merpati, Marapi</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/marapi1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 SumateraBarat">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/marapi2-large.JPG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Puncak Merpati, Marapi</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/marapi2-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 SumateraBarat">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/singgalang1-large.JPG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>BRO BRO BRO!!</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/singgalang1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 SumateraBarat">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/singgalang2-large.JPG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dawn</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/singgalang2-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 SumateraBarat">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/singgalang3-large.JPG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Mystical</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/singgalang3-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 SumateraBarat">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/tandikek1-large.JPG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Indonesia</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/tandikek1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 SumateraBarat">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/tandikek2-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Bro!</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/tandikek2-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		
        <div class="col-sm-6 col-md-4 Jawa">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/merapi1-large.JPEG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>My Friend</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/merapi1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 Jawa">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/merapi2-large.JPEG" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Pasar Bubrah</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/merapi2-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 Jawa">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/prau1-large.jpeg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>PI Temanggung</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/prau1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 Jawa">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/slamet1-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Puncak Rajawali</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/slamet1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 Jawa">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/merbabu1-large.jpeg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Puncak Kenteng Songo</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/merbabu1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 Jawa">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/sumbing1-large.jpeg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Watu Kotak</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/sumbing1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 Jambi">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/kerinci1-large.jpeg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Team</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/kerinci1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 Jambi">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/kerinci2-large.jpeg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Friend</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/kerinci2-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 NusaTenggara">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/rinjani1-large.jpeg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Summit</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/rinjani1-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-4 NusaTenggara">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>/assets/img/portfolio/rinjani2-large.jpeg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Friend</h4>
              </div>
              <img src="<?php echo base_url(); ?>/assets/img/portfolio/rinjani2-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="section-title">
        <h2>Note</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div id="testimonial" class="owl-carousel owl-theme">
            <div class="item">
              <p>"Believe In Imposible"</p>
              <p>- Ari Rizki Ramanda -</p>
            </div>
            <div class="item">
              <p>"Berjalanlah sejauh mungkin, kelak kau akan tau, tak ada tempat ternyaman selain rumah."</p>
              <p>- Ari Rizki Ramanda -</p>
            </div>
            <div class="item">
              <p>"Jika ingin menggali potensimu jauh lebih dalam, naik gununglah, karna gunung mengajarkan segalanya."</p>
              <p>- Ari Rizki Ramanda -</p>
            </div>
            <div class="item">
              <p>"Ketika tengah berada diseleksi alam, yang akan menyisihkan makhluk lemah, dan menghasilkan manusia yang kuat dan pantang menyerah.</p>
              <p>- Ari Rizki Ramanda -</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact Us</h2>
      <hr>
      <p>For more information you can contact us via :</p>
    </div>
    <div class="col-md-10 col-md-offset-1 contact-info">
      <div class="col-md-4">
        <h3>Kota Padang</h3>
        <hr>
        <div class="contact-item">
          <p>Komplek Filano Jaya</p>
          <p>Padang, Indonesia</p>
          <p>Buka 24 Jam</p>
         
        </div>
      </div>
      <div class="col-md-4">
        <h3>DKI Jakarta</h3>
        <hr>
        <div class="contact-item">
          <p>Jalan Plumpang Semper</p>
          <p>Jakarta, Indonesia</p>
          <p>Buka 24 Jam</p>
          </div>
      </div>
      <div class="col-md-4">
        <h3>Contact Info</h3>
        <hr>
        <div class="contact-item">
          <p>Phone: +62 896 1299 8338</p>
          <p>Phone: +62 852 7818 1055</p>
          <p>Email: aririzkiramanda@yahoo.com</p>
        </div>
      </div>
    </div>