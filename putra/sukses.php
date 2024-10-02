<?php include_once './layouts/header.php' ?>
<?php include_once './config.php' ?>
<link rel="stylesheet" href="./dist/css/bootstrap.min.css">
<?php

if (!isset($_POST['submit'])) {
    header("Location: index.php");
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$lomba = $_POST['lomba'];
$hp = $_POST['hp'];
$sekolah = $_POST['sekolah'];

switch ($lomba) {
    case 'futsal':
        $lomba = 'Futsal';
        $telegram = 'https://t.me/+0Xft-Ogv0h42YmM1';
        $rb = 'https://drive.google.com/file/d/1RfenLblSj-q8HEd1cwsP8zofoM54SxQ1/view?usp=share_link';
        break;
    case 'basket':
        $lomba = 'Basket';
        $telegram = 'https://t.me/+h2NxTfmuksMxZjU1';
        $rb = 'https://drive.google.com/file/d/1zZlXsuCIqSbVYzKRu5ev7BL4kMtEkx0B/view?usp=share_link';
        break;
    case 'tapak_suci':
        $lomba = 'Tapak Suci';
        $telegram = 'https://t.me/+3zWSTKoEblY1NzI9';
        $rb = 'https://drive.google.com/file/d/14ZEWlY5lRSPj-VrYFHmJDWDNr2su9Npw/view?usp=share_link';
        break;
    case 'voli':
        $lomba = 'Voli';
        $telegram = 'https://t.me/+raymYUuBH-8wOTM9';
        $rb = 'https://drive.google.com/file/d/1L9uGKIEZmYBzLN8-1J4tDwrDhzgQkJ0G/view?usp=share_link';
        break;
    case 'spelling_bee':
        $lomba = 'Spelling Bee';
        $telegram = 'https://t.me/+V7Ts3n3iFANjYTll';
        $rb = 'https://drive.google.com/file/d/1_ZS6wdEKdMlMZrgXhs62qBx0N7LYMzXF/view?usp=share_link';
        break;
    case 'lcc':
        $lomba = 'LCC';
        $telegram = 'https://t.me/+qZ9n6RSdi6Y4NjM9';
        $rb = 'https://drive.google.com/file/d/1KzKwdliK0ztFo2Kip7CRkLvTUx6VjFka/view?usp=sharing';
        break;
    case 'orasi':
        $lomba = 'Orasi';
        $telegram = 'https://t.me/+UvPFLCJeYfZkMmM1';
        $rb = 'https://drive.google.com/file/d/1XVgP4rB8rywNi8VsSlcyjw35rIp4XJ53/view?usp=share_link';
        break;
    case 'mtq':
        $lomba = 'MTQ';
        $telegram = 'https://t.me/+RheklBAC0-w0NGZl';
        $rb = 'https://drive.google.com/file/d/12RIwYVUeeLXXFTPJ-uribbz4iEBt2YbG/view?usp=share_link';
        break;
    case 'mhq':
        $lomba = 'MHQ';
        $telegram = 'https://t.me/+BpLE1FJLKqU2NmM9';
        $rb = 'https: //drive.google.com/file/d/1QgcPtTapCex1lUUM18c-dJVvJlWRrgVd/view?usp=share_link';
        break;
    case 'ldbi':
        $lomba = 'LDBI';
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
        background-image: url('./assets/img/bg-regis.webp');
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
    <input type="hidden" name="surat_rekom" value='=HYPERLINK("https://alfestofficial.com/putra/files/upload/surat_rekom/<?= $surat_rekom; ?>")'>
    <input type="hidden" name="daftar_atlet" value='=HYPERLINK("https://alfestofficial.com/putra/files/upload/daftar_atlet/<?= $daftar_atlet; ?>")'>
</form>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-3 text-center" style="color: white !important;">
            <img src="./assets/img/logo putra.svg" alt="" width="80" class="d-block mx-auto">
            <h1 class="mb-5" style="font-size: 50px;">ALFEST 2023</h1>
            <h5 class="fs-1">REGISTER SUCCESSFUL!</h5>
            <h6 class="fs-6">
                Silahkan Bergabung ke Grup Telegram Lomba
                <?= $lomba; ?> ALFEST 2023
            </h6>
            <div class="mt-5">
                <a href="<?= $telegram; ?>" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Gabung Grup Telegram</a>
                <a href="<?= $rb ?>" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Baca Rulebook</a>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScT7a8-4wFwhZqdHfCaG0RtH0uQub6tC1NUOtAvs2xF-yKLjg/viewform?usp=share_link" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Daftar Penginapan</a>
                <a href="index.php" class="btn btn-primary btn-md rounded-pill my-1" style="width: 100% !important;">Ke Halaman Utama</a>
            </div>
        </div>
    </div>
</div>

<script src="./dist/js/sweetalert2.js"></script>

<script>
    Swal.fire({
        icon: 'success',
        title: 'REGISTER SUCCESSFUL',
        text: 'Selamat kamu telah menyelesaikan langkah awal untuk menjadi legenda, sampai bertemu di Langkah berikut nya',
    });
</script>

<?php

if ($lomba == 'Tapak Suci') {
    echo "<script>fetch('https://script.google.com/macros/s/AKfycbwWEvFMC-bfkzVpL6cIZG8Sq973uhvTWKcf6rcfEpGuErsD6jMoNd604CyB0RqrDRw/exec', {method: 'POST',body: new FormData(document.forms['register'])}).then(() => {}).catch(() => {});</script>";
    $query = mysqli_real_escape_string($conn, mysqli_query($conn, "INSERT INTO pendaftar (web,nama,email,lomba,hp,sekolah,surat_rekom,daftar_atlet) VALUES ('putra','$nama','$lomba','$email','$hp','$sekolah','$surat_rekom','$daftar_atlet')"));
} else {
    echo "<script>fetch('https://script.google.com/macros/s/AKfycbwcyGS_23LlTbQM2qaONRrGr-7vdAMbPqPHI7_5-4rd63rDRDlwJtkI0X1AnxD25sOtvw/exec', {method: 'POST',body: new FormData(document.forms['register'])}).then(() => {}).catch(() => {});</script>";
    $query = mysqli_real_escape_string($conn, mysqli_query($conn, "INSERT INTO pendaftar (web,nama,email,lomba,hp,sekolah) VALUES ('putra','$nama','$lomba','$email','$hp','$sekolah')"));
}


?>