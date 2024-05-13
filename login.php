    <section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>
            <h1 class="heading">A Best Place To Stay</h1>
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

    <section class="section bg-light pb-0"  >
      <div class="container">
        <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
                <?php 
                  include 'koneksi.php';
                  //menangkap data yang dikirim dari form login

                  if(isset($_POST["submit"])){//jika tombol login di klik
                  	$username=$_POST["username"];
                  	$password=($_POST["password"]);
                  
                  	if($username!="" && $password!=""){
                    
                  		// cek kecocokan username dan password
                  		$em = mysqli_query($conn, "select * from pelanggan where username = '$username' AND password = '$password'");
                  		$data = mysqli_fetch_array($em);
                    
                  		if(empty($data)) // username atau password salah
                  		{
                  			echo "<div class='alert alert-danger alert-dismissable'>
                  					<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
                  						Username atau password salah
                  					</div>";
                  		}
                  		else // username dan password cocok
                  		{	
                  			$_SESSION["username"]=$data["username"];
                  			$_SESSION["password"]=$data["password"];
                  			$_SESSION["id_pelanggan"]=$data["id_pelanggan"];
                  			$_SESSION["nama"]=$data["nama"];
                  			$_SESSION["no_hp"]=$data["no_hp"];
                  			$_SESSION["email"]=$data["email"];
                      
                  			// arahkan ke halaman index pasca login
                  			echo "<script> alert('selamat datang ".$_SESSION['nama']."'); window.location.href='index.php?page=home'; </script>";
                  		}
                  	}
                  	else
                  	{
                  		echo "<div class='alert alert-danger alert-dismissable'>
                  				<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
                  					Username atau password tidak boleh kosong!
                  				</div>";
                  	}
                  }
                  ?>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
            <figure class="img-absolute">
              <img src="images/food-1.jpg" alt="Image" class="img-fluid">
            </figure>
            <img src="images/img_4.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
            <h2 class="heading">Welcome!</h2>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://www.youtube.com/watch?v=nLeiVZ9BDKA"  data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
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
