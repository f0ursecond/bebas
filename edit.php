<?php 
// menyambungkan ke database
include 'koneksi.php';
//ambil variabel nik dari query string
$nik = $_GET['nik'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM data_masuk WHERE nik=$nik";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql); 
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
  echo "<script>alert('Data tidak ditemukan')</script>";
}

// simpan perubahan
// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['submit'])) {
	// ambil data dari formulir input sebelumnya
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $tgl_diagnosa = $_POST['tgl_diagnosa'];
  $keterangan = $_POST['keterangan'];

  // buat query update
  $query = "UPDATE data_masuk SET nik='$nik', nama='$nama', tgl_diagnosa='$tgl_diagnosa', keterangan='$keterangan' WHERE nik=$nik";
  $sql = mysqli_query($conn, $query);

  // cek apakah query update berhasil?
  if ($sql)  {
	  // jika berhasil alihkan ke tabel tampil_siswa.php
    header('Location: tampil.php?edit=sukses.php');
  } else {
	  // kalau gagal tampilkan pesan
    echo "<script>alert('Data gagal diedit')</script>";
	// kemudian jika gagal akan tetap pada halaman edit.php
	header("Refresh:0; url=edit.php");
  }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="edit.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>

<body>
    

<div class="anjay">
        <h1>Form Daftar</h1>
        <form>
            <div class="form-group pb-2">
                <label for="nama">NIK</label>
                <input type="text" name="nik" class="form-control"  value="<?php echo $data['nik']; ?>" >
            </div>
        
            <div class="form-group pb-2">
                <label >NAMA</label>
                <input type="Text" name="nama" class="form-control"  value="<?php echo $data['nama']; ?>">
            </div>
        
            <div class="form-group pb-2">
                <label for="alamat">Tanggal Diagnosa</label>
                <input type="date" name="tgl_diagnosa" class="form-control"  required  value="<?php echo $data['tgl_diagnosa']; ?>">
            </div>

            <div class="form-group pb-2">
                <label for="alamat">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="3"  value="<?php echo $data['keterangan']; ?>"></textarea>
            </div>
        
            <div class="form-group pb-2">
                <input type="submit" value="Submit" name="submit">
            </div>
        
            
        </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
</body>
</html>