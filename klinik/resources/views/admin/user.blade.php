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
                <a href="/adminprofile">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Profile</span>
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

            <li  class="active">
                <a href="/user">
                <i class='bx bxs-user-detail'></i>
                    <span class="text">User</span>
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
    <section id="content">
        <!-- NAVBAR -->

        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Poli Klinik</h3>
                       
                        <button type="button" onclick="goToNextPage()">Tambah User</button>

                        <script>
                            function goToNextPage() {
                                // Gantilah URL atau path sesuai kebutuhan
                                window.location.href = "createuser";
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
                                <th>User</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                           
                                <tr>
                                    
                                    
                                    <td class="action-buttons">
                                        <button type="button" onclick="goToPageEdit()">Edit</button>

                                        <script>
                                            function goToPageEdit() {
                                                // Gantilah URL atau path sesuai kebutuhan
                                                window.location.href = "edituser";
                                            }
                                        </script>

                                        <button onclick="deleteUser()">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                        {{-- <script>
                                            // Fungsi untuk menghapus elemen
                                            function deleteUser() {
                                                var element = document.getElementById("elementToBeDeleted");
                                                if (element) {
                                                    element.parentNode.removeChild(element);
                                                } else {
                                                    console.error("Element not found.");
                                                }
                                            }
                                        </script> --}}
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