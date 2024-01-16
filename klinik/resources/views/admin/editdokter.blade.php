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

    <section id="content">
        <main>
            <ul class="box-info">
                <li>
                    <span class="text">
                        <div class="header">
                            <h4> Edit Dokter</h4>
                        </div>
                        <div class="form-group">
                            <label for="nip">Nip:</label>
                            <input type="text" id="nip" name="nip">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir:</label>
                            <input type="number" id="tempat_lahir" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir"></input>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin:</label>
                            <input type="text" id="gender" name="gender"></input>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" name="alamat"></input>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No Hp:</label>
                            <input type="text" id="nohp" name="nohp"></input>
                        </div>
                        <div class="form-group">
                            <label for="spesialis">Spesialis:</label>
                            <input type="text" id="spesialis" name="spesialis"></input>
                        </div>

                        <button type="submit">Submit</button>

                        {{-- <script>
                            function goToNextPage() {
                                // Gantilah URL atau path sesuai kebutuhan
                                window.location.href = "admindokter";
                            }
                        </script> --}}
                        </form>
                        </div>
                </li>
            </ul>
</body>
</li>
</ul>
</section>
<!-- CONTENT -->

<script src="script.js"></script>
</body>

</html>
