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
            <li class="active">
                <a href="/pasienhome">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a href="/pasienprofile">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li>
                <a href="/pasienriwayat">
                    <i class='bx bxs-file file-icon'></i>
                    <span class="text">Hasil Pemeriksaan</span>
                </a>
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


    <section id="content">
        <main>
            <ul class="box-info">
                <li>
                    <i class='bx bxs-clinic'></i>
                    <span class="text">
                        <h3>Klinik Umum Dr.Zul</h3>
                        <p>Form Pendaftaran Antrean</p>
                    </span>
                </li>
            </ul>
            <ul class="box-info">
                <li>
                    <form method="POST" action="{{ url('createjadwalpemeriksaan') }}">
                    @csrf
                        <div class="form-group">
                            <label for="dokter_id">Pilih Dokter :</label>
                            <select name="dokter_id" id="dokter_id" class="custom-select">
                                <option value="">---Pilih Dokter---</option>
                                @foreach ($dokters as $dokter)
                                    <option value="{{ $dokter->dokter_id }}">{{ $dokter->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pasien_id">Pilih Paien :</label>
                            <select name="pasien_id" id="pasien_id" class="custom-select">
                                <option value="">---Pilih Pasien---</option>
                                @foreach ($pasiens as $pasien)
                                    <option value="{{ $pasien->pasien_id }}">{{ $pasien->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari:</label>
                            <select id="hari" name="hari">
                                <option value="">===Pilih===</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu:</label>
                            <input type="date" id="waktu" name="waktu">
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </li>
            </ul>
        </main>
    </section>


</body>
</li>

</ul>


</section>
<!-- CONTENT -->



<script src="script.js"></script>
</body>

</html>
