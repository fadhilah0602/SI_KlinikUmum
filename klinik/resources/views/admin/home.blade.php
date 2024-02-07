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
                <a href="/contact">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Contact</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
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
            <header>
                <ul class="box-info">
                    <li>
                        <span class="text">
                            <h3>Welcome, Admin!</h3>
                        </span>
                    </li>
                </ul>
            </header>
            <ul class="box-inforow">
                <li>
                    <div class="box-info1">
                            <h3>{{$totalpasien}}</h3>
                            <p>Pasien</p>
                        <a href="/adminpasien">More info</a>
                    </div>
                </li>
                <li>
                    <div class="box-info2">
                            <h3>{{$totaldokter}}</h3>
                            <p>Dokter</p>
                        <a href="/admindokter">More info</a>
                    </div>
                </li>
                <li>
                    <div class="box-info3">
                            <h3>{{$totalpoli}}</h3>
                            <p>Poli</p>
                        <a href="/poli">More info</a>
                    </div>
                </li>
                <li>
                    <div class="box-info4">
                            <h3>{{$totalantrean}}</h3>
                            <p>Antrean</p>
                        <a href="/jadwalpemeriksaan">More info</a>
                    </div>
                </li>
            </ul>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>
