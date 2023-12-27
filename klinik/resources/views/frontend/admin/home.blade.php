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
            <ul class="box-info">
                <li>
                    <i class='bx bx-face'></i>
                    <span class="text">
                        <h3>Hi, Admin 1</h3>
                        <p>Admin 1 Klinik Dr.Zul</p>
                    </span>
                </li>
            </ul>
            <div class="table-data">
                <div class="table-data">
                    <div class="container">
                        <div class="header">NOMOR ANTREAN</div>
                        <link rel="stylesheet" href="css/homeadmin.css">
                        <div class="content">
                            <table>
                                <div>
                                    <div class="label">Nomor Antrean</div>
                                    <div>001</div>
                                </div>
                            </table>
                            <table>
                                <div>
                                    <div class="label">Atas Nama</div>
                                    <div>Fitri</div>
                                </div>
                            </table>
                            <table>
                                <div>
                                    <div class="label">Dokter</div>
                                    <div>dr. Zulkarnain Nasution</div>
                                </div>
                            </table>
                            <table>
                                <div>
                                    <div class="label">Poli Tujuan</div>
                                    <div>Poli Umum 2</div>
                                </div>
                                <div>
                                    <div class="label">No Rekam Media</div>
                                    <div>K-0001</div>
                                </div>
                            </table>
                            <table>
                                <div>
                                    <div class="label">Waktu Daftar</div>
                                    <div class="date">001</div>
                                </div>
                                <div>
                                    <div class="label">Waktu Panggil</div>
                                    <div class="date">002</div>
                                </div>
                            </table>
                        </div>
                    </div>
                    <div class="modal">
                        <div class="input-group">
                            <input type="text" id="name" onblur="checkInput(this)" />
                            <label for="name">Username</label>
                        </div>
                        <div class="input-group">
                            <input type="password" id="password" onblur="checkInput(this)" />
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="todo">
                        <table>
                            <div>
                                <div class="label">Poli Tujuan</div>
                                <div>Poli Umum 2</div>
                            </div>
                            <div>
                                <div class="label">No Rekam Media</div>
                                <div>K-0001</div>
                            </div>
                        </table>
                        <div class="head">
                            <h3>Todos</h3>
                            <i class='bx bx-plus'></i>
                            <i class='bx bx-filter'></i>
                        </div>
                        <ul class="todo-list">
                            <li class="completed">
                                <p>Todo List</p>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>
