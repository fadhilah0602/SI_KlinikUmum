<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    <link rel="stylesheet" href="css/profile.css">
    
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap"> -->

    <script src="https://kit.fontawesome.com/93ce107040.js" crossorigin="anonymous"></script>
</head>


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
            <li class="active">
                <a href="/pasienprofile">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Profile</span>
                </a>
            </li>
            <li>
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

<body>
    
<section id="content">
        <main>
            @auth
                @if (Auth::user()->role == 'Pasien')
                    <ul class="box-info">
                        <li>
                            <i class='bx bx-face'></i>
                            <span class="text">
                                <h3 class="profile-username text-center">Hi, {{ Auth::user()->name }}</h3>
                                <p>{{ Auth::user()->role }}</p>
                            </span>
                        </li>
                    </ul>

           <div class="row">     
                <div class="about-col-1">
                    <img src="Images/usera.png" alt="">
                </div>
                <div class="about-col-2">
                    <ul class="box-info">
                    <li>                 
                    <form>
                            @csrf
                            @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" id="name" name="name" >
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" >
                        </div>
                        <button type="submit">Update Profile</button>
                    </form>
                </li>
            </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endauth
        <script src="{!! asset('js/script.js') !!}"></script>
</body>
</html>