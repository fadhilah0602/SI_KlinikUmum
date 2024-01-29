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
            <li class="active">
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

    <section id="content">
        <main>
            <ul class="box-info">
                <li>
                    <form method="POST" action="{{ url('add-poli') }}">
                        @csrf
                        <div class="header">
                            <h4> Tambah Data Ruangan</h4>
                        </div>
                        <div class="form-group">
                            {{-- <label for="name">Nama Dokter :</label>
                            <input type="text" id="name" name="name"> --}}
                            <label for="dokter_id">Pilih Dokter (Dokter):</label>
                                <select name="dokter_id" id="dokter_id" class="custom-select">
                                    <option value="">---Pilih Dokter---</option>
                                    @foreach($dokters as $dokter)
                                        <option value="{{ $dokter->dokter_id }}">{{ $dokter->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_ruangan">Nama Poli :</label>
                            <input type="text" id="nama_ruangan" name="nama_ruangan">
                        </div>
                        <div class="form-group">
                            <label for="jenis_ruangan">Jenis Poli:</label>
                            <input type="text" id="jenis_ruangan" name="jenis_ruangan">
                        </div>

                        <button type="submit">Submit</button>

                        {{-- <script>
                                function goToNextPage() {
                                    // Gantilah URL atau path sesuai kebutuhan
                                    window.location.href = "adminpasien";
                                }
                            </script> --}}
                    </form>
                </li>
            </ul>

    </section>


    <script src="script.js"></script>
</body>

</html>
