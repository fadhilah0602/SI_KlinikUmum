<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/dokumen.css">

    <title>SIK Dr.Zul</title>
</head>

<body>
    <section id="content">
        <!-- NAVBAR -->

        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="table-data">
                <div class="order">
                    <!DOCTYPE html>
                    <html>

                    {{-- <head>
                        <title>Contoh Surat</title>
                        <style>
                            /* Gaya untuk surat */
                            .body {
                                font-family: Arial, sans-serif;
                                margin: 50px;
                                text-align: left;

                            }

                            .header {
                                text-align: center;
                                margin-bottom: 20px;
                            }

                            .content {
                                margin-bottom: 20px;
                                text-align: center;

                            }

                            .footer {
                                text-align: right;
                                font-style: italic;
                            }
                        </style>
                    </head> --}}

                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 50px;
                            text-align: left;
                        }

                        .header {
                            text-align: center;
                            margin-bottom: 20px;
                        }

                        .body,
                        .content {
                            margin-bottom: 20px;
                            text-align: justify;
                        }

                        .footer {
                            text-align: right;
                            font-style: italic;
                            margin-top: 20px;
                        }
                    </style>
                </head>

                <body>

                    <!-- Your existing HTML content -->
                    <img src="Images/surat.png" alt="">
                    <div class="header">
                    
                        <!-- <h2>DINAS KESEHATAN KABUPATEN LUBUK BEGALUNG</h2> -->
                        <!-- <h3>Alamat</h3> -->
                        <div class="header">
                            <h3>SURAT KESEHATAN SAKIT</h3>
                            <p>Nomor : /SIK/ /2023</p>
                        </div>
                        <div class="body">
                            <p>Yang bertanda tangan dibawah ini, Dokter/Paramedis Klinik Praktek Umum Dr Zul
                                Kecamatan Panyabungan, menerangkan dengan sesungguhnya bahwa:</p>
                        </div>

                        <div class="content">
                            <p>
                                <strong>Nama Pasien:</strong> {{ $dokumen->pasien->name }}
                            </p>
                            <p>
                                <strong>Jenis Kelamin:</strong> {{ $dokumen->pasien->gender }}
                            </p>
                            <p>
                                <strong>Alamat:</strong> {{ $dokumen->pasien->alamat }}
                            </p>
                            <p>
                                <strong>Keterangan:</strong> {{ $dokumen->keterangan }}
                            </p>
                        </div>
                        <div class="body">
                            <p>Berdasarkan hasil pemeriksaan kami hari ini tanggal
                                <strong>{{ $dokumen->created_at }}</strong>, yang bersangkutan diatas benar dalam keadaan
                                {{ $dokumen->keterangan }}. Surat ini berlaku dari tanggal
                                <strong>{{ $dokumen->waktu1 }}</strong> sampai <strong>{{ $dokumen->waktu2 }}</strong></p>
                            <p>Demikian surat keterangan {{ $dokumen->keterangan }} ini kami berikan untuk
                                digunakan seperlunya.</p>
                        </div>
                        <div class="footer">
                            <p></p>
                            <p></p>
                            <p>
                                {{ $dokumen->dokter->name }}
                            </p>
                        </div>
                    </div>
                    <!-- Add your JavaScript or script links here -->
                </body>


                    </html>
                </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>
<script type="text/javascript">
    window.print();
</script>
