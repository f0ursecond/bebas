<?php

include 'koneksi.php';

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];
	
    $query = "DELETE FROM data_masuk WHERE nik=$nik";
    $sql = mysqli_query($conn, $query);

	
    if ($sql) {
        header('Location: tampil.php?hapus=sukses');
	
    } else {
        echo "<script>alert('Data gagal dihapus')</script>";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="tampil.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>

<body>
<nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg  nav2"
    >
      <div class="container">
        <a class="navbar-brand nav-link" href="#home"> Stay Safe & Healthy </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse text-right"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item1">
              <a class="nav-link" href="index.html"> Home </a>
            </li>
            <li class="nav-item2">
              <a class="nav-link" href="index.php"> Entry Data </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="main">
        <h2 >Form Tampil Data</h2><br>

        <table class="border border-dark">
            <tr class="border border-dark">
                <th class="border border-dark text-center" >No</th>
                <th class="border border-dark text-center" >NIK</th>
                <th class="border border-dark text-center">Nama</th>
                <th class="border border-dark text-center">Tgl Diagnosa</th>
                <th class="border border-dark text-center">Keterangan</th>
                <th class="border border-dark text-center" colspan="2">Aksi</th>
            </tr>
           
            <?php
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM data_masuk");
                    while ($data = mysqli_fetch_array($query)) {
                ?>
            <tr class="border border-dark">
                <td class="border border-dark"><?php echo $no ?></td>
                <td class="border border-dark"><?php echo $data['nik']; ?></td>
                <td class="border border-dark"><?php echo $data['nama']; ?></td>
                <td class="border border-dark"><?php echo $data['tgl_diagnosa']; ?></td>
                <td class="border border-dark"><?php echo $data['keterangan']; ?></td>
                <td class="border border-dark"><a href='edit.php?nik="<?= $data['nik'] ?>"'>Update</a></td>
                <td class="border border-dark"><a href='tampil_siswa.php?nik="<?= $data['nik'] ?>"'>Delete</a></td>
            </tr>
                <?php
                $no++;
                }
                ?>
        </table>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br>

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