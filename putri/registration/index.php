<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-language" content="id" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Event besar yang ada di SMAIT As Syifa Boarding School Wanareja dengan beragam cabang mata lomba yang menarik, dan acara yang seru, serta tak lupa juga turut dimeriahkan oleh guest star yang memukau" />
    <meta name="author" content="Assyifa League Festival" />
    <meta name="keywords" content="alfest, Assyifa League Festival, assyifaleaguefestival, assyifa, alfest 2023, alfest 23" />
    <title>As Syifa League Festival 2023</title>
    <link rel="shortcut icon" href="files/2022-08-17.png" type="image/x-icon">

    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        label {
            font-weight: 500;
        }
        
        body {
            background-image: url('https://alfestofficial.com/putri/Image/bg-regis.jpg');
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
                <h1 class="text-center mb-4">REGISTRASI LOMBA ALFEST 2023</h1>
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
                            Kamu berada di Langkah awal untuk menjadi legenda!!
                            <br>
                            Assyifa League Festival hadir sebagai ajang bergengsi bagi para pemuda yang ingin mencetak sejarah
                            <br>
                            Sampai bertemu di langkah selanjutnya 👋
                            <br>
                            *Khusus untuk yang mendaftar lomba tim (kecuali tapak suci) hanya perlu memberikan informasi official/manager, untuk informasi lebih lanjut akan kami beritahukan di grup lomba masing-masing yang telah disediakan.
                        </p>
                    </div>
                    <div class="card-footer">
                        <h6>Siapkan Langkahmu Tunjukkan Aksimu di ALFEST 2023🐾</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7 col-md-10 col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h6>
                            Lengkapi data dibawah jika kamu ingin menjadi legenda di ALFEST 2023
                        </h6>
                    </div>
                    <form action="sukses.php" method="POST" enctype="multipart/form-data" name="register" id="register">
                        <div class=" card-body">
                            <!--<a href="" class="btn btn-outline-secondary mb-3">Petunjuk Pendaftaran</a>-->
                            <div class="mb-3">
                                <label for="nama" class="form-label">
                                    <span class="form-team">Nama Lengkap Peserta</span>
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <input type="nama" class="form-control" id="nama" placeholder="Mayura" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="jenjang" class="form-label">
                                                Pilih Jenjang
                                                <small><sup class="text-danger">*</sup></small>
                                            </label>
                                            <select class="form-select" aria-label="Lomba" id="jenjang" required>
                                                <option selected value="">Pilih Jenjang</option>
                                                <option value="tk">TK</option>
                                                <option value="sd">SD</option>
                                                <option value="smp">SMP</option>
                                                <option value="sma">SMA</option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label for="sekolah" class="form-label">
                                                <span class="form-ts">Asal Sekolah</span>
                                                <small><sup class="text-danger">*</sup></small>
                                            </label>
                                            <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="SMAIT As Syifa Boarding School Wanareja" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="lomba" class="form-label">
                                    Pilih Lomba Yang Akan Diikuti
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <select class="form-select" aria-label="Lomba" id="lomba" name="lomba" required>
                                    <option data-jenjang="none" value="" selected>
                                        Pilih Lomba
                                    </option>
                                    <option value="mewarnai" data-jenjang="tk" class="d-none">Mewarnai</option>
                                    <option value="tari_daerah" data-jenjang="tk" class="d-none">Tari Daerah</option>
                                    <option value="tapak_suci" data-jenjang="smp,sma" class="d-none">Tapak Suci</option>
                                    <option value="dai_cilik" data-jenjang="sd" class="d-none">Dai Cilik</option>
                                    <option value="cci" data-jenjang="sd" class="d-none">Cerdas Cermat Islami</option>
                                    <option value="story_telling" data-jenjang="smp" class="d-none">Story Telling</option>
                                    <option value="solo_vocal" data-jenjang="smp,sma" class="d-none">Solo Vocal</option>
                                    <option value="poetri_alfest" data-jenjang="sma" class="d-none">Poetri Alfest</option>
                                    <option value="llai" data-jenjang="smp,sma" class="d-none">Lomba Lintas Alam Islami</option>
                                    <option value="lkbb" data-jenjang="sma" class="d-none">Lomba Ketangkasan Baris Berbaris</option>
                                    <option value="mtq" data-jenjang="smp,sma" class="d-none">Musabaqoh Tilawatil Qur'an</option>
                                    <option value="mhq" data-jenjang="smp,sma" class="d-none">Musabaqoh Hifdzil Qur'an</option>
                                    <option value="ldbi" data-jenjang="sma" class="d-none">Lomba Debat Bahasa Indonesia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <span class="form-team">Alamat Email Aktif</span>
                                    <small><sup class="text-danger">*</sup></small>
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="mayura@alfestofficial.com" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="hp" class="form-label">
                                    <span class="form-team">No. Telp Aktif</span>
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
                                    <div class="col-md-4" style="padding-left: 3px !important;">
                                        <a href="https://docs.google.com/document/d/1S_oJi8dSi8CnHl6oNnOToq0T4MLHWS0N/edit?usp=share_link&ouid=104168346372742141666&rtpof=true&sd=true" class="btn btn-secondary w-full">Format Daftar Atlet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/putri" class="btn btn-secondary">Kembali</a>
                            <button type="submit" id="btn_submit" class="btn btn-primary">Daftar</button>
                            <button type="submit" id="submit" name="submit" class="d-none">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap.bundle.min.js"></script>
    <script src="sweetalert2.js"></script>
    <script>
        const jenjang = document.getElementById('jenjang');
        const lomba = document.getElementById('lomba');
        const lomba_jenjang_tk = document.querySelectorAll('[data-jenjang="tk"]');
        const lomba_jenjang_sd = document.querySelectorAll('[data-jenjang="sd"]');
        const lomba_jenjang_tk_sd = document.querySelectorAll('[data-jenjang="tk,sd"]');
        const lomba_jenjang_smp = document.querySelectorAll('[data-jenjang="smp"]');
        const lomba_jenjang_sma = document.querySelectorAll('[data-jenjang="sma"]');
        const lomba_jenjang_smp_sma = document.querySelectorAll('[data-jenjang="smp,sma"]');

        jenjang.addEventListener('change', () => {
            document.querySelectorAll('#lomba option:not([data-jenjang="none"])').forEach((el) => {
                lomba.value = '';
                el.classList.add('d-none');
            });

            if (jenjang.value == 'tk' || jenjang.value == 'sd') {
                lomba_jenjang_tk_sd.forEach((el) => {
                    el.classList.remove('d-none');
                });
            } else if (jenjang.value == 'smp' || jenjang.value == 'sma') {
                lomba_jenjang_smp_sma.forEach((el) => {
                    el.classList.remove('d-none');
                });
            }

            if (jenjang.value == 'smp') {
                lomba_jenjang_smp.forEach((el) => {
                    el.classList.remove('d-none');
                });
            } else if (jenjang.value == 'sma') {
                lomba_jenjang_sma.forEach((el) => {
                    el.classList.remove('d-none');
                });
            } else if (jenjang.value == 'tk') {
                lomba_jenjang_tk.forEach((el) => {
                    el.classList.remove('d-none');
                });
            } else if (jenjang.value == 'sd') {
                lomba_jenjang_sd.forEach((el) => {
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
            
            if (lomba.value == 'cci' || lomba.value == 'ldbi' || lomba.value == 'lkbb' || lomba.value == 'llai' || lomba.value == 'tapak_suci' || lomba.value == 'tari_daerah') {
                form_team[0].textContent = 'Nama Official/Manager';
                form_team[1].textContent = 'Alamat Email Official/Manager';
                form_team[2].textContent = 'No. Telp Official/Manager';
            } else {
                form_team[0].textContent = 'Nama Lengkap Peserta';
                form_team[1].textContent = 'Alamat Email Peserta';
                form_team[2].textContent = 'No. Telp Aktif';
            }

            if (lomba.value == 'tapak_suci') {
                form_ts.textContent = 'Asal Sekolah/Kontingen';

                surat_rekom.setAttribute('required', 'true');
                daftar_atlet.setAttribute('required', 'true');

                ts.forEach(el => {
                    el.classList.remove('d-none');
                });
            } else { 
                form_ts.textContent = 'Asal Sekolah';

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