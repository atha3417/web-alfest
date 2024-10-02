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

    <link rel="stylesheet" href="bootstrap.min.css">
    <?php

    $conn = mysqli_connect('193.168.194.40', 'u1607724_putri', 'Alfestlagi', 'u1607724_web-alfest');
    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
        die;
    }

    if (!isset($_POST['submit'])) {
        header("Location: registration.php");
    }

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $lomba = $_POST['lomba'];
    $hp = $_POST['hp'];
    $sekolah = $_POST['sekolah'];

    switch ($lomba) {
        case 'mewarnai':
            $lomba = 'Mewarnai';
            $telegram = 'https://t.me/+iXPR-IjglG45YjBl';
            $rb = 'https://drive.google.com/file/d/1b1gmblGxd6x0fsfqL0OxzkdydMnn3l1J/view?usp=share_link';
            break;
        case 'tari_daerah':
            $lomba = 'Tari Daerah';
            $telegram = 'https://t.me/+vLt4bngTjYsyOWM9';
            $rb = 'https://drive.google.com/file/d/1EL-_N-YwfwtlrpSaez6NRJ83YE0t3r4v/view?usp=share_link';
            break;
        case 'tapak_suci':
            $lomba = 'Tapak Suci';
            $telegram = 'https://t.me/+3zWSTKoEblY1NzI9';
            $rb = 'https://drive.google.com/file/d/10tNB7ZlkzH-l0f5dcNiFRfFryIVvoYEZ/view?usp=share_link';
            break;
        case 'dai_cilik':
            $lomba = 'Dai Cilik';
            $telegram = 'https://t.me/+1mnxdsWTiKBmMjNl';
            $rb = 'https://drive.google.com/file/d/1dZnkN6xy4uXoxagGFaPxpAiLwNOZdKXW/view?usp=share_link';
            break;
        case 'cci':
            $lomba = 'Cerdas Cermat Islam';
            $telegram = 'https://t.me/+RaohhnsPC1BjYTg1';
            $rb = 'https://drive.google.com/file/d/1vinWFQyOqv3H-eU0ezshk1YXLerfe2eM/view?usp=share_link';
            break;
        case 'story_telling':
            $lomba = 'Story Telling';
            $telegram = 'https://t.me/+T0CnIGJAKiY3MGVl';
            $rb = 'https://drive.google.com/file/d/1of2HOLDgMBwM9Ryx6OUFPR_aospR7m1Y/view?usp=share_link';
            break;
        case 'solo_vocal':
            $lomba = 'Solo Vocal';
            $telegram = 'https://t.me/+wDjLOTeUZpkyN2Rl';
            $rb = 'https://drive.google.com/file/d/1EuF13XTDRY60ZMiiFxGEMyJYK-4jrum1/view?usp=share_link';
            break;
        case 'poetri_alfest':
            $lomba = 'Poetri Alfest';
            $telegram = 'https://t.me/+ojZaO73tDkg2Mjg1';
            $rb = 'https://drive.google.com/file/d/10VsceebX_Oc8qK69wUbjG8wLJFwnq4T9/view?usp=share_link';
            break;
        case 'llai':
            $lomba = 'Lomba Lintas Alam Islami';
            $telegram = 'https://t.me/+eQiyOHWfDnYzZjRl';
            $rb = 'https://drive.google.com/file/d/12fLRcfzZlVIltlUBkK3eiVBWgzjhgM1u/view?usp=share_link';
            break;
        case 'lkbb':
            $lomba = 'Lomba Ketangkasan Baris Berbaris';
            $telegram = 'https://t.me/+G5ZTCw4FVEdkZDJl';
            $rb = 'https://drive.google.com/file/d/1b0dO5cJRA_WPKucUJUDondp0EXK39IWO/view?usp=share_link';
            break;
        case 'mtq':
            $lomba = "Musabaqoh Tilawatil Qur'an";
            $telegram = 'https://t.me/+mcLHsRNIfrcwYWNl';
            $rb = 'https://drive.google.com/file/d/1rk5ML4LXjWK27ksMTFCBTfJlHumwwrWA/view?usp=share_link';
            break;
        case 'mhq':
            $lomba = "Musabaqoh Hifdzil Qur'an";
            $telegram = 'https://t.me/+xAK-XUC-phg1NzQ1';
            $rb = 'https://drive.google.com/file/d/1H8gDoqvXrRnsVCG3mUfidjwnY_6oL5aq/view';
            break;
        case 'ldbi':
            $lomba = "Lomba Debat Bahasa Indonesia";
            $telegram = 'https://t.me/+GuMrX27xrNZlYmI1';
            $rb = 'https://drive.google.com/file/d/10VWF2lMPQ-NII7RD4ZeAIOIBYZQyyZjx/view?usp=share_link';
            break;
        default:
            break;
    }

    $rand = bin2hex(random_bytes(5));

    if ($lomba == 'Tapak Suci') {
        $surat_rekom = "surat_rekom_{$nama}_{$rand}." . pathinfo($_FILES['surat_rekom']['name'], PATHINFO_EXTENSION);
        $surat_rekom_tmp = $_FILES['surat_rekom']['tmp_name'];

        $dir_upload = "files/upload/surat_rekom/";

        $move_upload = move_uploaded_file($surat_rekom_tmp, $dir_upload . $surat_rekom);

        $daftar_atlet = "daftar_atlet_{$nama}_{$rand}." . pathinfo($_FILES['daftar_atlet']['name'], PATHINFO_EXTENSION);
        $daftar_atlet_tmp = $_FILES['daftar_atlet']['tmp_name'];

        $dir_upload = "files/upload/daftar_atlet/";

        $move_upload = move_uploaded_file($daftar_atlet_tmp, $dir_upload . $daftar_atlet);
    }

    ?>

    <style>
        body {
            background-image: url('https://alfestofficial.com/putri/Image/bg-regis.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
        }
    </style>

    <form id="register" method="POST" target="">
        <input type="hidden" name="nama" value="<?= $nama; ?>">
        <input type="hidden" name="lomba" value="<?= $lomba; ?>">
        <input type="hidden" name="sekolah" value="<?= $sekolah; ?>">
        <input type="hidden" name="email" value="<?= $email; ?>">
        <input type="hidden" name="hp" value='="<?= $hp; ?>"'>
        <input type="hidden" name="surat_rekom" value='=HYPERLINK("https://alfestofficial.com/putri/registration/files/upload/surat_rekom/<?= $surat_rekom; ?>")'>
        <input type="hidden" name="daftar_atlet" value='=HYPERLINK("https://alfestofficial.com/putri/registration/files/upload/daftar_atlet/<?= $daftar_atlet; ?>")'>
    </form>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
                <img src="./assets/img/logo putra.svg" alt="" width="80" class="d-block mx-auto">
                <h1 class="mb-5" style="font-size: 50px;">ALFEST 2023</h1>
                <h5 class="fs-1">REGISTER SUCCESSFUL!</h5>
                <h6 class="fs-6">
                    Silahkan Bergabung ke Grup Telegram Lomba
                    <?= $lomba; ?> ALFEST 2023
                </h6>
                <div class="mt-5">
                    <a href="<?= $telegram; ?>" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Gabung Grup Telegram</a>
                    <a href="<?= $rb; ?>" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Baca Rulebook</a>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeRkkLFqUP47fL2dQbZUwldoUU-j5AiAqrRNkoLdTkJSPuK_Q/viewform" target="_blank" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Daftar Penginapan</a>
                    <a href="registration.php" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>

    <script src="sweetalert2.js"></script>

    <script>
        Swal.fire({
            icon: 'success',
            title: 'REGISTER SUCCESSFUL',
            text: 'Selamat kamu telah menyelesaikan langkah awal untuk menjadi legenda, sampai bertemu di Langkah berikut nya',
        })
    </script>

    <?php

    if ($lomba == 'Tapak Suci') {
        echo "<script>fetch('https://script.google.com/macros/s/AKfycbwWEvFMC-bfkzVpL6cIZG8Sq973uhvTWKcf6rcfEpGuErsD6jMoNd604CyB0RqrDRw/exec', {method: 'POST',body: new FormData(document.forms['register'])}).then(() => {}).catch(() => {});</script>";
        $query = mysqli_query($conn, "INSERT INTO pendaftar (web,nama,lomba,email,hp,sekolah,surat_rekom,daftar_atlet) VALUES ('putri','$nama','$lomba','$email','$hp','$sekolah','$surat_rekom','$daftar_atlet')");
    } else {
        echo "<script>fetch('https://script.google.com/macros/s/AKfycby4wXbaRdByeiTO8qJ7F3xAQz5y159KBNuKlfJkjd0DlBsKfwa_TgCGs_IXz2bZxTii/exec', {method: 'POST',body: new FormData(document.forms['register'])}).then(() => {}).catch(() => {});</script>";
        $query = mysqli_query($conn, "INSERT INTO pendaftar (web,nama,lomba,email,hp,sekolah) VALUES ('putri','$nama','$lomba','$email','$hp','$sekolah')");
    }


    ?>