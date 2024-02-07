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

    <section id="content">
        <main>
            <ul class="box-info">
                <li>
                    <span class="text">
                        <div class="header">
                            <h4> Edit Hasil Pemeriksaan</h4>
                        </div>
                        <form method="post" action="{{ route('updatehasilpemeriksaan.update', $hasilpemeriksaan->hasil_pemeriksaan_id) }}">
                            @csrf
                            @method('PUT')

                         <div class="form-group">
                            <label for="dokter_id">Nama Dokter:</label>
                            <input type="text" id="dokter_id" name="dokter_id" value="{!! $hasilpemeriksaan->dokter->name !!}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="pasien_id">Nama Pasien:</label>
                            <input type="text" id="pasien_id" name="pasien_id" value="{!! $hasilpemeriksaan->pasien->name !!}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="jenis_pemeriksaan">Jenis Pemeriksaan:</label>
                            <input type="text" id="jenis_pemeriksaan" name="jenis_pemeriksaan" value="{!! $hasilpemeriksaan->jenis_pemeriksaan !!}">
                        </div>
                        <div class="form-group">
                            <label for="diagnosa">Diagnosa:</label>
                            <input type="text" id="diagnosa" name="diagnosa" value="{!! $hasilpemeriksaan->diagnosa !!}">
                        </div>
                        <div class="form-group">
                            <label for="obat">Obat:</label>
                            <input type="text" id="obat" name="obat" value="{!! $hasilpemeriksaan->obat !!}">
                        </div>

                            <button onclick="return confirm('Yakin update ?')" type="submit"
                                class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i>
                                Submit</button>
                        </form>
                        </div>
                </li>
            </ul>

</section>



<script src="{!! asset('js/script.js') !!}"></script>
</body>
