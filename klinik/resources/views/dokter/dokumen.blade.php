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
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 50px;
                            text-align: left;
                        }

                        .header {
                            text-align: center;
                            width: auto;
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
                        <div class="header">
                            <div class="header1">
                                <img src="{{ asset('Images/kop.png') }}">
                            </div>
                            <div class="header">
                                <h3>SURAT KETERANGAN</h3>
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
                                    <strong>{{ $dokumen->created_at }}</strong>,
                                </p>
                                <p>Yang bersangkutan diatas benar dalam keadaan
                                    <strong>{{ $dokumen->keterangan }}</strong>.
                                </p>
                                <p>Surat ini berlaku dari tanggal <strong>{{ $dokumen->waktu1 }}</strong> sampai
                                    <strong>{{ $dokumen->waktu2 }}</strong>
                                </p>
                                <p>Demikian surat keterangan {{ $dokumen->keterangan }} ini kami berikan untuk digunakan
                                    seperlunya.</p>
                            </div>
                            <div class="footer">
                                <p>Dokter Klinik Dr.Zul</p>
                                <li>
                                </li>
                                <p>
                                    (<strong>{{ $dokumen->dokter->name }}</strong>)
                                </p>
                            </div>
                        </div>
                        <!-- Add your JavaScript or script links here -->
                    </body>
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
