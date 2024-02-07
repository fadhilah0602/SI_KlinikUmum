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

            <li  class="active">
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
            <li>
                <a href="/contact">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Contact</span>
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
        <!-- NAVBAR -->

        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Poli Klinik</h3>
                        <button type="button" onclick="goToNextPage()">Tambah Poli</button>

                        <script>
                            function goToNextPage() {
                                // Gantilah URL atau path sesuai kebutuhan
                                window.location.href = "createpoli";
                            }
                        </script>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Nama Ruangan</th>
                                <th>Jenis Ruangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                         <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($ruangs as $ruang)

                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $ruang->dokter->name }}</td>
                                <td>{{ $ruang->nama_ruangan }}</td>
                                <td>{{ $ruang->jenis_ruangan }}</td>
                                <td class="action-buttons">
                                <form method="post"
                                            action="{{ route('deleteruang.destroy', $ruang->ruang_id) }}">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                class="delete-button">Delete</button>
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


    <script src="script.js"></script>
</body>

</html>
