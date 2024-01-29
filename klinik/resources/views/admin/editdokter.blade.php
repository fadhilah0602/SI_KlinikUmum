<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

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
                    <span class="text">
                        <div class="header">
                            <h4> Edit Dokter</h4>
                        </div>
                        <form method="post" action="{{ route('updatedokter.update', $dokter->dokter_id) }}">
                            @csrf
                            @method('PUT')
                            {{-- <input type="hidden" name="dokter_id" value="{!! $dokter->dokter_id !!}"> --}}
                            <div class="form-group">
                                <label for="nip">Nip:</label>
                                <input type="text" id="nip" name="nip" value="{!! $dokter->nip !!}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" id="name" name="name" value="{!! $dokter->name !!}">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir:</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir"
                                    value="{!! $dokter->tempat_lahir !!}">
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir:</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" value="{!! $dokter->tgl_lahir !!}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin:</label>
                                {{-- <input type="text" id="gender" name="gender" value="{!! $dokter->gender !!}"> --}}
                                <select id="gender" name="gender">
                                    <option value="">===Pilih===</option>
                                    <option value="Laki-laki" {!! $dokter->gender == 'Laki-laki' ? 'selected' : '' !!}>Laki-laki</option>
                                    <option value="Perempuan" {!! $dokter->gender == 'Perempuan' ? 'selected' : '' !!}>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input type="text" id="alamat" name="alamat" value="{!! $dokter->alamat !!}">
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Hp:</label>
                                <input type="text" id="no_telp" name="no_telp" value="{!! $dokter->no_telp !!}">
                            </div>
                            <div class="form-group">
                                <label for="spesialis">Spesialis:</label>
                                <input type="text" id="spesialis" name="spesialis" value="{!! $dokter->spesialis !!}">
                            </div>
                            <button onclick="return confirm('Yakin update ?')" type="submit"
                                class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i>
                                Submit</button>
                        </form>
                        </div>
                </li>
            </ul>
</body>
</li>
</ul>
</section>
<!-- CONTENT -->

<script src="{!! asset('js/script.js') !!}"></script>
</body>

</html>
