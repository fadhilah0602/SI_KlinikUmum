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
                <a href="/admin">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a href="/profile">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li class="active">
                <a href="/pasien">
                    <i class='bx bxs-group user-icon'></i>
                    <span class="text">Pasien</span>
                </a>
            </li>
            <li>
                <a href="/dokter">
                    <i class='bx bxs-user-plus'></i>
                    <span class="text">Dokter</span>
                </a>
            </li>
            <li>
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
                        <form>
                            <input type="search" id="searchBox" name="search" placeholder="Search...">
                            <input type="submit" value="Search">
                          </form>
                        <button class="bx bx-button">Tambah Data</button>
                        
                        {{-- <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i> --}}
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Dokter</th>
                                <th>Ruangan</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>No Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Padang</td>
                                <td>01-10-2021</td>
                                <td>Laki-Laki</td>
                                <td>Padang Barat</td>
                                <td>081212121221</td>
                                {{-- <td><span class="status completed">Completed</span></td>
                                <td><span class="status pending">Pending</span></td>
                                <td><span class="status process">Process</span></td> --}}
                                <td>
                                    <select class="custom-select">
                                        <option value="process">Process</option>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                       
                                      </select>
                                    </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Padang</td>
                                <td>01-10-2021</td>
                                <td>Laki-Laki</td>
                                <td>Padang Barat</td>
                                <td>081212121221</td>
                                {{-- <td><span class="status completed">Completed</span></td>
                                <td><span class="status pending">Pending</span></td>
                                <td><span class="status process">Process</span></td> --}}
                                <td>
                                    <select class="custom-select">
                                        <option value="process">Process</option>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                       
                                      </select>
                                    </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Padang</td>
                                <td>01-10-2021</td>
                                <td>Laki-Laki</td>
                                <td>Padang Barat</td>
                                <td>081212121221</td>
                                {{-- <td><span class="status completed">Completed</span></td>
                                <td><span class="status pending">Pending</span></td>
                                <td><span class="status process">Process</span></td> --}}
                                <td>
                                    <select class="custom-select">
                                        <option value="process">Process</option>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                       
                                      </select>
                                    </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Padang</td>
                                <td>01-10-2021</td>
                                <td>Laki-Laki</td>
                                <td>Padang Barat</td>
                                <td>081212121221</td>
                                {{-- <td><span class="status completed">Completed</span></td>
                                <td><span class="status pending">Pending</span></td>
                                <td><span class="status process">Process</span></td> --}}
                                <td>
                                    <select class="custom-select">
                                        <option value="process">Process</option>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                       
                                      </select>
                                    </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Padang</td>
                                <td>01-10-2021</td>
                                <td>Laki-Laki</td>
                                <td>Padang Barat</td>
                                <td>081212121221</td>
                                {{-- <td><span class="status completed">Completed</span></td>
                                <td><span class="status pending">Pending</span></td>
                                <td><span class="status process">Process</span></td> --}}
                                <td>
                                    <select class="custom-select">
                                        <option value="process">Process</option>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Completed</option>
                                       
                                      </select>
                                    </td>
                            </tr>
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
