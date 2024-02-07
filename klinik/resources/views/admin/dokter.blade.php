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
                        <h3>Dokter</h3>
                        {{-- <button class="Button">Tambah Data</button> --}}
                        <form>
                            <input type="search" id="searchBox" name="search" placeholder="Search...">
                            <input type="submit" value="Search">
                        </form>
                        <!-- <button class="bx bx-button">
                            <a href="" class="btn btn-sm btn-primary" style="float: right">
                                Tambah Data
                            </a> -->
                        <button type="button" onclick="goToNextPage()">Tambah Dokter</button>

                        <script>
                            function goToNextPage() {
                                // Gantilah URL atau path sesuai kebutuhan
                                window.location.href = "createdokter";
                            }
                        </script>
                        <!-- </button> -->

                        {{-- <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i> --}}
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Spesialis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($dokters as $dokter)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $dokter->nip }}</td>
                                    <td>{{ $dokter->name }}</td>
                                    <td>{{ $dokter->tempat_lahir }}</td>
                                    <td>{{ $dokter->tgl_lahir }}</td>
                                    <td>{{ $dokter->gender }}</td>
                                    <td>{{ $dokter->alamat }}</td>
                                    <td>{{ $dokter->no_telp }}</td>
                                    <td>{{ $dokter->spesialis }}</td>
                                    <td class="action-buttons">
                                     
                                        <a href="{!! route('editdokter.edit', $dokter->dokter_id) !!}" type="button"class="edit-button" role="button">Edit</a>

                                        <form method="post"
                                            action="{{ route('deletedokter.destroy', $dokter->dokter_id) }}">
                                            <td class="action-buttons">
                                            
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                            class="delete-button"> Delete</button>
                                        </form>

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


    <script src="{!! asset('js/script.js') !!}"></script>
</body>

</html>
