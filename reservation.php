<?php
  if(@$_SESSION['username']!=""){
?>
    <?php
    if (!isset($_GET['conf'])){
    ?>
    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Reservation Form</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Home</a></li>
              <li>&bullet;</li>
              <li>Reservation</li>
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
            
            <form action="index.php?page=reservation&conf=y" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="form-row">
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
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control " name="email" value="<?php echo $_SESSION['email']; ?>">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                  <input required type="date" id="" name="checkin" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                  <input required type="date" id="" name="checkout" class="form-control">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label for="tamu" class="font-weight-bold text-black">Jumlah Tamu</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="jml_tamu" id="adults" class="form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4+</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Room Type</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="kamar" id="kamar" class="form-control" onChange="getprice(this.value)">
                      <option value="default">Choose...</option>
                      <?php
                      $sql = mysqli_query($conn, "SELECT * FROM kamar");
                      foreach ($sql as $value) {
                      ?>
                      <option value="<?= $value['No_Kamar']; ?>"><?= $value['Jenis']; ?></option>
                      <?php
                      } ?>
                    </select>
                  </div>
                </div>
                <div id="dvprice">
                 <div class="form-row">
                     <div class="col-md-12 form-group">
                      <label class="text-black font-weight-bold" for="price">Price</label>
                      <input type="number" id="price" class="form-control " name="price">
                    </div>
                  </div>
                </div>

              

              <div class="form-row mb-4">
                    </div>
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="message">Notes</label>
                  <textarea name="pesan" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="submit" name="submit" value="Check Availible" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
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

    <!-- PHP -->
    <?php
    } elseif (isset($_GET['conf'])){
      
      $nama=$_POST['nama'];
      $no_hp=$_POST['no_hp'];
      $email=$_POST['email'];
      $cek_in=$_POST['checkin'];
      $cek_out=$_POST['checkout'];
      $jml_tamu=$_POST['jml_tamu'];
      $kamar=$_POST['kamar'];
      $price=substr($_POST['price'],3);
      $pesan=$_POST['pesan'];
      $waktu1=strtotime($_POST['checkin']);
      $waktu2=strtotime($_POST['checkout']);
      $secs = $waktu2 - $waktu1;
      $today = date('Y-m-d');
      $lama_menginap = $secs / 86400;
      if ($lama_menginap <= 0) {
        echo "<script>
        alert('Data tidak Valid!');
        window.location.href='index.php?page=reservation';
        </script>";
      }elseif ($cek_in < $today) {
        echo "<script>
        alert('Tidak bisa memesan kamar pada tanggal yang sudah lewat!');
        window.location.href='index.php?page=reservation';
        </script>";
      }
    ?>
    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3"> Confirm Reservation Form</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Home</a></li>
              <li>&bullet;</li>
              <li>Confirm Reservation</li>
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
            
            <form action="auth-reservation.php" method="post" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="nama">Nama</label>
                  <input type="text" id="nama" class="form-control " name="nama" value="<?= $nama; ?>" readonly>
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="no_hp">No Telepon</label>
                  <input type="text" id="no_hp" class="form-control " name="no_hp" value="<?= $no_hp; ?>" readonly>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control " name="email" value="<?= $email; ?>" readonly >
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                  <input type="date" id="checkin_date" name="tgl_masuk" class="form-control" value="<?= $cek_in; ?>" readonly>
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                  <input type="date" id="checkout_date" name="tgl_keluar" class="form-control" value="<?= $cek_out; ?>" readonly>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="tamu" class="font-weight-bold text-black">Jumlah Tamu</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <input type="text" class="form-control" name="jml_tamu" value="<?= $jml_tamu; ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Room Type</label>
                  <div class="field-icon-wrap">
                      <input type="kamar" name="No_Kamar" class="form-control" value="<?= $kamar; ?>" readonly >
                  </div>
                </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="price">Price / IDR</label>
                  <input type="text" id="price" class="form-control " name="price" value="<?= $price ?>" readonly>
                </div>
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="price">Total Price / IDR</label>
                  <input type="text" id="biaya" class="form-control " name="biaya" value="<?= $tot=$lama_menginap*$price*$jml_tamu; ?>" readonly>
                </div>
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="price">Lama Menginap</label>
                  <input type="text" class="form-control " name="lama_menginap" value="<?= $lama_menginap; ?> Hari" readonly>
                </div>
              </div>
              </div>

              

              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="message">Notes</label>
                  <textarea name="pesan" id="pesan" class="form-control " cols="30" rows="8"><?= $pesan ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <button type="submit" name="submit" class="btn btn-primary text-white py-3 px-5 font-weight-bold">Reserve Now</button>
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

    <section class="section testimonial-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

          </div>
            <!-- END slider -->
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
<?php
    }
  }else{
    echo "<script>alert('Silahkan Login atau Register terlebih dahulu.');
          window.location='index.php?page=login';</script>";
  }
?>