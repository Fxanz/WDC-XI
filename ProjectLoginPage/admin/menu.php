<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contoh website admin</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  </head>
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-white" style="margin-left:50px" href="#">Data Siswa SMK TI BALI GLOBAL DENPASAR</a>
        <div class="pojok-kanan">
          <form class="d-flex" role="search" style="margin-left:500px;">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
          </div>
      </div>
    </nav>
    <div class="row gx-0 gy-0 mt-5">
      <div class="col-md-2 bg-dark mt-2 px-3 py-4">
        <ul class="nav flex-column mx-3 mb-5">


          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-utama" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user-graduate mx-2"></i>  Kelas
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">X RPL 1</a>
          <a class="dropdown-item" href="#">X RPL 2</a>
          <a class="dropdown-item" href="#">X RPL 3</a>
        </div>

      </li> <hr class="hr-2">
      <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#"><i class="fa-solid fa-house mx-2"></i> Menu Utama</a>
          </li>
          <hr class="hr-2">
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-chalkboard-user mx-2"></i> Daftar guru</a>
          </li>
          <hr class="hr-1">
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-calendar mx-2"></i> Jadwal Ujian</a>
          </li>
          <hr class="hr-1">
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-marker mx-2 "></i> Nilai Ujian</a>
          </li>
          <hr class="hr-1">
        <li class="nav-item">
            <a href="../logout.php" class="nav-link active text-white" aria-current="page" href="#"><i class="fa-solid fa-power-off mx-2"></i>logout</a>
          </li>


        </ul>

      </div>
      <div class="col-md-10 p-5 ">
        <h3><i class="fa-solid fa-house mx-2"></i> Menu Utama</h3><hr>
        <h1>X RPL 1</h1>
        <div class="row text-white">
          <div class="card text-white bg-primary mb-3 mx-5 mt-4" style="max-width: 18rem;">
            <div class="card-header">Siswa</div>
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-user-graduate mx-2"></i>
              </div>
              <h5 class="card-title">Jumlah siswa</h5>
              <h2><p class="card-text">2000</p></h2>
              <a class="href" href="#"> <p class="card-text text-white">Lihat detail <i class="fa-solid fa-angles-right"></i></p></a>
            </div>
          </div>
          <div class="card text-white bg-primary mb-3 mx-5 bg-danger mt-4" style="max-width: 18rem;">
            <div class="card-header">Guru</div>
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-chalkboard-user mx-2"></i>
              </div>
              <h5 class="card-title">Jumlah guru</h5>
              <h2><p class="card-text">200</p></h2>
             <a class="href" href="#"> <p class="card-text text-white">Lihat detail <i class="fa-solid fa-angles-right"></i></p></a>
            </div>
          </div>
          <div class="card text-white bg-primary mb-3 mx-5 bg-dark mt-4" style="max-width: 18rem;">
            <div class="card-header">Nilai</div>
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-marker mx-2 "></i>
              </div>
              <h5 class="card-title">Rata rata nilai</h5>
              <h2><p class="card-text">80,6</p></h2>
              <a class="href" href="#"> <p class="card-text text-white">Lihat detail <i class="fa-solid fa-angles-right"></i></p></a>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12 mb-3">
              <div class="card mt-5">

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example"class="table table-striped data-table" style="width: 100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jenis kelamin</th>
                          <th>Tempat lahir</th>
                          <th>Umur</th>
                          <th>Agama</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Alfarenza Varelly Dewa Rahman</td>
                          <td>Laki-Laki</td>
                          <td>Banyuwangi</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Anak Agung Gede Bagus Abi Wiguna</td>
                          <td>Laki-Laki</td>
                          <td>Klungkung</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Bintang Diego Banoeatmodjo</td>
                          <td>Laki-Laki</td>
                          <td>Makasar </td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Edson Suarmini Thompson</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Kristen Katolik</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Elika Putri Wicaksana</td>
                          <td>Perempuan</td>
                          <td>Jakarta</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Ezy Fathurohman</td>
                          <td>Laki-Laki</td>
                          <td>Jakarta</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Felix Gunawan</td>
                          <td>Laki-Laki</td>
                          <td>Surabaya</td>
                          <td>17</td>
                          <td>Budha</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>I Gede Arya Lanang Yudarma</td>
                          <td>Laki-Laki</td>
                          <td>Gianyar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>I Gede Hadrian Astrawinata</td>
                          <td>Laki-Laki</td>
                          <td>Sumbawa</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>I Kadek Dawista Lahran</td>
                          <td>Laki-Laki</td>
                          <td>MAS</td>
                          <td>17</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>I Kadek Robert Dananjaya</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>I Ketut Hendrika Nurjaya Prama</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td>I Made Santika Kumara Ananda</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>17</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>I Putu Adik Kreshna Dhana</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>I Putu Eka Kurniawan</td>
                          <td>Laki-Laki</td>
                          <td>Singaraja</td>
                          <td>17</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>16</td>
                          <td>I Putu Gde Meindra Guna</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>17</td>
                          <td>I Putu Nandika Aditya Wicaksana </td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>17</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>18</td>
                          <td>I Putu Reynaldi Rian Ariana</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>19</td>
                          <td>I Putu Satria Wiraputra</td>
                          <td>Laki-Laki</td>
                          <td>Surabaya</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>I Wayan Weda Adi Putra</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>21</td>
                          <td>Ida Bagus Yoga Dharma Putra</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>22</td>
                          <td>Ilyas Nur Firdaus</td>
                          <td>Laki-Laki</td>
                          <td>Malang</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>23</td>
                          <td>Krisna Bagus Pratama</td>
                          <td>Laki-Laki</td>
                          <td>Banyuwangi</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>24</td>
                          <td>Mahaprama Danesh Hiswara </td>
                          <td>Laki-Laki</td>
                          <td>Jakarta</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>25</td>
                          <td>Moch. Agfando Aldovanio</td>
                          <td>Laki-Laki</td>
                          <td>Tuban</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>26</td>
                          <td>Muhamad Syava Anandito </td>
                          <td>Laki-Laki</td>
                          <td>Jakarta</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>27</td>
                          <td>Muhammad Nouval Ibran Firdaus</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>?</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>28</td>
                          <td>Nandya Trias Sruti Ariesta</td>
                          <td>Perempuan</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>29</td>
                          <td>Ni Putu Jessica Wijaya Putri</td>
                          <td>Perempuan</td>
                          <td>Denpasar</td>
                          <td>17</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>30</td>
                          <td>Novena Adenov Azalea Mulya</td>
                          <td>Perempuan</td>
                          <td>Makasar</td>
                          <td>17</td>
                          <td>Kristen Katolik</td>
                        </tr>
                        <tr>
                          <td>31</td>
                          <td>Putri Hadiah Ningrum</td>
                          <td>Perempuan</td>
                          <td>Denpasar</td>
                          <td>?</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>32</td>
                          <td>Putu Eka Piyuza Sagara Dana</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>33</td>
                          <td>Putu Prema Jayasvara</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Hindu</td>
                        </tr>
                        <tr>
                          <td>34</td>
                          <td>Rifatul Qushuriyah</td>
                          <td>Perempuan</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>35</td>
                          <td>Serlyna Dewi Lestari</td>
                          <td>Perempuan</td>
                          <td>Madura</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                        <tr>
                          <td>36</td>
                          <td>Yuswa Andika Qurniawan</td>
                          <td>Laki-Laki</td>
                          <td>Denpasar</td>
                          <td>16</td>
                          <td>Islam</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="../js/jquery-3.5.1.js"></script>
        <script src="../js/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
      </body>
</html>
