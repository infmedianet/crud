<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Surat Keterangan Sehat</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>
<body class="bg-white">

<div class="container mt-5" style="max-width: 700px;">
    <div class="text-center mb-4">
        <h4><b>SURAT KETERANGAN SEHAT</b></h4>
        <hr>
    </div>

    <p>Yang bertanda tangan di bawah ini menerangkan bahwa:</p>

    <table class="table table-borderless">
        <tr><td width="40%">Nama</td><td>: <?php echo $nama; ?></td></tr>
        <tr><td>Tempat, Tanggal Lahir</td><td>: <?php echo $tempat_lahir.', '.date('d-m-Y', strtotime($tanggal_lahir)); ?></td></tr>
        <tr><td>Alamat</td><td>: <?php echo $alamat; ?></td></tr>
        <tr><td>Pekerjaan</td><td>: <?php echo $pekerjaan; ?></td></tr>
        <tr><td>Tinggi Badan</td><td>: <?php echo $tinggi; ?> cm</td></tr>
        <tr><td>Berat Badan</td><td>: <?php echo $berat; ?> kg</td></tr>
        <tr><td>BMI</td><td>: <?php echo $bmi; ?></td></tr>
        <tr><td>Tekanan Darah</td><td>: <?php echo $tekanan_darah; ?></td></tr>
        <tr><td>Golongan Darah</td><td>: <?php echo $golongan_darah; ?></td></tr>
    </table>

    <p class="mt-4">
        Berdasarkan pemeriksaan, yang bersangkutan dalam keadaan <b>SEHAT</b> jasmani dan rohani.
    </p>

    <div class="text-end mt-5">
        <p>Yogyakarta, <?php echo date('d F Y'); ?><br>
        Dokter Pemeriksa</p>
        <br><br>
        <p><b>_____________________</b></p>
    </div>
</div>

</body>
</html>
