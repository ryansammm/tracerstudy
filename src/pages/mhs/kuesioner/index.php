<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Webster - Responsive Multi-purpose HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/kuesioner/images/favicon.ico" />

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/plugins-css.css" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/typography.css" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/shortcodes/shortcodes.css" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/assets/kuesioner/css/responsive.css" />

</head>

<body>

    <div class="wrapper">

        <!-- <div id="pre-loader">
            <img src="/assets/kuesioner/images/pre-loader/loader-01.svg" alt="">
        </div> -->

        <section class="page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <div id="formmessage">Success/Error Message Goes Here</div> -->
                                <form role="form" method="post" action="/kuesioner/<?= $id ?>/store">
                                    <h4 class="mb-20">A. Biodata Responden</h4>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="name">Email Address</label>
                                            <input id="name" type="text" class="form-control" name="email" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Nama Lengkap</label>
                                            <input id="name" type="text" class="form-control" name="nama" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Program Studi</label>
                                            <div class="box">
                                                <select name="programStudi" class="fancyselect" id="">
                                                    <option value="">-- Pilih Jurusan --</option>
                                                    <option value="D3 Analisis Kimia">D3 Analisis Kimia</option>
                                                    <option value="D3 Pengolahan Limbah Industri">D3 Pengolahan Limbah Industri</option>
                                                    <option value="D3 Penjaminan Mutu Industri Pangan">D3 Penjaminan Mutu Industri Pangan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-4">
                                            <label for="name">NIM</label>
                                            <input id="name" type="text" class="form-control" name="nim" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Tahun Lulus</label>
                                            <input id="name" type="text" class="form-control" name="tahunLulus" required>
                                        </div>
                                        <div class="col-4">
                                            <label for="name">Telepon/Handphone</label>
                                            <input id="name" type="text" class="form-control" name="telepon" required>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">B. Kegiatan Utama</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B1. Apakah saat ini Anda BEKERJA (bukan berwirausaha)?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b1" value="Ya" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya (lanjut ke pertanyaan berikutnya)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b1" value="Tidak" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak (lanjut ke pertanyaan B36)
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B2. Nama perusahaan tempat Anda bekerja saat ini: </label>
                                            <input id="name" type="text" class="form-control" name="b2">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B3. Apa jenis perusahaan tempat Anda bekerja saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="Instansi Pemerintah" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Instansi Pemerintah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="Badan Usaha Milik Negara/ Daerah" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Badan Usaha Milik Negara/ Daerah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="Perusahaan swasta multi nasional" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Perusahaan swasta multi nasional
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="Perusahaan swasta dalam negeri" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Perusahaan swasta dalam negeri
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="Perusahaan perseorangan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perusahaan perseorangan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="Koperasi/ Yayasan" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Koperasi/ Yayasan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b3" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b3Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B4. Berapa jumlah karyawan perusahaan tempat Anda bekerja saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="< 10 Orang" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 10 Orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="10 - 49 Orang" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    10 - 49 Orang
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="50 - 249 Orang" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    50 - 249 Orang
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b4" value="> 249 Orang" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 249 Orang
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B5. Apa bidang/sektor usaha perusahaan tempat bekerja Anda sekarang?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Pertanian/peternakan/perikanan" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pertanian/peternakan/perikanan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Pertambangan dan penggalian" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Pertambangan dan penggalian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Industri pengolahan" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Industri pengolahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Listrik, gas dan air" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Listrik, gas dan air
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Konstruksi/ bangunan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Konstruksi/ bangunan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Perdagangan, hotel, dan restoran" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Perdagangan, hotel, dan restoran
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Angkutan dan komunikasi" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Angkutan dan komunikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Keuangan, persewaan dan jasa perusahaan" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Keuangan, persewaan dan jasa perusahaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Jasa-jasa" id="flexRadioDefault6">
                                                <label class="form-check-label" for="flexRadioDefault6">
                                                    Jasa-jasa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b5" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b5Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B6. Apa produk/jasa utama yang dihasilkan oleh perusahaan tempat Anda bekerja sekarang? (isi dengan jenis produk yang sesuai, misal: pakaian, teh dalam kemasan, pengiriman barang,dll)</label>
                                            <input id="name" type="text" class="form-control" name="b6">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B7. Sejak kapan Anda bekerja di tempat sekarang? </label>
                                                <input type='text' name="b7" class="form-control datetimepicker" id='datetimepicker4' />
                                                <p class="note">* Format pengisian Bulan/Tanggal/Tahun (contoh untuk penulisan 28 Februari 2015 = 02/28/2015) , data yang kami ambil adalah Bulan dan Tahun, tanggal dapat diisi tgl 01 jika tidak ingat tepat </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B8. Apa status kepegawaian Anda dalam pekerjaan saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="Staf tetap/ permanen" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf tetap/ permanen
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="Tenaga kontrak waktu tertentu" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tenaga kontrak waktu tertentu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="Out sourcing" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Out sourcing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="Tenaga harian" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tenaga harian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="Bekerja tanpa ikatan kontrak" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Bekerja tanpa ikatan kontrak
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b8" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b8Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B9. Sebutkan tugas/pekerjaan utama yang Anda lakukan saat ini secara spesifik ?</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="b9"></textarea>
                                                </div>
                                                <p class="note">(Contoh: melakukan analisis lab, mengawasi pemotongan pola, mendesain tekstil, mengoperasikan mesin, pemeliharaan alat berat)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B10. Apa posisi/jabatan Anda saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="Staf" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="Supervisor (membawahi beberapa staf)" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Supervisor (membawahi beberapa staf)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="Manajer (membawahi beberapa supervisor)" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Manajer (membawahi beberapa supervisor)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b10" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b10">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B11. Sejak kapan Anda menempati posisi/jabatan saat ini?</label>
                                                <input type='text' name="b11" class="form-control datetimepicker" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B12. Berapa penghasilan total rata-rata Anda per bulan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="< 3jt" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 3jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="3 - 5jt" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    3 - 5jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="5 - 10jt" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="> 10jt" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b12" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b12Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B13. Menurut pendapat Anda, apakah pekerjaan ini sesuai dengan tingkat pendidikan Anda?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="Ya, sesuai" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya, sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="Tidak, tingkat pendidikan saya LEBIH TINGGI dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak, tingkat pendidikan saya LEBIH TINGGI dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="Tidak, tingkat pendidikan saya LEBIH RENDAH dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak, tingkat pendidikan saya LEBIH RENDAH dari tingkat pendidikan yg dibutuhkan oleh pekerjaan ini
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b13" value="Tidak, pekerjaan ini tidak membutuhkan pendidikan TINGGI" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tidak, pekerjaan ini tidak membutuhkan pendidikan TINGGI
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B14. Menurut pendapat Anda, bagaimanakah kesesuaian bidang pendidikan yang dipelajari di politeknik dengan kebutuhan pekerjaan Anda saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="Sangat sesuai" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Sangat sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="Sesuai" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="Kurang sesuai" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Kurang sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b14" value="Tidak sesuai" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tidak sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="formFile" class="form-label">B15. Jika menurut Anda pekerjaan saat ini tidak sesuai dengan pendidikan Anda, mengapa Anda mengambilnya? jawaban bisa lebih dari satu</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pertanyaan tidak relevan, pendidikan saya sudah sesuai dengan pekerjaan saat ini." name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pertanyaan tidak relevan, pendidikan saya sudah sesuai dengan pekerjaan saat ini.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Saya belum mendapatkan pekerjaan yang lebih sesuai" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya belum mendapatkan pekerjaan yang lebih sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Di pekerjaan ini saya memeroleh prospek karir yang baik" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Di pekerjaan ini saya memeroleh prospek karir yang baik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lebih aman/terjamin/secure" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lebih aman/terjamin/secure
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lebih menarik" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lebih menarik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lebih memungkinkan saya memiliki jadwal yang fleksibel/ mengambil pekerjaan tambahan" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lebih memungkinkan saya memiliki jadwal yang fleksibel/ mengambil pekerjaan tambahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya" name="b15[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B16. Apakah pekerjaan saat ini merupakan pekerjaan PERTAMA Anda SETELAH lulus dari politeknik?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b16" value="Ya" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b16" value="Tidak" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Saat ini Bukan Pekerjaan Pertama</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B17. Nama perusahaan tempat Anda bekerja PERTAMA kali setelah menyelesaikan pendidikan di politeknik?</label>
                                            <input id="name" type="text" class="form-control" name="b17">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B18. Kapan Anda memulai pekerjaan PERTAMA tersebut? </label>
                                                <input type='text' class="form-control datetimepicker" name="b18" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B19. Kapan Anda berhenti dari pekerjaan PERTAMA tersebut? </label>
                                                <input type='text' class="form-control datetimepicker" name="b19" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B20. Apa jenis perusahaan tempat Anda PERTAMA kali bekerja? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="Instansi pemerintah" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Instansi pemerintah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="Badan Usaha Milik Negara/ Daerah" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Badan Usaha Milik Negara/ Daerah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="Perusahaan swasta multi nasional" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Perusahaan swasta multi nasional
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="Perusahaan swasta dalam negeri" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Perusahaan swasta dalam negeri
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="Perusahaan perseorangan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perusahaan perseorangan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="Koperasi/ Yayasan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Koperasi/ Yayasan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b20" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b20Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B21. Berapa jumlah karyawan perusahaan tempat Anda PERTAMA kali bekerja?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="< 10 orang" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 10 orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="< 50 orang" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    < 50 orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="< 250 orang" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    < 250 orang </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b21" value="> 250 orang" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 250 orang
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B22. Apa bidang/sektor usaha perusahaan tempat Anda PERTAMA kali bekerja?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Pertanian/peternakan/perikanan" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pertanian/peternakan/perikanan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Pertambangan dan penggalian" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Pertambangan dan penggalian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Industri pengolahan" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Industri pengolahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Listrik, gas dan air" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Listrik, gas dan air
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Konstruksi/ bangunan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Konstruksi/ bangunan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Perdagangan, hotel, dan restoran" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perdagangan, hotel, dan restoran
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Angkutan dan komunikasi" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Angkutan dan komunikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Keuangan, persewaan dan jasa perusahaan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Keuangan, persewaan dan jasa perusahaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Jasa-jasa" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jasa-jasa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b22" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b22Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B23. Apa produk/jasa yang dihasilkan oleh perusahaan tempat Anda PERTAMA kali bekerja? </label>
                                            <input id="name" type="text" class="form-control" name="b23">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B24. Sebutkan secara spesifik tugas/pekerjaan utama yang Anda lakukan pada pekerjaan PERTAMA</label>
                                            <input id="name" type="text" class="form-control" name="b24">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B25. Apa alasan utama Anda berhenti dari pekerjaan PERTAMA? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Pemutusan hubungan kerja" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pemutusan hubungan kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Gaji tidak sesuai harapan" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Gaji tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Posisi tidak sesuai harapan" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Posisi tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Konflik di tempat kerja" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Konflik di tempat kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Prospek pengembangan karir tidak jelas" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Prospek pengembangan karir tidak jelas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Jenis pekerjaan tidak sesuai dengan pendidikan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jenis pekerjaan tidak sesuai dengan pendidikan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Lokasi perusahaan jauh dari tempat tinggal" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Lokasi perusahaan jauh dari tempat tinggal
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Melanjutkan studi" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Melanjutkan studi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b25" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b25Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Pekerjaan Pertama</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B26. Apa posisi/jabatan PERTAMA Anda? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="Staf" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="Supervisor (membawahi beberapa staf)" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Supervisor (membawahi beberapa staf)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="Manajer (membawahi beberapa supervisor)" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Manajer (membawahi beberapa supervisor)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b26" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b26Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B27. Apa status kepegawaian pekerjaan PERTAMA Anda?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="Staf tetap/ permanen" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Staf tetap/ permanen
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="Tenaga kontrak waktu tertentu" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tenaga kontrak waktu tertentu
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="Out sourcing" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Out sourcing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="Tenaga harian" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tenaga harian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="Bekerja tanpa ikatan kontrak" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Bekerja tanpa ikatan kontrak
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b27" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b27Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B28. Berapa penghasilan total rata-rata pekerjaan PERTAMA Anda per bulan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="< 3jt" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 3jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="3 - 5jt" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    3 - 5jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="5 - 10jt" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="> 10jt" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    > 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b28" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b28Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B29. Kapan Anda memulai pekerjaan pertama Anda? (lulus kuliah terhitung tanggal wisuda Anda) </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="Sebelum lulus kuliah" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Sebelum lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="0-3 bulan setelah lulus kuliah" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    0-3 bulan setelah lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="4-6 bulan setelah lulus kuliah" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    4-6 bulan setelah lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value=">6 bulan setelah lulus kuliah" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    >6 bulan setelah lulus kuliah
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b29" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b29Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="formFile" class="form-label">B30. Bagaimana cara Anda mencari pekerjaan?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Melalui iklan di koran/majalah, brosur" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui iklan di koran/majalah, brosur
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Mencari lewat internet/iklan online/milis" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Mencari lewat internet/iklan online/milis
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Menghubungi Disnakertrans" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Menghubungi Disnakertrans
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Melamar ke perusahaan tanpa mengetahui lowongan yang ada" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Melalui recruitment on campus" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui recruitment on campus
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Melalui pusat karir (CDC) politeknik" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Melalui pusat karir (CDC) politeknik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Pergi ke bursa/pameran kerja" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Pergi ke bursa/pameran kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Menghubungi ikatan alumni" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Menghubungi ikatan alumni
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Membangun jejaring (network) sejak masih kuliah" name="b30[]" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Membangun jejaring (network) sejak masih kuliah
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B31. Kepada berapa perusahaan/instansi/ institusi Anda mengirimkan surat lamaran sebelum akhirnya Anda memperoleh pekerjaan PERTAMA?</label>
                                            <input id="name" type="text" class="form-control" name="b31">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B32. Berapa banyak perusahaan/instansi/ institusi yang mengundang Anda untuk wawancara?</label>
                                            <input id="name" type="text" class="form-control" name="b32">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B33. Apakah Anda ikut pelatihan/kursus tambahan untuk mencari pekerjaan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b33" value="Ya" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b33" value="Tidak" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Mengikuti Pelatihan / Kursus</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Sebutkan bidang pelatihan/kursus yang diikuti :</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="bidangPelatihan"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Sertifikat Kompetensi Khusus untuk Melamar Pekerjaan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B34. Apakah Anda memerlukan sertifikat kompetensi khusus untuk melamar pekerjaan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b34" value="Ya" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b34" value="Tidak" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Membutuhkan Sertifikat Kompetensi Khusus untuk Melamar Pekerjaan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Sebutkan sertifikat kompetensi yang dibutuhkan :</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="sertifikat"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Syarat Utama Melamar Pekerjaan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B35. Apakah ijazah politeknik Anda menjadi syarat utama dalam melamar pekerjaan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b35" value="Ya" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b35" value="Tidak" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Memerlukan Dokumen Utama selain ijazah</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Sebutkan dokumen utama yang menjadi syarat melamar pekerjaan :</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="dokumenUtama"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B36. Apakah saat ini Anda BERWIRAUSAHA? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b36" value="Ya" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b36" value="Tidak" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Anda Berwirausaha</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B37. Apa bidang/sektor usaha yang Anda lakukan saat ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Pertanian/peternakan/perikanan" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pertanian/peternakan/perikanan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Pertambangan dan penggalian" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Pertambangan dan penggalian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Industri Pengolahan" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Industri Pengolahan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Listrik, air, dan gas" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Listrik, air, dan gas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Konstruksi" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Konstruksi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Perdagangan, hotel, dan restoran" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Perdagangan, hotel, dan restoran
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Pengangkutan dan komunikasi" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Pengangkutan dan komunikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Keuangan, real estate, dan jasa perusahaan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Keuangan, real estate, dan jasa perusahaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Jasa-jasa" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jasa-jasa
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b37" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b37Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B38. Apa produk/jasa utama yang dihasilkan oleh usaha Anda?</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="b38"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B39. Sejak kapan Anda menjalankan usaha ini? </label>
                                                <input type='text' class="form-control datetimepicker" name="b39" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B40. Berapa orang yang terlibat dalam menjalankan usaha ini (selain Anda)? </label>
                                            <input id="name" type="text" class="form-control" name="b40">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B41. Berapa omzet usaha Anda per bulan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="< 5jt" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 5jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="5 - 10jt" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="10 - 20jt" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    10 - 20jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="20 - 30jt" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    20 - 30jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b41" value="> 30jt" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    > 30jt
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B42. Berapa besar pendapatan bersih Anda per bulan dari usaha ini?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="< 5jt" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    < 5jt </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="5 - 10jt" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    5 - 10jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="10 - 20jt" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    10 - 20jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="20 - 30jt" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    20 - 30jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="> 30jt" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    > 30jt
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b42" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b42Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B43. Menurut pendapat Anda, bagaimanakah kesesuaian bidang pendidikan yang dipelajari di politeknik dengan kebutuhan bidang usaha Anda saat ini? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="Sangat sesuai" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Sangat sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="Sesuai" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="Kurang sesuai" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Kurang sesuai
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b43" value="Tidak sesuai" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Tidak sesuai
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Tidak Berwirausaha</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B44. Apakah saat ini Anda melanjutkan pendidikan/menempuh pelatihan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b44" value="Ya" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b44" value="Tidak" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Melanjutkan Pendidikan/ Menempuh Pendidikan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B45. Apa pendidikan/pelatihan yang sedang Anda tempuh?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="Diploma" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Diploma
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="Sarjana" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Sarjana
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="Pasca Sarjana" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Pasca Sarjana
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="Pendidikan profesi" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Pendidikan profesi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="Sertifikasi" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Sertifikasi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b45" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b45Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B46. Sebutkan program studi/keahlian dalam pendidikan/pelatihan yang Anda ikuti saat ini! </label>
                                            <input id="name" type="text" class="form-control" name="b46">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="name">B47. Sebutkan nama perguruan tinggi/ lembaga pelatihan tempat Anda melanjutkan studi!</label>
                                            <input id="name" type="text" class="form-control" name="b47">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B48. Apa alasan Anda melanjutkan pendidikan/ mengikuti pelatihan tersebut?</label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="b48"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Status Saat ini </h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B49. Apakah saat ini Anda TIDAK bekerja/berwirausaha/melanjutkan pendidikan? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b49" value="Saat ini saya TIDAK bekerja/berwirausaha/ melanjutkan pendidikan" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Saat ini saya TIDAK bekerja/berwirausaha/ melanjutkan pendidikan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b49" value="Saat ini saya bekerja/berwirausaha/ melanjutkan pendidikan" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Saat ini saya bekerja/berwirausaha/ melanjutkan pendidikan
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika saat ini tidak bekerja/berwirausaha/melanjutkan pendidikan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B50. Sejak lulus dari politeknik, apakah Anda PERNAH bekerja/berwirausaha? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b50" value="Ya, Pernah Bekerja" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Ya, Pernah Bekerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b50" value="Ya, pernah berwirausaha" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Ya, pernah berwirausaha
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b50" value="Tidak" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Ya, Pernah Bekerja</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B51a. Nama Pekerjaan </label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="b51a"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B51b. Waktu Mulai</label>
                                                <input type='text' class="form-control datetimepicker" name="b51b" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">B51c. Waktu Selesai</label>
                                                <input type='text' class="form-control datetimepicker" name="b51c" id='datetimepicker4' />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B52. Apa penyebab Anda keluar dari tempat kerja terakhir? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Pemutusan hubungan kerja" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Pemutusan hubungan kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Gaji tidak sesuai harapan" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Gaji tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Posisi tidak sesuai harapan" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Posisi tidak sesuai harapan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Konflik di tempat kerja" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Konflik di tempat kerja
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Prospek pengembangan karir tidak jelas" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Prospek pengembangan karir tidak jelas
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Jenis pekerjaan tidak sesuai keahlian" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Jenis pekerjaan tidak sesuai keahlian
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Lokasi perusahaan jauh dari tempat tinggal" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Lokasi perusahaan jauh dari tempat tinggal
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Melanjutkan studi" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Melanjutkan studi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b52" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b52Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B53. Mengapa saat ini Anda tidak membuka usaha sendiri/berwirausaha?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="Tidak ada keterampilan untuk memulai usaha" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Tidak ada keterampilan untuk memulai usaha
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="Tidak ada modal" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tidak ada modal
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="Tidak ada ide jenis usaha yang akan dilakukan" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak ada ide jenis usaha yang akan dilakukan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b53" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b53Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Ya, Pernah Berwirausaha</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B54. Bila sebelumnya Anda mengelola usaha sendiri, mengapa tidak berlanjut?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Modal Habis" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Modal habis
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Bahan baku sulit diperoleh" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Bahan baku sulit diperoleh
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Tidak ada SDM pendukung" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak ada SDM pendukung
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Pemasaran sulit" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Pemasaran sulit
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Salah pengelolaan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Salah pengelolaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Ditipu mitra usaha" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Ditipu mitra usaha
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Tidak mampu bersaing dengan usaha sejenis" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Tidak mampu bersaing dengan usaha sejenis
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b54" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b54Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">Jika Tidak Pernah Bekerja/Berwirausaha/Melanjutkan Pendidikan</h4>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="">B55. Bila Anda belum pernah bekerja/berwirausaha hingga saat ini, apa penyebabnya? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Kualifikasi yang dimiliki tidak sesuai dengan lowongan kerja yang ada" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Kualifikasi yang dimiliki tidak sesuai dengan lowongan kerja yang ada
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Kendala/kondisi fisik" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Kendala/kondisi fisik
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Tidak ada lowongan kerja yang tersedia" id="flexRadioDefault3">
                                                <label class="form-check-label" for="flexRadioDefault3">
                                                    Tidak ada lowongan kerja yang tersedia
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Bertanggung jawab untuk mengurus keluarga" id="flexRadioDefault4">
                                                <label class="form-check-label" for="flexRadioDefault4">
                                                    Bertanggung jawab untuk mengurus keluarga
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Kurang akses informasi lowongan pekerjaan" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Kurang akses informasi lowongan pekerjaan
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Tekanan sosial/adat" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Tekanan sosial/adat
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Lowongan yang tersedia lokasinya terlalu jauh" id="flexRadioDefault5">
                                                <label class="form-check-label" for="flexRadioDefault5">
                                                    Lowongan yang tersedia lokasinya terlalu jauh
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="b55" value="Lainnya" id="flexRadioDefault7">
                                                <div class="col-4" style="padding-left:0px !important">
                                                    <input id="name" type="text" placeholder="Lainnya.." class="form-lainnya" name="b55Lainnya">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <style>
                                        .likert {
                                            margin-top: 0.4rem;
                                        }

                                        .likert li {
                                            float: left;
                                            list-style-type: none;
                                        }

                                        .likert li input {
                                            margin-left: 13pt;
                                            margin-right: 10pt;

                                        }
                                    </style>

                                    <h4 class="mb-20">C. Kuesioner Keterkaitan Pendidikan dan Dunia Kerja/Usaha - Tingkat Kepuasan</h4>
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C1a. Kompetensi bidang ilmu utama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c1a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c1a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c1a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c1a" value="Puas" /></li>
                                                <li><input type="radio" name="c1a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2a. Kompetensi bidang ilmu lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c2ainput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2a. Kompetensi bidang ilmu lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c2a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c2a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c2a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c2a" value="Puas" /></li>
                                                <li><input type="radio" name="c2a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C3a. Kemampuan bahasa inggris </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c3a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c3a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c3a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c3a" value="Puas" /></li>
                                                <li><input type="radio" name="c3a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4a. Kompetensi bahasa asing lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c4ainput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4a. Kompetensi bahasa asing lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c4a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c4a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c4a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c4a" value="Puas" /></li>
                                                <li><input type="radio" name="c4a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C5a. Kemampuan Komputer Dasar</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c5a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c5a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c5a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c5a" value="Puas" /></li>
                                                <li><input type="radio" name="c5a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C6a. Kemampuan Komputer Sesuai bidang Keahlian </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c6a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c6a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c6a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c6a" value="Puas" /></li>
                                                <li><input type="radio" name="c6a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C7a. Kemampuan Presentasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c7a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c7a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c7a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c7a" value="Puas" /></li>
                                                <li><input type="radio" name="c7a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C8a. Kemampuan Menyusun Laporan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c8a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c8a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c8a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c8a" value="Puas" /></li>
                                                <li><input type="radio" name="c8a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C9a. Kemampuan Komunikasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c9a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c9a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c9a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c9a" value="Puas" /></li>
                                                <li><input type="radio" name="c9a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C10a. Kepemimpinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c10" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c10" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c10" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c10" value="Puas" /></li>
                                                <li><input type="radio" name="c10" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C11a. Integritas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c11a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c11a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c11a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c11a" value="Puas" /></li>
                                                <li><input type="radio" name="c11a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C12a. Kemampuan Adaptasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c12a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c12a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c12a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c12a" value="Puas" /></li>
                                                <li><input type="radio" name="c12a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C13a. Kemandirian</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c13a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c13a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c13a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c13a" value="Puas" /></li>
                                                <li><input type="radio" name="c13a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C14a. Kemampuan Bekerja di bawah tekanan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c14a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c14a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c14a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c14a" value="Puas" /></li>
                                                <li><input type="radio" name="c14a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C15a. Manajemen Waktu</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c15a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c15a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c15a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c15a" value="Puas" /></li>
                                                <li><input type="radio" name="c15a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C16a. Inisiatif</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c16a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c16a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c16a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c16a" value="Puas" /></li>
                                                <li><input type="radio" name="c16a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C17a. Kreativitas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c17a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c17a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c17a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c17a" value="Puas" /></li>
                                                <li><input type="radio" name="c17a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C18a. Motivasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c18a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c18a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c18a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c18a" value="Puas" /></li>
                                                <li><input type="radio" name="c18a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C19a. Kedisiplinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c19a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c19a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c19a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c19a" value="Puas" /></li>
                                                <li><input type="radio" name="c19a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C20a. Kemampuan bekerjasama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c20a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c20a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c20a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c20a" value="Puas" /></li>
                                                <li><input type="radio" name="c20a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C21a. Pengembangan Diri</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c21a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c21a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c21a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c21a" value="Puas" /></li>
                                                <li><input type="radio" name="c21a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C22a. Kemampuan Menyelesaikan Masalah</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c22a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c22a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c22a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c22a" value="Puas" /></li>
                                                <li><input type="radio" name="c22a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23a. Lainnya, Sebutkan Komponen Kompetensi</label>
                                            <input id="name" type="text" class="form-control" name="c23ainput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23a. Lainnya, Sesuai komponen diatas </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c23a" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c23a" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c23a" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c23a" value="Puas" /></li>
                                                <li><input type="radio" name="c23a" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">C. Kuesioner Keterkaitan Pendidikan dan Dunia Kerja/Usaha - Tingkat Kepentingan</h4>
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C1b. Kompetensi bidang ilmu utama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c1b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c1b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c1b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c1b" value="Puas" /></li>
                                                <li><input type="radio" name="c1b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2b. Kompetensi bidang ilmu lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c2binput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C2b. Kompetensi bidang ilmu lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c2b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c2b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c2b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c2b" value="Puas" /></li>
                                                <li><input type="radio" name="c2b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C3b. Kemampuan bahasa inggris </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c3b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c3b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c3b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c3b" value="Puas" /></li>
                                                <li><input type="radio" name="c3b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4b. Kompetensi bahasa asing lainnya: </label>
                                            <input id="name" type="text" class="form-control" name="c4binput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C4b. Kompetensi bahasa asing lainnya: </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c4b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c4b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c4b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c4b" value="Puas" /></li>
                                                <li><input type="radio" name="c4b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C5b. Kemampuan Komputer Dasar</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c5b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c5b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c5b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c5b" value="Puas" /></li>
                                                <li><input type="radio" name="c5b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C6b. Kemampuan Komputer Sesuai bidang Keahlian </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c6b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c6b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c6b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c6b" value="Puas" /></li>
                                                <li><input type="radio" name="c6b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C7b. Kemampuan Presentasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c7b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c7b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c7b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c7b" value="Puas" /></li>
                                                <li><input type="radio" name="c7b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C8b. Kemampuan Menyusun Laporan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c8b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c8b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c8b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c8b" value="Puas" /></li>
                                                <li><input type="radio" name="c8b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C9b. Kemampuan Komunikasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c9b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c9b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c9b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c9b" value="Puas" /></li>
                                                <li><input type="radio" name="c9b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C10b. Kepemimpinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c10b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c10b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c10b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c10b" value="Puas" /></li>
                                                <li><input type="radio" name="c10b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C11b. Integritas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c11b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c11b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c11b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c11b" value="Puas" /></li>
                                                <li><input type="radio" name="c11b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C12b. Kemampuan Adaptasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c12b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c12b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c12b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c12b" value="Puas" /></li>
                                                <li><input type="radio" name="c12b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C13b. Kemandirian</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c13b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c13b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c13b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c13b" value="Puas" /></li>
                                                <li><input type="radio" name="c13b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C14b. Kemampuan Bekerja di bawah tekanan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c14b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c14b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c14b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c14b" value="Puas" /></li>
                                                <li><input type="radio" name="c14b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C15b. Manajemen Waktu</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c15b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c15b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c15b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c15b" value="Puas" /></li>
                                                <li><input type="radio" name="c15b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C16b. Inisiatif</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c16b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c16b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c16b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c16b" value="Puas" /></li>
                                                <li><input type="radio" name="c16b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C17b. Kreativitas</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c17b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c17b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c17b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c17b" value="Puas" /></li>
                                                <li><input type="radio" name="c17b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C18b. Motivasi</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c18b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c18b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c18b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c18b" value="Puas" /></li>
                                                <li><input type="radio" name="c18b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C19b. Kedisiplinan</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c19b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c19b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c19b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c19b" value="Puas" /></li>
                                                <li><input type="radio" name="c19b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C20b. Kemampuan bekerjasama</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c20b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c20b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c20b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c20b" value="Puas" /></li>
                                                <li><input type="radio" name="c20b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C21b. Pengembangan Diri</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c21b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c21b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c21b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c21b" value="Puas" /></li>
                                                <li><input type="radio" name="c21b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C22b. Kemampuan Menyelesaikan Masalah</label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c22b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c22b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c22b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c22b" value="Puas" /></li>
                                                <li><input type="radio" name="c22b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23b. Lainnya, Sebutkan Komponen Kompetensi</label>
                                            <input id="name" type="text" class="form-control" name="c23binput">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <label for="name">C23b. Lainnya, Sesuai komponen diatas </label>
                                            <ul class="likert">
                                                <li> Sangat Tidak Puas </li>
                                                <li><input type="radio" name="c23b" value="Sangat Tidak Puas" /></li>
                                                <li><input type="radio" name="c23b" value="Kurang Puas" /></li>
                                                <li><input type="radio" name="c23b" value="Biasa Saja" /></li>
                                                <li><input type="radio" name="c23b" value="Puas" /></li>
                                                <li><input type="radio" name="c23b" value="Sangat Puas" /></li>
                                                <li> Sangat Puas </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <h4 class="mb-20">D. Saran/Pendapat</h4>
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="name">Menurut Anda hal/aspek apa di politeknik yang paling membutuhkan perbaikan dan sebutkan saran perbaikan </label>
                                                <div class="section-field textarea">
                                                    <textarea class="form-control input-message" placeholder="" rows="7" name="saran"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="section-field submit-button">
                                        <button id="submit" type="submit" class="button"> Submit </button>
                                    </div>


                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <footer class="footer page-section-pt black-bg">
            <div class="container">
                <div class="footer-widget mt-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <p class="mt-15"> &copy;Copyright <span id="copyright">
                                    <script>
                                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                                    </script>
                                </span> <a href="#"> Webster </a> All Rights Reserved </p>
                        </div>
                        <div class="col-lg-6 col-md-6 text-left text-md-right">
                            <div class="social-icons color-hover mt-10">
                                <ul>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>



    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <!--=================================
 jquery -->

    <!-- jquery -->
    <script src="/assets/kuesioner/js/jquery-3.4.1.min.js"></script>

    <!-- plugins-jquery -->
    <script src="/assets/kuesioner/js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = '/assets/kuesioner/js/';
    </script>

    <!-- Google recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- custom -->
    <script src="/assets/kuesioner/js/custom.js"></script>



</body>

</html>