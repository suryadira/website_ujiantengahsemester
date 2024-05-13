<?php
    session_start();
?>
<?php
                    if (isset($_POST['submit'])) {
                    include 'koneksi.php';
                        // Get the current timestamp
                        $timestamp = time();
                        // Generate a unique ID using the timestamp and the uniqid function
                        $No_Faktur = uniqid($timestamp);
                        // Extract the first 10 characters of the ID
                        $No_Faktur = substr($No_Faktur, 0, 8);

                        $No_Kamar = $_POST['No_Kamar'];
                        $Nama=$_POST['nama'];
                        $Telp=$_POST['no_hp'];
                        $Email=$_POST['email'];
                        $id_pelanggan =$_SESSION['id_pelanggan'];
                        $tgl_masuk = $_POST['tgl_masuk'];
                        $tgl_keluar= $_POST['tgl_keluar'];
                        $lama_menginap= $_POST['lama_menginap'];
                        $price=substr($_POST['biaya'],0,9);
                        $pesan=$_POST['pesan'];
                
                        $sql = "INSERT INTO transaksi (No_Faktur,No_Kamar,id_pelanggan,tgl_masuk,tgl_keluar,lama_menginap,Price,Nama,Telp,Email,pesan)
                        VALUES ('$No_Faktur','$No_Kamar','$id_pelanggan','$tgl_masuk','$tgl_keluar','$lama_menginap','$price','$Nama','$Telp','$Email','$pesan')";


                        if(mysqli_query($conn,$sql)){
                            echo "<script>
                        alert('Reservasi sukses!');
                        window.location.href='index.php?page=reservation';
                        </script>";
                        }else {
                            echo "<script>
                        alert('Reservation gagal! Kesalahan Database!');
                        window.location.href='index.php?page=reservation';
                        </script>";
                        }
                    }
