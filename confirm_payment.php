<?php
  if(@$_SESSION['username']!=""){
?>
    <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Confirmation Form</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.html">Home</a></li>
              <li>&bullet;</li>
              <li>Confirmation</li>
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
            
            <form action="" method="post" enctype="multipart/form-data" class="bg-white p-md-5 p-4 mb-5 border">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="id_pelanggan">ID Pelanggan</label>
                  <input type="text" id="id_pelanggan" class="form-control " name="id_pelanggan" value="<?php echo $_SESSION['id_pelanggan']; ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="nama">Nama</label>
                  <input type="text" id="nama" class="form-control " name="nama" value="<?php echo $_SESSION['nama']; ?>">
                </div>
              </div>
          
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <label class="text-black font-weight-bold" for="email">Jumlah Transfer</label>
                  <input type="text" id="jumlah_transfer" class="form-control " name="jumlah_transfer">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="method">Metode Transfer</label>
                  <select name="method" id="" class="form-control">
                      <option value="...">Choose</option>
                      <option value="QRIS">QRIS</option>
                      <option value="Transfer Bank">Transfer Bank</option>
                      <option value="Transfer VA">Transfer VA</option>
                      <option value="Indomart">Indomart</option>
                      <option value="Alfamart">Alfamart</option>
                  </select>
                  <input type="hidden" class="form-control" name="status" value="Pending">
                </div>
                <div class="col-md-6 form-group">
                  <label class="text-black font-weight-bold" for="buktitf">Bukti Transfer</label>
                  <input type="file" id="" name="gambar" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="submit" name="submit" value="Confirm Payment" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
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
        include "koneksi.php"; 
	    if(isset($_POST['submit'])){
		$nama=$_POST['id_pelanggan'];
		$jumlah_transfer=$_POST['jumlah_transfer'];
		$method=$_POST['method'];
		$status=$_POST['status'];
	
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        // Set path folder tempat menyimpan gambarnya
        $path = "images/".$nama_file;
        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
          // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
          if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
            // Proses upload
            if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
              // Jika gambar berhasil diupload, Lakukan :  
              // Proses simpan ke Database
            
        	$sqlsimpan = mysqli_query($conn, "insert into konfirmasi (id_pelanggan,total_payment, method, status, gambar)
        	 values
        	  ('$nama',
        	  '$jumlah_transfer',
        	  '$method',
        	  '$status',
            '$nama_file')");
            
        	if($sqlsimpan){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                echo "<script>alert('Konfirmasi berhasil !!!')</script>";
                header("location:index.php"); // Redirectke halaman index.php
              }else{
                // Jika Gagal, Lakukan :
                echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.!!!')</script>";
               header("location:?page=confirm_payment");
              }
            }else{
              // Jika gambar gagal diupload, Lakukan :
              echo "<script>alert('Maaf, Gambar gagal untuk diupload!!!')</script>";
              header("location:?page=confirm_payment");
        }
          }else{
            // Jika ukuran file lebih dari 1MB, lakukan :
          	echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB!!!')</script>";
           	header("location:?page=confirm_payment");
         }
        }else{
          // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
          echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.!!!')</script>";
          header("location:?page=confirm_payment");
        }
        }
        }else{
        	 echo "<script>alert('Silahkan Login Terlebih Dahulu atau registrasi terlebih dahulu!');
                   window.location='index.php?page=login';</script>";
        }	
        	?>