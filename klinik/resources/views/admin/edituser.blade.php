<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

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
        <main>
            <ul class="box-info">
                <li>
                    <span class="text">
                        <div class="header">
                            <h4> Edit User</h4>
                        </div>
                        <form method="post" action="{{ route('updateuser.update', $user->id) }}">
                            @csrf
                            @method('PUT')
                            {{-- <input type="hidden" name="id" value="{!! $user->id !!}"> --}}
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" id="name" name="name" value="{!! $user->name !!}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="tempat_lahir" name="email"
                                    value="{!! $user->email !!}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" value="{!! $user->password !!}">
                            </div>
                        
                            <div class="form-group">
                                <label for="role">Role:</label>
                                <input type="text" id="role" name="role" value="{!! $user->role !!}">
                            </div>
                            
                            <button onclick="return confirm('Yakin update ?')" type="submit"
                                class="btn btn-danger btn-sm ml-2"><i class="fas fa-trash fa-fw"></i>
                                Submit</button>
                        </form>
                        </div>
                </li>
            </ul>
</body>
</li>
</ul>
</section>
<!-- CONTENT -->

<script src="{!! asset('js/script.js') !!}"></script>
</body>

</html>
