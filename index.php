<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css">
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
              <a class="nav-link" href="home.html"> Home </a>
            </li>
            <li class="nav-item2">
              <a class="nav-link" href="tampil.php"> Data Masuk </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="anjay">
        <h1>Form Daftar</h1>
        <form>
            <div class="form-group pb-2">
                <label for="nama">NIK</label>
                <input type="text" name="nik" class="form-control" >
            </div>
        
            <div class="form-group pb-2">
                <label >NAMA</label>
                <input type="Text" name="nama" class="form-control">
            </div>
        
            <div class="form-group pb-2">
                <label for="alamat">Tanggal Diagnosa</label>
                <input type="date" name="tgl_diagnosa" class="form-control"  required>
            </div>

            <div class="form-group pb-2">
                <label for="alamat">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="3"></textarea>
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