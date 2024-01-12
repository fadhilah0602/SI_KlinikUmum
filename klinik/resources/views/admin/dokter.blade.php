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
            <li>
                <a href="/pasien">
                    <i class='bx bxs-group user-icon'></i>
                    <span class="text">Pasien</span>
                </a>
            </li>
            <li class="active">
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
        <!-- MAIN -->
        <main>
            <button class="bx bx-button2">Tambah Dokter</button>
             <ul class="box-info">
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>Dr. Cindy</h3>
                        <p>Dokter Umum</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>Dr. Zul</h3>
                        <p>Dokter Umum</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>Dr. Zee</h3>
                        <p>Dokter Umum</p>
                    </span>
                </li>

            </ul>
            
            {{-- <button class="Button">Tambah Dokter</button> --}}
           
        </main>
        <!-- MAIN -->
        
    </section>
    <!-- CONTENT -->
    


    <!-- CONTENT -->
    <section id="content">
        <main>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Pasien</h3>
                        {{-- <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i> --}}
                        <button class="bx bx-button">Tambah Data</button>

                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mia</td>
                                <td>25 Desember 2023</td>
                                <td>08:00</td>
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
                                <td>2</td>
                                <td>Mia</td>
                                <td>25 Desember 2023</td>
                                <td>08:00</td>
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
                                <td>3</td>
                                <td>Mia</td>
                                <td>25 Desember 2023</td>
                                <td>08:00</td>
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
                                <td>4</td>
                                <td>Mia</td>
                                <td>25 Desember 2023</td>
                                <td>08:00</td>
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
                                <td>5</td>
                                <td>Mia</td>
                                <td>25 Desember 2023</td>
                                <td>08:00</td>
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
