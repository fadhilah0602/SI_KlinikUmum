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
                <img src="Images/home.png" class="logo">
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
            <!-- <img src="Images/bg.png" alt="" position="right"> -->
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
                    <h1 class="sub-title"> About Clinic </h1>
                    <p>
                        Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                        
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
                    <i class="fas fa-code"></i>
                    <h2>Pemeriksaan Kesehatan</h2>
                    <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
                        <a href="#">learn more</a>
                </div>
                <div>
                    <i class="fas fa-crop-alt"></i>
                    <h2>Check Kesehatan Lansia</h2>
                    <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
                        <a href="#">learn more</a>
                </div>
                <div>
                    <i class="fab fa-app-store"></i>
                    <h2>Check Kesehatan Ibu dan Anak</h2>
                    <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
                        <a href="#">learn more</a>
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
                        <h3>Menjaga Kesehatan Ibu dan Anak</h3>
                        <p>Sangat penting menjaga kesehatan ibu dan anak.
                            Menjaga pola makan anak agar tumbuh kembang dengan baik </p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="Images/work-b.png">
                    <div class="layer">
                        <h3>Mencegah Stunting Pada Anak</h3>
                        <p>Dengan memberikan asupan nutrisi yang cukup 
                            merupakan salah satu cara mencegah stunting pada anak </p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="Images/work-c.png">
                    <div class="layer">
                        <h3>Hindari Junk Food Pada Anak</h3>
                        <p>Memberi makanan instan terlalu sering pada anak
                            dapat mengganggu pertumbuhan anak terganggu </p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
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
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
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