<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

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
            <li class="active">
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
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->

        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <ul class="box-info">
                <li>
                    <span class="text">
                        <div class="header">
                            <h4> Edit Jadwal Pemeriksaan</h4>
                        </div>
                        <form
                            method="post"action="{{ route('updatejadwalpemeriksaan.update', $jadwalpemeriksaan->jadwal_pemeriksaan_id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="dokter_id">Nama Dokter:</label>
                                <input type="text" id="dokter_id" name="dokter_id" value="{!! $jadwalpemeriksaan->dokter->name !!}">
                                {{-- <select name="dokter_id" id="dokter_id" class="custom-select">
                                    <option value="">---Pilih Dokter---</option>
                                    @foreach ($dokter as $dk)
                                        <option value="{{ $dk->dokter_id }}">{{ $dk->name }}</option>
                                    @endforeach
                                </select> --}}
                            </div>
                            <div class="form-group">
                                <label for="email">Nama Pasien:</label>
                                <input type="text" id="pasien_id" name="pasien_id" value="{!! $jadwalpemeriksaan->pasien->name !!}">
                            </div>
                            <div class="form-group">
                                <label for="hari">Hari:</label>
                                <select id="hari" name="hari" value="{!! $jadwalpemeriksaan->hari !!}">
                                    <option value="">===Pilih===</option>
                                    <option value="Senin" {!! $jadwalpemeriksaan->hari == 'Senin' ? 'selected' : '' !!}>Senin</option>
                                    <option value="Selasa" {!! $jadwalpemeriksaan->hari == 'Selasa' ? 'selected' : '' !!}>Selasa</option>
                                    <option value="Rabu" {!! $jadwalpemeriksaan->hari == 'Rabu' ? 'selected' : '' !!}>Rabu</option>
                                    <option value="Kamis" {!! $jadwalpemeriksaan->hari == 'Kamis' ? 'selected' : '' !!}>Kamis</option>
                                    <option value="Jumat" {!! $jadwalpemeriksaan->hari == 'Jumat' ? 'selected' : '' !!}>Jumat</option>
                                    <option value="Sabtu" {!! $jadwalpemeriksaan->hari == 'Sabtu' ? 'selected' : '' !!}>Sabtu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu:</label>
                                <input type="date" id="waktu" name="waktu" value="{!! $jadwalpemeriksaan->waktu !!}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select id="status" name="status">
                                    <option value="">===Pilih===</option>
                                    <option value="Pending" {!! $jadwalpemeriksaan->status == 'Pending' ? 'selected' : '' !!}>Pending</option>
                                    <option value="Approved" {!! $jadwalpemeriksaan->status == 'Approved' ? 'selected' : '' !!}>Approved</option>
                                    <option value="Approved" {!! $jadwalpemeriksaan->status == 'Rejected' ? 'selected' : '' !!}>Rejected</option>
                                </select>
                            </div>
                            <button onclick="return confirm('Yakin update ?')" type="submit"
                                class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i>
                                Submit</button>
                        </form>
                        </div>
                </li>
            </ul>
            <!-- MAIN -->
</body>
</li>
</ul>
</section>
<!-- CONTENT -->


<script src="{!! asset('js/script.js') !!}"></script>
</body>


</html>
