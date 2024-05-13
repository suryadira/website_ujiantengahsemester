<section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3"> Portofolio</span>
            <h1 class="heading">Surya Dira</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->
    <!-- Modal Start -->
          <div id="resultModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Portofolio website</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="images/elektro.png" alt="Image" class="img-fluid">
            </figure>
            <img src="images/sr.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Profil</h2>
            <p class="mb-4">saya remaja yang berusia 22 tahun, Saya seorang mahasiswa Jurusan Teknik Elektro Program studi D4 Teknik Otomasi di kampus Politeknik Negeri Bali.</p>
            
          </div>
          
        </div>
      </div>
    </section>
    
    
    <section class="section slider-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Jenjang Pendidikan</h2>
            <p data-aos="fade-up" data-aos-delay="100">2018-2021 SMK Negeri 1 Simpang Empat, Jurusan Teknik Otomotif Kendaraan Ringan</p>
            <p data-aos="fade-up" data-aos-delay="100">Sedang menempuh pendidikan di Politeknik Negeri Bali dengan Jurusan Teknik Elektro, Program Studi D4 Teknik Otomasi</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            <?php
            $sql=mysqli_query($conn,"SELECT * FROM galeri");
            foreach ($sql as $key => $value) {
            ?> 
            <div class="slider-item">
                <a href="images/<?= $value['gambar']; ?>" data-fancybox="images" data-caption="Caption for this image"><img src="images/<?= $value['gambar']; ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <?php }?>
            </div>            
            <!-- END slider -->
          </div>
        </div>
      </div>
    </section>
    
            <!-- END slider -->
        </div>

      </div>
    </section>
    

    <section class="section blog-post-entry bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
        </div>
    </section>

    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
            </div>
          </div>
        </div>
      </section>