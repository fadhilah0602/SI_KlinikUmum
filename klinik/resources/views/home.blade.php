<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    <link rel="stylesheet" href="css/newstyle.css">
    
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap"> -->

    <script src="https://kit.fontawesome.com/93ce107040.js" crossorigin="anonymous"></script>
</head>


<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="Images/home2.png" class="logo">
                    <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Service</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
           
            <div class="row">
            <div class="header-text">
                <h2>Best Medical Clinik</h2>
                <h1>For  <span> Your </span><br> <span> Healthcare</span></h1>
                <button type="submit" class="btn btn2" onclick="goToNextPage()">Get Started</button>

                <script>
                            function goToNextPage() {
                                // Gantilah URL atau path sesuai kebutuhan
                                window.location.href = "login";
                            }
                            </script>
                 </div>
                 <!-- <button type="submit" class="btn btn2">Submit</button> -->
               
                <div class="about-col-2">
                    <img src="Images/klinik.jpg" alt="">
                </div>
        
        </div>
     
        
    

    </div>
    <!----------about----------->
  
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="Images/usera.png" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title"> Tentang Kami </h1>
                    <p>
                    Klinik kami memiliki misi 
                    untuk membantu masyarakat Indonesia 
                    mendapat akses ke layanan kesehatan 
                    terbaik sesuai kebutuhan.
                    Untuk Anda dan keluarga, 
                    Klinik ini hadir menyediakan 
                    berbagai layanan kesehatan berkualitas 
                    dan terstandarisasi mulai dari layanan 
                    umum, tumbuh kembang anak, hingga layanan untuk lansia.
                    Pendaftaran mudah dan rekam medis terintegrasi
                        
                    </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('dokter')">Dokter</p>
                        <p class="tab-links" onclick="opentab('poli')">Poli Ruang</p>
                        <p class="tab-links" onclick="opentab('mitra')">Mitra</p>
                    </div>
                    <div class="tab-contents active-tab" id="dokter">
                        <ul>
                            <li> <span>Dr. Zul</span><br> Dokter Umum </li>
                            <li> <span>Dr. Cyndi</span><br> Dokter Gigi </li>
                            <li> <span>Nurse Caca</span><br> Perawat Klinik </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="poli">
                        <ul>
                            <li> <span>Poli Umum</span><br> Ruang pemeriksaan pasien umum </li>
                            <li> <span>Poli Gigi</span><br> Ruang pemeriksaan pasien yang menderita sakit gigi </li>
                           
                        </ul>
                    </div>
                    <div class="tab-contents" id="mitra">
                        <ul>
                            <li> <span>BPJS KESEHATAN</span><br>Bekerjasama dengan pemerintah untuk memberikan pelayanan 
                        BPJS kepada pasien yang kurang mampu </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------service----------->
    <div id="services" >
        <div class="container">
            <h1 class="sub-title">Our Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-stethoscope"></i>
                    <h2>Pemeriksaan Kesehatan</h2>
                    <p>Layanan kesehatan berkualitas sesuai kebutuhan</p>
                        <!-- <a href="#">learn more</a> -->
                </div>
                <div>
                    <i class="fa-solid fa-heart-pulse"></i>
                    <h2>Check Kesehatan Lansia</h2>
                    <p>Layanan kesehatan berkualitas sesuai kebutuhan</p>
                        <!-- <a href="#">learn more</a> -->
                </div>
                <div>
                <i class="fa-solid fa-notes-medical"></i>
                    <h2>Check Kesehatan Ibu dan Anak</h2>
                    <p>Layanan kesehatan berkualitas sesuai kebutuhan.</p>
                        <!-- <a href="#">learn more</a> -->
                </div>

            </div>

        </div>

    </div>

    <!-------------news--------->
    <div id="news">
        <div class="container">
            <h1 class="sub-title">News</h1>
            <div class="work-list">
                <div class="work">
                    <img src="Images/work-a.png">
                    <div class="layer">
                        <h3>Daftar Penyakit yang Dapat Sembuh dengan Fisioterapi</h3>
                        <p>Fisioterapi adalah rehabilitasi fisik untuk berbagai 
                            penyakit yang dilakukan oleh terapis tersertifikasi. 
                            Tujuan dilakukannya perawatan ini adalah untuk meningkatkan 
                            mobilitas pasien, memperbaiki gangguan, fungsi dan kualitas 
                            hidup seseorang menjadi lebih baik saat mengalami cedera atau cacat. </p>
                        <a href="https://klinikpintar.id/blog-pasien/daftar-penyakit-yang-sembuh-dengan-fisioterapi"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="Images/work-2.jpg">
                    <div class="layer">
                        <h3>Cara Atasi Si Kecil yang Takut Pergi ke Dokter Gigi</h3>
                        <p>Sejak kecil anak memang disarankan diperkenalkan pada kesehatan gigi. 
                            Para ahli merekomendasikan anak untuk konsultasi ke dokter gigi 
                            minimal saat usianya mencapai usia 12 bulan.</p>
                        <a href="https://klinikpintar.id/blog-pasien/cara-atasi-si-kecil-yang-takut-pergi-ke-dokter-gigi"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="Images/work-3.jpg">
                    <div class="layer">
                        <h3>Kenali Ciri-Ciri Alergi Makanan pada Anak</h3>
                        <p>Alergi bisa mengenai siapa saja termasuk anak-anak 
                            dari tingkat bayi hingga remaja. Dalam penanganannya 
                            dibutuhkan konsultasi dengan dokter anak untuk mencegah 
                            alergi lebih parah dan mempercepat penyembuhan. </p>
                        <a href="https://klinikpintar.id/blog-pasien/kenali-ciri-ciri-alergi-makanan-pada-anak"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>

    <!--------------------contact------------------>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fas fa-paper-plane"></i>clinik@gmail.com</p>
                    <p><i class="fas fa-phone-square-alt"></i>081266673375</p>
                    <div class="social-icons">
                        <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-fa-linkedin"></i></a>
                    </div>
                    
                </div>
                <div class="contact-right">
                    <form method="POST" action="{{ url('add-home') }}">
             
                        @csrf
                        <input type="text" name="name" placeholder="Your Name" required id="name">
                        <input type="email" name="email" placeholder="Your Email" required id="email">
                        <textarea name="message" rows="6" placeholder="Your Message" id="message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>

                    
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright @Kelompo4 TRPL Alih Kredit 2024</p>
        </div>
    </div>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>

    <script>
        var sidemenu = document.getElementById("sidemenu");
        function openmenu(){
            sidemenu.style.right="0";
        }
        function closemenu(){
            sidemenu.style.right="-200px";
        }
    </script>
</body>
</html>