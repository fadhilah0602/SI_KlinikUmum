<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

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
            
            <li class="active">
                <a href="/dokterpemeriksaan">
                    <i class='bx bx-edit'></i>
                    <span class="text">Hasil Pemeriksaan</span>
                </a>
            </li>
            <li>
                <a href="/suratketerangan">
                    <i class='bx bxs-file file-icon'></i>
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
    <!-- SIDEBAR -->
    <section id="content">
        <main>
            <ul class="box-info">
                <li>
                    <form method="POST" action="{{ url('createhasilpemeriksaan') }}">
                        @csrf
                        @method('post')
                        <div class="header">
                            <h4> Tambah Hasil Pemeriksaan</h4>
                        </div>
                        <div class="form-group">
                            {{-- <label for="name">Nama Dokter :</label>
                            <input type="text" id="name" name="name"> --}}
                            <label for="dokter_id">Pilih Dokter :</label>
                            <select name="dokter_id" id="dokter_id" class="custom-select">
                                <option value="">---Pilih Dokter---</option>
                                @foreach ($dokters as $dokter)
                                    <option value="{{ $dokter->dokter_id }}">{{ $dokter->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {{-- <label for="name">Nama Pasien :</label>
                            <input type="text" id="name" name="name"> --}}
                            <label for="pasien_id">Pilih Pasien :</label>
                            <select name="pasien_id" id="pasien_id" class="custom-select">
                                <option value="">---Pilih Pasien---</option>
                                @foreach ($pasiens as $pasien)
                                    <option value="{{ $pasien->pasien_id }}">{{ $pasien->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="jenis_pemeriksaan">Jenis Pemeriksaan:</label>
                            <input type="text" id="jenis_pemeriksaan" name="jenis_pemeriksaan">
                        </div>
                        <div class="form-group">
                            <label for="diagnosa">Diagnosa:</label>
                            <input type="text" id="diagnosa" name="diagnosa">
                        </div>
                        <div class="form-group">
                            <label for="obat">Obat:</label>
                            <input type="text" id="obat" name="obat">
                        </div>
                        
                        <button type="submit">Submit</button>
                    </form>
                </li>
            </ul>
    </section>


<script src="script.js"></script>
</body>