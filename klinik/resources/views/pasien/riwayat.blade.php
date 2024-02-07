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
            <li class="active">
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

    <!-- CONTENT -->


    <body>

        <section id="content">
            <main>
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Hasil Pemeriksaan</h3>

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
                                         {{-- <td class="action-buttons">
                                            <a href="{!! route('edithasilpemeriksaan.edit', $hp->hasilpemeriksaan_id) !!}" type="button"class="edit-button"
                                                role="button">Edit</a>

                                            <form method="post"
                                                action="{{ route('deletehasilpemeriksaan.destroy', $hp->hasilpemeriksaan_id) }}">
                                        </td>
                                        <td class="action-buttons">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                class="delete-button"> Delete</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach

                                <tr>



                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </section>



        <script src="script.js"></script>
    </body>

</html>
