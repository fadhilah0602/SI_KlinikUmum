
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
            <li class="active">
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
                    <!-- <i class='bx bx-face'></i> -->
                    <span class="text">
                        <!-- <h3>Hi, Admin 1</h3>
                        <p>Admin 1 Klinik Dr.Zul</p>
                    </span> -->
                    <div class="header">
                    <h4> Tambah Data Pasien</h4>           
                    </div>
                    <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="nip">Nip:</label>
                <input type="number" id="nip" name="nip">
            </div>
            <div class="form-group">
                <label for="spesialis">Spesialis:</label>
                <input type="text" id="spesialis" name="spesialis"></input>
            </div>
            <div class="form-group">
                <label for="nohp">No Hp:</label>
                <input type="text" id="nohp" name="nohp"></input>
            </div>
            
            <button type="button" onclick="goToNextPage()">Submit</button>

            <script>
              function goToNextPage() {
                    // Gantilah URL atau path sesuai kebutuhan
                     window.location.href = "adminpasien";
                      }
            </script>
        </form>
        </div>
        </li>
        </ul>   
        </body>
        </li>
       </ul>   
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
</body>

</html>
