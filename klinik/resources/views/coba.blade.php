<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>
    <!-- <link rel="stylesheet" href="newstyle.css"> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap"> -->

    <script src="https://kit.fontawesome.com/93ce107040.js" crossorigin="anonymous"></script>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
}
body{
    background: #080808;
    color: #fff;
}
#header{
    width: 100%;
    height: 100vh;
   /* background-image: url(Images/bg.png); */
   baground-size:100px;
}
.background{
    background-image: url(Images/bg.png);
    /* background-size: cover; */
    width:100px;
    background-position: right;

}
.container{
    padding: 10px 10%;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.logo{
    width: 70px;
}
nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 20px;
}
nav ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    position: relative;
}
nav ul li a::after{
    content: '';
    width: 0;
    height: 3px;
    background: #23538F;
    position: absolute;
    left: 0;
    bottom: -6px;
    transition: 0.5s;
}
nav ul li a:hover::after{
    width: 100%;
}
.header-text{
    margin-top: 20%;
    font-size: 30px;
}
.header-text h1{
    font-size: 60px;
    margin-top: 20px;
}
.header-text h1 span{
    color: #23538F;
}
/*-----------------about---------------*/
#about{
    padding: 80px 0;
    color: #ababab;
}
.row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.about-col-1{
    flex-basis: 35%;

}
.about-col-1 img{
    width: 100%;
    border-radius: 15px;
}
.about-col-2{
    flex-basis: 60%;
}
.sub-title{
    font-size: 60px;
    font-weight: 600;
    color:#fff;
}
.tab-titles{
    display: flex;
    margin: 20px 0 40px;
}
.tab-links{
    margin-right: 50px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
}
.tab-links::after{
    content: "";
    width: 0;
    height: 3px;
    background: #23538F;
    position: absolute;
    left: 0;
    bottom: -8px;
    transition: 0.5s;
}
.tab-links.active-link::after{
    width: 50%;
}
.tab-contents ul li{
    list-style: none;
    margin: 10px 0;
}
.tab-contents ul li span{
    color: #b54769;
    font-size: 14px;
}
.tab-contents{
    display: none;
}
.tab-contents.active-tab{
    display: block;
}
/*-----------service----------*/
#services{
    padding: 30px 0;
}
.services-list{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 40px;
    margin-top: 50px;
}
.services-list div{
    background: #262626;
    padding: 40px;
    font-size: 13px;
    font-weight: 300;
    border-radius: 10px;
    transition: background 0.5s, transform 0.5s;
}
.services-list div i{
    font-size: 50px;
    margin-bottom: 30px;
}
.services-list div h2{
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 15px;
}
.services-list div a{
    text-decoration: none;
    color: #fff;
    font-size: 12px;
    margin-top: 20px;
    display: inline-block;
}
.services-list div:hover{
    background: #23538F;
    transform: translateY(-10px);
}

/*------------portofolio------*/
#portofolio{
    padding: 50px 0;
}
.work-list{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 40px;
    margin-top: 50px;
}
.work{
    border-radius: 10px;
    position: relative;
    overflow: hidden;
}
.work img{
    width: 100%;
    border-radius: 10px;
    display: block;
    transition: transform 0.5s;

}
.layer{
    width: 100%;
    height: 0;
    background: linear-gradient(rgba(0,0,0,0.6), #23538F);
    border-radius: 10px;
    position: absolute;
    left: 0;
    bottom: 0;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    font-size: 14px;
    transition: height 0.5s;
}
.layer h3{
    font-weight: 500;
    margin-bottom: 20px;
}
.layer a{
    margin-top: 20px;
    color: #23538F;
    text-decoration: none;
    font-size: 18px;
    line-height: 60px;
    background: #fff;
    width: 60px;
    border-radius: 50%;
    text-align: center;
}
.work:hover img{
    transform: scale(1.1);
}
.work:hover .layer{
    height: 100%;
}
.btn{
    display: block;
    margin: 50px auto;
    width: fit-content;
    border: 1px solid #23538F;
    padding: 14px 50px;
    border-radius: 6px;
    text-decoration: none;
    color: #fff;
    transition: background 0.5s;
}
.btn:hover{
    background: #23538F;
}

/*---------contact-------*/
.contact-left{
    flex-basis: 35%;
}
.contact-right{
    flex-basis: 60%;
}
.contact-left p{
    margin-top: 30px;
}
.contact-left p i{
    color: #23538F;
    margin-right: 15px;
    font-size: 25px;
}
.social-icons{
    margin-top: 30px;
}
.social-icons a{
    text-decoration: none;
    font-size: 30px;
    margin-right: 15px;
    color: #ababab;
    display: inline-block;
    transition: transform 0.5s;
}
.social-icons a:hover{
    color: #23538F;
    transform: translateY(-5px);
}
.btn.btn2{
    display: inline-block;
    background: #23538F;
}
.contact-right form{
    width: 100%;
}
form input, form textarea{
    width: 100%;
    border: 0;
    outline: none;
    background: #262626;
    padding: 15px;
    margin: 15px 0;
    color: #fff;
    font-size: 18px;
    border-radius: 6px;
}
form .btn2{
    padding: 14px 60px;
    margin-top: 20px;
    font-size: 18px;
    cursor: pointer;
}
.copyright{
    width: 100%;
    text-align: center;
    padding: 25px 0;
    background: #262626;
    font-weight: 300;
    margin-top: 20px;
}
.copyright i{
    color: #23538F;
}

/*--------css for small screen--------*/
nav .fas{
    display: none;
}
@media only screen and (max-width:600px){
    #header{
        background-image: url(Images/phone-bg.png);
    }
    .header-text{
        margin-top: 100%;
        font-size: 16px;
    }
    .header-text h1{
        font-size: 30px;
    }
    nav .fas{
        display: block;
        font-size: 25px;
    }
    nav ul{
        background: #23538F;
        position: fixed;
        top: 0;
        right: -200px;
        width: 200px;
        height: 100vh;
        padding-top: 50px;
        z-index: 2;
        transition: right 0.5s;
    }
    nav ul li{
        display: block;
        margin: 25px;
    }
    nav ul .fas{
        position: absolute;
        top: 25px;
        left: 25px;
        cursor: pointer;
    }
    .sub-title{
        font-size: 40px;
    }
    .about-col-1, .about-col-2{
        flex-basis: 100%;
    }
    .about-col-1{
        margin-bottom: 30px;
    }
    .about-col-2{
        font-size: 14px;
    }
    .tab-links{
        font-size: 16px;
        margin-right: 20px;
    }
    .contact-left, .contact-right{
        flex-basis: 100%;
    }
    .copyright{
        font-size: 14px;
    }

 
}
</style>

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