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
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Hasil Pemeriksaan</h3>
                        <button type="button" onclick="goToNextPage()">Tambah Hasil Pemeriksaan</button>

                        <script>
                            function goToNextPage() {
                                // Gantilah URL atau path sesuai kebutuhan
                                window.location.href = "createhasilpemeriksaan";
                            }
                        </script>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Pemeriksaan</th>
                                <th>Diagnosa</th>
                                <th>Obat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($hasilpemeriksaans as $hp)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $hp->dokter->name }}</td>
                                    <td>{{ $hp->pasien->name }}</td>
                                    <td>{{ $hp->jenis_pemeriksaan }}</td>
                                    <td>{{ $hp->diagnosa }}</td>
                                    <td>{{ $hp->obat }}</td>
                                    <td class="action-buttons">
                                        <a href="{!! route('edithasilpemeriksaan.edit', $hp->hasil_pemeriksaan_id) !!}" type="button"class="edit-button"
                                            role="button">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post"
                                            action="{{ route('deletehasilpemeriksaan.destroy', $hp->hasil_pemeriksaan_id) }}">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                class="delete-button"> Delete</button>
                                        </form>
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


    </li>
    </ul>

    </section>


    <script src="script.js"></script>
</body>
