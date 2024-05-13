    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Rooms</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Home</a></li>
              <li>&bullet;</li>
              <li>Rooms</li>
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

    <section class="section pb-4">
      <div class="container">
       
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Person</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Room</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="productCode" id="productCode" class="form-control">
                          <option value="default">Choose...</option>
                          <option value="Standart">Standart</option>
                          <option value="Deluxe">Deluxe</option>
                          <option value="Superior">Superior</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
                </div>
              </div>
            </form>
          </div>


        </div>
      </div>
    </section>
    <!-- Modal Start -->
    <div id="resultModal" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Miracle Front Office</h5>
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
    <!-- Modal End -->
    
    <section class="section">
      <div class="container">
        
        <div class="row">
        <?php
			  $sql=mysqli_query($conn,"SELECT galeri.*,kamar.* FROM galeri INNER JOIN kamar ON kamar.No_Kamar = galeri.No_Kamar");
        foreach ($sql as $value) {
			  ?>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                <img src="images/<?= $value['gambar'];?>" alt="Miracle Hotel" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2><?= $value['Jenis']; ?></h2>
                <span class="text-uppercase letter-spacing-1">IDR <?= $value['Price']; ?> /Night</span>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    
    <section class="section bg-light">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade">Great Offers</h2>
            <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
      <?php
			  $sql=mysqli_query($conn,"SELECT galeri.*,kamar.* FROM galeri INNER JOIN kamar ON kamar.No_Kamar = galeri.No_Kamar");
        foreach ($sql as $value) {
			  ?>
        <div class="site-block-half d-block d-lg-flex bg-white mb-4 shadow" data-aos="fade" data-aos-delay="100">
          <a href="#" class="image d-block bg-image-2" style="background-image: url('images/<?= $value['gambar'];?>');"></a>
          <div class="text">
            <span class="d-block mb-4"><span class="display-4 text-primary">IDR <?= $value['Price']; ?></span> <span class="text-uppercase letter-spacing-2">/ night</span> </span>
            <h2 class="mb-4"><?= $value['Jenis']; ?></h2>
            <p><?= $value['deskripsi']; ?></p>
            <p><a href="index.php?page=reservation" class="btn btn-primary text-white">Book Now</a></p>
          </div>
        </div>
<?php } ?>
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