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
                <a href="/dokterhome">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a href="/dokterprofile">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            {{-- <li>
                <a href="/dokumen">
                    <i class='bx bxs-group user-icon'></i>
                    <span class="text">Dokumen</span>
                </a>
            </li> --}}
            <li class="active">
                <a href="/suratketerangan">
                    <i class='bx bxs-group user-icon'></i>
                    <span class="text">Surat Keterangan</span>
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

    <section id="content">
        <main>
            <ul class="box-info">
                <li>
                    <form method="POST" action="{{ url('createsurat') }}">
                        @csrf
                        <div class="header">
                            <h4> Tambah Data Pasien</h4>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Dokter:</label>
                            <select name="dokter_id" id="dokter_id" class="custom-select">
                                <option value="">---Pilih Dokter---</option>
                                @foreach ($dokter as $dok)
                                    <option value="{{ $dok->dokter_id }}">{{ $dok->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Nama Pasien:</label>
                            <select name="pasien_id" id="pasien_id" class="custom-select">
                                <option value="">---Pilih Pasien---</option>
                                @foreach ($pasien as $dok)
                                    <option value="{{ $dok->pasien_id }}">{{ $dok->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan :</label>
                            <input type="text" id="keterangan" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="waktu1">Waktu Awal:</label>
                            <input type="date" id="waktu1" name="waktu1">
                        </div>
                        <div class="form-group">
                            <label for="waktu2">Waktu Akhir:</label>
                            <input type="date" id="waktu2" name="waktu2">
                        </div>

                        <button type="submit">Submit</button>
                    </form>
                </li>
            </ul>

    </section>


    <script src="script.js"></script>
</body>

</html>
