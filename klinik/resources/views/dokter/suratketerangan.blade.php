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
            <li>
                <a href="/dokterpemeriksaan">
                    <i class='bx bx-edit'></i>
                    <span class="text">Hasil Pemeriksaan</span>
                </a>
            </li>
           
            <li class="active">
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



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->

        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Keterangan</h3>
                        <form>
                            {{-- <input type="search" id="searchBox" name="search" placeholder="Search...">
                            {{-- <input type="submit" value="Search"> --}}
                            {{-- <button class="Button">Tambah Surat</button> --}}
                        </form>
                        <button type="button" onclick="goToNextPage()">Tambah Surat</button>

                        <script>
                            function goToNextPage() {
                                // Gantilah URL atau path sesuai kebutuhan
                                window.location.href = "createsurat";
                            }
                        </script>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Nama Pasien</th>
                                <th>Keterangan</th>
                                <th>Waktu Awal</th>
                                <th>Waktu Akhir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($dokumen as $dk)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $dk->dokter->name }}</td>
                                    <td>{{ $dk->pasien->name }}</td>
                                    {{-- <td>{{ $dk->nama_klinik }}</td> --}}
                                    <td>{{ $dk->keterangan }}</td>
                                    <td>{{ $dk->waktu1 }}</td>
                                    <td>{{ $dk->waktu2 }}</td>
                                    <td class="action-buttons">

                                        <a href="{!! route('dokter.dokumen', $dk->surat_keterangan_id) !!}" type="button">Print</a>

                                        {{-- <form method="post" action="{{ route('deletedokter.destroy', $dokter->dokter_id) }}">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i>
                                                Delete</button>
                                        </form> --}}

                                        <!-- <button type="button" onclick="if(confirmDelete()) document.forms[0].submit();">Delete</button> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>
