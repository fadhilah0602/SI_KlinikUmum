<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/profile.css">

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
            <li class="active">
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


<body>

    <section id="content">
            <main>
                @auth
                @if (Auth::user()->role == 'Dokter')
                <div class="about-col1">
                    <ul class="box-info">
                        <li>
                            <span class="text">
                                <h3 class="profile-username text-center">Hi, {{ Auth::user()->name }}</h3>
                                <p>{{ Auth::user()->role }}</p>
                            <img src="Images/profil.jpg" alt="" class="gambar">
                        </span>
                            <form m>
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nama:</label>
                                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" value="{{ Auth::user()->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" value="{{ Auth::user()->password }}">
                                </div>
                                <button onclick="return confirm('Yakin update ?')" type="submit"
                                    class="btn btn-danger btn-sm ml-2"></i>
                                    Update Profile</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endif
        @endauth
            <script src="{!! asset('js/script.js') !!}"></script>
    </body>
    </html>
