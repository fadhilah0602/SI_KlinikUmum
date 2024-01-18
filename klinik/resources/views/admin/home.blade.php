<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/homeadmin.css">

    <i class='bx bxs-clinic'></i>
    <title>SIK Dr.Zul</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-clinic'></i>
            <span class="text">SIK Dr.Zul</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="/adminhome">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a href="/adminprofile">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li>
                <a href="/adminpasien">
                    <i class='bx bxs-group user-icon'></i>
                    <span class="text">Pasien</span>
                </a>
            </li>
            <li>
                <a href="/admindokter">
                    <i class='bx bxs-user-plus'></i>
                    <span class="text">Dokter</span>
                </a>
            </li>
            <li>
                <a href="/poli">
                    <i class='bx bxs-layout'></i>
                    <span class="text">Poli</span>
                </a>
            </li>



            <li>
                <a href="/jadwaldokter">
                    <i class='bx bx-edit'></i>
                    <span class="text">Jadwal Dokter</span>
                </a>
            </li>

            <li>
                <a href="/jadwalpemeriksaan">
                <i class='bx bx-edit'></i>
                    <span class="text">Jadwal Pemeriksaan</span>
                </a>
            </li>
            <li>
                <a href="/hasilpemeriksaan">
                <i class='bx bx-edit'></i>
                    <span class="text">Hasil Pemeriksaan</span>
                </a>
            </li>
            <li>
                <a href="/user">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">User</span>
                </a>
            </li>
            <li>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
            </li>
            <li>
                <a href="/home" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->

        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <ul class="box-info">
                <li>
                    <i class='bx bx-face'></i>
                    <span class="text">
                        <h3>Hi, Admin 1</h3>
                        <p>Admin 1 Klinik Dr.Zul</p>
                    </span>
                </li>
            </ul>
            <div class="table-data">
                <div class="table-data">
                    <div class="container">
                        <div class="header">
                            <p class="page-title">NOMOR ANTREAN</p>
                        </div>
                        <div class="content">
                            {{-- @foreach ($pasiens as $pasien, $dokters as $dokter, $ruangs as $ruang, $jadwals as $jadwal) --}}
                                <table>
                                    <tr>
                                        <div class="label1">001</div>
                                        {{-- <input type="text" id="pasien_id" name="pasien_id" value="{!! $pasien->pasien_id !!}"> --}}
                                    </tr>
                                    <tr>
                                        <div class="label2">Atas Nama : </div>
                                        {{-- <input type="text" id="name" name="name" value="{!! $pasien->name !!}"> --}}
                                    </tr>
                                    <tr>
                                        <div class="label3">Dokter</div>
                                        <div class="label-name">dr. Zulkarnain Nasution</div>
                                    </tr>
                                    <div class="wrapper">
                                        <div class="label4">Poli Tujuan</div>
                                        <div class="label5">No Rekam Media</div>
                                    </div>
                                    <div class="wrapper-2">
                                        <div class="label-poli">Poli Umum 2</div>
                                        <div class="label-media">K-0001</div>
                                    </div>
                                    <div class="wrapper">
                                        <div class="label6">Waktu Daftar</div>
                                        <div class="label7">Waktu Panggil</div>
                                    </div>
                                    <div class="wrapper-2">
                                        <div class="label-daftar">001</div>
                                        <div class="label-panggil">002</div>
                                    </div>
                                </table>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                    <table>
                        <div>
                            <div class="wrapper-3">
                                <div class="label8">Poli</div>
                                <div class="label9">Dokter</div>
                            </div>
                            <div class="wrapper-4">
                                <div class="label-poli1">Umum</div>
                                <div class="label-dokter">dr.Zainal</div>
                            </div>
                            <div class="wrapper-3">
                                <div class="label10">Waktu</div>
                                <div class="label11">Antrean</div>
                            </div>
                            <div class="wrapper-4">
                                <div class="label-waktu">16.00 - 22.00</div>
                                <div class="label-antrean">3/4 antrean</div>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>