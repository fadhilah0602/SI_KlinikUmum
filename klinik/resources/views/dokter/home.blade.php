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
            <li class="active">
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



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->

        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Pasien</h3>
                        {{-- <button class="Button">Tambah Data</button> --}}
                        {{-- <form>
                            <input type="search" id="searchBox" name="search" placeholder="Search...">
                            <input type="submit" value="Search">
                          </form> --}}
                        <!-- <button class="bx bx-button">Tambah Data</button> -->

                        {{-- <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i> --}}
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Nama Pasien</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($jadwalpemeriksaan as $jp)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $jp->dokter->name }}</td>
                                <td>{{ $jp->pasien->name }}</td>
                                <td>{{ $jp->hari }}</td>
                                <td>{{ $jp->waktu }}</td>
                                <td>{{ $jp->status }}</td>
                                {{-- <td class="action-buttons">
                                    <a href="{!! route('editjadwalpemeriksaan.edit', $jp->jadwal_pemeriksaan_id) !!}" type="button" class="edit-button" role="button">Edit</a>
                                </td>
                                <td class="action-buttons">
                                    <form method="post"
                                        action="{{ route('deletejadwalpemeriksaan.destroy', $jp->jadwal_pemeriksaan_id) }}">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                            class="delete-button">Delete</button>
                                    </form>
                                </td> --}}
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
