    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Feedback Form</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Home</a></li>
              <li>&bullet;</li>
              <li>Feedback</li>
            </ul>
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

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            
        <form action="save_feedback.php" method="post" enctype="multipart/form-data" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="form-row">
                  <div class="title-card">
                      <h2>Send Feedback For Us!</h2>
                  </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="nama">Nama</label>
                  <input type="text" id="nama" class="form-control " name="nama" value="<?php echo $_SESSION['nama']; ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="no_hp">No Telepon</label>
                  <input type="text" id="no_hp" class="form-control " name="no_hp" value="<?php echo $_SESSION['no_hp']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control " name="email" value="<?php echo $_SESSION['email']; ?>">
                </div>
                <div class="col-md-6 form-goup">
                    <label class="text-black font-weight-bold" for="gambar">Foto Profil</label>
                    <input type="file" id="file" class="form-control " name="gambar">
                </div>

              <div class="form-group">
                </div>
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="message">Feedback</label>
                  <textarea name="pesan" id="message" class="form-control " cols="30" rows="8" placeholder="Say something about Miracle Hotel..."></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 form-group">
                  <input type="submit" name="submit" value="Send!" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                </div>
              </div>
            </div>
        </form>

          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span class="text-black"> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
                <p><span class="d-block">Phone:</span> <span class="text-black"> (+1) 435 3533</span></p>
                <p><span class="d-block">Email:</span> <span class="text-black"> info@yourdomain.com</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
          </div>
        </div>
      </section>