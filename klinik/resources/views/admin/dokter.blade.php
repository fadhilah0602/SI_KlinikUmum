<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

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
            <li>
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
            <li class="active">
                <a href="/admindokter">
                    <i class='bx bxs-user-plus'></i>
                    <span class="text">Dokter</span>
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
        <!-- MAIN -->
        <main>
            <!-- <button href="/createdokter"class="bx bx-button2">Tambah Dokter</button> -->
            <!-- <button type="button" onclick="goToAnotherPage(/createdokter)">Tambah Dokter</button> -->
            <button type="button" onclick="goToNextPage()">Tambah Dokter</button>

            <script>
              function goToNextPage() {
                    // Gantilah URL atau path sesuai kebutuhan
                     window.location.href = "createdokter";
                      }
            </script>
            <ul class="box-info">
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>Dr. Cindy</h3>
                        <p>Dokter Umum</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>Dr. Zul</h3>
                        <p>Dokter Umum</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>Dr. Zee</h3>
                        <p>Dokter Umum</p>
                    </span>
                </li>

            </ul>

            {{-- <button class="Button">Tambah Dokter</button> --}}

        </main>
        <!-- MAIN -->

    </section>
    <!-- CONTENT -->




    <script src="script.js"></script>
</body>

</html>
