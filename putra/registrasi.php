<?php

include_once './layouts/header.php';
// include_once './config.php';

// $kuota = [
//     'smp' => [
//         'futsal' => 8,
//         'basket' => 8,
//         'tapak_suci' => 10000000000000000,
//         'speelling_bee' => 20,
//         'lcc' => 12,
//         'orasi' => 20,
//         'mtq' => 20,
//         'mhq' => 20
//     ],
//     'sma' => [
//         'futsal' => 8,
//         'basket' => 8,
//         'voli' => 12,
//     ]
// ];

// $query = mysqli_query($conn, "SELECT * FROM pendaftar WHERE web = 'putra'");

// while ($results = mysqli_fetch_assoc($query)) {
//     array_filter($results, function ($result) {
//         var_dump($result);
//     });
// }

?>
<link rel="stylesheet" href="./dist/css/bootstrap.min.css">

<style>
    label {
        font-weight: 500;
    }

    body {
        background-image: url('./assets/img/bg-regis.webp');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        min-height: 100vh;
    }
</style>
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-7 col-md-10 col-sm-12 mx-auto">
                <h1 class="text-center mb-4 text-white fw-bold">REGISTRASI LOMBA ALFEST 2023</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-lg-7 col-md-10 col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Welcome to ALFEST 2023!</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Selamat datang para satria dan kawula muda!✊</h6>
                        <p class="card-text">
                            Kamu berada di Langkah awal untuk menjadi legenda 👣
                            <br>
                            Assyifa League Festival hadir sebagai ajang bergengsi bagi para pemuda yang ingin mencetak sejarah ✨
                            <br>
                            Sampai bertemu di langkah selanjutnya 👋
                            <br>
                            Bersiaplah namamu akan diukir dalam sejarah🤩
                        <h6>
                            <b>Lengkapi data dibawah jika kamu ingin menjadi legenda di ALFEST 2023</b>
                        </h6>
                        </p>
                        <form action="sukses.php" method="POST" enctype="multipart/form-data" name="register" id="register">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="jenjang" class="form-label">
                                            Pilih Jenjang
                                            <small><sup class="text-danger">*</sup></small>
                                        </label>
                                        <select class="form-select" aria-label="Lomba" id="jenjang" required>
                                            <option selected value="">Pilih Jenjang</option>
                                            <option value="smp">SMP</option>
                                            <option value="sma">SMA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="lomba" class="form-label">
                                            Pilih Lomba Yang Akan Diikuti
                                            <small><sup class="text-danger">*</sup></small>
                                        </label>
                                        <select class="form-select" aria-label="Lomba" id="lomba" name="lomba" required>
                                            <option data-jenjang="none" value="" selected>Pilih Lomba</option>
                                            <option value="futsal" data-jenjang="smp,sma" class="d-none">Futsal</option>
                                            <option value="basket" data-jenjang="smp,sma" class="d-none">Basket</option>
                                            <option value="tapak_suci" data-jenjang="smp,sma" class="d-none">Tapak Suci</option>
                                            <option value="voli" data-jenjang="sma" class="d-none">Voli</option>
                                            <option value="ldbi" data-jenjang="sma" class="d-none">Lomba Debat Bahasa Indonesia</option>
                                            <option value="spelling_bee" data-jenjang="smp" class="d-none">Spelling Bee</option>
                                            <option value="lcc" data-jenjang="smp" class="d-none">Lomba Cerdas Cermat</option>
                                            <option value="orasi" data-jenjang="smp" class="d-none">Orasi</option>
                                            <option value="mtq" data-jenjang="smp" class="d-none">Musabaqoh Tilawatil Qur'an</option>
                                            <option value="mhq" data-jenjang="smp" class="d-none">Musabaqoh Hifdzil Qur'an</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="sekolah" class="form-label">
                                    <span class="form-ts">Nama Sekolah</span>
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="SMAIT As Syifa Boarding School Wanareja" required>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">
                                        <span class="form-team">Nama Lengkap Peserta</span>
                                        <small><sup class="text-danger">*</sup></small>
                                    </label>
                                    <input type="nama" class="form-control" id="nama" placeholder="Ghaca" name="nama" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <span class="form-team">Alamat Email Peserta</span>
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="ghaca@alfestofficial.com" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="hp" class="form-label">
                                    <span class="form-team">No. Telepon Peserta</span>
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <input type="text" class="form-control" id="hp" name="hp" placeholder="081234567890" required>
                            </div>
                            <div class="mb-3 ts d-none">
                                <label for="surat_rekom" class="form-label">
                                    Upload Surat Rekomendasi Sekolah
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <input class="form-control file" type="file" id="surat_rekom" name="surat_rekom" accept=".jpg,.jpeg,.png">
                            </div>
                            <div class="mb-3 ts d-none">
                                <label for="daftar_atlet" class="form-label">
                                    Upload Daftar Atlet
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input class="form-control file" type="file" id="daftar_atlet" name="daftar_atlet" accept=".jpg,.jpeg,.png">
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://docs.google.com/document/d/1S_oJi8dSi8CnHl6oNnOToq0T4MLHWS0N/edit?usp=share_link&ouid=104168346372742141666&rtpof=true&sd=true" target="_blank" class="btn btn-secondary" style="width: 100% !important;">Format Daftar Atlet</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php" class="btn btn-secondary">Kembali</a>
                                <button type="submit" id="btn_submit" class="btn btn-primary">Daftar</button>
                                <button type="submit" id="submit" name="submit" class="d-none">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./dist/js/sweetalert2.js"></script>
    <script>
        const jenjang = document.getElementById('jenjang');
        const lomba = document.getElementById('lomba');
        const lomba_jenjang_smp = document.querySelectorAll('[data-jenjang="smp"]');
        const lomba_jenjang_sma = document.querySelectorAll('[data-jenjang="sma"]');
        const lomba_jenjang_smp_sma = document.querySelectorAll('[data-jenjang="smp,sma"]');

        jenjang.addEventListener('change', () => {
            document.querySelectorAll('#lomba option:not([data-jenjang="none"])').forEach((el) => {
                lomba.value = '';
                el.classList.add('d-none');
            });

            if (jenjang.value != '') {
                lomba_jenjang_smp_sma.forEach((el) => {
                    el.classList.remove('d-none');
                });
            };

            if (jenjang.value == 'smp') {
                lomba_jenjang_smp.forEach((el) => {
                    el.classList.remove('d-none');
                });
            } else if (jenjang.value == 'sma') {
                lomba_jenjang_sma.forEach((el) => {
                    el.classList.remove('d-none');
                });
            }
        });

        lomba.addEventListener('change', e => {
            const ts = document.querySelectorAll('.ts');
            const surat_rekom = document.getElementById('surat_rekom');
            const daftar_atlet = document.getElementById('daftar_atlet');
            const form_ts = document.querySelector('.form-ts');
            const form_team = document.querySelectorAll('.form-team');

            if (lomba.value == 'futsal' || lomba.value == 'basket' || lomba.value == 'lcc' || lomba.value == 'voli' || lomba.value == 'ldbi' || lomba.value == 'tapak_suci') {
                form_team[0].textContent = 'Nama Official/Manager';
                form_team[1].textContent = 'Alamat Email Official/Manager';
                form_team[2].textContent = 'No. Telepon Official/Manager';
            } else {
                form_team[0].textContent = 'Nama Lengkap Peserta';
                form_team[1].textContent = 'Alamat Email Peserta';
                form_team[2].textContent = 'No. Telepon Peserta';
            }

            if (lomba.value == 'tapak_suci') {
                form_ts.textContent = 'Nama Sekolah/Kontingen';

                surat_rekom.setAttribute('required', 'true');
                daftar_atlet.setAttribute('required', 'true');

                ts.forEach(el => {
                    el.classList.remove('d-none');
                });
            } else {
                form_ts.textContent = 'Nama Sekolah';

                surat_rekom.removeAttribute('required');
                daftar_atlet.removeAttribute('required');

                ts.forEach(el => {
                    el.classList.add('d-none');
                });
            }
        });

        const file = document.querySelectorAll('.file');
        file.forEach(el => {
            el.onchange = function() {
                if (this.files[0].size > 20000000) {
                    alert("Ukuran File Terlalu Besar!");
                    this.value = "";
                };
            };
        });

        const btn_submit = document.getElementById('btn_submit');
        const submit = document.getElementById('submit');

        btn_submit.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                title: 'Sudah Yakin?',
                text: "Pastikan data sudah benar, mohon periksa kembali!!!",
                icon: 'warning',
                showDenyButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yakin',
                denyButtonText: `Belum Yakin`,
            }).then((result) => {
                if (result.isConfirmed) {
                    submit.click();
                } else if (result.isDenied) {
                    return false;
                }
            });
        });
    </script>
</body>

</html>